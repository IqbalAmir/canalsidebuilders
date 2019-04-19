@extends('layouts.app')

@section('content')

   @if(Auth::user()->id == $account->user_id)
      <h1>Personal Information</h1>
      <a href="/canalsidebuilders/public/accounts" class="btn btn-default">Go Back</a>





     <div>
    <p> Title: {{$account->title}}</p>
    <p> First Name: {{$account->firstname}}</p>
    <p> Surname: {{$account->surname}}</p>
    <p> Email: {{$account->user->email}} </p>
    <p> House Number: {{$account->housenumber}} </p>
    <p> Street Name: {{$account->streetname}} </p>
    <p> City: {{$account->city}} </p>
    <p> Post Code: {{$account->postcode}} </p>

      </div>



        <a href="/canalsidebuilders/public/accounts/{{$account->id}}/edit" class="btn btn-default">Edit</a>



        {!!Form::open(['action' => ['AccountController@destroy', $account->id],'method' => 'POST', 'class' => 'pull-right'])!!}
           {{Form::hidden('_method', 'DELETE')}}
           {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
        {!!Form::close()!!}

    @endif
@endsection
