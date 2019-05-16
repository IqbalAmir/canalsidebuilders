@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Account</div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif



                    <h3> Your Details</h3>
                    <table class="table table-striped">
                      <tr>


                           @foreach ($accounts as $account)
                             <div class="well">
                               <h3><a href="/canalsidebuilders/public/accounts/{{$account->id}}">Personal Details</a></h3>
                               </div>
                           @endforeach
                           {{$accounts->links()}}

                       @endsection




                         </tr>
                     </div>
                 </div>
             </div>
         </div>
     </div>
