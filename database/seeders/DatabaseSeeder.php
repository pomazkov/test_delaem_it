<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        UserInfo::create(['name' => 'Роман','surname' => 'Пастухов', 'email' => 'pastuhov@mail.ru','birth' => '15-01-1995',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ']);
        UserInfo::create(['name' => 'Александр','surname' => 'Соколов', 'email' => 'sokol@mail.ru','birth' => '26-11-1992',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ']);
        UserInfo::create(['name' => 'Сергей','surname' => 'Мельников', 'email' => 'melnik@gmail.ru','birth' => '01-12-1987',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ']);
        UserInfo::create(['name' => 'Мирослав','surname' => 'Евдокимов', 'email' => 'mirmir@mail.ru','birth' => '19-02-2002',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ']);
        UserInfo::create(['name' => 'Егор','surname' => 'Серов', 'email' => 'egogo@mail.ru','birth' => '31-12-1975',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ']);
        UserInfo::create(['name' => 'Демьян','surname' => 'Фомин', 'email' => 'fomdem@gmail.ru','birth' => '22-07-2006',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ']);
        UserInfo::create(['name' => 'Кирилл','surname' => 'Козловский', 'email' => 'kkirill@mail.ru','birth' => '23-04-2012',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ']);

    }
}
