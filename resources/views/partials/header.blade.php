<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="{{ url('/')}}">
            Pickles Banking
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navBar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->is('balance*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/balance')}}">Balance</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item {{ (request()->is('services*')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/services')}}">Services</a>
                </li>
                <li class="nav-item {{ (request()->is('investments*')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/investments')}}">Investments</a>
                </li>
            </ul>
        </div>
    </nav>
</header>