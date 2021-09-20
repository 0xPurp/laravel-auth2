<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                "titre"=>"START BOOTSTRAP"
            ],
            [
                "titre"=>"PORTFOLIO"
            ],
            [
                "titre"=>"ABOUT"
            ],
            [
                "titre"=>"CONTACT ME"
            ],
        ]);
    }
}
