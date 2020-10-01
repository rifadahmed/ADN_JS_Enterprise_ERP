<?php

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
        Schema::disableForeignKeyConstraints();
        DB::table('divisions')->truncate();
        DB::table('districts')->truncate();
        DB::table('upazilas')->truncate();
        
        DB::table('theme_settings')->truncate();
        $this->call(ThemeSettingsSeeder::class);
        $this->call(LocationSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
