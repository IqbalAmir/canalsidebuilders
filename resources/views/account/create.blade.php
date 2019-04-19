@extends('layouts.app')

@section('content')
  <h1>Insert Personal Information</h1>
  {!! Form::open(['action' => 'AccountController@store', 'method' => 'POST']) !!}

	    <div class="form-group">
        {{Form::label('title', 'Title' )}}
        {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
     </div>

     <div class="form-group">
       {{Form::label('firstname', 'First Name' )}}
       {{Form::text('firstname','',['class' => 'form-control', 'placeholder' => 'firstname'])}}
    </div>

    <div class="form-group">
      {{Form::label('surname', 'Surname' )}}
      {{Form::text('surname','',['class' => 'form-control', 'placeholder' => 'surname'])}}
   </div>

   <div class="form-group">
     {{Form::label('housenumber', 'House Number' )}}
     {{Form::text('housenumber','',['class' => 'form-control', 'placeholder' => 'housenumber'])}}
  </div>

  <div class="form-group">
    {{Form::label('streetname', 'Street Name' )}}
    {{Form::text('streetname','',['class' => 'form-control', 'placeholder' => 'streetname'])}}
 </div>

 <div class="form-group">
   {{Form::label('city', 'City' )}}
   {{Form::text('city','',['class' => 'form-control', 'placeholder' => 'city'])}}
</div>

<div class="form-group">
  {{Form::label('postcode', 'Postcode' )}}
  {{Form::text('postcode','',['class' => 'form-control', 'placeholder' => 'postcode'])}}
</div>

     {{Form::submit('Submit',['class' =>'btn btn-primary'])}}

  {!! Form::close() !!}


@endsection
