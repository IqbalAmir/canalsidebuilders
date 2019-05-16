@extends('layouts.app')

@section('content')



    <h1>{{$title}}</h1>

    <div class="text-center">
      <a href="/canalsidebuilders/public/orders/create" class="btn btn-primary">Create an Order</a>
        <br>
        <br>
    </div>



    <div class = " jumbotron text-center">


        <h2> These are the following services we offer </h2>
        <br>

        <p> Drives </p>
        <p>Roofing </p>
        <p> Rendering </p>
        <p>Fencing </p>
        <p> Windows, Doors and Conservatives</p>
        <p> Brick Layering </p>
        <p>Plumbing</p>

    </div>









@endsection
