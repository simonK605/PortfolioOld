<div class='sign flex'>
    <div class='sign__cont flex'>
        <h3 class='title__head sign_title'><span class='green'>login</span> into account</h3>
        <form class='sign__form auth__form' action='{{ route('login.process') }}' method='POST'>
            @csrf
            <div class='inp__cont'>
                <input class='form__input sign__inp login__inp' type='text' name='login' placeholder='login'>
            </div>
            <div class='inp__cont'>
                <input class='form__input sign__inp password__inp' type='password' name='password' placeholder='password'>
            </div>
            <button class='btn home__btn sign__btn auth__btn'><span class='btn__span'>login</span></button>
        </form>
        <span class='sign__span'>If Dont Login? <a class='sign__registration' href='{{ route('registration') }}'>Click Here</a></span>
    </div>
</div>

