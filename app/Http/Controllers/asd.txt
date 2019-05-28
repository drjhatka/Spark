<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LogicHelper;
use Session;
use App\Models\SavingsAccount;
class AccountController extends Controller
{
    public function sbAccForm(){
        return view('frontend.savings-form');
    }

    public function saveSBAcc(Request $request){
        //check if a vaild customer id exists
        $id = $request->customer_id;
        if(LogicHelper::getCustomerName($id)==null){
            Session::flash('cust_id_error','Invalid Customer ID');
            return redirect()->route('sb_acc_form');
        }
        else{
            //proceed with validation
            $rules = ['acc_title'=>'required|max:35', 'intro_name'=>'required',
                            'intro_acc'=>'required', 'opening_balance'=>'required'];

                            dd($request->all());
            $request->validate( $rules,$request->all());

            $acc = new SavingsAccount();

            $acc->customer_id= $request->customer_id;
           // $acc->acc_no =10210
            $acc->title = $request->acc_title;
            $acc->gl_head = 10213001;
            $acc->introducer_name = $request->intro_name;
            $acc->introducer_acc_no =$request->intro_acc;
            $acc->special_instruction= $request->special_inst;
            $acc->opening_balance   = $request->opening_balance;
            $acc->balance   =   $request->opening_balance;
            $acc->input_by  =   'John';

            $acc->save();

        }
    }
}
