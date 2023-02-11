<div>

</div>

<div class="section grey wf-section">
    <div class="grid-wrapper">
        <div id="w-node-_3b314a32-881d-0f24-fb27-38bb23725289-130983d2" class="footer-wrapper">
            <div id="w-node-b3bfbd67-73c8-a40c-2042-d4cf328b2203-130983d2"
                class="verticle-line extra-dark hide-on-mobile">
            </div>
            <div id="w-node-_1acbf4fd-2363-166f-f79d-8cf873f05ee2-130983d2"
                class="verticle-line extra-dark hide-on-mobile">
            </div>
            <div id="w-node-_33d098a1-5528-8621-8092-c774b55ed008-130983d2" class="footer-left">
                <div class="stacked-description large">
                    <div class="brand large dark">
                        <div>Lantana</div>
                    </div>
                    <div class="body-display small">Nos dedicamos a la construcción de obras de infraestructura civil,
                        estamos comprometidos con la satisfacción total del cliente y la mejora continua de la empresa.
                    </div>
                </div>
                <div id="w-node-_0a9254d9-1c51-592d-370c-8692c35b8253-130983d2" class="lesson-icon-wrapper">
                    <a data-w-id="0a9254d9-1c51-592d-370c-8692c35b8263" href="https://twitter.com/Tycreated"
                        target="_blank" class="tool-tip w-inline-block">
                        <div class="solid-video-button-outline extra-dark"><img src="{{ asset('img/twitter.svg') }}"
                                loading="lazy" alt="" class="icon-image">
                            <div class="slider-arrow-wrapper"></div>
                            <div class="video-button-outline extra-small">
                                <div id="w-node-_0a9254d9-1c51-592d-370c-8692c35b8268-130983d2"
                                    class="video-outline-wrapper top">
                                    <div class="video-outline extra-small extra-dark"></div>
                                </div>
                                <div id="w-node-_0a9254d9-1c51-592d-370c-8692c35b826a-130983d2"
                                    class="video-outline-wrapper bottom">
                                    <div class="video-outline bottom extra-small extra-dark"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a data-w-id="a6955fed-8828-635b-2fb6-c8562d1e152a" href="https://www.instagram.com/tycreated/"
                        target="_blank" class="tool-tip w-inline-block">
                        <div class="solid-video-button-outline extra-dark"><img
                                src="{{ asset('img/instagram-logo.svg') }}" loading="lazy" alt=""
                                class="icon-image">
                            <div class="slider-arrow-wrapper"></div>
                            <div class="video-button-outline extra-small">
                                <div id="w-node-a6955fed-8828-635b-2fb6-c8562d1e152f-130983d2"
                                    class="video-outline-wrapper top">
                                    <div class="video-outline extra-small extra-dark"></div>
                                </div>
                                <div id="w-node-a6955fed-8828-635b-2fb6-c8562d1e1531-130983d2"
                                    class="video-outline-wrapper bottom">
                                    <div class="video-outline bottom extra-small extra-dark"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a data-w-id="7b14c4d3-ec51-53da-d60a-8a30997f4077" href="https://twitter.com/Tycreated"
                        target="_blank" class="tool-tip w-inline-block">
                        <div class="solid-video-button-outline extra-dark"><img
                                src="{{ asset('img/iosyoutube-play-button.svg') }}" loading="lazy" alt=""
                                class="icon-image">
                            <div class="slider-arrow-wrapper"></div>
                            <div class="video-button-outline extra-small">
                                <div id="w-node-_7b14c4d3-ec51-53da-d60a-8a30997f407c-130983d2"
                                    class="video-outline-wrapper top">
                                    <div class="video-outline extra-small extra-dark"></div>
                                </div>
                                <div id="w-node-_7b14c4d3-ec51-53da-d60a-8a30997f407e-130983d2"
                                    class="video-outline-wrapper bottom">
                                    <div class="video-outline bottom extra-small extra-dark"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="stacked-intro">
                <div class="subtitle large">Páginas</div>
                <div id="w-node-_50e2a46f-5201-3825-251a-957aa0496640-130983d2" class="footer-list">
                    <a href="{{ route('index') }}" class="footer-list-item w-inline-block">
                        <div>Inicio</div>
                        <div class="hover-line">
                            <div class="hover-line-fill"></div>
                        </div>
                        <div class="arrow-icon-wrapper"><img src="images/arrow-right-final24x242x.svg" loading="lazy"
                                alt="" class="invert-small"></div>
                    </a>
                    <a href="{{ route('about') }}" class="footer-list-item w-inline-block">
                        <div>Sobre Nosotros</div>
                        <div class="hover-line">
                            <div class="hover-line-fill"></div>
                        </div>
                        <div class="arrow-icon-wrapper"><img src="images/arrow-right-final24x242x.svg" loading="lazy"
                                alt="" class="invert-small"></div>
                    </a>
                    <a href="{{ route('allProjects') }}" class="footer-list-item w-inline-block">
                        <div>Proyectos</div>
                        <div class="hover-line">
                            <div class="hover-line-fill"></div>
                        </div>
                        <div class="arrow-icon-wrapper"><img src="images/arrow-right-final24x242x.svg" loading="lazy"
                                alt="" class="invert-small"></div>
                    </a>

                    @php
                        $today = Carbon\Carbon::now()->format('Y-m-d');
                        
                        $posts = App\Models\Post::where('is_publish', 1)
                            ->where('publish_date', '<=', $today)
                            ->get();
                    @endphp

                    @if ($posts->count() != 0)
                        <a href="{{ route('allPost') }}" class="footer-list-item w-inline-block">
                            <div>Blog</div>
                            <div class="hover-line">
                                <div class="hover-line-fill"></div>
                            </div>
                            <div class="arrow-icon-wrapper"><img src="images/arrow-right-final24x242x.svg"
                                    loading="lazy" alt="" class="invert-small"></div>
                        </a>
                    @endif
                </div>
            </div>
            <div class="stacked-intro">
                <div class="subtitle large">Legales</div>
                <div id="w-node-_4fd79b1b-32cf-17a2-8994-ca3816d638ae-130983d2" class="footer-list">

                    @php
                        $legales = App\Models\LegalText::orderBy('priority', 'asc')
                            ->orderBy('created_at', 'asc')
                            ->get();
                    @endphp

                    @foreach ($legales as $legal)
                        <a href="{{ route('legal.text', $legal->slug) }}" class="footer-list-item w-inline-block">
                            <div>{{ $legal->title }}</div>
                            <div class="hover-line">
                                <div class="hover-line-fill"></div>
                            </div>
                            <div class="arrow-icon-wrapper"><img src="images/arrow-right-final24x242x.svg"
                                    loading="lazy" alt="" class="invert-small"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
