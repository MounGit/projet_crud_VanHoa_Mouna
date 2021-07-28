<header id="masthead" class="site-header site-header-fill">

    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">

                <a href="{{route('home')}}" class="site-title yellow-text">{{ env('APP_NAME') }}</a>

            </div><!-- /.navbar-header -->

            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('home')}}">Home</a></li>
                    <li class="active">
                        <a href="{{route('blog')}}">Blog </a>
                    </li>
                    <li>
                        <a href="{{route('portfolio')}}">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact</a>
                    </li>
                    <!-- <li>
                        <a href="{{route('backH')}}">BackOffice</a>
                    </li> -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            BackOffice
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-center" href="{{route('backH')}}">-Home-</a></li>
                            <li><a class="dropdown-item text-center" href="{{route('backB')}}">-Blog-</a></li>
                            <li><a class="dropdown-item text-center" href="{{route('backP')}}">-Portfolio-</a></li>
                            
                        </ul>
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->

        </div>

    </nav><!-- /.site-navigation -->

</header><!-- /#masthead -->