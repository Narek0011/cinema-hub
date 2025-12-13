<div class="footer-container">
    <div class="footer-heading">
        <div class="footer-content">
            <img src="{{asset('img/logo.svg')}}" alt="logo" class="logo-image">
            <div class="location-info">
                <span class="address">admin@example.com ticket@example.com</span>
                <span class="street">улица Тестовая 1</span>
            </div>
            <div class="location-info">
                <span class="address">+7 (775) 000 00 01</span>
                <span class="street">Касса</span>
                <img src="{{asset('icons/arrow-bottom.svg')}}" class="arrow-bottom"/>
            </div>
            <div class="location-info">
                <span class="address">08:00 - 22:00 с пн.-пт.</span>
                <span class="street">График работы</span>
            </div>
        </div>
    </div>

    <div class="footer-bottom-section">
        <div class="footer-col-group footer-menu-group">
            <span class="footer-menu-title">Меню</span>
            <ul class="footer-list">
                <li><a href="#" class="footer-link-item">Афиша</a></li>
                <li><a href="#" class="footer-link-item">Сеансы</a></li>
                <li><a href="#" class="footer-link-item">Пушкинская карта</a></li>
                <li><a href="#" class="footer-link-item">Кинотеатр</a></li>
                <li><a href="#" class="footer-link-item">Контакты</a></li>
            </ul>
        </div>
        <div class="payment-container">
            <div class="footer-payment-group">
                <span class="footer-menu-title">Способы оплаты</span>
                <div class="payment-methods">
                    <img src="{{asset('icons/master-card.svg')}}" alt="Mastercard" class="payment-icon">
                    <img src="{{asset('icons/visa.svg')}}" alt="Visa" class="payment-icon">
                </div>
            </div>
            <div class="footer-disclaimer-text">
                <p>Все сеансы начинаются с рекламно-информационного блока.</p>
                <p>Точную продолжительность сеансов можно уточнить в кинотеатре.</p>
            </div>
        </div>
    </div>

    <div class="bottom-content">
        <div class="socials">
            <img src="{{asset('icons/facebook.svg')}}" alt="facebook">
            <img src="{{asset('icons/insta.svg')}}" alt="insta">
            <img src="{{asset('icons/vKontakte.svg')}}" alt="vKontakte">
            <img src="{{asset('icons/youtube.svg')}}" alt="youTube">
        </div>

        <span class="footer-copyright">
            © {{ now()->year }} Все права защищены
        </span>
    </div>
</div>
