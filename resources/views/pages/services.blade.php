@extends('layouts.app')

@section('content')


    <h1>{{$title}}</h1>
      <a href="/canalsidebuilders/public/orders/create" class="btn btn-primary">Create an Order</a>
    <p>These are the following services we offer</p>
    @if(count($services) > 0)
      <ul class="list-group">
         @foreach($services as $service)
          <li class="list-group-item">{{$service}}</li>
        @endforeach

      </ul>


    @endif
    @endsection
