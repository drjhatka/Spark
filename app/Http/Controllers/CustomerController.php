<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use CustomerIndividual as Customer;
use LogicHelper;
use Session;
class CustomerController extends Controller
{
//===============Add Customer ==================//
    public function storeCustomerPerson(Request $request){
    //Only Name is required Everything else is optional    
        $rules = ['name'=>'|required|min:3'];

    // Validator will automatically redirect to previous page with errors upon errors
        $validator = Validator::make($request->all(), $rules);    
        $validator->validate();

    //Assign Values
        $customer = new Customer();
        
        $customer->name             =  $request->name;
        $customer->father_name      =  $request->father_name;
        $customer->mother_name      =  $request->mother_name;
        $customer->spouse_name      =  $request->spouse_name;
        $customer->present_address  =  $request->present_address;
        $customer->perm_address     =  $request->perm_address;
        $customer->mobile_1         =  $request->mobile_1;
        $customer->mobile_2         =  $request->mobile_2;
        $customer->mobile_3         =  $request->mobile_3;

    //if id no is null then id type will also be null
        if($request->id_no == null){
            $customer->id_type = null;
            $customer->id_no   = null;
        }//end if
    //otherwise save whatever is in there
        else {
            $customer->id_type = $request->id_type;
            $customer->id_no   = $request->id_no;
        }
        $customer->contact_name_1 = $request->contact_name_1;
        $customer->contact_mobile_1 = $request->contact_mobile_1;
        $customer->contact_address_1 = $request->contact_address_1;

        $customer->contact_name_2 = $request->contact_name_2;
        $customer->contact_mobile_2 = $request->contact_mobile_2;
        $customer->contact_address_2 = $request->contact_address_2;

        $customer->input_by = 'John';       //the current auth user, later to be renamed inputter id linked to user table

    //Save and redirect
        $customer->save();
        Session::flash('cust_pr_save_success','Customer Saved Successfully');
        Session::flash( 'id', $customer->id);
        return redirect()->route('add_cust_person_form');
    }//end storeCustomerPerson
//===================End Add Customer ====================//

    public function editCustomerPerson(Request $request, $id){
        //Only Name is required Everything else is optional    
        $rules = ['name'=>'|required|min:3'];

    // Validator will automatically redirect to previous page with errors upon errors
        $validator = Validator::make($request->all(), $rules);    
        $validator->validate();

    //Assign Values
        $customer = Customer::find($id);
        
        $customer->name             =  $request->name;
        $customer->father_name      =  $request->father_name;
        $customer->mother_name      =  $request->mother_name;
        $customer->spouse_name      =  $request->spouse_name;
        $customer->present_address  =  $request->present_address;
        $customer->perm_address     =  $request->perm_address;
        $customer->mobile_1         =  $request->mobile_1;
        $customer->mobile_2         =  $request->mobile_2;
        $customer->mobile_3         =  $request->mobile_3;

    //if id no is null then id type will also be null
        if($request->id_no == null){
            $customer->id_type = null;
            $customer->id_no   = null;
        }//end if
    //otherwise save whatever is in there
        else {
            $customer->id_type = $request->id_type;
            $customer->id_no   = $request->id_no;
        }
        $customer->contact_name_1       = $request->contact_name_1;
        $customer->contact_mobile_1     = $request->contact_mobile_1;
        $customer->contact_address_1    = $request->contact_address_1;

        $customer->contact_name_2       = $request->contact_name_2;
        $customer->contact_mobile_2     = $request->contact_mobile_2;
        $customer->contact_address_2    = $request->contact_address_2;

        $customer->input_by = 'John';       //the current auth user, later to be renamed inputter id linked to user table

    //Save and redirect
        $customer->save();
        Session::flash('cust_pr_edit_success','Customer Updated Successfully');
        return redirect()->route('edit_cust_person_form', $customer->id);
    }

    public function viewAllCustomer(){
        return view('frontend.view-all-customer-person');
    }
    public function viewCustomerPerson($id){
        $customer = Customer::find($id);
        return view('frontend.view-customer-person')->with('customer',$customer);
    }
}//End Class

