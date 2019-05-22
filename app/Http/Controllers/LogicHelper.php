<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerIndividual;
use DB;
class LogicHelper extends Controller
{
    public static function assignValue($request, $model_attr){
        //assign value only if request is not null
        if($request != null){
            $model_attr = $request;
        }
        //dd($model_attr);
    }//end method

    public static function getCustomerName($id){
        $cust= CustomerIndividual::find($id);
        if($cust!=null){
            return $cust->name;

        }
        else{
            return null;
        }
    }//end method

    public static function getCOAGroupCode(){
        $target_array = array();
        $dest_array =DB::select('select group_code, group_title from group_codes');

        foreach ($dest_array as $value) {
            $target_array[$value->group_code] = $value->group_code.'-'.$value->group_title;

        }
        return $target_array;
    }//end method

    public static function getCOAGLCode($group_code){
        $target_array = array();
        $dest_array =DB::select('select group_code, group_title from group_codes');

        foreach ($dest_array as $value) {
            $target_array[$value->group_code] = $value->group_title;
            //dd($value->group_code);
        }
        return $target_array;
    }//end method
}//end class
