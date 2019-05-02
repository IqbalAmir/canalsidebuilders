@extends('layouts.app')

@section('content')
 <div class="jumbotron text-center">

   <h1>{{$title}}</h1>
   <p>Specialists in House Building and Property Improvement</p>
   @if(Auth::guest())
   <p><a class="btn btn-primary btn-lg" href="/canalsidebuilders/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/canalsidebuilders/public/register" role="button">Register</a> </p>
   @endif


@endsection
