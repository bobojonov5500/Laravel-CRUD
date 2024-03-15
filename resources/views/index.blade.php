@extends('layout')
@section('content')

<a class="btn btn-info m-3" href="{{route('posts.create')}}">Create new data</a>
<table class="table container">
    <thead>
    <tr>
        <th scope="col">id:</th>
        <th scope="col">Company Name</th>
        <th scope="col">Car Name</th>
        <th scope="col">Model</th>
        <th scope="col">Price</th>
        <th scope="col">Created Time</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <th scope="row">{{$post->id}}</th>
        <td><a href="{{route('posts.show',$post->id)}}">{{$post->company_name}}</a> </td>
        <td>{{$post->car_name}}</td>
        <td>{{$post->model}}</td>
        <td>{{$post->price}}</td>
        <td>{{$post->created_at->format(' d M g:i A')}}</td>


        <td class="d-flex">
            <form action="{{route("posts.destroy",$post->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success ml-2">Edit</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection
