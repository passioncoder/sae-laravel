<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="/">sae-laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbar">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/passioncoder/sae-laravel" target="_blank"><i class="fa fa-github"></i> GitHub</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://laravel.com/docs/8.x" target="_blank"><i class="fa fa-modx"></i> Laravel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://vuejs.org/v2/guide/" target="_blank"><i class="fa fa-modx"></i> Vue.js</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://github.com/laravel/framework" target="_blank">Read the code</a>
                    <a class="dropdown-item" href="https://laracasts.com" target="_blank">Watch Laracasts</a>
                    <a class="dropdown-item" href="https://packagist.org" target="_blank">Find 3rd-party packages</a>
                    <a class="dropdown-item" href="http://stackoverflow.com/questions/tagged/laravel" target="_blank">Ask your questions</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('postings.index') }}"><i class="fa fa-table"></i> Postings</a>
            </li>
        </ul>

    </div>

</nav>
