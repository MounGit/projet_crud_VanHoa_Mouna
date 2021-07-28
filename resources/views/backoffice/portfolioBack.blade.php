@extends('template.main')

@section('content')
<section class="back-port">
    <h1 class="titre-back">Back Office Porfolio</h1>
    <div class="divBtn">
        <button class="btn btn-warning" onclick="window.location.href = '/admin/backoffice/portfolio/create'">Ajouter un projet</button>

    </div>
    <h2 style="align-self:center">Projets présents sur le site</h2>
    <div class="portForeach">
        @foreach ($dataPort as $item)
        <div class="card " style="width: 20rem; margin: 3rem">
            <h3>Projet : {{$item->id}}</h3>
            <img src="/{{$item->image}}" class="card-img-top" style="width: 20rem;" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$item->titre}}</h4>
                <p class="card-text">{{$item->description}}</p>
                <form action="{{route('delete', $item->id)}}" method="post">
                    @csrf
                    <button class="btn btn-warning" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection