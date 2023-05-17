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
                {{-- i :: si mettono dopo una classe e mai per richiamare una route --}}
                <a href="{{ route('comics.index') }}">MOSTRA FUMETTI</a>
            </div>
        </div>
        <div id="barra-celeste">
            <ul>
                {{-- <img src="" alt="immagine test"> --}}
                <li>
                    <div>
                        <img src="resources/images/buy-comics-digital-comics.png" alt="">
                    </div>
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <div>
                        <img src="resources/images/buy-comics-merchandise.png" alt="">
                    </div>
                    <span>DC MERCHANDISE</span>
                </li>
                <li>
                    <div>
                        <img src="resources/images/buy-comics-shop-locator.png" alt="">
                    </div>
                    <span>SUBSCRIPTION</span>
                </li>
                <li>
                    <div>
                        <img src="resources/images/buy-comics-subscriptions.png" alt="">
                    </div>
                    <span>COMIC SHOP LOCATOR</span>
                </li>
                <li>
                    <div>
                        <img src="resources/images/buy-dc-power-visa.svg" alt="">
                    </div>
                    <span>DC POWER VISA</span>
                </li>
                {{-- @foreach ($shopPics as $shopItem)
                <li>
                    <div>
                        <img src="{{ Vite::asset($shopItem["img"]) }}" alt="shop-pics">
                    </div>
                    <span>{{$shopItem["testo"]}}</span>
                </li>
                @endforeach --}}
            </ul>
        </div>
    </main>
@endsection