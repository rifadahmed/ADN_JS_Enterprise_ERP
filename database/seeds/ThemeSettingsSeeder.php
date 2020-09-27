<?php

use Illuminate\Database\Seeder;

class ThemeSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theme_settings')->insert([
            [
                'key' => 'MENU_COLOR',
                'value' => 'content-wrapper-before gradient-45deg-indigo-purple',
                'type' => "Menu",
                'status' => 1,
            ],[
                'key' => 'MENU_DARK',   
                'value' => null,
                'type' => "Menu",
                'status' => 1,
            ]
            ,[
                'key' => 'MENU_COLLAPSE',  
                'value' => null,             
                'type' => "Menu",
                'status' => 1,
            ],
            [
                'key' => 'MENU_SELECTION',
                'value' => 'sidenav-active-normal',              
                'type' => "Menu",
                'status' => 1,
            ],[
                'key' => 'NAV_COLOR',  
                'value' => "content-wrapper-before gradient-45deg-indigo-purple",             
                'type' => "navbar",
                'status' => 1,
            ],[
                'key' => 'NAV_DARK',  
                'value' => null,
             
                'type' => "navbar",
                'status' => 1,
            ],
            [
                'key' => 'NAV_FIX', 
                'value' => null,
              
                'type' => "navbar",
                'status' => 1,
            ],[
                'key' => 'FOOTER_DARK',
                'value' => null,
                
                'type' => "footer",
                'status' => 1,
            ],[
                'key' => 'FOOTER_FIX',
                'value' => null,

                'type' => "footer",
                'status' => 1,
            ]

        ]);
    }
}
