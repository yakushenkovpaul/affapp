<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\UserService;
use App\Models\User;
use DB;

//добавляем фейкового пользователя

class addUser extends Command
{
    protected $service;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addUser';

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
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        for($i = 0; $i <= 10; $i++)
        {
            $names = $this->getnames();

            $data = [
                'name' => $names['name'],
                'email' => $names['email'],
                'password' => 'qwerty',
                'lastname' => $names['lastname'],
                'city' => 'Berlin',
                'gender' => 'male',
                'club_id' => 259,
                'mail' => 1,
                'avatar' => rand(1,5),
                'is_active' => 1,
            ];

             DB::transaction(function() use ($data) {
                $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password'])
                ]);

                $this->service->create($user, $data['password'], $data);
            });

            echo 'Added ' . $data['name'] . PHP_EOL;
        }
    }


    protected function getnames()
    {
        $name = $this->names();
        $surname = $this->surnames();

        return [
            'name' => $name . ' ' . $surname,
            'email' => strtolower($name . $surname) . '.testing@gmail.com',
            'lastname' => $surname,
        ];
    }

    private function surnames()
    {
        $array = [
            'Aaron',
            'Abraham',
            'Abbot',
            'Scotland',
            'Peaceful',
            'Crossing',
            'Wolf',
            'Light',
            'Conqueror',
            'Beguiling',
            'Warrior',
            'Gift',
            'Victory',
        ];

        $k = array_rand($array);
        $v = $array[$k];

        return $v;
    }

    private function names()
    {
        $array = [
            'Charles',
            'Clyde',
            'Colin',
            'Axel',
            'Bradley',
            'Bryant',
            'Caleb',
            'Casey',
            'Chandler',
            'Daniel',
            'Dean',
            'Drake',
            'Elbert',
            'Emrick',
            'Esmond',
            'Fenton',
            'Frank',
            'Samson',
            'Theodore',
        ];

        $k = array_rand($array);
        $v = $array[$k];

        return $v;
    }
}
