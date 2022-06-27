@extends('layouts.main')

@section('title')
    {{ $title }}
@endsection

@section('content')
    @include('components.header')
    <main>
        @include('components.headerPanel')
        <section class="parallax-window home" data-parallax="scroll" data-image-src="/media/img/bg/2.jpg" id="home">
            <div class="home__head">
                <h2 class="home__title">
                    <a class="home__title_link" href="#skills">
                        <span class="span__letter green">S</span>
                        <span class="span__letter">i</span>
                        <span class="span__letter">m</span>
                        <span class="span__letter">o</span>
                        <span class="span__letter">n</span><br>
                        <span class="span__letter">k</span>
                        <span class="span__letter">a</span>
                        <span class="span__letter">r</span>
                        <span class="span__letter">a</span>
                        <span class="span__letter">p</span>
                        <span class="span__letter">e</span>
                        <span class="span__letter">t</span>
                        <span class="span__letter">y</span>
                        <span class="span__letter">a</span>
                        <span class="span__letter">n</span>
                        <span class="green">.</span>
                    </a>
                </h2>
                <div class="home__subtitle_cont">
                    <h3 class="home__subtitle"></h3>
                </div>
            </div>
            <div class="wrapper">
                <div class="home__cont">
                    <div class="home__cont_bg">
                        <img class="home__cont_img" src="/media/img/bg/homeInfoBg.png" alt="homeInfoBg" data-speed="-3">
                        <img class="home__cont_img" src="/media/img/bg/blackDots.png" alt="blackDots" data-speed="-7">
                        <canvas id="canvas" width="820" height="654"></canvas>
                    </div>
                    <div class="home__logo">
                        <div class="main__color main__color_green"></div>
                        <div class="main__color main__color_aqua"></div>
                        <div class="main__color main__color_pink"></div>
                        <div class="main__color main__color_yello"></div>
                        <a class="logo__link home__logo_link" href="#*">
                            <svg class="home__svg_letter" width="132" height="132" viewBox="0 0 132 132" fill="none">
                                <g>
                                    <path
                                        d="M73.6562 75.0625C73.6562 73.2917 73.0312 71.9375 71.7812 71C70.5312 70.0417 68.2812 69.0417 65.0312 68C61.7812 66.9375 59.2083 65.8958 57.3125 64.875C52.1458 62.0833 49.5625 58.3229 49.5625 53.5938C49.5625 51.1354 50.25 48.9479 51.625 47.0312C53.0208 45.0938 55.0104 43.5833 57.5938 42.5C60.1979 41.4167 63.1146 40.875 66.3438 40.875C69.5938 40.875 72.4896 41.4688 75.0312 42.6562C77.5729 43.8229 79.5417 45.4792 80.9375 47.625C82.3542 49.7708 83.0625 52.2083 83.0625 54.9375H73.6875C73.6875 52.8542 73.0312 51.2396 71.7188 50.0938C70.4062 48.9271 68.5625 48.3438 66.1875 48.3438C63.8958 48.3438 62.1146 48.8333 60.8438 49.8125C59.5729 50.7708 58.9375 52.0417 58.9375 53.625C58.9375 55.1042 59.6771 56.3438 61.1562 57.3438C62.6562 58.3438 64.8542 59.2812 67.75 60.1562C73.0833 61.7604 76.9688 63.75 79.4062 66.125C81.8438 68.5 83.0625 71.4583 83.0625 75C83.0625 78.9375 81.5729 82.0312 78.5938 84.2812C75.6146 86.5104 71.6042 87.625 66.5625 87.625C63.0625 87.625 59.875 86.9896 57 85.7188C54.125 84.4271 51.9271 82.6667 50.4062 80.4375C48.9062 78.2083 48.1562 75.625 48.1562 72.6875H57.5625C57.5625 77.7083 60.5625 80.2188 66.5625 80.2188C68.7917 80.2188 70.5312 79.7708 71.7812 78.875C73.0312 77.9583 73.6562 76.6875 73.6562 75.0625Z"
                                        fill="#00D646" />
                                </g>
                                <mask id="path-2-inside-1" fill="white">
                                    <path
                                        d="M66 6.60002C66 2.95495 68.9622 -0.0341568 72.5891 0.32975C78.9959 0.972588 85.2863 2.5508 91.2571 5.02397C99.2646 8.34078 106.54 13.2023 112.669 19.331C118.798 25.4596 123.659 32.7354 126.976 40.7429C130.293 48.7504 132 57.3328 132 66C132 74.6673 130.293 83.2496 126.976 91.2571C123.659 99.2646 118.798 106.54 112.669 112.669C106.54 118.798 99.2646 123.659 91.2571 126.976C85.2863 129.449 78.9959 131.027 72.5891 131.67C68.9622 132.034 66 129.045 66 125.4C66 121.755 68.9662 118.843 72.5829 118.388C77.2548 117.801 81.8372 116.59 86.2057 114.781C92.6117 112.127 98.4323 108.238 103.335 103.335C108.238 98.4323 112.127 92.6117 114.781 86.2057C117.434 79.7997 118.8 72.9338 118.8 66C118.8 59.0662 117.434 52.2003 114.781 45.7943C112.127 39.3884 108.238 33.5677 103.335 28.6648C98.4323 23.7619 92.6117 19.8726 86.2057 17.2192C81.8372 15.4097 77.2548 14.1991 72.5829 13.612C68.9662 13.1575 66 10.2451 66 6.60002Z" />
                                </mask>
                            </svg>
                            <svg class="home__svg_border" xmlns="http://www.w3.org/2000/svg" width="132" height="132"
                                viewBox="0 0 132 132" fill="none">
                                <path
                                    d="M66 6.60002C66 2.95495 68.9622 -0.0341568 72.5891 0.32975C78.9959 0.972588 85.2863 2.5508 91.2571 5.02397C99.2646 8.34078 106.54 13.2023 112.669 19.331C118.798 25.4596 123.659 32.7354 126.976 40.7429C130.293 48.7504 132 57.3328 132 66C132 74.6673 130.293 83.2496 126.976 91.2571C123.659 99.2646 118.798 106.54 112.669 112.669C106.54 118.798 99.2646 123.659 91.2571 126.976C85.2863 129.449 78.9959 131.027 72.5891 131.67C68.9622 132.034 66 129.045 66 125.4C66 121.755 68.9662 118.843 72.5829 118.388C77.2548 117.801 81.8372 116.59 86.2057 114.781C92.6117 112.127 98.4323 108.238 103.335 103.335C108.238 98.4323 112.127 92.6117 114.781 86.2057C117.434 79.7997 118.8 72.9338 118.8 66C118.8 59.0662 117.434 52.2003 114.781 45.7943C112.127 39.3884 108.238 33.5677 103.335 28.6648C98.4323 23.7619 92.6117 19.8726 86.2057 17.2192C81.8372 15.4097 77.2548 14.1991 72.5829 13.612C68.9662 13.1575 66 10.2451 66 6.60002Z"
                                    stroke="#00D646" stroke-width="22" stroke-miterlimit="1" stroke-linecap="round"
                                    stroke-linejoin="round" mask="url(#path-2-inside-1)" />
                            </svg>
                        </a>
                    </div>
                    <div class="home__cont_info">
                        <h4 class="home__info_item"></h4>
                        <h4 class="home__info_item"></h4>
                        <h4 class="home__info_item"></h4>
                    </div>
                    <div class="home__resumes">
                        <a class="home__cont_link" href="/media/img/CV.pdf" target="_blank">
                            <button class="btn home__btn"><span class="btn__span">Show Resume</span></button>
                        </a>
                        <a class="home__cont_link home__cont_link-download" href="{{ route('resumeDownload') }}">
                            <button class="btn home__btn"><span class="btn__span">Download Resume</span></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        @include('components/signIn')

        <section class="parallax-window skills" data-parallax="scroll" data-image-src="/media/img/bg/4.jpg" id="skills">
            <div class="title skills__title">
                <h2 class="title__head">
                    <span class="green">01</span> skills<span class="green">.</span>
                </h2>
                <h2 class="subtitle">program proficiency</h2>
            </div>
            <div class="wrapper">
                <div class="skills__cont">
                    @foreach ($skills as $skill)
                        <div class="skills__item">
                            <h3 class="skills__item_info skills__item_name">{{ $skill->name }}</h3>
                            <div class="skills__item_line_cont">
                                <div class="skills__item_line" data-percent="{{ $skill->percent }}"></div>
                                <h3 class="skills__item_info">{{ $skill->percent }}%</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="parallax-window education" data-parallax="scroll" data-image-src="/media/img/bg/7.jpg"
            id="education">
            <div class="title education__title">
                <h2 class="title__head">
                    <span class="green">02</span> education<span class="green">.</span>
                </h2>
            </div>

            <div class="wrapper">
                <div class="educ-exper__cont flex">
                    <div class="educ-exper__info educ-exper__left">
                        <div class="educ-exper__cont_head educ-exper__cont_head_left">
                            <h4 class="educ-exper__cont_subtitle">{{ $educations[0]->date }}</h4>
                            <h3 class="educ-exper__cont_title">{{ $educations[0]->name }}</h3>
                            <h4 class="educ-exper__cont_bot">{{ $educations[0]->profession }}</h4>
                        </div>
                        <div class="educ-exper__cont_head educ-exper__cont_head_left">
                            <h4 class="educ-exper__cont_subtitle">{{ $educations[2]->date }}</h4>
                            <h3 class="educ-exper__cont_title">{{ $educations[2]->name }}</h3>
                            <h4 class="educ-exper__cont_bot">{{ $educations[2]->profession }}</h4>
                        </div>
                        <div class="educ-exper__cont_head educ-exper__cont_head_left" style="margin-top: 300px;">
                            <h4 class="educ-exper__cont_subtitle">{{ $educations[4]->date }}</h4>
                            <h3 class="educ-exper__cont_title educ-exper__cont_title_left">
                                {{ $educations[4]->name }}
                            </h3>
                            <h4 class="educ-exper__cont_bot educ-exper__cont_bot_left">
                                {{ $educations[4]->profession }}
                            </h4>
                        </div>
                    </div>
                    <div class="educ-exper__line"></div>
                    <div class="educ-exper__info educ-exper__right">
                        <div class="educ-exper__cont_head educ-exper__cont_head_right">
                            <h4 class="educ-exper__cont_subtitle">{{ $educations[1]->date }}</h4>
                            <h3 class="educ-exper__cont_title educ-exper__cont_title_right">
                                {{ $educations[1]->name }}
                            </h3>
                            <h4 class="educ-exper__cont_bot educ-exper__cont_bot_right">
                                {{ $educations[1]->profession }}
                            </h4>
                        </div>
                        <div class="educ-exper__cont_head educ-exper__cont_head_right">
                            <h4 class="educ-exper__cont_subtitle">{{ $educations[3]->date }}</h4>
                            <h3 class="educ-exper__cont_title educ-exper__cont_title_right">
                                {{ $educations[3]->name }}
                            </h3>
                            <h4 class="educ-exper__cont_bot educ-exper__cont_bot_right">
                                {{ $educations[3]->profession }}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="educ-exper-mob__cont">
                    @foreach ($educations as $education)
                        <div class="educ-exper-mob__cont_item">
                            <div class="educ-exper-mob__item_title flex">
                                <h3 class="educ-exper__cont_title educ-exper-mob__item_name">{{ $education->name }}</h3>
                                <div class="educ-exper-mob__item_arrow">
                                    <i class="educ-exper-mob__item_icon fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="educ-exper-mob__item_inside">
                                <h4 class="educ-exper__cont_subtitle">{{ $education->date }}</h4>
                                <h4 class="educ-exper__cont_bot">{{ $education->profession }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="parallax-window certificate" data-parallax="scroll" data-image-src="/media/img/bg/3.jpg"
            id="certificate">
            <div class="title certificate__title">
                <h2 class="title__head">
                    <span class="green">03</span> certificate<span class="green">.</span>
                </h2>
            </div>
            <div class="wrapper">
                <div class="certific-projects__cont flex">
                    @foreach ($certificates as $certificate)
                        <div class="certific-projects__item
                            @if ($certificate->id > 2) certific-projects__item_bot @endif">
                            <a href="/storage/{{ $certificate->link }}" target="_blank">
                                <img class="certific-projects__item_img" src="/storage/{{ $certificate->img }}"
                                    alt="{{ $certificate->name }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="parallax-window experience" data-parallax="scroll" data-image-src="/media/img/bg/9.jpg"
            id="experience">
            <div class="title experience__title">
                <h2 class="title__head">
                    <span class="green">04</span> experience<span class="green">.</span>
                </h2>
            </div>
            <div class="wrapper">
                <div class="educ-exper__cont flex">
                    <div class="educ-exper__info educ-exper__left">
                        <div class="educ-exper__cont_head educ-exper__cont_head_left">
                            <h4 class="educ-exper__cont_subtitle">{{ $experiences[1]->date }}</h4>
                            <h3 class="educ-exper__cont_title">{{ $experiences[1]->name }}</h3>
                            <h4 class="educ-exper__cont_bot">{{ $experiences[1]->profession }}</h4>
                        </div>
                        <div class="educ-exper__cont_head educ-exper__cont_head_left">
                            <h4 class="educ-exper__cont_subtitle">{{ $experiences[3]->date }}</h4>
                            <h3 class="educ-exper__cont_title">{{ $experiences[3]->name }}</h3>
                            <h4 class="educ-exper__cont_bot">{{ $experiences[3]->profession }}</h4>
                        </div>
                    </div>
                    <div class="educ-exper__line"></div>
                    <div class="educ-exper__info educ-exper__right">
                        <div class="educ-exper__cont_head educ-exper__cont_head_right">
                            <h4 class="educ-exper__cont_subtitle">{{ $experiences[0]->date }}</h4>
                            <h3 class="educ-exper__cont_title educ-exper__cont_title_right">
                                {{ $experiences[0]->name }}
                            </h3>
                            <h4 class="educ-exper__cont_bot educ-exper__cont_bot_right">
                                {{ $experiences[0]->profession }}
                            </h4>
                        </div>
                        <div class="educ-exper__cont_head educ-exper__cont_head_right">
                            <h4 class="educ-exper__cont_subtitle">{{ $experiences[2]->date }}</h4>
                            <h3 class="educ-exper__cont_title educ-exper__cont_title_right">
                                {{ $experiences[2]->name }}
                            </h3>
                            <h4 class="educ-exper__cont_bot educ-exper__cont_bot_right">
                                {{ $experiences[2]->profession }}
                            </h4>
                        </div>
                        <div class="educ-exper__cont_head educ-exper__cont_head_right">
                            <h4 class="educ-exper__cont_subtitle">{{ $experiences[4]->date }}</h4>
                            <h3 class="educ-exper__cont_title educ-exper__cont_title_right">
                                {{ $experiences[4]->name }}
                            </h3>
                            <h4 class="educ-exper__cont_bot educ-exper__cont_bot_right">
                                {{ $experiences[4]->profession }}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="educ-exper-mob__cont">
                    @foreach ($experiences as $experience)
                        <div class="educ-exper-mob__cont_item">
                            <div class="educ-exper-mob__item_title flex">
                                <h3 class="educ-exper__cont_title educ-exper-mob__item_name">{{ $experience->name }}
                                </h3>
                                <div class="educ-exper-mob__item_arrow">
                                    <i class="educ-exper-mob__item_icon fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="educ-exper-mob__item_inside">
                                <h4 class="educ-exper__cont_subtitle">{{ $experience->date }}</h4>
                                <h4 class="educ-exper__cont_bot">{{ $experience->profession }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="parallax-window projects" data-parallax="scroll" data-image-src="/media/img/bg/1.jpg"
            id="projects">
            <div class="title projects__title">
                <h2 class="title__head">
                    <span class="green">05</span> projects<span class="green">.</span>
                </h2>
            </div>
            <div class="wrapper">
                <div class="certific-projects__cont flex">
                    @foreach ($projects as $project)
                        <div class="certific-projects__item @if ($loop->index >= 2)item__margin @endif">
                            <a href="{{ $project->link }}" target="_blank">
                                <img class="certific-projects__item_img" src="/storage/{{ $project->img }}"
                                    alt="{{ $project->name }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="projects__bot flex">
                <a class="projects__btn_link" href="{{ route('projects') }}">
                    <button class="btn projects__btn">
                        <span class="btn__span">show more projects</span>
                    </button>
                </a>
            </div>
        </section>

        <section class="parallax-window projects-back" data-parallax="scroll" data-image-src="/media/img/bg/8.jpg"
            id="projects-back">
            <div class="title projects-back__title">
                <h2 class="title__head">
                    <span class="green">06</span> back-end projects<span class="green">.</span>
                </h2>
            </div>
            <div class="wrapper">
                <div class="certific-projects__cont flex">
                    @foreach ($backProjects as $backProject)
                        <div class="certific-projects__item projects-back__item @if ($loop->index >= 2)item__margin @endif">
                            <a href="{{ $backProject->link }}" target="_blank">
                                <img class="certific-projects__item_img" src="/storage/{{ $backProject->img }}"
                                    alt="{{ $backProject->name }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="projects__bot projects-back__bot flex">
                <a class="projects__btn_link" href="{{ route('backProjects') }}">
                    <button class="btn projects__btn">
                        <span class="btn__span">show more projects</span>
                    </button>
                </a>
            </div>
        </section>

        <section class="parallax-window contact" data-parallax="scroll" data-image-src="/media/img/bg/6.jpg" id="contact">
            <div class="title contact__title">
                <h2 class="title__head">
                    <span class="green">07</span> contact<span class="green">.</span>
                </h2>
            </div>
            <div class="wrapper">
                <div class="contact__cont">
                    <form class="form" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form__cont">
                            <div class="form__name-email flex">
                                <input class="form__input form__name" type="text" name="name" placeholder="name">
                                <input class="form__input form__email" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form__message">
                                <textarea class="form__text form__input" name="message" placeholder="Message"></textarea>
                            </div>
                            <button class="form__btn disabled" disabled>send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- footer php -->
    @include('components/footer')

@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/slides.js"></script>
    <script src="/js/main.js"></script>
@endsection
