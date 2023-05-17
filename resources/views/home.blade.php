@extends('layouts/main-page')
@section('content')
    <main id="stile-main">
        <div id="corpo-pagina">
            <div class="banner-serie">
                SERIE IN CORSO
            </div>
            {{-- <div id="comic-cont">
                @foreach ($fumetti as $albo)
                <div class="albi text-center text-uppercase">
                    <img src="{{$albo["thumb"]}}" alt="copertina"><br>
                    {{$albo["title"]}}
                </div>
            @endforeach             --}}
        </div>
            <div class="mostra">
                <a href="{{route::('comics.index')}}">MOSTRA FUMETTI</a>
            </div>
        </div>
        <div id="barra-celeste">
            <ul>
                {{-- <img src="" alt="immagine test"> --}}
                @foreach ($shopPics as $shopItem)
                <li>
                    <div>
                        <img src="{{ Vite::asset($shopItem["img"]) }}" alt="shop-pics">
                    </div>
                    <span>{{$shopItem["testo"]}}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection