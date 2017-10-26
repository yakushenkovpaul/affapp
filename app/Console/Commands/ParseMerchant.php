<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Orchestra\Parser\XmlServiceProvider;
use SebastianBergmann\CodeCoverage\Report\PHP;
use App\Models\Merchant;
use App\Models\Category;
use App\Services\MerchantService;


//http://api.zanox.com/xml/2011-03-01/programs?partnership=DIRECT&connectid=5E1A678475AB9F9C01CF&region=DE&items=2

class ParseMerchant extends Command
{
    const HTTPVerb = 'GET';
    const ConnectId = '5E1A678475AB9F9C01CF';
    const SecretKey = '81a5f58ed03344+59a7ee803dd03b0/d03dA1240';
    const Url = 'http://api.zanox.com/xml/2011-03-01/programs?partnership=DIRECT&region=DE';
    const Limit_per_page = 10;


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ParseMerchant';

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
        self::parseXml();
    }


    /**
     * Парсит xml
     */

    protected function parseXml()
    {
        $added = 0;

        for($page = 70; $page <= ceil(1040/self::Limit_per_page); $page ++)
        {
            $url = self::Url . '&' . self::getSignatureUrl() . '&items=' . self::Limit_per_page . '&page=' . $page;

            $xml_data = self::file_get_contents($url);
            $xml_data = str_replace("ns2:","",$xml_data);
            $xmlResponse = simplexml_load_string($xml_data);
            $responseArray = json_decode(json_encode($xmlResponse), true);

            $array = array();

            if($items = $responseArray['programItems']['programItem'])
            {
                foreach ($items as $__items)
                {
                    $object = $__items;

                    $array[] = array
                    (
                        'program_id' => $object['@attributes']['id'],
                        'name'=>$object['name'],
                        'url' => $object['url'],
                        'image' => $object['image'],
                        'status' => $object['status'],
                        'returnTimeLeads' => $object['returnTimeLeads'],
                        'returnTimeSales' => $object['returnTimeSales'],
                        'salePercentMax' => (!empty($object['commission']['salePercentMax']))   ?   $object['commission']['salePercentMax'] :   0,
                        'salePercentMin' => (!empty($object['commission']['salePercentMin']))   ?   $object['commission']['salePercentMin'] :   0,
                        'saleFixMax' => (!empty($object['commission']['saleFixMax']))   ?   $object['commission']['saleFixMax'] :   0,
                        'saleFixMin' => (!empty($object['commission']['saleFixMin']))   ?   $object['commission']['saleFixMin'] :   0,
                        'leadMax' => (!empty($object['commission']['leadMax']))   ?   $object['commission']['leadMax'] :   0,
                        'leadMin' => (!empty($object['commission']['leadMin']))   ?   $object['commission']['leadMin'] :   0,
                        'Category' => (!empty($object['industries']['main']))   ?   $object['industries']['main'] :   '',
                        'Subcategory' => (!empty($object['industries']['sub']))   ?   $object['industries']['sub'] :   '',
                    );
                }
            }

            if(!empty($array))
            {
                foreach ($array as $a)
                {
                    //пропускаем дубликаты
                    if(Merchant::where('name', '=', $a['name'])->count())
                    {
                        continue;
                    }

                    if(self::store($a))
                    {
                        $added++;
                        echo $added . "\r";
                    }
                }
            }
        }
    }


    /**
     * Сохраняет в базе данных
     * Категорию, подкатегорию, продавца, связку категория-продавец
     *
     * @param null $array
     * @return bool
     */

    protected function store($array = null)
    {
        if(!empty($array))
        {
            $insert = [
                'name' => $array['name'],
                'image' => $array['image'],
                'url' => $array['url'],
                'status' => ($array['status'] == 'active')  ?   1   :   0,
                'timeleads' => $array['returnTimeLeads'],
                'timesales' => $array['returnTimeSales'],
                'sale_percent_max' => $array['salePercentMax'],
                'sale_percent_min' => $array['salePercentMin'],
                'sale_fix_max' => $array['saleFixMax'],
                'sale_fix_min' => $array['saleFixMin'],
                'lead_max' => $array['leadMax'],
                'lead_min' => $array['leadMin'],
                'info' => json_encode($array),
            ];

            $merchantService = new MerchantService(new Merchant, new Category);
            return $merchantService->create($insert, $array['Category'], $array['Subcategory']);
        }
    }


    /**
     * Получает данные по урлу
     *
     * @param $url
     * @return bool|string
     */

    protected function file_get_contents($url)
    {
        echo 'Parse:' . $url . PHP_EOL;

        return file_get_contents($url);
    }



    /**
     * Возвращает урл с авторизацией
     * @return string
     */

    protected function getSignatureUrl()
    {
        $date = date('Y-m-d');
        $uri = '/reports/sales/date/' . $date;
        $time_stamp = gmdate('D, d M Y H:i:s T', time());
        $nonce = uniqid() . uniqid();
        $string_to_sign = mb_convert_encoding(self::HTTPVerb . $uri . $time_stamp . $nonce, 'UTF-8');
        $signature = base64_encode(hash_hmac('sha1', $string_to_sign, self::SecretKey, true));

        return 'connectid=' . self::ConnectId . '&date=' . urlencode($time_stamp) . '&nonce=' . $nonce . '&signature=' . urlencode($signature);
    }
}