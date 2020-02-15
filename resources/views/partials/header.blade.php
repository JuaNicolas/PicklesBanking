<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">

            <a class="navbar-brand" href="{{ url('/')}}">
                Pickles Banking
            </a>

            <ul class="navbar-nav mr-auto">

                <li class="nav-item {{ (request()->is('balance*')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/balance')}}">Balance</a>
                </li>

                <li class="nav-item {{ (request()->is('services*')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/services')}}">Services</a>
                </li>

                <li class="nav-item {{ (request()->is('investments*')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('dashboard/investments')}}">Investments</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard/logout')}}">Log Out</a>
                </li>

            </ul>
        </div>
    </nav>
</header>