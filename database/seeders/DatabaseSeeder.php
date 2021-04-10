<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        // \App\Models\User::factory(10)->create();
//        for($i = 0 ;$i <1000 ;$i++){
//            DB::table('companies')->insert([
//            'company_name' => 'a',
//            'company_web' => 'ab',
//            'company_adress' =>'a',
//            'company_code' => 'abb',
//            'company_phone'=>'aa'
//        ]);
//            DB::table('trainers')->insert([
//            'trainer_name' => 'a',
//            'trainer_email' => 'ab@gmail.com',
//            'company_id' => '01',
//            'trainer_phone'=>'aa'
//        ]);
        
        $querycompanies = "insert into companies values (?,?,?,?,?,?)";
        $querytrainers = "insert into trainers values (?,?,?,?,?)";
        for($i = 0;$i <100000000; $i++){
            \Illuminate\Support\Facades\DB::insert($querycompanies,[null,'a','a','a','a','a']);
            \Illuminate\Support\Facades\DB::insert($querytrainers,[null,'a','1','b','c']);
        }

        
    }
}
