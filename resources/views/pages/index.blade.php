@extends('layouts.app')

@section('content')
 <div class="jumbotron">

   <h1>{{$title}}</h1>
   <p class="text-center">Specialists in House Building and Property Improvement</p>
     <br>
   @if(Auth::guest())
   <a class="btn btn-primary btn-lg" href="/canalsidebuilders/public/login" role="button">Login</a>
    <br>
     <br>
         <a class="btn btn-success btn-lg" href="/canalsidebuilders/public/register" role="button">Register</a>

   @endif


@endsection
