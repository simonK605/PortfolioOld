@extends('layouts.main')

@section('title')
    {{ $title }}
@endsection

@section('content')
    @include('components.header')
    @include('components.signIn')
    <main>
        @include('components.headerPanel')

        <div class="projects-page registration-page" id="home">
            <div class="wrapper">
                <div class="registration__cont">
                    <h2 class="title__head registration__tilte">registration</h2>
                    <form class="registration__form auth__form" action="{{ route('registration.process') }}" method="POST">
                        @csrf
                        <div class="registration__inp_cont flex">
                            <input class="form__input form__name" type="text" name="name" placeholder="name">
                            <input class="form__input form__lastName" type="text" name="lastName" placeholder="lastName">
                        </div>
                        <div class="registration__inp_cont flex">
                            <input class="form__input form__email" type="email" name="email" placeholder="Email">
                            <input class="form__input form__login" type="text" name="login" placeholder="Login">
                        </div>
                        <div class="registration__inp_cont flex">
                            <input class="form__input password" type="password" name="password" placeholder="Password">
                            <input class="form__input confirm__password" type="password" name="confirmPassword"
                                placeholder="Confirm Password">
                        </div>
                        <div class="registration__btn_cont">
                            <button class="btn projects__btn registartion__btn auth__btn" disabled>
                                <span class="btn__span">sign up</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- footer php -->
    @include('components/footer')

@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/slides.js"></script>
    <script src="/js/registration.js"></script>
@endsection
