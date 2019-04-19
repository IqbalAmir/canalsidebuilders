@extends('layouts.app')

@section('content')
  <h1>Edit Details</h1>
  {!! Form::open(['action' => ['AccountController@update', $account->id],'method' => 'POST']) !!}

	    <div class="form-group">
        {{Form::label('title', 'Title' )}}
        {{Form::text('title',$account->title,['class' => 'form-control', 'placeholder' => 'title'])}}
     </div>

     <div class="form-group">
       {{Form::label('firstname', 'First Name' )}}
       {{Form::text('firstname',$account->firstname,['class' => 'form-control', 'placeholder' => 'firstname'])}}
    </div>

    <div class="form-group">
      {{Form::label('surname', 'Surname' )}}
      {{Form::text('surname',$account->surname,['class' => 'form-control', 'placeholder' => 'surname'])}}
   </div>

   <div class="form-group">
     {{Form::label('housenumber', 'House Number' )}}
     {{Form::text('housenumber',$account->housenumber,['class' => 'form-control', 'placeholder' => 'housenumber'])}}
  </div>

  <div class="form-group">
    {{Form::label('streetname', 'Street Name' )}}
    {{Form::text('streetname',$account->streetname,['class' => 'form-control', 'placeholder' => 'streetname'])}}
 </div>

 <div class="form-group">
   {{Form::label('city', 'City' )}}
   {{Form::text('city',$account->city,['class' => 'form-control', 'placeholder' => 'city'])}}
</div>

<div class="form-group">
  {{Form::label('postcode', 'Postcode' )}}
  {{Form::text('postcode',$account->postcode,['class' => 'form-control', 'placeholder' => 'postcode'])}}
</div>


     {{Form::hidden('_method', 'PUT')}}
     {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
     {!! Form::close() !!}


@endsection
