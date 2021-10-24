@extends('master')

@section('content')
@if($home)
    @foreach($home as $value)
        @if($value->section_title == 'banner_image')
        <style type="text/css">
        .tm-main-bg { 
            background-image: url({{ asset('/uploads') }}/{{$value->data}});
         }
        </style>
        @endif
    @endforeach
@endif
<div class="row">
    <div class="col-12">
        <div class="tm-main-bg"></div>
    </div>
</div>

<!-- Main -->
<main>
    <!-- Welcome section -->
    <section class="tm-welcome">
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-header-floating">
                    @if($home)
                    @foreach($home as $value)
                        @if($value->section_title == 'second_title')
                            {{$value->data}}
                        @endif
                    @endforeach
                    @endif
                </h2>
            </div>
        </div>

        <div class="row tm-welcome-row">
            @if($post)
            @foreach($post as $value)
            @if($value->section_title == 'second_section')
            <article class="col-lg-6 tm-media">
                <img src="{{asset('/uploads')}}/{{$value->image}}" alt="Welcome image" class="img-fluid tm-media-img" />
                <div class="tm-media-body">
                    <a href="#" class="tm-article-link">
                        <h3 class="tm-article-title text-uppercase">{{$value->title}}</h3>
                    </a>
                    <p>{!! $value->description !!}</p>
                </div>
            </article>
            @endif
            @endforeach
            @endif

            <!-- <article class="col-lg-6 tm-media">
                <img src="{{asset('theme/img/img-3x2-02.jpg')}}" alt="Welcome image" class="img-fluid tm-media-img" />
                <div class="tm-media-body">
                    <a href="#" class="tm-article-link">
                        <h3 class="tm-article-title text-uppercase">New Design for your website</h3>
                    </a>
                    <p>Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem at nisl
                        malesuada, quis.</p>
                </div>
            </article>

            <article class="col-lg-6 tm-media">
                <img src="{{asset('theme/img/img-3x2-03.jpg')}}" alt="Welcome image" class="img-fluid tm-media-img" />
                <div class="tm-media-body">
                    <a href="#" class="tm-article-link">
                        <h3 class="tm-article-title text-uppercase">Most unique idea ever made</h3>
                    </a>
                    <p>Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas. <span
                            class="tm-hover-color">Hover #09F</span></p>
                </div>
            </article>
            <article class="col-lg-6 tm-media">
                <img src="{{asset('theme/img/img-3x2-04.jpg')}}" alt="Welcome image" class="img-fluid tm-media-img" />
                <div class="tm-media-body">
                    <a href="#" class="tm-article-link">
                        <h3 class="tm-article-title text-uppercase">Simple touch</h3>
                    </a>
                    <p>Please tell your friends about TemplateMo website. Thank you. Title / Text #666</p>
                </div>
            </article> -->
        </div>

        
        <div class="row tm-welcome-row-2">
            @if($post)
            @foreach($post as $value)
            @if($value->section_title == 'third_section')
            <div class="col-lg-4 tm-dotted-box-container">
                <article class="tm-dotted-box">
                    <!-- <i class="fas fa-3x fa-binoculars tm-article-icon"></i> -->
                    <img src="{{asset('/uploads')}}/{{$value->image}}" alt="Welcome image" class="img-fluid tm-media-img" style="width: 30%;"/>
                    <h3 class="tm-article-title">{{$value->title}}</h3>
                    <p class="tm-article-text">{!! $value->description !!}</p>
                    <a class="tm-btn tm-btn-rounded tm-article-link" href="#">More Details</a>
                </article>
            </div>
            @endif
            @endforeach
            @endif
            <!-- <div class="col-lg-4 tm-dotted-box-container">
                <article class="tm-dotted-box">
                    <i class="fas fa-3x fa-microscope tm-article-icon"></i>
                    <h3 class="tm-article-title">New Vision</h3>
                    <p class="tm-article-text"><a rel="nofollow" target="_parent"
                            href="https://templatemo.com/tm-542-new-vision">New Vision</a> comes with 4 different HTML
                        pages and provided free of charge by TemplateMo. You can add more pages if you need. Text color
                        is #666</p>
                </article>
            </div>
            <div class="col-lg-4 tm-dotted-box-container">
                <article class="tm-dotted-box">
                    <i class="fas fa-3x fa-glasses tm-article-icon"></i>
                    <h3 class="tm-article-title">Download Sites</h3>
                    <p class="tm-article-text">Do not re-distribute our template ZIP file on your website. Or contact us
                        first. Button color is #C99</p>
                    <a class="tm-btn tm-article-link" href="#">Read More...</a>
                </article>
            </div>
        </div> -->
    </section>

    <!-- Featured -->
    <section class="tm-featured">
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-section-header-small">
                    @if($home)
                    @foreach($home as $value)
                        @if($value->section_title == 'forth_icon')
                            {{$value->data}}
                        @endif
                    @endforeach
                    @endif
                </h2>
            </div>
        </div>

        <!-- Carousel -->

        <div class="grid tm-carousel">
            @if($post)
            @foreach($post as $value)
            @if($value->section_title=='slider')
            <figure class="effect-honey">
                <img src="{{asset('/uploads')}}/{{$value->image}}" alt="Featured Item">
                <figcaption>
                    <h4><i>{!! $value->description !!}</i></h4>
                </figcaption>
            </figure>
            @endif
            @endforeach
            @endif


            <!-- <figure class="effect-honey">
                <img src="{{asset('theme/img/gallery-item-02.jpg')}}" alt="Featured Item">
                <figcaption>
                    <h4><i><span>Top</span> CSS Theme</i></h4>
                </figcaption>
            </figure>
            <figure class="effect-honey">
                <img src="{{asset('theme/img/gallery-item-03.jpg')}}" alt="Featured Item">
                <figcaption>
                    <h4><i><span>Best</span> HTML Template</i></h4>
                </figcaption>
            </figure>
            <figure class="effect-honey">
                <img src="{{asset('theme/img/gallery-item-04.jpg')}}" alt="Featured Item">
                <figcaption>
                    <h4><i><span>Great</span> Web Theme</i></h4>
                </figcaption>
            </figure>
            <figure class="effect-honey">
                <img src="{{asset('theme/img/gallery-item-05.jpg')}}" alt="Featured Item">
                <figcaption>
                    <h4><i><span>Best</span> HTML Collection</i></h4>
                </figcaption>
            </figure>
            <figure class="effect-honey">
                <img src="{{asset('theme/img/gallery-item-06.jpg')}}" alt="Featured Item">
                <figcaption>
                    <h4><i><span>Max</span> CSS Layout</i></h4>
                </figcaption>
            </figure>
            <figure class="effect-honey">
                <img src="{{asset('theme/img/gallery-item-07.jpg')}}" alt="Featured Item">
                <figcaption>
                    <h4><i><span>Best</span> HTML Layout</i></h4>
                </figcaption>
            </figure>
            <figure class="effect-honey">
                <img src="{{asset('theme/img/gallery-item-08.jpg')}}" alt="Featured Item">
                <figcaption>
                    <h4><i><span>Best</span> CSS Template</i></h4>
                </figcaption>
            </figure> -->
        </div>
    </section>

    <footer>
        Copyright &copy; 2020 New Vision

        - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">TemplateMo</a>
    </footer>

</main>
@endsection

@push('footer-script')

@endpush