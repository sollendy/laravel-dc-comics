<footer id="stile-footer">
    <section class="sezioni sec-1">
        <div id="liste-link">
            <div class="links">
                <ul id="lista-cnt">
                    {{-- <li v-for="titoli in referenze">
                        <h4>{{ titoli.title }}</h4>
                        <ul>
                            <li v-for="pippo in titoli.link">
                                {{ pippo }}
                            </li>
                        </ul>
                    </li> --}}
                    <ul>
                        <li>
                            <h4>DC COMICS</h4>
                            <li>personaggi</li>
                            <li>fumetti</li>
                            <li>film</li>
                            <li>tv</li>
                            <li>giochi</li>
                            <li>video</li>
                            <li>notizie</li>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h4>DC</h4>
                            <li>Termini di Utilizzo</li>
                            <li>Accordo Riservatezza</li>
                            <li>Aggiungi scelta</li>
                            <li>Avvertenze</li>
                            <li>Impieghi</li>
                            <li>Iscrizioni</li>
                            <li>Laboratori Talenti</li>
                            <li>Certificati CPSC</li>
                            <li>Recensioni</li>
                            <li>Guida Acquisti</li>
                            <li>Contattaci</li>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h4>RISORSE</h4>
                            <li>DC</li>
                            <li>MAD magazine</li>
                            <li>DC & Ragazzi</li>
                            <li>Universo DC</li>
                            <li>DC Power Visa</li>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h4>NEGOZIO</h4>
                            <li>Negozio DC</li>
                            <li>Negozio DC Collezionabili</li>
                        </li>
                    </ul>
                    {{-- @foreach ($referenze as $refItem)
                        <ul>
                            <li>
                                <h4>{{$refItem["titolo"]}}</h4>
                                @foreach ($refItem["link"] as $item)
                                <li>{{$item}}</li>
 
                                @endforeach
                            </li>
                        </ul>
                    @endforeach --}}
                </ul>
            </div>
            <div id="img-foot-cnt">
                <img src="{{Vite::asset("resources/images/dc-logo-bg.png")}}" alt="logo">
            </div>
        </div>
    </section>
    <section class="sezioni sec-2">
        <nav id="last-nav">
            <div id="btn-cnt">
                <button>
                    registrati orah!
                </button>
            </div>
            <div id="social-links">
                {{-- <ul v-for="elemento in profili">
                    <h4>{{ elemento.title }}</h4>
                    <li><a href=""><img :src="elemento.profilo" alt=""></a></li>
                    <!-- <h1 v-for="titolo in profili">{{ titolo.title }}</h1>
                    <li v-for="social in profili">{{ social.profilo }}</li> -->
                </ul> --}}
            </div>
        </nav>
    </section>
</footer>