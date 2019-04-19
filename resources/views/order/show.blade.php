@extends('layouts.app')

@section('content')

   @if(Auth::user()->id == $order->user_id)
      <h1>Order Infromation</h1>
      <a href="/canalsidebuilders/public/orders" class="btn btn-default">Go Back</a>





     <div>
    <p> Service Required: {{$order->service->service}}</p>
    <p> Issue: {{$order->issue}}</p>

    <h2>Adress Details</h2>
    <p> House Number: {{$order->account->housenumber}} </p>
    <p> Street Name: {{$order->account->streetname}} </p>
    <p> City: {{$order->account->city}} </p>
    <p> PostCode: {{$order->account->postcode}} </p>




    @endif
@endsection
