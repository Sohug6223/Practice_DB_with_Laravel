<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            ['subject_name'=>'Bangla'],
            ['subject_name'=>'English'],
            ['subject_name'=>'Math'],
            ['subject_name'=>'Science'],

        ]);
    }
}
