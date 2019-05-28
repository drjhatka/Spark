@extends('layouts.frontend')

@section('title','Open Savings Account')

@section('content')

        <div class="row">
            <div class="col m12">
                <div class="card-panel  center-align red lighten-2 white-text">
                    Open Savings Account
                </div>
            </div>
        </div>

        @if(Session::has('cust_id_error'))
            <script>
                alert("<?php echo Session::get('cust_id_error') ?>");
            </script>
        @endif

        @if (count($errors)>0)
        <div class="row">
            @foreach ($errors->getMessages() as $error)
                <div class="col m12">
                    <div class="red center-align white-text">
                        <strong>
                              Warning::  {{ $error[0] }}
                        </strong>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

        <div class="col m12">
            {!! Form::open(['route'=>'save_sb_acc']) !!}

                <div class="row card-panel">
                    <div class="col m4 card">
                            <div class="input-field col m12">
                                {!! Form::label('customer_id', 'Customer ID') !!}
                                {!! Form::text('customer_id', '',['id'=>'customer_id','class'=>'validate', 'placeholder'=>'customer id']) !!}
                            </div>
                    </div>
                    <div class="col m2" style="margin-top:15px;">
                        <a class="btn waves-effect waves-light"  onclick="getName()"> Find</a>
                    </div>
                    <div class="col m5 card-panel red-text center-align" id="name" style="font-weight: bold; margin-top:15px;padding:5px;">

                    </div>
                </div>

                <div class="row card-panel blue lighten-5" id="acc_detail" >

                            <div class="input-field col m12">

                                    {!! Form::text('acc_title', '', ['id'=>'acc_title']) !!}

                                    {!! Form::label('acc_title', 'Account Title') !!}

                            </div>

                        <div class="input-field col m6">

                                    {!! Form::text('intro_name', '') !!}

                                    {!! Form::label('intro_name', 'Introducer Name') !!}

                            </div>
                            <div class="input-field col m6">
                                    {!! Form::text('intro_acc', '') !!}
                                    {!! Form::label('intro_acc', 'Introducer Account No') !!}
                            </div>

                            <div class="input-field col m12">
                                    {!! Form::text('spacial_inst', '') !!}
                                    {!! Form::label('special_inst', 'Special Instruction') !!}
                            </div>

                            <div class="input-field col m3 center-align">
                                    {!! Form::text('opening_balance', '') !!}
                                    {!! Form::label('opening_balance', 'Opening Balance') !!}
                            </div>

                            <div class="input-field col m12 center-align">

                                {!! Form::submit('Open Account', ['class'=>'btn']) !!}

                            </div>
                </div>
            {!! Form::close() !!}

        </div>

    <script>
        $(function() {

            if($('#name').text().length>0){
                //$('#acc_detail').find('*').attr('disabled',false);
                //$('#acc_detail').css({"background":"white"})
                $('#acc_detail').hide();
            }
            else{
                //$('#acc_detail').find('*').attr('disabled',true);
                //$('#acc_detail').css({"background":"#ddd"})
                $('#acc_detail').hide();


            }
        });

        function getName(){
            id =$('#customer_id').val();

            if(id.length>0){
                //call json route
                $.get('/get-cust-name/'+($('#customer_id').val()),function(data, status){
                    if(data.length>0){
                        $('#name').text(data);
                        $('#acc_title').val(data);
                        //$('#acc_detail').find('*').attr('disabled',false);
                        //$('#acc_detail').css({"background":"white"})
                        $('#acc_detail').fadeIn(1000);

                    }
                    else{

                        alert('Customer Not Found')
                        $('#acc_title').val('');
                        $('#name').text('');
                        $('#acc_detail').fadeOut(1000);

                    }
                })
            }//end if

            else{
                alert('Enter Customer ID')
            }
        }
    </script>

@endsection
