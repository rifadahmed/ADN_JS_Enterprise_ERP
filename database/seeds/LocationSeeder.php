<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            [
                'name' => 'Dhaka',
                'bn_name' => 'ঢাকা',
                'code' => 1,
                'status' => "Active",
                
            ],[
                'name' => 'Sylhet',
                'bn_name' => 'সিলেট',
                'code' => 1,
                'status' => "Active",
            ],[
                'name' => 'Chittagong',
                'bn_name' => "চট্টগ্রাম",
                'code' => 1,
                'status' => "Active",
            ],[
                'name' => 'Barisal',
                'bn_name' => "বরিশাল",
                'code' => 1,
                'status' => "Active",
            ],[
                'name' => 'Khulna',
                'bn_name' => "খুলনা",
                'code' => 1,
                'status' => "Active",
            ],[
                'name' => 'Mymensingh',
                'bn_name' => "ময়মনসিংহ",
                'code' => 1,
                'status' => "Active",
            ],[
                'name' => 'Rajshahi',
                'bn_name' => "রাজশাহী",
                'code' => 1,
                'status' => "Active",
            ],[
                'name' => 'Rangpur',
                'bn_name' => "রংপুর",
                'code' => 1,
                'status' => "Active",
            ]
        ]);

        DB::table('districts')->insert([
            [
                'division_id'=>1,
                'name' => 'Narayanganj',
                'bn_name' => 'নারায়ণগঞ্জ',
                'code' => 1,
                'status' => "Active",
                
            ],[
                'division_id'=>2,
                'name' => 'Habiganj',
                'bn_name' => 'হবিগঞ্জ',
                'code' => 1,
                'status' => "Active",
            ],[
                'division_id'=>3,
                'name' => 'Bandarban',
                'bn_name' => "বান্দারবান",
                'code' => 1,
                'status' => "Active",
            ]
            ,[
                'division_id'=>4,
                'name' => 'Bhola',
                'bn_name' => "ভোলা",
                'code' => 1,
                'status' => "Active",
            ]
            ,[
                'division_id'=>5,
                'name' => 'Satkhira',
                'bn_name' => "সাতক্ষীরা",
                'code' => 1,
                'status' => "Active",
            ]
            ,[
                'division_id'=>6,
                'name' => 'Sherpur',
                'bn_name' => "শেরপুর",
                'code' => 1,
                'status' => "Active",
            ],[
                'division_id'=>7,
                'name' => 'Bogura',
                'bn_name' => "বগুড়া",
                'code' => 1,
                'status' => "Active",
            ],[
                'division_id'=>8,
                'name' => 'Nilphamari',
                'bn_name' => "নীলফারমারী",
                'code' => 1,
                'status' => "Active",
            ],[
                'division_id'=>1,
                'name' => 'Gazipur',
                'bn_name' => "গাজীপুর",
                'code' => 1,
                'status' => "Active",
            ]
             
            

        ]);

        DB::table('upazilas')->insert([
            [
                'district_id'=>1,
                'name' => 'Bandar',
                'bn_name' => 'বন্দর',
                'code' => 1,
                'status' => "Active",
                
            ],[
                'district_id'=>2,
                'name' => 'Ajmiriganj',
                'bn_name' => 'আজমিরীগঞ্জ',
                'code' => 1,
                'status' => "Active",
            ],[
                'district_id'=>3,
                'name' => 'Thanchi',
                'bn_name' => "থানছি",
                'code' => 1,
                'status' => "Active",
            ],[
                'district_id'=>1,
                'name' => 'Rupganj',
                'bn_name' => "রুপগঞ্জ",
                'code' => 1,
                'status' => "Active",
            ]
        ]);
    }

    }

  




