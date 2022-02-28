<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class coursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'professional training',
                'course_trainer' => 'mohmad',
                'course_price'=>'300',
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-132,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_727_original.jpg'
            ], 
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'professional training',
                'course_trainer' => 'mohmad',
                'course_price'=>'300',
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-132,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_727_original.jpg'
            ], 
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'professional training',
                'course_trainer' => 'mohmad',
                'course_price'=>'300',
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://www.fourseasons.com/alt/img-opt/~80.930.0,0000-132,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/AMM/AMM_727_original.jpg'
            ], 
        ]);
    }
}
