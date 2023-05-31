<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uers'->insert)([
            'name'=>str_radom(10),
            'email'=>str_random(10),'@gmail.com',
            'passwork' => bcrypt('secret'),
        ]);
    }
}
