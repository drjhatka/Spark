@extends('layouts.frontend')

@section('title')
    Add Cusomer Person
@endsection

@section('content')
        <div class="row">
            <div class="col s12 m12">
                <div class="card-panel center-align blue lighten-2">
                    <span class="white-text" style="font-weight:bold;" >
                        Add Customer Person
                    </span>
                </div>
            </div>
        </div>

        @if (Session::has('cust_pr_save_success'))
        <div class="row">
                    <div class="col m12">
                        <div class="card-panel orange lighten-4 center-align red-text">
                            {{ Session::get('cust_pr_save_success') }} <br>
                            <strong>
                                 Customer ID: {{ Session::get('id') }}
                            </strong> 
                        </div>
                    </div>
               
            </div>   
        @endif
        
        @if (count($errors)>0)
            <div class="row">
                @foreach ($errors->getMessages() as $error)
                    <div class="col m12">
                        <div class="card-panel orange lighten-2 center-align white-text">
                            <strong>
                                  Warning::  {{ $error[0] }}
                            </strong> 
                        </div>
                    </div>
                @endforeach
            </div>                 
        @endif

        {!! Form::open(['route'=>'store_cust_person', 'class'=>'col s12']) !!}
        <ul class="collapsible">
                <li >
                    <div class="collapsible-header align-center">
                        <i class="material-icons">perm_identity</i>Personal Details
                    </div>
                    <div class="collapsible-body  green lighten-2">
                            <div class="row">
                                    <div class="col m12">                        
                                            <div class="row card-panel">                        
                                                <div class="input-field col s12 m12">                                
                                                    {!! Form::text('name', '', ['length'=>30, 'id'=>'name']) !!}
                                                    {!! Form::label('name', '<i class="left material-icons">person</i> Name',[],false) !!}                                
                                                </div>
                                            </div>
                        
                                            <div class="row card-panel">
                        
                                                    <div class="input-field col s12 m4">
                                                            {!! Form::text('father_name', '', ['length'=>30, 'id'=>'father_name']) !!}
                                                            {!! Form::label('father_name', '<i class="left material-icons">person</i> Fathers Name',[],false) !!}
                                                    </div>
                                                    <div class="input-field col s12 m4">
                                                            {!! Form::text('mother_name', '', ['length'=>30, 'id'=>'mother_name']) !!}
                                                            {!! Form::label('mother_name', '<i class="left material-icons">person</i> Mothers Name',[],false) !!}
                                                    </div>
                                                    <div class="input-field col s12 m4">
                                                            {!! Form::text('spouse_name', '', ['length'=>30, 'id'=>'spouse_name']) !!}
                                                            {!! Form::label('spouse_name', '<i class="left material-icons">person</i> Spouse Name',[],false) !!}
                                                    </div>
                                            </div>
                                                
                                            <div class="row card-panel">
                                                    <div class="input-field col s12">                                                        
                                                        {!! Form::textarea('present_address', '', ['class'=>'materialize-textarea', 'length'=>'120', 'id'=>'present_address']) !!}
                                                        {!! Form::label('present_address', '<i class="left material-icons">contact_mail</i> Present Address',[],false) !!}
                                                        
                                                    </div>
                                            </div>
                        
                                            <div class="row card-panel">
                                                <div class="input-field col s12">
                                                        {!! Form::textarea('perm_address', '', ['class'=>'materialize-textarea', 'length'=>'120', 'id'=>'perm_address']) !!}
                                                        {!! Form::label('perm_address', '<i class="left material-icons">contact_mail</i> Permanent Address',[],false) !!}
                                                    
                                                </div>
                                            </div>                   
                                            <div class="row card-panel">
                                                <div class="input-field col s12 m4">
                                                    
                                                    {!! Form::text('mobile_1', '', ['id'=>'mobile_1', 'length'=>11]) !!}                                
                                                    {!! Form::label('mobile_1', '<i class="left material-icons">local_phone</i> Mobile Number', [],false) !!}
                                                    
                                                </div>
                                                <div class="input-field col s12 m4">
                                                        {!! Form::text('mobile_2', '', ['id'=>'mobile_2', 'length'=>11]) !!}                                
                                                        {!! Form::label('mobile_2', '<i class="left material-icons">local_phone</i> Mobile Number (Optional)', [],false) !!}
                                                </div>
                                                <div class="input-field col s12 m4">
                                                        {!! Form::text('mobile_3', '', ['id'=>'mobile_3', 'length'=>11]) !!}                                
                                                        {!! Form::label('mobile_3', '<i class="material-icons">local_phone</i> Mobile Number (Optional)', [],false) !!}
                                                </div>
                                            </div>
                        
                                            <div class="row card-panel">
                                                <div class="input-field col m4">                        
                                                    {!! Form::select('id_type', [
                                                                                    1=>'National ID', 
                                                                                    2=>'Passport', 
                                                                                    3=>'Driving License', 
                                                                                    4=>'Smard Card', 
                                                                                    5=>'Birth Certificate'
                                                                                ], true, ['id'=>'id_type']) !!}
                                                    
                                                    {!! Form::label('id_type', 'Select ID' ) !!}                            
                                                </div>                                 
                                                <div class="input-field col m5 offset-m1">                        
                                                    
                                                    {!! Form::text('id_no', '', ['id'=>'id_no']) !!}
                                                    
                                                    {!! Form::label('id_no', 'Enter ID No' ) !!}                            
                                                </div>                                 
                                            </div>                                          
                                        </div>        
                                    </div>
                    </div>
                </li>
                
                <li  style="margin-top:5px;">
                    <div class="collapsible-header">
                            <i class="material-icons">record_voice_over</i>Contact Person
                    </div>
                    <div class="collapsible-body   green lighten-2">
                        <div class="row card-panel">
                            <div class="input-field col s12 m4">                                            
                                {!! Form::text('contact_name_1', '', ['id'=>'contact_name_1', 'length'=>30]) !!}                                
                                {!! Form::label('contact_name_1', '<i class="left material-icons">person</i> Contact Person Name', [],false) !!} 
                            </div>
                            <div class="input-field col s12 m6">
                                {!! Form::text('contact_mobile_1', '', ['id'=>'contact_mobile_1', 'length'=>11]) !!}                                
                                {!! Form::label('contact_mobile_1', '<i class="material-icons">local_phone</i> Contact Person Mobile Number (Optional)', [],false) !!}
                            </div>
                            <div class="input-field col s12 m12">                                                                                       
                                {!! Form::textarea('contact_address_1', '', ['id'=>'contact_address_1', 'class'=>'materialize-textarea']) !!}                                
                                {!! Form::label('contact_address_1', '<i class="left material-icons">import_contacts</i> Contact Person Address', [],false) !!}
                            </div>
                        </div>

                        <div class="row card-panel">
                                <div class="input-field col s12 m4">                                            
                                    {!! Form::text('contact_name_2', '', ['id'=>'contact_name_2', 'length'=>30]) !!}                                
                                    {!! Form::label('contact_name_2', '<i class="left material-icons">person</i> Contact Person Name', [],false) !!} 
                                </div>
                                <div class="input-field col s12 m6">
                                    {!! Form::text('contact_mobile_2', '', ['id'=>'contact_mobile_2', 'length'=>11]) !!}                                
                                    {!! Form::label('contact_mobile_2', '<i class="material-icons">local_phone</i> Contact Person Mobile Number (Optional)', [],false) !!}
                                </div>
                                <div class="input-field col s12 m12">                                                                                       
                                    {!! Form::textarea('contact_address_2', '', ['id'=>'contact_address_2', 'class'=>'materialize-textarea']) !!}                                
                                    {!! Form::label('contact_address_2', '<i class="left material-icons">import_contacts</i> Contact Person Address', [],false) !!}
                                </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="row">
                        <div class="col m12 center-align" style="padding:10px;">
                            {!! Form::submit('Add Customer', ['class'=>'btn green']) !!} 

                        </div>
                        
                    </div>
                    
                </li>
            </ul>
            {!! Form::close() !!}   

@endsection