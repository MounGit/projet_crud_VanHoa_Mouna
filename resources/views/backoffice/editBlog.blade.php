@extends('template.main')


@section('content')

<section class="back-port-form">
    <h1>Back Office Blog</h1>
    <h3 class="container">Modifiez le contenu de votre article: </h3>
    <form class="container" action="{{route('updateB', $blog->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="image">Url de l'image :</label>
        <input value="{{$blog->image}}" type="text" name="image" id="">
        <label for="titre">Titre : </label>
        <input value="{{$blog->titre}}" type="text" name="titre" id="">
        <label for="description">Description : </label>
        <input value="{{$blog->description}}" type="text" name="description" id="">
        <button type="submit">Modifier</button>
    </form>
</section>


@endsection