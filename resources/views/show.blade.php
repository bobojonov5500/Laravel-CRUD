
@extends('layout')
@section('content')
<ul>
    <li>{{$post->car_name}}</li>
    <li>{{$post->model}}</li>
    <li>{{$post->price}}</li>
    <li>{{$post->company_name}}</li>
</ul>
@endsection
