<div class="container-fluid d-flex justify-content-center" style="position: relative">
    <div class="nav-tel d-flex align-items-center">
        <img class="img-profile" src="{{asset('storage/public/phone-icon.svg')}}" style="display: none">
        <p class="tel-title">Позвонить нам</p>
    </div>
    <div class="nav-auth d-flex">
        @guest
        <a class="auth-title" href="{{ route('admin.index') }}" rel="nofollow,sponsored">Войти</a>
        @endguest
        @auth
        <p class="auth-title">Профиль</p>
        @endauth
        <img class="img-profile" src="{{asset('storage/public/profile-icon.svg')}}" style="display: none">
    </div>
    <div class="d-flex">
        <nav class="right-nav">
            <a href="#menu">Меню</a>
        </nav>
        <div class="header-logo">
            <a href="#top">
                <img src="{{ asset('storage/public/logo_new.svg')  }}" alt="Лого - Белла Пицца">
            </a>
        </div>
        <nav class="left-nav">
            <a href="#">Корзина</a>
        </nav>
    </div>
</div>
