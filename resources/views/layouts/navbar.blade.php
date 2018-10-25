<!--<nav class="navbar sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="#">Sticky top</a>
</nav>-->

<nav id="maxi-navbar" class="navbar navbar-expand-sm" data-toggle="affix">
    <a class="navbar-brand row" href="#"><img class='logo' src='http://www.maxiskippers.pl/img/logotext.svg'/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        ☰
    </button>
    <div class="collapse navbar-collapse align-items-center" id="collapsingNavbar">

        <ul class="nav navbar-nav text-center ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Oferta
                </a>
                <div class="dropdown-menu" aria-labelledby="Preview">
                    <a class="dropdown-item" href="#charters">Czartery</a>
                    <a class="dropdown-item" href="#cruises">Rejsy</a>
                    <a class="dropdown-item" href="#service">Obsługa techniczna</a>
                    <a class="dropdown-item" href="#delivery">Dostawa</a>
                    <a class="dropdown-item" href="#courses">Szkolenia</a>
                    <a class="dropdown-item" href="#events">Imprezy integracyjne</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#realizationsSection">Realizacje</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#eventsSection">Wydarzenia</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#aboutus">O nas</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#contact">Kontakt</a>
            </li>
        </ul>
    </div>

</nav>
    <div id="language" class="row">
        <ul class="">
            <li><a href="{{ route('lang', ['lang' => 'pl']) }}">Polish</a></li>
            <li><a href="{{ route('lang', ['lang' => 'en']) }}">English</a></li>
        </ul>

    </div>