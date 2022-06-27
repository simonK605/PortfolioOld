<div class='header__panel_cont flex'>

    @if ($title == 'Portfolio')
        <div class='header__btn_cont'>
            <button class='btn header__btn flex'>
                <span class='btn__span header__btn_span header__btn_voice'>voice</span>
            </button>
            <span class='header__btn_line'></span>
            <button class='btn header__btn header__light_cont flex'>
                <span class='btn__span header__btn_span'>
                    <i class='header__light_icon fas fa-sun'></i>
                </span>
            </button>
        </div>
    @endif

    @auth('web')
        <div class='header__btn_cont'>
            <a href='{{ route('logout') }}'>
                <button class='btn header__btn flex'>
                    <span class='btn__span header__btn_span'>loge out</span>
                </button>
            </a>
            @if (@isset($user) && $user->role == 'admin')
                <span class='header__btn_line'></span>
                <a href='{{ route('skills.index') }}'>
                    <button class='btn header__btn header__light_cont flex'>
                        <span class='btn__span header__btn_span'>admin</span>
                    </button>
                </a>
            @endif
        </div>
    @endauth
    @guest('web')
        <div class='header__btn_cont'>
            <button class='btn header__btn header__btn_sign flex'>
                <span class='btn__span header__btn_span'>Log in</span>
            </button>
            <span class='header__btn_line'></span>
            <a href='{{ route('registration') }}'>
                <button class='btn header__btn header__reg_cont flex'>
                    <span class='btn__span header__btn_span'>register</span>
                </button>
            </a>
        </div>
    @endguest


    <div class='header__panel'>
        <i class='header__panel_icon fa fa-angle-up'></i>
    </div>
</div>
<div class='scroll-top'>
    <a class='scroll-top__link' href='#home'>
        <i class='fas fa-chevron-circle-up scroll-top__arrow' aria-hidden='true'></i>
    </a>
</div>
