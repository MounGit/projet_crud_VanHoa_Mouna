@extends('template.main')


@section('content')

<section class="back-port-form">
    <h1>Back Office Portfolio</h1>
    <h3 class="container">Modifiez le contenu de votre projet : </h3>
    <form class="container" action="{{route('update', $projet->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="image">Url de l'image :</label>
        <input value="{{$projet->image}}" type="text" name="image" id="">
        <label for="titre">Titre : </label>
        <input value="{{$projet->titre}}" type="text" name="titre" id="">
        <label for="description">Description : </label>
        <input value="{{$projet->description}}" type="text" name="description" id="">
        <button type="submit">Modifier</button>
    </form>
</section>


@endsection