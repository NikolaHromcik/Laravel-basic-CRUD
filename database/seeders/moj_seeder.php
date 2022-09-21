<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class moj_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smers')->insert([
            'naziv_smera'=> 'IT',
            'nivo_studija'=> 'S'
        ]);
        DB::table('smers')->insert([
            'naziv_smera'=> 'RN',
            'nivo_studija'=> 'A'
        ]);
        DB::table('smers')->insert([
            'naziv_smera'=> 'RI',
            'nivo_studija'=> 'A'
        ]);
    }
}
