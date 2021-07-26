@extends('template.main')

@section('content')


<main id="main" class="site-main">

    <section class="site-section-small portfolio">

        <div class="container">
            <h1 class="section-title-big text-center">Portfolio</h1>
        </div>

        <div class="container-fluid">

            <div class="row" id="grid">
                @foreach ($dataProjets as $data)
                <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                    <a class="portfolio-link" href="#">
                        <img src="{{$data->image}}" alt="" class="img-carousel">
                        <div class="portfolio-info">
                            <div class="portfolio-info-top">
                                <h3>{{$data->titre}}</h3>
                            </div><!-- /.portfolio-info-top -->
                            <div class="portfolio-info-bottom">
                                <p>{{$data->description}}</p>
                            </div><!-- /.portfolio-info-bottom -->
                        </div><!-- /.portfolio-info  -->
                    </a>
                </div><!-- /.col-lg-fifth  -->
                @endforeach


            </div><!-- /#grid -->

        </div>

    </section><!-- /.portfolio -->

    <section class="site-section-small section-work-with-us yellow-bg text-center">

        <div class="container">

            <p class="section-title-small white-text mb-50">Coming together is a beginning, keeping together is progress, working together is success.</p>
            <a class="btn" href="#">Start Now</a>

        </div>

    </section><!-- /.section-work-with-us -->

    <section class="social-networks">

        <div class="container-fluid">

            <div class="row">

                <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>

            </div>

        </div>

    </section><!-- /.social-networks -->

</main><!-- /.site-main -->

@endsection