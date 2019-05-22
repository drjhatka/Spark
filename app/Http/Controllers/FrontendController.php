<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CustomerIndividual as Customer;

class FrontendController extends Controller
{
    public function __construct(){

    }//end constructor

    public function addCustPersonForm(){
        return view('frontend.add-customer-person');
    }

    public function editCustomerPersonForm($id){
        $customer = Customer::find($id);
        return view('frontend.edit-customer-person')->with('customer',$customer);
    }

    public function getCOAForm(){
        return view('frontend.chart-of-account');
    }
    public function postCOA(Request $request){
        
    }
}
