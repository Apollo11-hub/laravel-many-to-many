@extends('layouts.app')

@section('content')
<div class="container">

    @if(session('prodotto_cancellato'))
        <div class="alert alert-success" role="alert">
            {{ session('prodotto_cancellato') }}
        </div>
    @endif

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tags</th>
                <th class="" scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )

                <tr>
                    <th scope="row">{{$post->id}}</th>

                    <td class="text-capitalize">{{$post->title}}</td>

                    <td>{{$post->category ? $post->category->name : 'Not Avaible At Moment'}}</td>

                    <td>


                        @forelse ($post->tags as $tag)
                        <span class="badge rounded-pill text-dark bg-light p-2">{{$tag->tag_name}}</span>
                        @empty
                            <p>-</p>
                        @endforelse

                    </td>

                    <td class="d-flex">
                        <a type="button" class="btn btn-primary " href="{{route('admin.posts.show', $post)}}">SHOW</a>
                        <a type="button" class="btn btn-success mx-2" href="{{route('admin.posts.edit', $post)}}">EDIT</a>
                        <form
                            onsubmit="return confirm('confermi l\'eliminazione di: {{ $post->title }}?')"
                        action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" >DELETE</button>
                        </form>
                    </td>

                </tr>

            @endforeach
        </tbody>
    </table>

    {{$posts->links()}}

    <div class="container">
        <h2>Elenco Post </h2>
        @foreach ($categories as $category)
            <h3>{{$category->name}}</h3>
                <ul>
                    @forelse ($category->posts as $post)
                        <li><a class="text-capitalize" href="{{route('admin.posts.show', $post)}} ">{{$post->title}}</a></li>
                    @empty
                        <li>Non ci sono post in questa categoria</li>
                    @endforelse
                </ul>
        @endforeach

    </div>


</div>
@endsection
