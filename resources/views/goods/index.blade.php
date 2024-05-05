@extends('layouts.app')

@section('content')
    <link href="/css/home.css" rel="stylesheet">
    <div class="container d-flex flex-column">

        <!--    Заголовок-->
        <div class="d-flex justify-content-between w-100" style="height: 110px">
            <div class="d-flex align-items-center" style="margin-left: 250px">
                <div class="square"></div>
                <div class="d-flex flex-column company-name ">
                    <div class="name-company">Название компании</div>
                    <div class="name-description">Самая клёвая компания</div>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center" style="margin-right: 160px">
                <div class="tel">+7(499)777-77-77</div>
                <div class="tel">+7(499)777-77-77</div>
                <div class="tel feedback">Обратная связь</div>
            </div>
        </div>

        <!--    Меню-->
        <div class="menu d-flex justify-content-center align-items-center">
            <ul class="ul-menu">
                <li class="li-menu">Главная</li>
                <li class="li-menu">Каталог</li>
                <li class="li-menu">Доставка и оплата</li>
                <li class="li-menu">Прайс лист</li>
                <li class="li-menu">Контакты</li>
            </ul>
        </div>

        <!--    Хлебные крошки-->
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                    <li class="breadcrumb-item"><a href="#">Каталог</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Смартфоны</li>
                </ol>
            </nav>
        </div>

        <!--    Основной контейнер-->
        <div class="d-flex">
            <div class="left">
                <div class="question">Frequently Asked Questions</div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Why is the moon sometimes out during the day?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The Earth's daily revolution on its axis means that the Moon is actually above the horizon for about 12 hours out of every 24. Usually, some portion of that time will be during daylight – you just need to look carefully, because its brightness is so much less than the Sun's.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Why is the sky blue?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Sunlight reaches Earth's atmosphere and is scattered in all directions by all the gases and particles in the air. Blue light is scattered more than the other colors because it travels as shorter, smaller waves. This is why we see a blue sky most of the time.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Will we ever discover aliens?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                “The universe is so vast and the building blocks of life are so abundant in the cosmos. The number of planets in the cosmos is so large that it's very unlikely that life on Earth is the only form of life that exists out there,” Margot said.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                How much does the Earth weight?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Earth weighs about 13,170,000,000,000,000,000,000,000 pounds (or 5,974,000,000,000,000,000,000,000 kilograms). Since Earth is too big to be placed on a scale, scientists use mathematics and the laws of gravity to figure out Earth's weight.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                How do airplanes stay up?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Airplane wings are shaped to make air move faster over the top of the wing. When air moves faster, the pressure of the air decreases. So the pressure on the top of the wing is less than the pressure on the bottom of the wing. The difference in pressure creates a force on the wing that lifts the wing up into the air.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap right">
                @foreach ($goods as $good)
                <!--            Сама карточка-->
                <div class="card-block">
                    <div class="card-image">
                        <img src="img/smart.jpg" height="150">
                    </div>
                    <div class="card-details">
                        <div class="description">
                            {{ $good->description }}
                        </div>
                        <div class="price-card">
                            <div class="price">{{ $good->price }}</div>
                            <div class="simbol-card"><i class="fa fa-shopping-cart"></i></div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $goods->links() }}
            </div>


        </div>
@endsection
