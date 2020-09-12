<?php

use Illuminate\Database\Seeder;

class LocationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location_types')->insert([
            [
                'location_type_name' => 'Division',
                'location_type_order' => 1,
                'location_type_status' => "Active",
                'created_by' => 1,
            ],[
                'location_type_name' => 'District',
                'location_type_order' => 2,
                'location_type_status' => "Active",
                'created_by' => 1,
            ],[
                'location_type_name' => 'Aria',
                'location_type_order' => 3,
                'location_type_status' => "Active",
                'created_by' => 1,
            ]
        ]);
    }
}
