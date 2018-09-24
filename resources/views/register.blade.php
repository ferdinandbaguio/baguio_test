@extends('layouts.app')

@section('content')
    <h1><i>Reconnect through us</i></h1>
    {!! Form::open(['route' => 'register.submit', 'method' => 'POST']) !!}
        {{ Form::hidden('role', 'Alumni') }} 
        {{ Form::hidden('status', 'Pending') }} 
        
        <div class="form-group">
            <b>{{Form::label('idnumber', 'ID Number')}}</b>
                {{Form::number('idnumber', '', 
                ['class' => 'form-control', 'placeholder' => 'Please type in your ID Number'])}}
        </div>
        <div class="form-group">
            <b>{{Form::label('gender', 'Gender')}}</b>
            <br>
                {{Form::label('male', 'Male')}}
                {{Form::radio('gender', 'Male')}}
                {{Form::label('female', 'Female')}}
                {{Form::radio('gender', 'Female')}}
        </div>
        <div class="form-group">
            <b>{{Form::label('name', 'Name')}}</b>
            <br>
                {{Form::label('firstname', 'First')}}
                {{Form::text('firstname', '', ['class' => 'form-control', 
                'placeholder' => 'Please type in your First Name'])}}

                {{Form::label('middlename', 'Middle')}}
                {{Form::text('middlename', '', ['class' => 'form-control', 
                'placeholder' => 'Please type in your Middle Name'])}}

                {{Form::label('lastname', 'Last')}}  
                {{Form::text('lastname', '', ['class' => 'form-control', 
                'placeholder' => 'Please type in your Last Name'])}}
        </div>
        <div class="form-group">
            <b>{{Form::label('employmentStatus', 'Employment Status')}}</b>
                {{Form::select('employmentStatus', ['Unemployeed' => 'Unemployeed', 
                'Employed' => 'Employed', 'Part-Time Job' => 'Part-Time Job'], null, 
                ['placeholder' => 'Select your Employment Status'])}}
        </div>
        <div class="form-group">
                <b>{{Form::submit('Summit Request', ['class' => 'btn btn-primary'])}}</b>
        </div>
    {!! Form::close() !!}
@endsection