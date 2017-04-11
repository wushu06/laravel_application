@extends('layouts.admin')
@section('content')
    <h1>Edit Users</h1>

    <div class="col-sm-3">
        <img src="{{$user->photo?$user->photo->file :'/images/dz.jpg' }}" class="img-responsive">

    </div>
    <div class="col-sm-9">

    {{Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true])}}
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
        {!! Form::select('is_active', array(1=>'Active', 0=>'Not active'),0, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Profile Picture') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Edit User', ['class'=>'btn btn-primary']) !!}
    </div>
    </div>

    @include('includes/form_error')
@endsection