@extends('template.main')

@section('content')
<section class="back-port">
    <h1 class="titre-back">Back Office Blog</h1>
    <div class="divBtn">
        <button class="btn btn-warning" onclick="window.location.href = '/admin/backoffice/blog/create'">Ajouter un article</button>

    </div>
    <div class="portForeach">
        @foreach ($dataBlog as $item)
        <div class="card " style="width: 25rem; margin: 3rem">
            <h3>Article : {{$item->id}}</h3>
            <img src="/{{$item->image}}" class="card-img-top" style="width: 25rem;" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item->titre}}</h5>
                <p class="card-text">{{$item->description}}</p>
                <form action="{{route('deleteBlog', $item->id)}}" method="post">
                    @csrf
                    <button class="btn btn-warning" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection