<?php

namespace App\Console\Commands;

use App\Library\Gps;
use Illuminate\Console\Command;
use App\Models\Club;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Exception;
use Regulus\TetraText\Facade as Format;
use SebastianBergmann\CodeCoverage\Report\PHP;


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
        #self::parseListEasy();
        #self::saveLogo();
        #self::saveDir();
        self::saveGps();
    }


    /**
     * Сохраняет gps координаты
     */

    protected function saveGps()
    {
        $clubs = new Club;
        $total = $count = $clubs->getClubsTotal();

        for ($page = 0; $page <= ceil($total/100); $page++)
        {
            if($result = $clubs->getClubsPerPage(100, $page))
            {
                foreach ($result as $r)
                {
                    $count--;

                    try
                    {
                        if($gps = $this->getGps($r->address))
                        {
                            $r->lat = $gps[0];
                            $r->lng = $gps[1];
                            $r->save();
                        }
                    }
                    catch (Exception $e) {

                    }

                    echo $count . "\r";
                }
            }
        }
    }

    /**
     * Возвращает gps координаты
     *
     * @param string $str
     * @return array
     */

    protected function getGps($str = '')
    {
        $result= [];

        if(!empty($str))
        {
            if(preg_match("#Postfach#si", $str))
            {
                $temp = explode(',', $str);

                if(!empty($temp[1]))
                {
                    $result = Gps::getGPSByAddress($temp[1]);
                }
            }
            else
            {
                $result = Gps::getGPSByAddress($str);
            }
        }

        return $result;
    }


    /**
     * Сохраняет директорию
     */

    protected function saveDir()
    {
        $clubs = new Club;
        $total = $count = $clubs->getClubsTotal();

        for ($page = 0; $page <= ceil($total/100); $page++)
        {
            if($result = $clubs->getClubsPerPage(100, $page))
            {
                foreach ($result as $r)
                {
                    $count--;

                    try
                    {
                        $r->name = $this->_getName($r->name);
                        $r->dir = $this->getDir($r->name);
                        $r->save();
                    }
                    catch (Exception $e) {

                    }

                    echo $count . "\r";
                }
            }
        }
    }

    /**
     * Сохраняет лого клубов
     */

    protected function saveLogo()
    {
        $clubs = new Club;
        $total = $count = $clubs->getClubsTotal();

        for ($page = 0; $page <= ceil($total/10); $page++)
        {
            if($result = $clubs->getClubsPerPage(10, $page))
            {
                foreach ($result as $r)
                {
                    $count--;

                    try
                    {
                        if($this->storeImage($r->id,$r['image']))
                        {
                            $r->logo = 1;
                            $r->save();
                        }
                    }
                    catch (Exception $e) {

                    }

                    echo $count . "\r";
                }
            }
        }
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


    private function store($array = null)
    {
        if(!empty($array))
        {
            $insert = [];
            $insert['name'] = (!empty($array['name'])) ?   $this->_getName($array['name'])   :   '';
            $insert['dir'] = (!empty($array['name'])) ?   $this->getDir($array['name'])   :   '';
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

            $record = new Club();

            $record->fill($insert);
            $object_id = $record->save();

            if($this->storeImage($object_id, $insert['image']))
            {
                $record->logo = 1;
                $record->save();
            }

        }
    }

    /**
     * Http запрос
     *
     * @param $url
     * @return bool|string
     */

    private function __file_get_contents($url)
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

    private function clearString($str = null)
    {
        if($str)
        {
            $str = trim($str);
            $str = strip_tags($str);
            $str = preg_replace("/&#?[a-z0-9]{2,8};/i","", $str);
        }

        return $str;
    }

    /**
     * Возвращает директорию в формате слага
     *
     * @param $str
     * @return mixed
     */

    private function getDir($str)
    {
        if($str)
        {
            $str =  Format::slug($str);
        }

        return $str;
    }

    /**
     * Возвращает имя
     *
     * @param $str
     * @return mixed|null|string
     */

    private function _getName($str)
    {
        if($str)
        {
            $str = $this->clearString($str);
            $str = str_replace('e.V.', '', $str);
            $str = str_replace('e.V', '', $str);
            $str = str_replace('1.', '', $str);
        }

        return $str;
    }


    /**
     * Возвращает true, если картинка сохранена
     *
     * @param $object_id
     * @param $url
     * @return bool
     */

    private function storeImage($object_id, $url)
    {
        $head = array_change_key_case(get_headers($url, TRUE));

        if($head['content-length'] != 2608)
        {
            $path = 'images/clubs/' . self::getPath($object_id);

            if(!Storage::disk('public')->exists($path))
            {
                Storage::disk('public')->makeDirectory($path);
            }

            $contents = @file_get_contents($url);
            Storage::disk('public')->put($path . '/logo.png', $contents);

            return true;
        }

        return false;
    }


    /**
     * Возвращает путь относительно id
     *
     * @param $id
     * @return string
     */

    private function getPath($id)
    {
        return ceil($id/100) . DIRECTORY_SEPARATOR . $id;
    }

}
