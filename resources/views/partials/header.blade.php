<header class="d-flex justify-content-between align-items-center">
        <section class="logo">
            <a href="{{ route('pages.comics') }}"> <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=" dc logo"> </a>
        </section>
        <section class="nav ">
            <ul class="d-flex flex-row">
                <li>
                    <a href="">characters</a>
                </li>
                <li>
                    <a href=" {{ route('comics.index') }}">comics</a>
                </li>
                <li>
                    <a href=" {{ route('comics.create') }}">create comic</a>
                </li>
                <li>
                    <a href="">movies</a>
                </li>
                <li>
                    <a href="">tv</a>
                </li>
                <li>
                    <a href="">games</a>
                </li>
                <li>
                    <a href="">collectibles</a>
                </li>
                <li>
                    <a href="">videos</a>
                </li>
                <li>
                    <a href="">fans</a>
                </li>
                <li>
                    <a href="">news</a>
                </li>
                <li>
                    <a href="">shop</a>
                </li>
            </ul>
        </section>
    </header>