<div class="filters-block">
    <div class="filters-content">
        <nav class="main-nav">
            <a href="#" class="nav-link active">Афиша</a>
            <a href="#" class="nav-link">Сеансы</a>
            <a href="#" class="nav-link">Кинотеатр</a>
            <a href="#" class="nav-link">Контакты</a>
        </nav>

        <div class="user-controls">
            <x-button
                text="Войти"
                type="filled"
                href="#login-route"
            />
            <x-button
                text="Написать отзыв"
                type="filled"
                href="#support"
            />
        </div>
    </div>

    <nav class="nav-filters">
        <div class="date-pills">
            <x-button
                text="Сегодня"
                type="filled"
            />
            <x-button
                text="Завтра"
            />
            <x-button
                text="Воскресенье, 10 сент."
            />
            <x-button
                text="Понедельник, 11 сент."
            />
            <x-button
                text="Вторник, 12 сент."
            />
            <x-button
                text="Среда, 13 сент."
            />
        </div>
    </nav>
</div>
