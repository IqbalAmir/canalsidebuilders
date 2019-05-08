@extends('layouts.app')

@section('content')

   @if(Auth::user()->id == $order->user_id)
       <a href="/canalsidebuilders/public/orders" class="btn btn-default">Go Back</a>
      <h1>Order Infromation:</h1>



    <h3> Service Required: {{$order->service->service}}</h3>
    <h3> Issue: {{$order->issue}}</h3>

    <h1>Adress Details:</h1>
    <p> House Number: {{$order->account->housenumber}} </p>
    <p> Street Name: {{$order->account->streetname}} </p>
    <p> City: {{$order->account->city}} </p>
    <p> PostCode: {{$order->account->postcode}} </p>




    @endif
@endsection
