<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use SebastianBergmann\CodeCoverage\Report\PHP;
use App\Models\Club;


class ParseClub extends Command
{
    protected $url = 'http://www.fussball.de/suche.verein/-/plz/[code]#!/';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ParseClub';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        self::parseList();
    }

    /**
     * Парсит остатки, те клубы что
     */

    protected function parseListEasy()
    {
        $total = 999;
        $count = $total;

        for($i = 1; $i <= $total; $i++)
        {
            $count--;
            echo $count . "\r";

            sleep(1);

            $url = str_replace('[code]', str_pad($i, 3, '0', STR_PAD_LEFT), $this->url);

            $return = self::__file_get_contents($url);

            if(preg_match_all('#<li>[^><]*?<a href=\"([^\"]*?)\"[^><]*?image-wrapper\">[^><]*?<div class=\"image\">[^><]*?<img src=\"([^\"]*?)\"[^~]*?<p class=\"name\">([^><]*?)<span[^><]*?><\/span><\/p>#si', $return, $match))
            {
                for($k = 0; $k < count($match[0]); $k++)
                {
                    $array[$k] = [
                        '__url' => $match[1][$k],
                        'image' => self::clearString($match[2][$k]),
                        'name' => self::clearString($match[3][$k]),
                        'zip' => '',
                        'city' => '',
                    ];
                }

                if(!$array) continue;

                foreach ($array as $a)
                {
                    //пропускаем дубликаты
                    if(Club::where('name', '=', $a['name'])->count())
                    {
                        continue;
                    }

                    self::store(self::parseItem($a));
                }
            }
        }
    }


    /**
     * Парсит список
     */

    protected function parseList()
    {
        $total = 999;
        $count = $total;

        for($i = 1; $i <= $total; $i++)
        {
            $count--;
            echo $count . "\r";

            sleep(1);

            $url = str_replace('[code]', str_pad($i, 3, '0', STR_PAD_LEFT), $this->url);

            $return = self::__file_get_contents($url);

            if(preg_match_all('#<li>[^><]*?<a href=\"([^\"]*?)\"[^><]*?image-wrapper\">[^><]*?<div class=\"image\">[^><]*?<img src=\"([^\"]*?)\"[^~]*?<p class=\"name\">([^><]*?)<span[^><]*?><\/span><\/p>[^><]*?<p class=\"sub\">([\d]+)\&nbsp;([^><]*)#si', $return, $match))
            {
                for($k = 0; $k < count($match[0]); $k++)
                {
                    $array[$k] = [
                        '__url' => $match[1][$k],
                        'image' => self::clearString($match[2][$k]),
                        'name' => self::clearString($match[3][$k]),
                        'zip' => self::clearString($match[4][$k]),
                        'city' => self::clearString($match[5][$k]),
                    ];
                }

                if(!$array) continue;

                var_dump($array);
                exit;

                foreach ($array as $a)
                {
                    //пропускаем дубликаты
                    if(Club::where('name', '=', $a['name'])->count())
                    {
                        continue;
                    }

                    self::store(self::parseItem($a));
                }
            }
        }
    }


    /**
     * Парсит объект
     *
     * @param null $array
     * @return null
     */

    protected function parseItem($array = null)
    {
        $return = self::__file_get_contents($array['__url']);

        if(preg_match('#<div class=\"value\">([^><]*?)<\/div>[^><]*?<div class=\"label\">Adresse#si', $return, $match))
        {
            $array['address'] = (!empty($match[1])) ?   self::clearString($match[1])   :   '';
        }

        if(preg_match('#href=\"([^\"]*?)\"[^><]*?>[^><]*?<\/a>[^><]*?<\/div>[^><]*?<div class=\"label\">Website#si', $return, $match))
        {
            $array['url'] = (!empty($match[1])) ?   self::clearString($match[1])   :   '';
        }

        unset($array['__url']);

        return $array;
    }


    /**
     * Сохраняет в бд
     *
     * @param null $array
     */


    protected function store($array = null)
    {
        if(!empty($array))
        {
            $insert = [];
            $insert['name'] = (!empty($array['name'])) ?   $array['name']   :   '';
            $insert['image'] = (!empty($array['image'])) ?   'http:' . $array['image']   :   '';
            $insert['address'] = (!empty($array['address'])) ?   $array['address']   :   '';
            $insert['zip'] = (!empty($array['zip'])) ?   $array['zip']   :   '';
            $insert['url'] = (!empty($array['url'])) ?   $array['url']   :   '';
            $insert['country'] = 'Germany';
            $insert['contacts'] = '';
            $insert['bank_details'] = '';
            $insert['fans'] = 0;
            $insert['total_commission'] = 0;
            $insert['total_paid'] = 0;
            $insert['fee'] = 10;

            $club = new Club();

            $club->fill($insert);
            $club->save();
        }
    }

    /**
     * Http запрос
     *
     * @param $url
     * @return bool|string
     */

    protected function __file_get_contents($url)
    {
        #echo 'Parse url: ' . $url . PHP_EOL;

        return file_get_contents($url);
    }

    /**
     * Чистит строку
     *
     * @param null $str
     * @return null|string
     */

    protected function clearString($str = null)
    {
        if($str)
        {
            $str = trim($str);
            $str = strip_tags($str);
            $str = preg_replace("/&#?[a-z0-9]{2,8};/i","", $str);
        }

        return $str;
    }

}
