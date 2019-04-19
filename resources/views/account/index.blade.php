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

                    <a href="/canalsidebuilders/public/accounts/create" class="btn btn-primary">Insert Personal Information</a>

                    <h3> Your Details</h3>
                    <table class="table table-striped">
                      <tr>

                         @if(count($accounts) > 0)
                           @foreach ($accounts as $account)
                             <div class="well">
                               <h3><a href="/canalsidebuilders/public/accounts/{{$account->id}}">Personal Information</a></h3>
                               </div>
                           @endforeach
                           {{$accounts->links()}}
                         @else
                           <p>No details found</p>
                         @endif
                       @endsection
                         </tr>
                     </div>
                 </div>
             </div>
         </div>
     </div>
