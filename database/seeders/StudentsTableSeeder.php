<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Sohug',
                'age' => 23,
                'address' => 'Gazipur',
                'phone_number' => '01887374177',
                'roll' => '1147',
                'class_id' => 1,
            ],

             [
                'name' => 'Mahir',
                'age' => 22,
                'address' => 'Tangail',
                'phone_number' => '01712387823',
                'roll' => '1140',
                'class_id' => 1,
            ],
             [
                'name' => 'Talha',
                'age' => 24,
                'address' => 'Mirpur',
                'phone_number' => '01567564434',
                'roll' => '1086',
                'class_id' => 1,
            ],
             [
                'name' => 'Nipon',
                'age' => 22,
                'address' => 'Ashulia',
                'phone_number' => '01776763468',
                'roll' => '1092',
                'class_id' => 1,
            ],
             [
                'name' => 'Rihad',
                'age' => 21,
                'address' => 'Savar',
                'phone_number' => '01857657658',
                'roll' => '1113',
                'class_id' => 2,
            ],
             [
                'name' => 'Zahin',
                'age' => 22,
                'address' => 'Nobinagar',
                'phone_number' => '01366756677',
                'roll' => '1100',
                'class_id' => 2,
            ],
             [
                'name' => 'Shakwat',
                'age' => 21,
                'address' => 'Gazipur',
                'phone_number' => '01854235988',
                'roll' => '1103',
                'class_id' => 2,
            ]
        ]);
    }
}
