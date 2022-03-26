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
                'course_desc' => 'Sign up for the second course Beginners course
                 One session:
                10 servings
                The duration of each session is 30 minutes
                For 135 dinars, including tax
                This offer is on Friday and Saturday only',
                'course_trainer' => 'mohmad Issa',
                'course_price'=>130,
                'course_period'=>'2 months',
                'course_date'=>'2022-11-26',
                'img'=>'https://scontent.famm7-1.fna.fbcdn.net/v/t39.30808-6/253363210_2035516209961390_3891895110522323379_n.jpg?stp=dst-jpg_p843x403&_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=PmMHgjz72A8AX_0KZyb&tn=jZV1w8h1zV_Rrnh6&_nc_ht=scontent.famm7-1.fna&oh=00_AT8s2KT8ueQ9IZuybkIswrJUqtPGGvTiC-LcHe2WzAOHQw&oe=62427FFB',
                'capacity'=>20
            ], 
            [
                'course_name' => 'hourse riding for kids',
                'course_desc' => 'Participate in the second course The training course for beginners kids
                One session:
                15 servings
                The duration of each session is an hour
                For 200 dinars, including tax',
                'course_trainer' => 'Samar Ahmad',
                'course_price'=>200,
                'course_period'=>'1 month',
                'course_date'=>'2022-12-31',
                'img'=>'https://scontent.famm7-1.fna.fbcdn.net/v/t39.30808-6/247082402_2019584988221179_8192315071274412520_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=-YsfULr76CgAX8TT8Gg&_nc_ht=scontent.famm7-1.fna&oh=00_AT_bBP9AzFYtwoX1VNP96slhpdFXHG_HLiTmOEGDILwsRA&oe=62434ED0',
                'capacity'=>15
            ],
            [
                'course_name' => 'Endurance training course',
                'course_desc' => 'The ability and endurance course includes children and adults, the duration of the lesson is 30 minutes, three days a week ',
                'course_trainer' => 'Ahmad Khateeb',
                'course_price'=>150,
                'course_period'=>'1 month',
                'course_date'=>'2022-12-31',
                'img'=>'https://scontent.famm7-1.fna.fbcdn.net/v/t1.6435-9/155570310_1736558073190540_1389545807443755894_n.jpg?stp=dst-jpg_p843x403&_nc_cat=105&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=E506HpL2VT4AX8i5fVl&_nc_ht=scontent.famm7-1.fna&oh=00_AT9SYjKx4TPikSzfVroiNUaOm3knQCSqD-dMDyB2pH1DYw&oe=6263C56D',
                'capacity'=>20
            ],  
            [
                'course_name' => 'hourse riding for beginners',
                'course_desc' => 'Participate in two horse riding lessons for beginners
                And get the third course for free
                One session:
                10 sessions
                Class duration is 30 minutes
                135 dinars including tax
                Three cycles are valid for 80 days',
                'course_trainer' => 'Dina Eid',
                'course_price'=>135,
                'course_period'=>'3 months',
                'course_date'=>'2022-12-31',
                'img'=>'https://scontent.famm7-1.fna.fbcdn.net/v/t39.30808-6/241696144_1986309131548765_7249222312300755572_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=IjbSNW10G9MAX8d1VyD&_nc_ht=scontent.famm7-1.fna&oh=00_AT-3JjvRRaJqgVOcvMjfpYae9MYFgxvwQa2pk3PW9oOYgw&oe=6242B759',
                'capacity'=>40
            ],  
            [
                'course_name' => 'Fifth round preparatory',
                'course_desc' => 'The administration of the Arabian Horse Club announces the organization of a training course tomorrow, Friday, August 14, 2022, on the external field of the Arabian Horse Club, at 10:30 in the morning, in preparation for the fifth round of the Arabian Horse Club Cup League, which will be held on Friday, 8/21. /2020.
                * Classes of the training course
                80-90 cm (10:30 a.m.)
                100 cm (continued)
                Break (12:30-1:30) in the afternoon
                110 cm (1:45 p.m.))
                120 cm (continued)
                130 cm (continued)
                140 cm (continued)
                Participation fee (10 dinars)
                Note :- All knights must commit to wearing a mask while in the club facilities and it is allowed not to wear a mask
                When riding a horse only.',
                'course_trainer' => 'Fadi Nael',
                'course_price'=>250,
                'course_period'=>'undefined',
                'course_date'=>'2022-8-14',
                'img'=>'https://scontent.famm7-1.fna.fbcdn.net/v/t39.30808-6/271464985_2085903821589295_5528103006880248904_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=aFvmTmJl1k8AX97mBbE&_nc_oc=AQkw7qg29wMPqzkB0YiI687scSUStwz9glktIyN2i9V94wdpm68nslypQ8FWst-Tt9c&_nc_ht=scontent.famm7-1.fna&oh=00_AT_6nLzJ4jk1gVmu1rHDbV9wXqQEZBLlcmor3JszmkuyrQ&oe=6241DC05',
                'capacity'=>17
            ], 
            [
                'course_name' => 'Show jumping(60 cm - 100 cm)',
                'course_desc' => 'The management of the Arabian Horse Club announces the organization of a training course next Saturday 8/8/2020 on the external field of the Arabian Horse Club
                Thats at 10:00 a.m.
                Note that the door (participation is open to all clubs and centers).
                *Training course categories:
                - 80-90 cm
                - 100 cm
                - 110 cm
                - 120 cm
                - 130 cm
                - 140 cm
                Note :- All riders must review and abide by all the conditions and instructions of the Royal Jordanian Equestrian Federation to practice the national equestrian championships and the conditions related to Covid-19.',
                'course_trainer' => 'Hassan Abdullah',
                'course_price'=>30,
                'course_period'=>'open',
                'course_date'=>'2022-12-31',
                'img'=>'https://scontent.famm7-1.fna.fbcdn.net/v/t39.30808-6/263979297_2058368344342843_150090035725122254_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=OFyMySQBvPQAX_H7Y-E&_nc_ht=scontent.famm7-1.fna&oh=00_AT-bnfjLDi5sLfUyaFGlXT6t8Oay7YM1KwOwRHkqE1AeWg&oe=62424DFC',
                'capacity'=>50
            ]
        ]);
    }
}
