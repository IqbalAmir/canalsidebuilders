@extends('layouts.app')

@section('content')
  <h1>Create an Order</h1>
  {!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST']) !!}

	    <div class="form-group">
        {{Form::label('issue', 'Please state your issue' )}}
        {{Form::text('issue','',['class' => 'form-control', 'placeholder' => 'Issue'])}}
     </div>

     <div class="form-group">
        {{Form::label('service', 'Please state the service you require' )}}
        {{Form::select('service',$services,null,['class' => 'required form-control select2','id'=>'service']) }}
     </div>





     {{Form::submit('Submit',['class' =>'btn btn-primary'])}}

  {!! Form::close() !!}


@endsection
