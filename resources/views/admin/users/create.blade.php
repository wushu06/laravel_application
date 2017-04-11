@extends('layouts.admin')
@section('content')
    <h1>Create Users</h1>
    {{Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true])}}
   <div class="form-group">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}

   </div>
    <div class="form-group">
       {!! Form::label('email', 'Email') !!}
       {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
       {!! Form::label('password', 'Password') !!}
       {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
       {!! Form::label('role_id', 'Role') !!}
       {!! Form::select('role_id',[''=>'Chose an option']+$roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
       {!! Form::label('is_active', 'status') !!}
       {!! Form::select('is_active', array(1=>'Active', 0=>'Not active'),null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Profile Picture') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
       {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

  @include('includes/form_error')
@endsection