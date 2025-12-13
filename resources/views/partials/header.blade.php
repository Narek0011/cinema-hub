<div class="header-container">
    <img src="{{asset('img/hero.jpg')}}" alt="hero" class="top-image">
    <div class="header-content">
        <div class="first_content">
            <img src="{{asset('img/logo.svg')}}" alt="logo" class="logo-image">

            <div class="location-info">
                <span class="address">Казахстан</span>
                <span class="street">улица Тестовая 1</span>
            </div>

            <div class="location-info">
                <span class="address">+7 (775) 000 00 01</span>
                <span class="street">Касса</span>
                <img src="{{asset('icons/arrow-bottom.svg')}}" class="arrow-bottom" />
            </div>
        </div>
        <div class="last-content">
            <div class="socials">
                <img src="{{asset('icons/facebook.svg')}}" alt="facebook">
                <img src="{{asset('icons/insta.svg')}}" alt="insta">
                <img src="{{asset('icons/vKontakte.svg')}}" alt="vKontakte">
                <img src="{{asset('icons/youtube.svg')}}" alt="youTube">
            </div>
            <x-button
                text="Мне пришёл билет"
                type="filled"
                href="#add-card"
            />
        </div>
    </div>
</div>
