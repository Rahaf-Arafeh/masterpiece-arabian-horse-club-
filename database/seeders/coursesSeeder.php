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
                'course_price'=>300,
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'capacity'=>30
            ], 
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'professional training',
                'course_trainer' => 'mohmad',
                'course_price'=>300,
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'capacity'=>30
            ],
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'professional training',
                'course_trainer' => 'mohmad',
                'course_price'=>300,
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'capacity'=>30
            ], 
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'professional training',
                'course_trainer' => 'mohmad',
                'course_price'=>300,
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'capacity'=>30
            ], 
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'professional training',
                'course_trainer' => 'mohmad',
                'course_price'=>300,
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'capacity'=>40
            ],  
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'professional training',
                'course_trainer' => 'mohmad',
                'course_price'=>300,
                'course_period'=>'2 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'capacity'=>20
            ], 
        ]);
    }
}
