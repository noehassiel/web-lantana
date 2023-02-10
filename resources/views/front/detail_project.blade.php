@extends('front.layouts.main')

@section('content')
    <div>
        <div class="hero-section wf-section">
            <div class="grid-wrapper hero">
                <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb3e-6ae74b09" class="page-intro bottom">
                    <a href="javascript: history.go(-1)" id="w-node-e0145b70-3e26-b00f-41e9-cab3ae3dfa19-6ae74b09"
                        data-w-id="e0145b70-3e26-b00f-41e9-cab3ae3dfa19"
                        class="outline-button light hero-button w-inline-block">
                        <div id="w-node-e0145b70-3e26-b00f-41e9-cab3ae3dfa1a-6ae74b09" class="button-text">Volver</div>
                        <div id="w-node-e0145b70-3e26-b00f-41e9-cab3ae3dfa1c-6ae74b09" class="button-hover-outline left">
                            <div class="solid-button-outline light"></div>
                        </div>
                        <div id="w-node-e0145b70-3e26-b00f-41e9-cab3ae3dfa1e-6ae74b09" class="button-hover-outline right">
                            <div class="solid-button-outline right light"></div>
                        </div>
                        <div id="w-node-e0145b70-3e26-b00f-41e9-cab3ae3dfa20-6ae74b09" class="button-hover-outline middle">
                            <div class="solid-button-outline middle light"></div>
                        </div>
                    </a>
                    <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb42-6ae74b09" class="breadcrumbs">
                    </div>
                    <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb4e-6ae74b09" class="hero-intro">
                        <div class="hero-intro-title">
                            <div class="subtitle-intro">
                                <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb51-6ae74b09" class="subtitle-line left">
                                    <div class="solid-subtitle-line"></div>
                                </div>
                                <div class="subtitle light">{{ $project->company }}</div>
                                <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb55-6ae74b09" class="subtitle-line">
                                    <div class="solid-subtitle-line"></div>
                                </div>
                            </div>
                            <h1 class="xxl-heading">{{ $project->name }}</h1>
                            <p style="margin-bottom: 0; line-height:0;">{{ $project->subtitle }}</p>
                        </div>
                        <div id="w-node-_795f3e77-169a-6507-2849-968bf4ebe4e3-f4ebe4e3"
                            data-w-id="795f3e77-169a-6507-2849-968bf4ebe4e3" class="video-button-wrapper">
                            <a href="#read" data-w-id="795f3e77-169a-6507-2849-968bf4ebe4e4" class="video-button">
                                <div class="video-button-fill"><img src="{{ asset('img/book-outline.svg') }}" loading="lazy"
                                        alt="" class="video-icon"></div>
                                <div class="solid-video-button-outline">
                                    <div class="video-button-outline">
                                        <div id="w-node-_795f3e77-169a-6507-2849-968bf4ebe4e9-f4ebe4e3"
                                            class="video-outline-wrapper top">
                                            <div class="video-outline"></div>
                                        </div>
                                        <div id="w-node-_795f3e77-169a-6507-2849-968bf4ebe4eb-f4ebe4e3"
                                            class="video-outline-wrapper bottom">
                                            <div class="video-outline bottom"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="left-corner bottom">
                        <div class="corner-fill bottom"></div>
                        <div class="corner-fill horizontal bottom"></div>
                    </div>
                    <div class="left-corner bottom-right">
                        <div class="corner-fill bottom-right"></div>
                        <div class="corner-fill horizontal bottom-right"></div>
                    </div>
                </div>
            </div>
            <div class="overlay gradient dark"></div>
            <div class="video-bottom">
                <div class="video-meta">
                    <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb66-6ae74b09" class="video-plus">
                        <div class="plus-line"></div>
                        <div class="plus-line verticle"></div>
                    </div>
                </div>
                <div class="verticle-line"></div>
            </div>
            <div class="hero-slide-background one"
                style="background-image: url({{ asset('img/projects/' . $project->main_picture) }})">
            </div>
        </div>
        {{-- 
        <div class="section grey no-padding wf-section">
            <div class="grid-wrapper">
                <div id="learn" class="section-box w-node-ab8accf3-32e4-7ff6-5205-75510161bb73-6ae74b09">
                    <div class="dual-row">
                        <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb75-6ae74b09" class="stacked-soon">
                            <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb76-6ae74b09" class="checklist-intro">
                                <div class="stacked-intro">
                                    <div class="stacked-heading">
                                        <div class="left-intro">
                                            <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb7a-6ae74b09"
                                                class="subtitle-line dark left">
                                                <div class="solid-subtitle-line dark"></div>
                                            </div>
                                            <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb7c-6ae74b09"
                                                class="subtitle">course result</div>
                                        </div>
                                        <div class="left-intro">
                                            <h1 id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb7f-6ae74b09">Your final
                                                project</h1>
                                        </div>
                                    </div>
                                    <div class="body-display">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Phasellus quis turpis et enim eleifend iaculis vitae ut nisl. Pellentesque mattis
                                        sapien id mauris volutpat volutpat.</div>
                                </div>
                                <div class="checklist">
                                    <div class="checklist-item">
                                        <div class="list-icon"><img src="images/check24x242x.svg" loading="lazy"
                                                alt=""></div>
                                        <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb86-6ae74b09"
                                            class="body-display small">Phasellus quis turpis et enim eleifend</div>
                                    </div>
                                    <div class="checklist-item">
                                        <div class="list-icon"><img src="images/check24x242x.svg" loading="lazy"
                                                alt=""></div>
                                        <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb8a-6ae74b09"
                                            class="body-display small">Phasellus quis turpis et enim eleifend</div>
                                    </div>
                                    <div class="checklist-item">
                                        <div class="list-icon"><img src="images/check24x242x.svg" loading="lazy"
                                                alt=""></div>
                                        <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb8e-6ae74b09"
                                            class="body-display small">Phasellus quis turpis et enim eleifend</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" id="w-node-f159d7b7-9dd8-d3e8-1ded-333b767e48f6-6ae74b09"
                                class="outline-button w-inline-block">
                                <div id="w-node-f159d7b7-9dd8-d3e8-1ded-333b767e48f7-6ae74b09" class="button-text">Start
                                    lesson one</div>
                                <div id="w-node-f159d7b7-9dd8-d3e8-1ded-333b767e48f9-6ae74b09"
                                    class="button-hover-outline left">
                                    <div class="solid-button-outline"></div>
                                </div>
                                <div id="w-node-f159d7b7-9dd8-d3e8-1ded-333b767e48fb-6ae74b09"
                                    class="button-hover-outline right">
                                    <div class="solid-button-outline right"></div>
                                </div>
                                <div id="w-node-f159d7b7-9dd8-d3e8-1ded-333b767e48fd-6ae74b09"
                                    class="button-hover-outline middle">
                                    <div class="solid-button-outline middle"></div>
                                </div>
                            </a>
                        </div>
                        <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb93-6ae74b09" class="right-image">
                            <div class="testimonial-strip-wrapper tilted">
                                <div class="testimonial-background large">
                                    <div class="testimonial-image-strip one">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip two">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip three">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip four">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                </div>
                                <div class="testimonial-background large">
                                    <div class="testimonial-image-strip one">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip two">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip three">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip four">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                </div>
                                <div class="testimonial-background large">
                                    <div class="testimonial-image-strip one">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip two">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip three">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                    <div class="testimonial-image-strip four">
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                        <div class="looping-screen small"><img src="images/Rythm-comp.jpg" loading="lazy"
                                                sizes="100vw" alt="" class="looping-image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb94-6ae74b09" class="fill"></div>
            </div>
        </div>
         --}}
        <div class="section grey wf-section" id="read">
            <div class="grid-wrapper">
                <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb97-6ae74b09" class="lessons-wrapper">
                    <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb98-6ae74b09" class="stacked-heading centered">
                        <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb99-6ae74b09" class="left-intro"
                            style="justify-self: flex-start;">
                            <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb9a-6ae74b09" class="subtitle-line dark left">
                                <div class="solid-subtitle-line dark"></div>
                            </div>
                            <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb9c-6ae74b09" class="subtitle">Detalles del
                                Proyecto
                            </div>
                            <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bb9e-6ae74b09" class="subtitle-line dark right">
                                <div class="solid-subtitle-line dark"></div>
                            </div>
                        </div>
                        <div style="text-align: left; margin: 0px 10px;">
                            {!! $project->body !!}
                        </div>
                    </div>


                    <!--Posible lo puedo usar-->
                    {{-- 
                    <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bba3-6ae74b09" class="outline-box">
                        <div class="outline-box-title">
                            <div class="subtitle">Lessons</div>
                        </div>
                        <div class="lessons-list-wrapper">
                            <div id="scrollbar" class="lessons-base">
                                <div class="w-dyn-list">
                                    <div role="list" class="lessons-scroll w-dyn-items">
                                        <div data-w-id="e418b0c5-14b2-dd43-1beb-e7940d7a1cc5" role="listitem"
                                            class="collection-item w-dyn-item">
                                            <div class="menu-hover-background light"></div>
                                            <a href="#" class="lesson-list-item w-inline-block">
                                                <div id="w-node-b17e7d80-639f-ace4-d6fd-8520d451acc3-6ae74b09"
                                                    class="lesson-list-info">
                                                    <div id="w-node-b17e7d80-639f-ace4-d6fd-8520d451acc4-6ae74b09"
                                                        class="play-image-wrapper">
                                                        <div class="subtitle"></div>
                                                        <div id="w-node-d3e2e694-80c2-06b3-2a26-f42f25079e0e-6ae74b09"
                                                            class="lesson-card-image">
                                                            <div class="background"></div>
                                                        </div>
                                                    </div>
                                                    <div id="w-node-b17e7d80-639f-ace4-d6fd-8520d451acc8-6ae74b09"
                                                        class="stacked-small">
                                                        <h3 class="card-title small"></h3>
                                                        <div class="subtitle">Intermediate</div>
                                                    </div>
                                                </div>
                                                <div id="w-node-_455f335a-5db2-74f5-0463-7b279139a2d4-6ae74b09"
                                                    class="list-item-right"><img src="images/arrow-right24x242x.svg"
                                                        loading="lazy" data-w-id="74681bdb-3d10-425d-4299-c508659894be"
                                                        alt="" class="list-hover-arrow">
                                                    <div data-w-id="b17e7d80-639f-ace4-d6fd-8520d451accd"
                                                        class="lesson-time-text"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="w-dyn-empty">
                                        <div>No items found.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="w-node-ab8accf3-32e4-7ff6-5205-75510161bbea-6ae74b09" class="outline-box bottom-36">
                        <div class="outline-box-title">
                            <div class="subtitle">You&#x27;ll learn</div>
                        </div>
                        <div data-duration-in="300" data-duration-out="100"
                            id="w-node-ab8accf3-32e4-7ff6-5205-75510161bbee-6ae74b09" data-current="Tab 2"
                            data-easing="ease" class="w-tabs">
                            <div class="feature-tab-menu w-tab-menu">
                                <a data-w-tab="Tab 2" class="feature-tab-link w-inline-block w-tab-link w--current">
                                    <div class="feature-tab-top light">
                                        <div></div>
                                        <div id="w-node-_3f15fcd7-7354-b1f2-385e-dd13622ac714-6ae74b09"
                                            data-is-ix2-target="1" class="dropdown-lottie"
                                            data-w-id="3f15fcd7-7354-b1f2-385e-dd13622ac714" data-animation-type="lottie"
                                            data-src="documents/Plus-dropdown.json" data-loop="0" data-direction="1"
                                            data-autoplay="0" data-renderer="svg" data-default-duration="2.5"
                                            data-duration="0" data-ix2-initial-state="0"></div>
                                    </div>
                                    <div class="feature-tab-bottom">
                                        <div class="tab-bottom-content">
                                            <div class="body-display small"></div>
                                        </div>
                                    </div>
                                </a>
                                <a data-w-tab="Tab 3" class="feature-tab-link w-inline-block w-tab-link">
                                    <div class="feature-tab-top light">
                                        <div></div>
                                        <div data-is-ix2-target="1" class="dropdown-lottie"
                                            data-w-id="f524e003-1b7f-118d-1db5-4d0edffac135" data-animation-type="lottie"
                                            data-src="documents/Plus-dropdown.json" data-loop="0" data-direction="1"
                                            data-autoplay="0" data-renderer="svg" data-default-duration="2.5"
                                            data-duration="0" data-ix2-initial-state="0">
                                        </div>
                                    </div>
                                    <div class="feature-tab-bottom">
                                        <div class="tab-bottom-content">
                                            <div class="body-display small"></div>
                                        </div>
                                    </div>
                                </a>
                                <a data-w-tab="Tab 4" class="feature-tab-link w-inline-block w-tab-link">
                                    <div class="feature-tab-top light">
                                        <div></div>
                                        <div data-is-ix2-target="1" class="dropdown-lottie"
                                            data-w-id="d88f666c-e76b-d72a-c358-7fe40c9213c9" data-animation-type="lottie"
                                            data-src="documents/Plus-dropdown.json" data-loop="0" data-direction="1"
                                            data-autoplay="0" data-renderer="svg" data-default-duration="2.5"
                                            data-duration="0" data-ix2-initial-state="0">
                                        </div>
                                    </div>
                                    <div class="feature-tab-bottom">
                                        <div class="tab-bottom-content">
                                            <div class="body-display small"></div>
                                        </div>
                                    </div>
                                </a>
                                <a data-w-tab="Tab 5" class="feature-tab-link w-inline-block w-tab-link">
                                    <div class="feature-tab-top light">
                                        <div></div>
                                        <div data-is-ix2-target="1" class="dropdown-lottie"
                                            data-w-id="53b69b11-13c6-1926-a1c2-1f37ddac273f" data-animation-type="lottie"
                                            data-src="documents/Plus-dropdown.json" data-loop="0" data-direction="1"
                                            data-autoplay="0" data-renderer="svg" data-default-duration="2.5"
                                            data-duration="0" data-ix2-initial-state="0">
                                        </div>
                                    </div>
                                    <div class="feature-tab-bottom">
                                        <div class="tab-bottom-content">
                                            <div class="body-display small"></div>
                                        </div>
                                    </div>
                                </a>
                                <a data-w-tab="Tab 6" class="feature-tab-link w-inline-block w-tab-link">
                                    <div class="feature-tab-top light">
                                        <div></div>
                                    </div>
                                    <div class="feature-tab-bottom">
                                        <div class="tab-bottom-content">
                                            <div class="body-display small"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="hide-tab-content w-tab-content">
                                <div data-w-tab="Tab 2" class="w-tab-pane w--tab-active"></div>
                                <div data-w-tab="Tab 3" class="w-tab-pane"></div>
                                <div data-w-tab="Tab 4" class="w-tab-pane"></div>
                                <div data-w-tab="Tab 5" class="w-tab-pane"></div>
                                <div data-w-tab="Tab 6" class="w-tab-pane"></div>
                            </div>
                        </div>
                    </div>
                     --}}

                </div>

            </div>
        </div>
        <div class="section grey no-padding cut wf-section">
            <div class="grid-wrapper">
                <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e8a-6ae74b09"
                    class="section-box no-top-margin bottom-border">
                    <div class="stacked-content">
                        <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e8c-6ae74b09" class="dual-grid">
                            <div class="stacked-heading">
                                <div class="left-intro">
                                    <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e8f-6ae74b09"
                                        class="subtitle-line dark left">
                                        <div class="solid-subtitle-line dark"></div>
                                    </div>
                                    <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e91-6ae74b09" class="subtitle">
                                        Skill path</div>
                                </div>
                                <div class="left-intro">
                                    <h1 id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e94-6ae74b09">Learn the technical
                                        skills</h1>
                                </div>
                            </div>
                            <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e96-6ae74b09" class="right-dual">
                                <a href="#" id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e98-6ae74b09"
                                    class="outline-button w-inline-block">
                                    <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e99-6ae74b09" class="button-text">
                                        View all Skill paths</div>
                                    <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e9b-6ae74b09"
                                        class="button-hover-outline left">
                                        <div class="solid-button-outline"></div>
                                    </div>
                                    <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e9d-6ae74b09"
                                        class="button-hover-outline right">
                                        <div class="solid-button-outline right"></div>
                                    </div>
                                    <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39e9f-6ae74b09"
                                        class="button-hover-outline middle">
                                        <div class="solid-button-outline middle"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="template-slider">
                            <div data-delay="4000" data-animation="slide" class="cards-slider w-slider"
                                data-autoplay="false" data-easing="ease" data-hide-arrows="false"
                                data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3"
                                data-duration="500" data-infinite="true">
                                <div class="cards-mask w-slider-mask">
                                    <div class="card-slide w-slide">
                                        <div class="singlie-item-wrapper w-dyn-list">
                                            <div role="list" class="single-item-list w-dyn-items">
                                                <div role="listitem" class="single-item w-dyn-item">
                                                    <div data-w-id="0bca7adc-82e2-8fb8-9858-cd20e4399603"
                                                        class="academy-card">
                                                        <div class="card-top">
                                                            <div class="card-icon"><img src="images/academic-cap.svg"
                                                                    loading="lazy" alt=""></div>
                                                            <div
                                                                id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399607-6ae74b09">
                                                            </div>
                                                        </div>
                                                        <div class="card-top">
                                                            <div class="card-icon"><img src="images/Icon_certificate.svg"
                                                                    loading="lazy" alt=""></div>
                                                            <div
                                                                id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e439960b-6ae74b09">
                                                            </div>
                                                        </div>
                                                        <div data-w-id="0bca7adc-82e2-8fb8-9858-cd20e439960c"
                                                            class="project-top-image">
                                                            <div class="background-wrapper">
                                                                <div class="overlay hide-on-tablet"></div>
                                                                <div style="opacity:1;-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0deg, 0deg);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0deg, 0deg);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0deg, 0deg);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0deg, 0deg)"
                                                                    class="background"></div>
                                                                <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(-3deg, -3deg);-moz-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(-3deg, -3deg);-ms-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(-3deg, -3deg);transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(-3deg, -3deg)"
                                                                    class="html-embed w-embed">
                                                                    <div style="position:absolute; top:0; left:0; width:100%; height:100%;"
                                                                        data-poster-url="https://assets.website-files.com/60d610589ff1af7f8d213183/-poster-00001.jpg"
                                                                        data-video-urls="https://assets.website-files.com/60d610589ff1af7f8d213183/-transcode.mp4,https://assets.website-files.com/60d610589ff1af7f8d213183/-transcode.webm"
                                                                        data-autoplay="true" data-loop="true"
                                                                        data-wf-ignore="true"
                                                                        class="w-background-video w-background-video-atom">
                                                                        <video autoplay="" loop=""
                                                                            style="background-image:url(&quot;https://assets.website-files.com/60d610589ff1af7f8d213183/-poster-00001.jpg&quot;)"
                                                                            muted="" playsinline=""
                                                                            data-wf-ignore="true" data-object-fit="cover">
                                                                            <source
                                                                                src="https://assets.website-files.com/60d610589ff1af7f8d213183/-transcode.mp4"
                                                                                data-wf-ignore="true">
                                                                            <source
                                                                                src="https://assets.website-files.com/60d610589ff1af7f8d213183/-transcode.webm"
                                                                                data-wf-ignore="true">
                                                                        </video>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="template-screen-content small">
                                                                <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399612-6ae74b09"
                                                                    style="-webkit-transform:translate3d(0, -72px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -72px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -72px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -72px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                                                    class="template-hover-top">
                                                                    <a data-w-id="0bca7adc-82e2-8fb8-9858-cd20e4399613"
                                                                        href="#"
                                                                        class="icon-link w-inline-block"><img
                                                                            src="images/play-924x242x.svg" loading="lazy"
                                                                            alt="">
                                                                        <div class="tool-tip-text bottom">
                                                                            <div class="tooltip-corner bottom"></div>
                                                                            <div class="tooltip-info small">
                                                                                <div class="body-display extra-small">
                                                                                    Start course</div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <a data-w-id="0bca7adc-82e2-8fb8-9858-cd20e439961a"
                                                                    href="#"
                                                                    class="template-screen-link w-inline-block">
                                                                    <div data-w-id="0bca7adc-82e2-8fb8-9858-cd20e439961b"
                                                                        class="cursur-wrapper">
                                                                        <div class="card-cursur on">
                                                                            <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e439961d-6ae74b09"
                                                                                class="cursur-text">Details</div>
                                                                            <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e439961f-6ae74b09"
                                                                                class="cursor-top">
                                                                                <div class="cursur-top-outline"></div>
                                                                            </div>
                                                                            <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399621-6ae74b09"
                                                                                class="cursor-top bottom">
                                                                                <div class="cursur-top-outline bottom">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="card-info small w-inline-block">
                                                            <div class="card-info-top small stacked">
                                                                <h3 class="card-title medium"></h3>
                                                                <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399626-6ae74b09"
                                                                    class="category-wrapper">
                                                                    <div class="body-display small"></div>
                                                                    <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399628-6ae74b09"
                                                                        class="dot"></div>
                                                                    <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399629-6ae74b09"
                                                                        data-w-id="0bca7adc-82e2-8fb8-9858-cd20e4399629"
                                                                        class="more-tag">
                                                                        <div></div>
                                                                        <div class="tool-tip-text small">
                                                                            <div class="tooltip-info">
                                                                                <div class="subtitle small">Categories
                                                                                </div>
                                                                                <div class="body-display extra-small">
                                                                                </div>
                                                                            </div>
                                                                            <div class="tooltip-corner"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="horizontal-line">
                                                                <div style="-webkit-transform:translate3d(-101%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-101%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-101%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-101%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                                                    class="hover-line-fill"></div>
                                                            </div>
                                                            <div class="card-stats small">
                                                                <div class="dynamic-dual-text">
                                                                    <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399635-6ae74b09"
                                                                        class="subtitle"></div>
                                                                    <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399636-6ae74b09"
                                                                        class="subtitle">hours</div>
                                                                </div>
                                                                <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399638-6ae74b09"
                                                                    class="dynamic-dual-text">
                                                                    <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e4399639-6ae74b09"
                                                                        class="subtitle"></div>
                                                                    <div id="w-node-_0bca7adc-82e2-8fb8-9858-cd20e439963a-6ae74b09"
                                                                        class="subtitle">lessons</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-arrow left w-slider-arrow-left">
                                    <div class="solid-video-button-outline extra-dark">
                                        <div class="slider-arrow-wrapper"><img
                                                src="{{ asset('img/arrow-left-final24x242x.svg') }}" loading="lazy"
                                                alt="" class="invert-small"></div>
                                        <div class="video-button-outline small">
                                            <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39fd0-6ae74b09"
                                                class="video-outline-wrapper top">
                                                <div class="video-outline small"></div>
                                            </div>
                                            <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39fd2-6ae74b09"
                                                class="video-outline-wrapper bottom">
                                                <div class="video-outline bottom small"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-arrow right w-slider-arrow-right">
                                    <div class="solid-video-button-outline extra-dark">
                                        <div class="slider-arrow-wrapper"><img
                                                src="{{ asset('img/arrow-right-final24x242x.svg') }}" loading="lazy"
                                                alt="" class="invert-small"></div>
                                        <div class="video-button-outline small">
                                            <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39fd9-6ae74b09"
                                                class="video-outline-wrapper top">
                                                <div class="video-outline small"></div>
                                            </div>
                                            <div id="w-node-_0268fed6-23f1-8af5-74dd-39421cf39fdb-6ae74b09"
                                                class="video-outline-wrapper bottom">
                                                <div class="video-outline bottom small"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hide-slide-nav w-slider-nav w-round"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grey-fill top"></div>
                <div class="fill bottom-border"></div>
            </div>
        </div>
    </div>
@endsection
