@extends('template.main')

@section('content')

<section class="back-home d-flex flex-row m-5">
    <h1 class="titre-back">Back Office Home</h1>

    <div>
        <div class="border border-dark">
            <h3>Ajoutez ou supprimez des éléments</h3>
            <h3> dans le <i>blog</i></h3>
            <button onclick="window.location.href = '/admin/backoffice/blog'">Click</button>
        </div>

        <div class="border border-dark ">
            <h3>Ajoutez ou supprimez des éléments</h3>
            <h3>dans le <i>portfolio</i></h3>
            <button onclick="window.location.href = '/admin/backoffice/portfolio'">Click</button>
        </div>
    </div>

</section>

@endsection