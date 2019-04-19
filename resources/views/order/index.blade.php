@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Orders</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  <h3> Your Placed Orders</h3>
                  
                    @foreach($order as $order)
                        <table class="table table-striped">
                     <tr>

                         <th><a href="/canalsidebuilders/public/orders/{{$order->id}}">Placed On {{$order->created_at}}</a></th>


                    </tr>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
