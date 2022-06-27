@extends('layouts.main')

@section('title')
    {{ $title }}
@endsection

@section('content')

    @include('components.header')

    @include('components/signIn')
    <main>
        @include('components/headerPanel')
        @php
            $projCount = count($projects);
        @endphp
        <div class="projects-page" id="home">
            @for ($i = 0; $i < $projCount; $i += 6)
                <div class="projects-page__cont">
                    @if (!empty($projects[$i + 1]))
                        <div class="projects-page__box last__box">
                            <div class="projects-page__box_item">
                                <a href="{{ $projects[$i]->link }}" target="_blank">
                                    <img class="projects-page__box_img" src="/storage/{{ $projects[$i]->img }}"
                                        alt="{{ $projects[$i]->name }}">
                                </a>
                            </div>
                        </div>
                    @endif
                    <div class="projects-page__box first__box">
                        @if (!empty($projects[$i + 1]))
                            <div class="projects-page__box_item">
                                <a href="{{ $projects[$i + 1]->link }}" target="_blank">
                                    <img class="projects-page__box_img" src="/storage/{{ $projects[$i + 1]->img }}"
                                        alt="{{ $projects[$i + 1]->name }}">
                                </a>
                            </div>
                        @endif
                        @if (!empty($projects[$i + 2]))
                            <div class="projects-page__box_item">
                                <a href="{{ $projects[$i + 2]->link }}" target="_blank">
                                    <img class="projects-page__box_img" src="/storage/{{ $projects[$i + 2]->img }}"
                                        alt="{{ $projects[$i + 2]->name }}">
                                </a>
                            </div>
                        @endif
                    </div>
                </div>


                <div class="projects-page__cont">
                    <div class="projects-page__box first__box">
                        @if (!empty($projects[$i + 3]))
                            <div class="projects-page__box_item">
                                <a href="{{ $projects[$i + 3]->link }}" target="_blank">
                                    <img class="projects-page__box_img" src="/storage/{{ $projects[$i + 3]->img }}"
                                        alt="{{ $projects[$i + 3]->name }}">
                                </a>
                            </div>
                        @endif
                        @if (!empty($projects[$i + 4]))
                            <div class="projects-page__box_item">
                                <a href="{{ $projects[$i + 4]->link }}" target="_blank">
                                    <img class="projects-page__box_img" src="/storage/{{ $projects[$i + 4]->img }}"
                                        alt="{{ $projects[$i + 4]->name }}">
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="projects-page__box last__box">
                        @if (!empty($projects[$i + 5]))
                            <div class="projects-page__box_item">
                                <a href="{{ $projects[$i + 5]->link }}" target="_blank">
                                    <img class="projects-page__box_img" src="/storage/{{ $projects[$i + 5]->img }}"
                                        alt="{{ $projects[$i + 5]->name }}">
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endfor
        </div>
    </main>

    <!-- footer php -->
    @include('components/footer')


@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/slides.js"></script>
@endsection
