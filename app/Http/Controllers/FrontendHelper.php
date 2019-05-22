<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendHelper extends Controller
{
    // ---------Create Side Menus ---------//
    public static function createSideMenu($header,  $menu_array, $icon_array, $url_array){
        
        $menus = '';

        for ($i=0; $i <count($menu_array) ; $i++) { 
            $route =route($url_array[$i]);
            //dd($route);
            $menus .= '<a href="'.$route.'" class="btn waves-effect red-text waves-light collection-item" style="padding-left:0;">'.
                            '<i class="'.$icon_array[$i].' fa-2x" style="color:red;" aria-hidden="true"></i> '.$menu_array[$i].
                        '</a>'; 
        }//end for

        $list  =  '<li>
                        <div class="collapsible-header">
                            <div class="col s9">'.
                                $header                               
                            .'</div>
                            <div class="col s2 rotating-icon">
                                <i class="material-icons">expand_more</i>
                            </div>
                        </div>

                        <div class="collapsible-body collection">'.
                            $menus.                                            
                        '</div>'.'
                </li>';
            return $list;
    }//end method

}//end class
