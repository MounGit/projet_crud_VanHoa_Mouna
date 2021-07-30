@extends('template.main')

@section('content')
<section class="back-port">
    <h1 class="titre-back">Back Office Blog</h1>
    <div class="divBtn">
        <button class="btn btn-warning" onclick="window.location.href = '/admin/backoffice/blog/create'">Ajouter un article</button>

    </div>
    <h2 style="align-self:center">Articles présents sur le site</h2>
    <div class="portForeach">
        @foreach ($dataBlog as $item)
        <div class="card " style="width: 25rem; margin: 3rem">
            <h3>Article : {{$item->id}}</h3>
            <img src="{{asset('assets/img/'.$item->image)}}" class="card-img-top" style="width: 25rem;" alt="...">
            <div class="card-body">
                <h4 class="card-title"> {{$item->titre}}</h4>
                <p class="card-text">{{$item->description}}</p>

                <a href="{{route('showB', $item->id)}}" class="btn btn-warning">SHOW</a>
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