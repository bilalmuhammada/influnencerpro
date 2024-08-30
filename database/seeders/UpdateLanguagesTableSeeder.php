<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->where('name', 'Lingala')->delete();
        DB::table('languages')->where('name', 'Luganda')->delete();
        DB::table('languages')->where('name', 'Luxembourgish')->delete();
        DB::table('languages')->where('name', 'Malagasy')->delete();
        DB::table('languages')->where('name', 'Malayalam')->delete();
        DB::table('languages')->where('name', 'Maltese')->delete();
        DB::table('languages')->where('name', 'Mandarin')->delete();
        DB::table('languages')->where('name', 'Mandingo')->delete();
        DB::table('languages')->where('name', 'Oriya')->delete();
        DB::table('languages')->where('name', 'Shona')->delete();
        DB::table('languages')->where('name', 'Sindhi')->delete();
        DB::table('languages')->where('name', 'Uyghur')->delete();
        DB::table('languages')->where('name', 'Visayan')->delete();
        DB::table('languages')->where('name', 'Xhosa')->delete();

        // Insert new records with the provided flag URL
        DB::table('languages')->insert([
            ['name' => 'Rohingya', 'prefix' => 'rhg', 'flag_image_url' => 'https://flagcdn.com/w320/my.png'],
            ['name' => 'Pideon', 'prefix' => 'pis', 'flag_image_url' => 'https://flagcdn.com/w320/ng.png'],
            ['name' => 'Agni', 'prefix' => 'any', 'flag_image_url' => 'https://flagcdn.com/w320/gh.png'],
            ['name' => 'Navajo', 'prefix' => 'nv', 'flag_image_url' => 'https://flagcdn.com/w320/us.png'],
        ]);
    }
}
