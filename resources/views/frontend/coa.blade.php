@extends('layouts.frontend')

@section('title','Chart Of Account')

@section('content')
    <div class="row">
        <div class="col m12 red card-title white-text">
            Edit Chart of Account
        </div>

        <div class="col m12 card">
            {!! Form::open(['route'=>'edit.coa']) !!}
                <div class="row">
                    <div class="input_field col m4 card">
                        {!! Form::label('group_code', 'Group Code', []) !!}
                        {!! Form::select('group_code', LogicHelper::getCOAGroupCode()) !!}
                    </div>
                    <div class="input-field col m6 card">
                        {!! Form::label('gl_code', 'GL Code', []) !!}
                        {!! Form::select('gl_code', LogicHelper::getCOAGroupCode()) !!}
                    </div>
                </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection

