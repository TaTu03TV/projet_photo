<!doctype html>
<html lang="fr">
<head>
    <title>Studio Photographie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/monStyle.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body class="body">
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <img src="https://media.istockphoto.com/id/1255610084/fr/photo/champ-de-lavande-sans-fin-en-provence-france.webp?s=2048x2048&w=is&k=20&c=nvJDnwj0aFGsncuv7SXpPhZMyGll1IEsIu6L8vCeBB0=" class="img-fluid banner" alt="banner">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#navbar-collapse-target">
                        <span class="sr-only">Toggle navigation</span> <span class="iconbar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar+ bvn"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}" style="margin-right: 2rem;">
                        <i class="bi bi-house-door-fill"></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-target">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('photographers') }}">
                                <i class="bi bi-camera-reels-fill"></i> Photographes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('clients') }}">
                                <i class="bi bi-people-fill"></i> Clients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('sessions') }}">
                                <i class="bi bi-calendar-event-fill"></i> Séances
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contacts') }}">
                                <i class="bi bi-envelope-fill"></i> Contacts
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--/.container-fluid -->
        </nav>
    </div>
</div>
    <div class="container general">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 Photographie Studio. All rights reserved.</span>
        </div>
    </footer>
    {!! Html::script('assets/js/bootstrap.bundle.min.js') !!}
    {!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>
