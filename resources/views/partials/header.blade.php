<header id="stile-head">
    <div class="head-cnt">
        <nav>
            <div class="nav-img">
                <img class="logo" src="{{Vite::asset("resources/images/dc-logo.png")}}" alt="dc-logo">
            </div>
            <ul id="lista-nav">
                @foreach ($headLinks as $link)
                    <li>{{$link}}</li>
                @endforeach
            </ul>
        </nav>
        <div id="jumbo-cnt">
            
        </div>
    </div>
</header>