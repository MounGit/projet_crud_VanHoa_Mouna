@extends('template.main')


@section('content')
<section class="back-port d-flex justify-content-center">
<div class="portForeach">

        <div class="card " style="width: 40rem; margin: 3rem">
            <h3>Article : {{$blog->id}}</h3>
            <img src="/{{$blog->image}}" class="card-img-top" style="width: 40rem;" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$blog->titre}}</h4>
                <p class="card-text">{{$blog->description}}</p>
                <div class="div-btn ">
                    <a href="{{route('editB', $blog->id)}}" class="btn btn-warning">EDIT</a>
                    <form action="{{route('delete', $blog->id)}}" method="post">
                        @csrf
                        <button class="btn btn-warning" type="submit">DELETE</button>
                    </form>
                    
                </div>

            </div>
        </div>
</section>
@endsection