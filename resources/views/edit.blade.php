@extends('layout')
@section('title') Edit @endsection
@section('content')
    <div class="container col-md-4">
        <form action="{{route('posts.update',$post->id)}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Car Name</label>
                <input type="text" value="{{$post->car_name}}" class="form-control" name="car_name" placeholder="car name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Model</label>
                <input type="text" value="{{$post->model}}" class="form-control" name="model" placeholder="model">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="number" value="{{$post->price}}" class="form-control"  name="price" placeholder="price">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Company Name</label>
                <input type="text" value="{{$post->company_name}}" class="form-control" name="company_name" placeholder="Company Name">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


@endsection
