@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>

       @if($posts)
           @foreach($posts as $post)
               <tr>
                   <td>{{$post->id}}</td>
                   <td>{{$post->user->name}}</td>
                   <td>{{$post->category_id}}</td>
                   <td><img src="{{$post->photo? $post->photo->file: '/images/dz.jpg'}}" height="100px"></td>
                   <td>{{$post->title}}</td>
                   <td>{{$post->body}}</td>
                   <td>{{$post->created_at->diffforhumans()}}</td>
                   <td>{{$post->updated_at->diffforhumans()}}</td>
               </tr>
            @endforeach



       @endif
        </tbody>
    </table>



@stop