@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card text-center" style="width: 18rem;">

        <div class="card-body">

            <h5 class="card-title">{{$post->title}}</h5>
            @if ($post->category)

            <h6 class="card-title">{{$post->category->name}}</h6>

            @endif

            <p class="card-text">{{$post->contenet}}</p>

            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Go Back</a>

        </div>

    </div>

@endsection
