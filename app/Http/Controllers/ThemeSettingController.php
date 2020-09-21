<?php

namespace App\Http\Controllers;

use App\ThemeSetting;
use Illuminate\Http\Request;

class ThemeSettingController extends Controller
{
    //value column
    public function updateMenuClassName(Request $request){
          
         $menuClassModel=ThemeSetting::find(1);
         
         $menuClassModel->value= $request->menuClassName." "."active";;
         //$menuClassModel->navbar_class_name= "xyz";
         $menuClassModel->save(); 
        return $menuClassName=$request->menuClassName;
        }

        //value1 column
        public function updateDarkMenu(Request $request){
              
             $darkMenu=ThemeSetting::find(1);
             if($darkMenu->value1==1)
                {
              $darkMenu->value1= 0;
              
                }
                elseif($darkMenu->value1==0)
                {
              $darkMenu->value1= 1;
                }
                
                $darkMenu->save();

            return $darkMenu->value1;
            }

            //value2 column
            public function updateCollapseMenu(Request $request){
              
                $collapseMenu=ThemeSetting::find(1);
                if($collapseMenu->value2==1)
                   {
                 $collapseMenu->value2= 0;
                 
                   }
                   elseif($collapseMenu->value2==0)
                   {
                 $collapseMenu->value2= 1;
                   }
                   
                   $collapseMenu->save();
   
               return $collapseMenu->value2;
            }
            
            //value3 column
            public function updateSelectionMenu(Request $request){
              
                $menuSelection=ThemeSetting::find(1);
                $menuSelection->value3=$request->menuSelection;
                $menuSelection->save();
   
               return $menuSelection->value2;
            }
            
            //value4 column
            public function updateNavClassName(Request $request){
          
                $navClassModel=ThemeSetting::find(1);
                
                $navClassModel->value4= $request->navClassName." "."active";;
                $navClassModel->save(); 
               }

            //value5 column
        public function updateDarkNav(Request $request){
            
             $darkNav=ThemeSetting::find(1);
            if($darkNav->value5==1)
               {
             $darkNav->value5= 0;
             
               }
               elseif($darkNav->value5==0)
               {
             $darkNav->value5= 1;
               }
               
               $darkNav->save();

           return $darkNav->value5;
           }


           //value6 column
           public function updateFixNav(Request $request){
            
            $fixNav=ThemeSetting::find(1);
           if($fixNav->value6==1)
              {
            $fixNav->value6= 0;
            
              }
              elseif($fixNav->value6==0)
              {
            $fixNav->value6= 1;
              }
              
              $fixNav->save();

          return $fixNav->value6;
          }

       
}
