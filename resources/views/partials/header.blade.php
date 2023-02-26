<header>
    <div class="row w-100 m-0 bg-primary section-padding text-white es_blueheader py-1">
        <p class="text-end mb-0">
            DC POWER&#8482; VISA&#174;
            <span class="ms-5">ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i> </span>
        </p>
    </div>

    <div class="row w-100 m-0 section-padding">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt="dc-logo"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                <a class="nav-link es_menu" href="#">CHARACTERS</a>
                </li>

                <li class="nav-item">
                <a class="nav-link es_menu {{ Route::currentRouteName() == 'comics' ? 'es_activemenu' : '' }}" href="{{ route('comics') }}">COMICS</a>
                </li>

                <li class="nav-item">
                <a class="nav-link es_menu" href="#">MOVIES</a>
                </li>

                <li class="nav-item">
                <a class="nav-link es_menu" href="#">TV</a>
                </li>

                <li class="nav-item">
                <a class="nav-link es_menu" href="#">GAMES</a>
                </li>

                <li class="nav-item">
                <a class="nav-link es_menu" href="#">COLLECTIBLES</a>
                </li>

                <li class="nav-item">
                <a class="nav-link es_menu" href="#">VIDEOS</a>
                </li>

                <li class="nav-item">
                <a class="nav-link es_menu" href="#">FANS</a>
                </li>

                <li class="nav-item">
                <a class="nav-link es_menu" href="#">NEWS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle es_menu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SHOP
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">SHOP 1</a></li>
                        <li><a class="dropdown-item" href="#">SHOP 2</a></li>
                        <li><a class="dropdown-item" href="#">SHOP 3</a></li>
                    </ul>
                </li>

            </ul>

            <form class="d-flex" role="search">
                <div class="input-group">
                    <input type="text" class="form-control border-secondary border-top-0 border-start-0 rounded-0" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>

            </div>
        </div>
        </nav>
    </div>
  </header>