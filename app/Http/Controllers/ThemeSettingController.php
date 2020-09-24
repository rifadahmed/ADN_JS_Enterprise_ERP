<?php

namespace App\Http\Controllers;

use App\ThemeSetting;
use Illuminate\Http\Request;

class ThemeSettingController extends Controller
{
    //MENU_COLOR column
    public function updateMenuClassName(Request $request){
          
         $menuClassModel=ThemeSetting::where('key',"MENU_COLOR")->get()->first();
         
         $menuClassModel->value= $request->menuClassName." "."gradient-shadow";;
         $menuClassModel->save(); 
        // return $menuClassName=$request->menuClassName;
    }

        //MENU_DARK column
    public function updateDarkMenu(Request $request){
              
             $darkMenu=ThemeSetting::where('key',"MENU_DARK")->get()->first();
             if($darkMenu->status==1)
                {
              $darkMenu->status= 0;

                }
                else
                {
                  $darkMenu->status= 1;


                }
                $darkMenu->save();


    }

            //MENU_COLLAPSE column
    public function updateCollapseMenu(Request $request){
              
              $collapseMenu=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first();
              if($collapseMenu->status==1)
                {
              $collapseMenu->status= 0;
              
                }
                elseif($collapseMenu->status==0)
                {
              $collapseMenu->status= 1;
                }
                $collapseMenu->save();

                  
   
    }
            
            //MENU_SELECTION column
    public function updateSelectionMenu(Request $request){
              
                $menuSelection=ThemeSetting::where('key',"MENU_SELECTION")->get()->first();
                $menuSelection->value=$request->menuSelection;
                $menuSelection->save();
   
    }
            
            //NAV_COLOR column
    public function updateNavClassName(Request $request){
          
                $navClassModel=ThemeSetting::where('key',"NAV_COLOR")->get()->first();
                
                $navClassModel->value= $request->navClassName." "."active";;
                $navClassModel->save(); 
    }

            //NAV_DARK column
    public function updateDarkNav(Request $request){
            
             $darkNav=ThemeSetting::where('key',"NAV_DARK")->get()->first();
            if($darkNav->status==1)
               {
             $darkNav->status= 0;
             
               }
               elseif($darkNav->status==0)
               {
             $darkNav->status= 1;
               }
               
               $darkNav->save();

    }


           //NAV_FIX column
    public function updateFixNav(Request $request){
            
            $fixNav=ThemeSetting::where('key',"NAV_FIX")->get()->first();
           if($fixNav->status==1)
              {
            $fixNav->status= 0;
            
              }
              elseif($fixNav->status==0)
              {
            $fixNav->status= 1;
              }
              
              $fixNav->save();

    }

          //FOOTER_DARK column
    public function updateDarkFooter(Request $request){
            
            $darkFooter=ThemeSetting::where('key',"FOOTER_DARK")->get()->first();
            if($darkFooter->status==1)
            {
          $darkFooter->status= 0;
          
            }
            elseif($darkFooter->status==0)
            {
          $darkFooter->status= 1;
            }
            
            $darkFooter->save();

    }

          
          //FOOTER_DARK column
    public function updateFixFooter(Request $request){
            
            $fixFooter=ThemeSetting::where('key',"FOOTER_FIX")->get()->first();
            if($fixFooter->status==1)
            {
          $fixFooter->status= 0;
          
            }
            elseif($fixFooter->status==0)
            {
          $fixFooter->status= 1;
            }
            
            $fixFooter->save();

    }

          //MENU RESET column    
    public function menuReset(Request $request){
            
            $menuColor=ThemeSetting::where('key',"MENU_COLOR")->get()->first();
            $menuColor->value="content-wrapper-before gradient-45deg-indigo-purple";
            $menuColor->save();

            $menuDark=ThemeSetting::where('key',"MENU_DARK")->get()->first();
            $menuDark->status=1;
            $menuDark->save();

            $menuCollapse=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first();
            $menuCollapse->status=1;
            $menuCollapse->save();

            $menuSection=ThemeSetting::where('key',"MENU_SELECTION")->get()->first();
            $menuSection->value="sidenav-active-normal";
            $menuSection->save();
    }


          //MENU RESET column    
          public function navreset(Request $request){
            
            $navColor=ThemeSetting::where('key',"NAV_COLOR")->get()->first();
            $navColor->value="content-wrapper-before gradient-45deg-indigo-purple";
            $navColor->save();

            $navDark=ThemeSetting::where('key',"NAV_FIX")->get()->first();
            $navDark->status=1;
            $navDark->save();


            $navSection->save();
    }
       
}
