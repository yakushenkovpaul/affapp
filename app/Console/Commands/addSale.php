<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\UserService;
use App\Services\SaleService;
use App\Models\User;
use DB;
use Illuminate\Support\Carbon;

//добавляем фейковую продажу

class addSale extends Command
{
    protected $service;

    protected $service_sale;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addSale';

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
    public function __construct(
        UserService $userService,
        SaleService $saleService
    )
    {
        $this->service = $userService;
        $this->service_sale = $saleService;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        for($i=0; $i <= 10; $i ++)
        {
            $user = $this->service->findByEmailLike();
            $value = rand(100,900);
            $service_fee = 4.5;
            $commission = $value * ($service_fee/100);
            $time = Carbon::parse('-' . rand(1,7) . ' day');

            $data = [
                'user_id' => $user->id,
                //'user_id' => 45,
                'merchant_id' => rand(1,1036),
                'service_fee' => $service_fee,
                'club_id' => 259,
                'status' => rand(0,1),
                'value' => $value,
                'commission' => $commission
            ];

            $model = $this->service_sale->create($data);
            $model->updated_at = $model->created_at = $time;
            $model->save();
        }

    }



}
