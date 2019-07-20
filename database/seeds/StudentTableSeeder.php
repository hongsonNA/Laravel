<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('classes')->count() == 0) {
        	DB::table('classes')->insert([[
        		'id'=>1,
        		'name'=>'PT13312',
        			'address' =>'Ha Noi',
        			'university'=>'FPT',
        			'class_id'=>'1'
        	],
        	[
        		'id'=>2,
        		'name'=>'PT13311',
        		'address' =>'Ha Noi',
        		'university'=>'FPT',
        		'class_id'=>'2'
        	]
        ]);
        }
    }
}
