@extends('layout')
@section('title') Create @endsection
@section('content')
<div class="container col-md-4 mt-3 ">
    <a class="btn btn-outline-info" href="{{route('posts.index')}}">go back</a>
    <form class="mt-2" action="{{route('posts.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Car Name</label>
            <input type="text" class="form-control" name="car_name" placeholder="car name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Model</label>
            <input type="text" class="form-control" name="model" placeholder="model">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" placeholder="price">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Company Name</label>
            <input type="text" class="form-control" name="company_name" placeholder="Company Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
