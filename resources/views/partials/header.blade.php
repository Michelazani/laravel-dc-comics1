<header class="d-flex justify-content-between align-items-center">
        <section class="logo">
            <a href="{{ route('pages.comics') }}"> <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=" dc logo"> </a>
        </section>
        <section class="nav ">
            <ul class="d-flex flex-row">
                <li>
                    <a href="{{ route('pages.comics') }}">characters</a>
                </li>
                <li>
                    <a href=" {{ route('comics.index') }}">comics</a>
                </li>
                <li>
                    <a href=" {{ route('comics.create') }}">create comic</a>
                </li>
                <li>
                    <a href="{{ route('pages.comics') }}">movies</a>
                </li>
                <li>
                    <a href="{{ route('pages.comics') }}">tv</a>
                </li>
                <li>
                    <a href="{{ route('pages.comics') }}">games</a>
                </li>
                <li>
                    <a href="{{ route('pages.comics') }}">collectibles</a>
                </li>
                <li>
                    <a href="{{ route('pages.comics') }}">videos</a>
                </li>
                <li>
                    <a href="{{ route('pages.comics') }}">fans</a>
                </li>
                <li>
                    <a href="{{ route('pages.comics') }}">news</a>
                </li>
                <li>
                    <a href="{{ route('pages.comics') }}">shop</a>
                </li>
            </ul>
        </section>
    </header>