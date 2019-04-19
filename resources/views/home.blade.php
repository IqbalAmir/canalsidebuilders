@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reviews</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  <a href="/canalsidebuilders/public/posts/create" class="btn btn-primary">Create Review</a>
                  <h3> Your Reviews </h3>
                  <table class="table table-striped">
                    <tr>
                       <th>Title</th>
                       <th></th>
                       <th></th>
                    </tr>
                    @foreach($posts as $post)
                     <tr>
                         <td>{{$post->title}}</td>
                         <td><a href="/canalsidebuilders/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                         <td>  {!!Form::open(['action' => ['PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
                           {!!Form::close()!!}</td>
                    </tr>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
