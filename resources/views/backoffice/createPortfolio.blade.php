@extends('template.main')

@section('content')
<section class="back-port-form">
    <h1>Back Office Portfolio</h1>
    <h3 class="container">Ajoutez un élément à votre portfolio : </h3>
    <form class="container" action="/portfolio/change" method="post">
        @csrf
        <label for="image">Url de l'image :</label>
        <input type="text" name="image" id="">
        <label for="titre">Titre : </label>
        <input type="text" name="titre" id="">
        <label for="description">Description : </label>
        <input type="text" name="description" id="">
        <button type="submit">Modifier</button>
    </form>
</section>

@endsection