<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваша любимая карта!</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=5aedb753-51d2-4ffd-ad24-5f61f42e827b&lang=ru_RU"></script>

</head>

<body>
<div class="container">


    <div class="black-bg"></div>

    <script data-b24-form="click/11/gzx0kh" data-skip-moving="true">
        (function (w, d, u) {
            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 180000 | 0);
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn-ru.bitrix24.ru/b22085748/crm/form/loader_11.js');
    </script>


    <button class="buttonAddObj" id="buttonAddObj">

        <div class="text-call">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>Добавить <br> объект</span>
        </div>
    </button>

    <!--    Формируем карту-->
    <div id="sMap"></div>


    <!--    Боковая панель -->
    <div class="panel" id="panel">
        <span class="close">&times</span>
        <div class="panel__inner">

            <div class="obj__images mySwiper">
                <div class="swiper-wrapper">
                    <!--Тут будут генерироватья слайды-->
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-scrollbar"></div>
            </div>

            <div class="panel__desc">

                <h2 class="obj__name">Название</h2>
                <div class="obj__desc">Описание</div>

            </div>
            <div class="share">
                <p>Поделитесь интересными объектами с друзьями!</p>
                <div class="share__links">
                    <span class="share__link" data-ref="https://t.me/share/url?url=">
                        <img src="images/soc_icons/tg.webp" alt="">
                    </span>
                    <span class="share__link" data-ref="https://api.whatsapp.com/send?text=">
                        <img src="images/soc_icons/wa.png" alt="">
                    </span>
                    <span class="share__link" data-ref="https://vk.com/share.php?url=">
                        <img src="images/soc_icons/vk.png" alt="">
                    </span>
                    <span class="share__link" data-ref="https://connect.ok.ru/offer?url=">
                        <img src="images/soc_icons/odn.png" alt="">
                    </span>
                </div>
            </div>
        </div>


    </div>

    <!--    Панель с фильтрами -->

    <div class="filters">
        <div class="filters__item">
            <label for="fav">
                <svg class="filter__icon">
                    <use xlink:href="#star"></use>
                </svg>
                <input type='checkbox' id='fav' data-pointtype="Любимое место" checked>
                <span class="filter__text">Любимые места</span>
            </label>
        </div>
        <div class="filters__item">
            <label for="unfin">
                <svg class="filter__icon">
                    <use xlink:href="#construct"></use>
                </svg>
                <input type='checkbox' id='unfin' data-pointtype="Незавершенное строительство" checked>
                <span class="filter__text">Незавершенное <br> строительство</span>
            </label>
        </div>
        <div class="filters__item">
            <label for="wish">
                <svg class="filter__icon">
                    <use xlink:href="#like"></use>
                </svg>
                <input type='checkbox' id='wish' data-pointtype="Пожелание" checked>
                <span class="filter__text">Пожелание</span>
            </label>
        </div>
        <div class="filters__item">
            <label for="default">
                <svg class="filter__icon">
                    <use xlink:href="#geotag"></use>
                </svg>
                <input type='checkbox' id='default' data-pointtype="Обычная" checked>
                <span class="filter__text">Обычная</span>
            </label>
        </div>
    </div>

    <div class="welcome__window hidden">
    <span class="close">&times</span>
        <div class="welcome__inner">
            <h1 class="welcome__header">Добро пожаловать, путник!</h1>
            <h2 class="welcome__subheader">Приветствую тебя, добрый путник!</h2>
            <p class="welcome__paragraph">Добро пожаловать на интерактивную карту города, где Вы сами сможете добавлять свои отметки с любимыми или не самыми любимыми местами!</p>

            <p class="welcome__paragraph">Так же Вы можете делиться интересными объектами со своими друзьями и знакомыми, оставлять лайки или дизлайки объектам, добавленным другими пользователями.</p>
        </div>
        <span class="close__welcomeBtn">Закрыть</span>
    </div>

    <svg style="display:none">

        <symbol id="address" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M49,18.92A23.74,23.74,0,0,0,25.27,42.77c0,16.48,17,31.59,22.23,35.59a2.45,2.45,0,0,0,3.12,0c5.24-4.12,22.1-19.11,22.1-35.59A23.74,23.74,0,0,0,49,18.92Zm0,33.71a10,10,0,1,1,10-10A10,10,0,0,1,49,52.63Z"/>
        </symbol>

        <symbol id="house" version="1.1" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                xml:space="preserve">
            <g>
                <g>
                    <path d="M494.989,411.241h-39.122v-30.112c20.574-7.081,35.403-26.617,35.403-49.565c0-28.901-23.512-52.414-52.414-52.414
                        s-52.414,23.512-52.414,52.414c0,22.947,14.829,42.484,35.403,49.565v30.112h-59.533V83.748c0-9.394-7.616-17.011-17.011-17.011
                        H166.697c-9.394,0-17.011,7.616-17.011,17.011v327.493H91.856v-30.112c20.574-7.081,35.403-26.617,35.403-49.565
                        c0-28.901-23.512-52.414-52.414-52.414c-28.901,0-52.415,23.512-52.415,52.414c0,22.947,14.83,42.484,35.404,49.565v30.112H17.011
                        C7.616,411.241,0,418.858,0,428.252s7.616,17.011,17.011,17.011h477.979c9.394,0,17.011-7.616,17.011-17.011
                        S504.385,411.241,494.989,411.241z M270.742,165.54c0-9.394,7.616-17.011,17.011-17.011c9.395,0,17.011,7.616,17.011,17.011
                        v21.547c0,9.394-7.616,17.011-17.011,17.011c-9.394,0-17.011-7.616-17.011-17.011V165.54z M270.742,263.069
                        c0-9.394,7.616-17.011,17.011-17.011s17.011,7.616,17.011,17.011v21.547c0,9.394-7.616,17.011-17.011,17.011
                        s-17.011-7.616-17.011-17.011V263.069z M207.235,165.54c0-9.394,7.616-17.011,17.011-17.011s17.011,7.616,17.011,17.011v21.547
                        c0,9.394-7.616,17.011-17.011,17.011s-17.011-7.616-17.011-17.011V165.54z M207.235,263.069c0-9.394,7.616-17.011,17.011-17.011
                        s17.011,7.616,17.011,17.011v21.547c0,9.394-7.616,17.011-17.011,17.011s-17.011-7.616-17.011-17.011V263.069z M306.575,411.24
                        h-99.447v-48.416c0-9.394,7.616-17.011,17.011-17.011h65.426c9.394,0,17.011,7.616,17.011,17.011V411.24z"/>
                </g>
            </g>
        </symbol>

        <symbol width="20px" style="margin-left: 5px" id="comment" viewBox="0 0 512 512"
                xmlns="http://www.w3.org/2000/svg">
            <path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z"/>
        </symbol>


        <symbol id="quote" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <rect x="0" fill="none" width="24" height="24"/>
            <g>
                <path d="M11.192 15.757c0-.88-.23-1.618-.69-2.217-.326-.412-.768-.683-1.327-.812-.55-.128-1.07-.137-1.54-.028-.16-.95.1-1.956.76-3.022.66-1.065 1.515-1.867 2.558-2.403L9.373 5c-.8.396-1.56.898-2.26 1.505-.71.607-1.34 1.305-1.9 2.094s-.98 1.68-1.25 2.69-.346 2.04-.217 3.1c.168 1.4.62 2.52 1.356 3.35.735.84 1.652 1.26 2.748 1.26.965 0 1.766-.29 2.4-.878.628-.576.94-1.365.94-2.368l.002.003zm9.124 0c0-.88-.23-1.618-.69-2.217-.326-.42-.77-.692-1.327-.817-.56-.124-1.074-.13-1.54-.022-.16-.94.09-1.95.75-3.02.66-1.06 1.514-1.86 2.557-2.4L18.49 5c-.8.396-1.555.898-2.26 1.505-.708.607-1.34 1.305-1.894 2.094-.556.79-.97 1.68-1.24 2.69-.273 1-.345 2.04-.217 3.1.165 1.4.615 2.52 1.35 3.35.732.833 1.646 1.25 2.742 1.25.967 0 1.768-.29 2.402-.876.627-.576.942-1.365.942-2.368v.01z"/>
            </g>
        </symbol>


        <symbol id="geotag" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#FF877F;" d="M115.038,353.143c-77.73-77.73-77.73-204.203,0-281.933C152.687,33.562,202.752,12.826,256,12.826
            c53.248,0,103.305,20.736,140.962,58.394c37.598,37.598,58.308,87.654,58.308,140.962s-20.702,103.364-58.3,140.962
            C396.245,353.869,256,493.875,256,493.875L115.038,353.143z"/>
            <path style="fill:#BDC4D0;" d="M256,301.773c-49.408,0-89.6-40.192-89.6-89.6s40.192-89.6,89.6-89.6s89.6,40.192,89.6,89.6
            S305.408,301.773,256,301.773z"/>
            <g>
                <path style="fill:#573A32;" d="M161.604,251.887l-22.852,13.193l12.8,22.178l23.202-13.397c5.623,7.39,12.177,13.943,19.567,19.567
                l-13.389,23.194l22.153,12.8l13.193-22.852c8.414,3.55,17.545,5.53,26.931,6.716v26.889h25.6v-26.889
                c9.387-1.186,18.517-3.166,26.931-6.716l13.193,22.852l22.153-12.8l-13.389-23.194c7.39-5.623,13.943-12.177,19.567-19.567
                l23.202,13.397l12.8-22.178l-22.852-13.193c3.541-8.414,5.53-17.536,6.716-26.923H384v-25.6h-26.889
                c-1.186-9.378-3.166-18.509-6.716-26.923l22.852-13.193l-12.8-22.178l-23.202,13.397c-5.623-7.39-12.177-13.943-19.567-19.567
                l13.389-23.194l-22.153-12.8l-13.201,22.852c-8.414-3.55-17.545-5.53-26.931-6.716V84.173h-25.6v26.889
                c-9.387,1.186-18.509,3.166-26.931,6.716l-13.201-22.852l-22.153,12.8l13.389,23.194c-7.39,5.623-13.943,12.177-19.567,19.567
                l-23.202-13.397l-12.8,22.178l22.852,13.193c-3.541,8.414-5.53,17.536-6.716,26.923H128v25.6h26.889
                C156.075,234.351,158.054,243.473,161.604,251.887z M256,135.373c42.351,0,76.8,34.449,76.8,76.8s-34.449,76.8-76.8,76.8
                c-42.351,0-76.8-34.449-76.8-76.8S213.649,135.373,256,135.373z"/>
                <path style="fill:#573A32;" d="M256,512c0,0,149.197-148.949,150.033-149.786c82.859-82.859,82.859-217.207,0-300.066
                C364.604,20.719,310.306,0,256,0c-54.298,0-108.604,20.719-150.033,62.148c-82.859,82.859-82.859,217.207,0,300.066
                C106.803,363.051,256,512,256,512z M124.083,80.265C159.326,45.03,206.174,25.626,256,25.626
                c49.835,0,96.683,19.405,131.917,54.639c72.738,72.738,72.738,191.087,0,263.825c-0.845,0.845-92.194,92.041-131.917,131.703
                c-39.723-39.663-131.072-130.859-131.908-131.695C51.354,271.36,51.354,153.003,124.083,80.265z"/>
            </g>
        </symbol>


        <symbol version="1.1" id="construct" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#CBCDD1;" d="M419.31,317.793c-19.421,0-35.31-15.89-35.31-35.31c0-5.297,3.531-8.828,8.828-8.828
                s8.828,3.531,8.828,8.828c0,9.71,7.945,17.655,17.655,17.655s17.655-7.945,17.655-17.655s-7.945-17.655-17.655-17.655
                c-2.648,0-4.414-0.883-6.179-2.648c-1.766-1.766-2.648-3.531-2.648-6.179V52.966c0-5.297,3.531-8.828,8.828-8.828l0,0
                c5.297,0,8.828,3.531,8.828,8.828v195.09c15.007,3.531,26.483,17.655,26.483,34.428C454.621,301.903,438.731,317.793,419.31,317.793
                "/>
            <path style="fill:#FEC24C;" d="M395.476,26.483L205.683,229.517h61.793c6.179,0,12.359,0.883,17.655,2.648l134.179-179.2
                C406.069,52.083,395.476,40.607,395.476,26.483"/>
            <path style="fill:#535353;" d="M379.586,512H105.931c-26.483,0-48.552-22.069-48.552-48.552l0,0
                c0-26.483,22.069-48.552,48.552-48.552h273.655c26.483,0,48.552,22.069,48.552,48.552l0,0C428.138,489.931,406.069,512,379.586,512"
            />
            <g>
                <path style="fill:#A2A2A2;" d="M136.828,463.448c0-12.359-9.71-22.069-22.069-22.069s-22.069,9.71-22.069,22.069
                    s9.71,22.069,22.069,22.069S136.828,475.807,136.828,463.448"/>
                <path style="fill:#A2A2A2;" d="M392.828,463.448c0-12.359-9.71-22.069-22.069-22.069c-12.359,0-22.069,9.71-22.069,22.069
                    s9.71,22.069,22.069,22.069C383.117,485.517,392.828,475.807,392.828,463.448"/>
            </g>
            <path style="fill:#BC8D2F;" d="M198.621,414.897h88.276v-26.483h-88.276V414.897z"/>
            <path style="fill:#FEC24C;" d="M180.966,247.172v70.621H84.745c-15.007,0-27.366,12.359-27.366,27.366v43.255h123.586h141.241
                V284.248c0-7.062-0.883-14.124-3.531-20.303c-7.945-21.186-28.248-34.428-51.2-34.428h-68.855
                C188.91,229.517,180.966,237.462,180.966,247.172"/>
            <g>
                <path style="fill:#BC8D2F;" d="M84.745,317.793c-15.007,0-27.366,12.359-27.366,27.366v7.945h44.138
                    c15.007,0,26.483-12.359,26.483-26.483v-8.828H84.745z"/>
                <path style="fill:#BC8D2F;" d="M265.71,229.517h-40.607v63.559c0,15.007,9.71,28.248,23.834,33.545l73.269,26.483v-68.855
                    c0-17.655-8.828-34.428-23.835-45.903C288.662,232.166,277.186,229.517,265.71,229.517"/>
            </g>
            <path style="fill:#CBCDD1;" d="M348.69,463.448c0-10.593,7.945-19.421,17.655-22.069l0,0H242.759H119.172l0,0
                c9.71,1.766,17.655,10.593,17.655,22.069s-7.945,19.421-17.655,22.069l0,0h123.586h123.586l0,0
                C356.634,482.869,348.69,474.041,348.69,463.448"/>
            <g>
                <path style="fill:#BC8D2F;" d="M448.441,26.483C448.441,11.476,436.966,0,421.959,0s-26.483,11.476-26.483,26.483
                    s11.476,26.483,26.483,26.483C436.083,52.966,448.441,41.49,448.441,26.483"/>
                <path style="fill:#BC8D2F;" d="M390.179,91.807l-3.531-47.669c0-2.648-0.883-4.414-2.648-5.297l-14.124,15.007l3.531,40.607
                    l-46.786,6.179l-17.655,19.421l3.531,56.497l-64.441,8.828l-15.89,16.772c1.766,1.766,3.531,2.648,6.179,2.648h0.883l75.035-9.71
                    l15.007-20.303l-3.531-54.731l49.434-6.179L390.179,91.807z"/>
            </g>
            <path style="fill:#A2A2A2;" d="M436.966,238.345h-35.31c-5.297,0-8.828-3.531-8.828-8.828s3.531-8.828,8.828-8.828h35.31
                c5.297,0,8.828,3.531,8.828,8.828S442.262,238.345,436.966,238.345"/>
            <g>

        </symbol>

        <symbol version="1.1" id="star" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px"
                viewBox="0 0 411.909 411.909" style="enable-background:new 0 0 411.909 411.909;" xml:space="preserve">
                    <g id="XMLID_1_">
                        <path id="XMLID_2086_" style="fill:#FFD422;" d="M190.421,18.888c2.918-5.912,8.939-9.656,15.533-9.656s12.615,3.743,15.533,9.656
                            l54.26,109.943l121.33,17.63c6.525,0.948,11.945,5.518,13.983,11.789c2.037,6.271,0.338,13.154-4.383,17.756l-87.795,85.579
                            l20.726,120.839c1.115,6.498-1.557,13.066-6.891,16.941c-5.334,3.875-12.406,4.387-18.242,1.318L205.955,343.63L97.433,400.685
                            c-5.836,3.068-12.908,2.557-18.242-1.318c-5.334-3.875-8.005-10.443-6.891-16.941l20.726-120.84L5.231,176.007
                            c-4.721-4.602-6.421-11.486-4.383-17.756c2.037-6.271,7.458-10.841,13.983-11.789l121.33-17.63L190.421,18.888z"/>
                        <path id="XMLID_868_" style="fill:#EEBF00;" d="M411.059,158.251c-2.037-6.271-7.458-10.841-13.983-11.789l-121.33-17.63
                            l-54.26-109.943c-2.918-5.912-8.939-9.656-15.533-9.656c-1.155,0,0,334.4,0,334.4l108.521,57.053
                            c5.836,3.068,12.908,2.557,18.242-1.318c5.334-3.876,8.005-10.443,6.891-16.941l-20.726-120.84l87.795-85.579
                            C411.398,171.405,413.097,164.521,411.059,158.251z"/>
                    </g>
            <g>

        </symbol>


        <symbol version="1.1" id="donut" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px"
                viewBox="0 0 83.13 83.13" enable-background="new 0 0 83.13 83.13" xml:space="preserve">
                <g id="_x39_">
                    <g>
                        <path fill="#E7AE76" d="M5.76,46.23c0.13,1.06,0.32,2.11,0.55,3.15c0.21,0.96,0.47,1.92,0.76,2.87
                            c1.68,5.41,4.67,10.52,8.96,14.81s9.39,7.28,14.81,8.95c0.95,0.3,1.9,0.55,2.87,0.77c1.04,0.23,2.09,0.42,3.15,0.55
                            c3.16,0.41,6.36,0.41,9.51-0.01c1.07-0.14,2.14-0.33,3.2-0.58c0.98-0.22,1.95-0.48,2.91-0.79c5.35-1.68,10.38-4.65,14.62-8.89
                            c4.23-4.24,7.2-9.26,8.89-14.6c0.31-0.97,0.57-1.94,0.79-2.92c0.24-1.06,0.43-2.13,0.58-3.2c0.43-3.22,0.43-6.5-0.01-9.72
                            c-0.15-1.11-0.36-2.22-0.61-3.31c-0.24-1.02-0.52-2.02-0.84-3.01c-1.71-5.24-4.64-10.16-8.8-14.32c-4.16-4.16-9.07-7.09-14.31-8.8
                            c-0.99-0.32-2-0.6-3.01-0.84c-1.1-0.26-2.21-0.46-3.33-0.61c-3.27-0.45-6.58-0.44-9.85,0.01c-1.14,0.16-2.28,0.37-3.4,0.64
                            c-1.03,0.24-2.05,0.53-3.06,0.87c-5.16,1.71-10.01,4.62-14.11,8.73c-4.11,4.1-7.02,8.95-8.74,14.11
                            c-0.33,1.01-0.62,2.03-0.86,3.06c-0.27,1.11-0.48,2.24-0.63,3.37C5.35,39.74,5.33,43.01,5.76,46.23z M33.32,49.76
                            c-4.56-4.55-4.56-11.94,0-16.49c4.55-4.55,11.94-4.55,16.49,0c4.56,4.55,4.56,11.94,0,16.49C45.26,54.32,37.87,54.32,33.32,49.76z
                            "/>
                    </g>
                    <g>
                        <path fill="#FDC784" d="M11.1,49.9c0.25,0.9,0.53,1.79,0.87,2.67c0.35,0.96,0.75,1.9,1.21,2.82c1.49,3.06,3.51,5.93,6.05,8.47
                            c2.55,2.55,5.42,4.57,8.49,6.05c0.92,0.46,1.86,0.86,2.81,1.21c0.88,0.33,1.78,0.62,2.68,0.86c5.54,1.52,11.42,1.5,16.95-0.06
                            c0.92-0.26,1.83-0.56,2.73-0.9c0.97-0.37,1.93-0.8,2.87-1.28c2.94-1.47,5.7-3.43,8.15-5.88c2.44-2.44,4.4-5.19,5.86-8.12
                            c0.49-0.94,0.92-1.9,1.29-2.88c0.35-0.9,0.65-1.81,0.9-2.73c1.63-5.74,1.59-11.85-0.09-17.57c-0.28-0.96-0.61-1.9-0.98-2.83
                            c-0.42-1.03-0.89-2.05-1.43-3.04c-1.42-2.7-3.28-5.24-5.55-7.51s-4.79-4.12-7.48-5.55c-0.99-0.53-2.01-1-3.04-1.42
                            c-0.94-0.38-1.89-0.71-2.85-1c-5.93-1.74-12.28-1.72-18.2,0.08c-0.98,0.3-1.95,0.65-2.9,1.05c-1.07,0.44-2.11,0.94-3.13,1.52
                            c-2.54,1.39-4.93,3.17-7.08,5.32c-2.16,2.16-3.94,4.55-5.34,7.1c-0.57,1.02-1.07,2.06-1.51,3.13c-0.4,0.95-0.74,1.91-1.04,2.89
                            C9.6,38.02,9.52,44.14,11.1,49.9z M33.32,49.76c-4.56-4.55-4.56-11.94,0-16.49c4.55-4.55,11.94-4.55,16.49,0
                            c4.56,4.55,4.56,11.94,0,16.49C45.26,54.32,37.87,54.32,33.32,49.76z"/>
                    </g>
                    <g>
                        <path d="M3.45,41.52c0,1.87,0.13,3.73,0.4,5.55c0.17,1.16,0.39,2.3,0.66,3.43c1.62,6.75,5.07,12.94,10.1,17.97
                            c5.03,5.03,11.22,8.48,17.96,10.1c1.12,0.27,2.26,0.49,3.41,0.66c1.83,0.26,3.7,0.4,5.59,0.4c1.91,0,3.8-0.14,5.65-0.41
                            c0.01,0.01,0.01,0.01,0.01,0c1.17-0.18,2.33-0.4,3.47-0.69c6.69-1.63,12.83-5.07,17.82-10.06c4.99-4.99,8.43-11.12,10.06-17.81
                            c0.29-1.15,0.51-2.31,0.69-3.49v-0.01c0.27-1.85,0.41-3.73,0.41-5.64c0-1.93-0.14-3.83-0.42-5.7c-0.18-1.22-0.42-2.43-0.72-3.61
                            V32.2c-1.65-6.62-5.07-12.69-10.02-17.64S57.5,6.19,50.88,4.54c-1.2-0.3-2.42-0.54-3.65-0.73h-0.01
                            c-1.85-0.27-3.74-0.41-5.65-0.41c-1.95,0-3.88,0.15-5.77,0.43c-1.25,0.19-2.48,0.44-3.69,0.75c-6.57,1.66-12.59,5.07-17.5,9.98
                            C9.7,19.47,6.3,25.49,4.63,32.05c-0.31,1.21-0.56,2.44-0.75,3.68C3.6,37.63,3.45,39.56,3.45,41.52z M8.75,50.92
                            c-0.25-0.9-0.47-1.81-0.65-2.74c-0.43-2.17-0.65-4.4-0.65-6.66c0-2.45,0.26-4.85,0.76-7.19c0.21-0.99,0.46-1.98,0.76-2.94
                            c0.31-1,0.66-1.98,1.06-2.94v-0.01c1.69-4.08,4.19-7.82,7.41-11.05c3.26-3.26,7-5.71,11.01-7.36c0.97-0.41,1.95-0.76,2.95-1.06
                            c0.97-0.31,1.95-0.57,2.94-0.78c2.38-0.51,4.8-0.77,7.23-0.77c2.36,0,4.73,0.24,7.05,0.74c0.98,0.2,1.95,0.44,2.9,0.74
                            c0.98,0.29,1.94,0.63,2.89,1.01c4.11,1.66,7.96,4.15,11.28,7.48c3.33,3.33,5.83,7.19,7.49,11.31c0.39,0.95,0.73,1.91,1.02,2.89
                            c0.29,0.95,0.54,1.92,0.73,2.89c0.96,4.56,0.98,9.29,0.05,13.87c-0.19,0.94-0.42,1.87-0.69,2.8c-0.28,0.94-0.59,1.88-0.96,2.8
                            c-0.01-0.01-0.01,0-0.01,0c-1.65,4.26-4.2,8.26-7.63,11.69c-3.44,3.44-7.45,6-11.72,7.65c-0.91,0.36-1.84,0.68-2.78,0.96
                            c-0.93,0.27-1.87,0.5-2.81,0.68c-4.44,0.9-9.03,0.91-13.47,0.04c-0.93-0.18-1.84-0.41-2.75-0.67c-0.92-0.26-1.83-0.56-2.73-0.91
                            c-4.38-1.65-8.47-4.23-11.99-7.75c-3.46-3.46-6.08-7.53-7.77-11.97C9.33,52.77,9.02,51.85,8.75,50.92z"/>
                    </g>
                    <g>
                        <g>
                            <path fill="#D5618D" d="M2,41.55c0,2.27,0.69,4.05,1.85,5.52c0.67,0.86,1.51,1.61,2.46,2.31c0.74,0.54,1.57,1.05,2.44,1.54
                                c1.01,0.57,2.1,1.11,3.22,1.65c3.91,1.9,8.24,3.83,11.5,7.09c3.24,3.24,5.17,7.56,7.06,11.46c0.54,1.11,1.07,2.18,1.63,3.18
                                c0.49,0.89,1.01,1.72,1.55,2.48c0.69,0.94,1.43,1.77,2.27,2.45c1.49,1.19,3.28,1.9,5.59,1.9c2.32,0,4.14-0.71,5.65-1.91
                                c0.01,0.01,0.01,0.01,0.01,0c0.87-0.68,1.64-1.52,2.34-2.48c0.57-0.76,1.1-1.6,1.62-2.49c0.57-1.02,1.13-2.11,1.7-3.23
                                c1.89-3.78,3.85-7.94,7.02-11.11c3.18-3.19,7.35-5.15,11.15-7.05c1.12-0.57,2.21-1.12,3.23-1.71c0.89-0.51,1.73-1.04,2.49-1.61
                                c0.96-0.71,1.81-1.49,2.49-2.37v-0.01c1.17-1.5,1.86-3.3,1.86-5.59c0-2.34-0.7-4.2-1.87-5.75c-0.68-0.93-1.54-1.75-2.52-2.51
                                c-0.78-0.61-1.63-1.17-2.54-1.72c-1.05-0.63-2.16-1.24-3.31-1.86c-3.58-1.92-7.47-3.92-10.52-6.97
                                c-3.06-3.06-5.06-6.96-6.98-10.55c-0.62-1.15-1.23-2.26-1.87-3.31c-0.55-0.92-1.13-1.78-1.74-2.56
                                c-0.77-0.99-1.61-1.85-2.55-2.53h-0.01C45.68,2.67,43.86,2,41.57,2c-2.33,0-4.2,0.68-5.77,1.83c-0.96,0.69-1.82,1.56-2.6,2.55
                                c-0.64,0.79-1.24,1.66-1.8,2.59c-0.68,1.07-1.31,2.21-1.96,3.37c-1.92,3.47-3.93,7.2-6.91,10.18c-2.97,2.97-6.69,4.97-10.15,6.89
                                c-1.18,0.66-2.33,1.31-3.41,1.98c-0.9,0.56-1.76,1.14-2.54,1.76c-0.99,0.78-1.86,1.62-2.55,2.58C2.7,37.31,2,39.19,2,41.55z
                                 M33.32,49.76c-4.56-4.55-4.56-11.94,0-16.49c4.55-4.55,11.94-4.55,16.49,0c4.56,4.55,4.56,11.94,0,16.49
                                C45.26,54.32,37.87,54.32,33.32,49.76z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path fill="#EC6F93" d="M10.85,41.51c0,7.86,10.66,8.06,16.66,14.06c0.83,0.83,1.54,1.74,2.18,2.71
                                c0.25,0.37,0.49,0.75,0.71,1.14c3.47,5.84,4.81,12.81,11.17,12.81c7.86,0,8.24-10.47,14.24-16.47c5.99-6,16.47-6.38,16.47-14.24
                                c0-7.86-10.12-8.6-16.12-14.6c-5.99-6-6.73-16.12-14.59-16.12c-7.86,0-8.79,9.94-14.78,15.94
                                C20.79,32.73,10.85,33.65,10.85,41.51z M33.32,49.76c-4.56-4.55-4.56-11.94,0-16.49c4.55-4.55,11.94-4.55,16.49,0
                                c4.56,4.55,4.56,11.94,0,16.49C45.26,54.32,37.87,54.32,33.32,49.76z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M0,41.55c0,4.11,1.85,6.85,4.51,8.95c0.79,0.64,1.65,1.22,2.56,1.75c0.83,0.5,1.71,0.97,2.6,1.42
                                c0.8,0.4,1.62,0.8,2.43,1.19c0.36,0.17,0.72,0.35,1.08,0.53c3.2,1.55,6.41,3.22,8.87,5.69c1.37,1.37,2.5,2.97,3.5,4.67
                                c0.79,1.34,1.49,2.75,2.17,4.16c0.19,0.37,0.37,0.75,0.55,1.12c0.38,0.79,0.76,1.58,1.16,2.36c0.44,0.9,0.91,1.78,1.41,2.62
                                c0.53,0.91,1.1,1.77,1.73,2.56c2.12,2.68,4.87,4.56,9,4.56c4.17,0,6.97-1.9,9.13-4.6c0.65-0.8,1.23-1.67,1.78-2.58
                                c0.52-0.86,1.01-1.75,1.49-2.66c0.37-0.73,0.74-1.46,1.1-2.19c0.23-0.45,0.45-0.9,0.69-1.36c1.53-3.03,3.19-6.05,5.56-8.42
                                c2.37-2.37,5.41-4.04,8.45-5.58c0.44-0.22,0.89-0.45,1.33-0.67c0.74-0.37,1.48-0.74,2.22-1.12c0,0,0-0.01,0.01,0
                                c0.91-0.48,1.8-0.97,2.66-1.49c0.92-0.55,1.79-1.15,2.59-1.8c2.68-2.16,4.55-4.95,4.55-9.1c0-4.22-1.89-7.09-4.59-9.35V32.2
                                c-0.82-0.68-1.71-1.31-2.64-1.9c-0.88-0.56-1.79-1.09-2.72-1.6c-0.65-0.36-1.3-0.71-1.95-1.06c-0.59-0.32-1.18-0.63-1.77-0.95
                                c-2.75-1.51-5.47-3.14-7.68-5.35c-2.21-2.21-3.85-4.94-5.35-7.71c-0.32-0.57-0.63-1.15-0.94-1.73c-0.36-0.66-0.71-1.33-1.08-1.99
                                c-0.51-0.93-1.04-1.85-1.62-2.73c-0.58-0.93-1.22-1.82-1.91-2.64C48.63,1.87,45.76,0,41.57,0c-4.25,0-7.16,1.89-9.46,4.58
                                c-0.72,0.82-1.37,1.73-1.97,2.67c-0.6,0.9-1.15,1.83-1.69,2.78c-0.35,0.6-0.68,1.21-1.02,1.81c-0.37,0.67-0.74,1.35-1.12,2.02
                                c-1.48,2.59-3.09,5.15-5.19,7.25c-2.1,2.1-4.65,3.7-7.23,5.17c-0.68,0.39-1.36,0.76-2.04,1.14c-0.61,0.34-1.22,0.68-1.82,1.02
                                v0.01c-0.93,0.52-1.86,1.07-2.74,1.64c-0.94,0.61-1.83,1.26-2.66,1.96C1.92,34.36,0,37.28,0,41.55z M13.84,51.26
                                c-0.98-0.47-1.89-0.92-2.74-1.36c-1.12-0.58-2.12-1.14-3-1.72c-0.93-0.62-1.71-1.26-2.34-1.95C4.61,44.95,4,43.48,4,41.55
                                c0-2.04,0.63-3.63,1.8-5.03c0.64-0.78,1.45-1.5,2.41-2.19c0.91-0.68,1.96-1.34,3.13-2.03c0.76-0.44,1.58-0.9,2.45-1.38
                                c3.33-1.84,7.11-3.94,10.15-6.98c3.05-3.05,5.14-6.82,6.99-10.16c0.49-0.88,0.95-1.71,1.41-2.49c0.68-1.16,1.33-2.2,2-3.1
                                c0.72-0.98,1.45-1.8,2.26-2.45C37.98,4.61,39.56,4,41.57,4c1.98,0,3.53,0.61,4.88,1.73c0.78,0.65,1.49,1.46,2.17,2.43
                                c0.65,0.89,1.28,1.91,1.92,3.05c0.46,0.8,0.93,1.67,1.42,2.58c1.83,3.42,3.9,7.29,7,10.38c3.09,3.09,6.96,5.17,10.38,7
                                c0.9,0.48,1.74,0.94,2.53,1.39c1.14,0.65,2.16,1.27,3.06,1.92c0.96,0.67,1.77,1.38,2.42,2.14c1.15,1.36,1.78,2.93,1.78,4.94
                                c0,1.96-0.62,3.47-1.77,4.78c-0.65,0.71-1.44,1.37-2.38,2.01c-0.88,0.6-1.89,1.19-3.02,1.78c-0.82,0.44-1.7,0.89-2.64,1.36
                                c-3.59,1.79-7.64,3.82-10.82,7c-3.18,3.18-5.21,7.24-7,10.82c-0.46,0.93-0.91,1.8-1.34,2.61c-0.6,1.12-1.18,2.13-1.78,3.01
                                c-0.63,0.95-1.29,1.75-2.01,2.39c-1.31,1.18-2.83,1.81-4.8,1.81c-1.94,0-3.42-0.63-4.71-1.8c-0.69-0.63-1.33-1.42-1.95-2.36
                                c-0.57-0.88-1.13-1.88-1.7-2.99c-0.44-0.84-0.88-1.73-1.34-2.69c-1.76-3.66-3.77-7.82-6.99-11.04c-1.61-1.61-3.45-2.92-5.35-4.05
                                C17.63,53.08,15.67,52.14,13.84,51.26z"/>
                        </g>
                    </g>
                    <g>
                        <path d="M31.904,51.173L31.904,51.173c-2.582-2.578-4.004-6.008-4.004-9.658c0-3.651,1.423-7.082,4.006-9.659
                            c2.578-2.578,6.009-3.998,9.659-3.998s7.081,1.42,9.658,3.996c2.584,2.579,4.007,6.01,4.007,9.661s-1.423,7.082-4.004,9.658
                            c-2.579,2.584-6.01,4.007-9.661,4.007S34.483,53.757,31.904,51.173z M34.733,34.686c-1.827,1.822-2.833,4.248-2.833,6.829
                            s1.006,5.007,2.833,6.829l0.003,0.003c1.822,1.827,4.248,2.833,6.829,2.833s5.007-1.006,6.832-2.836
                            c1.827-1.822,2.833-4.248,2.833-6.829s-1.006-5.007-2.834-6.831c-1.884-1.883-4.356-2.824-6.83-2.824
                            C39.091,31.86,36.617,32.801,34.733,34.686z"/>
                    </g>
                    <g>
                        <path fill="#FFF2BC" d="M40.967,19.054c0.497,0,0.993-0.189,1.371-0.568l1.197-1.198c0.757-0.757,0.757-1.985-0.001-2.742
                            c-0.758-0.756-1.985-0.756-2.742,0.001l-1.197,1.198c-0.757,0.757-0.757,1.985,0.001,2.742
                            C39.975,18.864,40.471,19.054,40.967,19.054z"/>
                    </g>
                    <g>
                        <path fill="#FFF2BC" d="M40.967,69.054c0.497,0,0.993-0.189,1.371-0.568l1.197-1.198c0.757-0.757,0.757-1.985-0.001-2.742
                            c-0.758-0.756-1.985-0.756-2.742,0.001l-1.197,1.198c-0.757,0.757-0.757,1.985,0.001,2.742
                            C39.975,68.864,40.471,69.054,40.967,69.054z"/>
                    </g>
                    <g>
                        <path fill="#FFF2BC" d="M60.387,31.786c0-0.497-0.189-0.993-0.568-1.371l-1.198-1.197c-0.757-0.757-1.985-0.757-2.742,0.001
                            c-0.756,0.758-0.756,1.985,0.001,2.742l1.198,1.197c0.757,0.757,1.985,0.757,2.742-0.001
                            C60.198,32.778,60.387,32.282,60.387,31.786z"/>
                    </g>
                    <g>
                        <path fill="#FFF2BC" d="M25.7,31.02c-0.351-0.351-0.836-0.568-1.371-0.568l-1.693,0c-1.071,0-1.939,0.869-1.939,1.939
                            c0.002,1.07,0.869,1.939,1.939,1.939l1.693,0c1.071,0,1.939-0.869,1.939-1.939C26.268,31.856,26.051,31.371,25.7,31.02z"/>
                    </g>
                    <g>
                        <path fill="#FFF2BC" d="M18.187,43.156c0-0.497-0.189-0.993-0.568-1.371l-1.198-1.197c-0.757-0.757-1.985-0.757-2.742,0.001
                            c-0.756,0.758-0.756,1.985,0.001,2.742l1.198,1.197c0.757,0.757,1.985,0.757,2.742-0.001
                            C17.997,44.149,18.187,43.653,18.187,43.156z"/>
                    </g>
                    <g>
                        <path fill="#FFF2BC" d="M34.658,56.52c-0.351-0.351-0.836-0.568-1.371-0.568l-1.693,0c-1.071,0-1.939,0.869-1.939,1.939
                            c0.002,1.07,0.869,1.939,1.939,1.939l1.693,0c1.071,0,1.939-0.869,1.939-1.939C35.226,57.356,35.009,56.871,34.658,56.52z"/>
                    </g>
                    <g>
                        <path fill="#FFF2BC" d="M68.055,44.099c0.497,0,0.993-0.189,1.371-0.568l1.197-1.198c0.757-0.757,0.757-1.985-0.001-2.742
                            c-0.758-0.756-1.985-0.756-2.742,0.001l-1.197,1.198c-0.757,0.757-0.757,1.985,0.001,2.742
                            C67.063,43.909,67.559,44.099,68.055,44.099z"/>
                    </g>
                </g>
            </symbol>


        <symbol version="1.1" id="like" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#FFDAB3;" d="M363.965,56.475c0-27.538-21.881-50.542-49.416-50.905c-26.562-0.349-48.515,20.086-50.573,46.047
                c-10.743,49.396-34.276,65.225-120.774,154.295l-26.332,0.003c-9.18,0-16.696,7.477-16.696,16.696v233.739
                c0,9.219,7.474,16.693,16.693,16.693h294.959c37.53-0.022,62.793-40.435,43.4-74.637c21.714-13.764,30.639-42.193,16.696-66.783
                c21.714-13.764,30.639-42.193,16.696-66.783c14.01-8.88,23.371-24.411,23.383-42.23c-0.018-27.668-22.419-50.07-50.087-50.087
                H340.38C354.225,130.991,363.965,100.955,363.965,56.475L363.965,56.475z"/>
            <path style="fill:#32BBFF;" d="M116.87,172.523H16.696C7.515,172.523,0,180.001,0,189.219v300.522
                c0,9.214,7.482,16.693,16.696,16.693H116.87c9.214,0,16.696-7.48,16.696-16.693V189.219
                C133.565,180.001,126.05,172.523,116.87,172.523z"/>
            <path style="fill:#2C9FD9;" d="M116.87,172.523H66.783v333.911h50.087c9.214,0,16.696-7.482,16.696-16.693V189.219
                C133.565,180.001,126.049,172.523,116.87,172.523z"/>
            <path style="fill:#FFC3A6;" d="M461.913,172.523h-27.826l-300.52,300.519h278.259c37.53-0.022,62.793-40.435,43.4-74.637
                c21.714-13.764,30.639-42.193,16.696-66.783c21.714-13.764,30.639-42.193,16.696-66.783c14.01-8.88,23.371-24.411,23.383-42.23
                C511.981,194.942,489.581,172.54,461.913,172.523z"/>

            </symbol>

        <symbol version="1.1" id="like1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
                <g>
                    <path d="M512,304.021c0-12.821-5.099-24.768-13.867-33.6c9.963-10.901,15.019-25.536,13.632-40.725
                        c-2.475-27.115-26.923-48.363-55.616-48.363H324.395c6.485-19.819,16.939-56.149,16.939-85.333c0-46.272-39.317-85.333-64-85.333
                        c-22.165,0-38.016,12.459-38.677,12.992c-2.539,2.048-3.989,5.099-3.989,8.341v72.32l-61.44,133.141l-2.56,1.28v-4.075
                        c0-5.888-4.779-10.667-10.667-10.667H53.333C23.936,224,0,247.936,0,277.333V448c0,29.397,23.936,53.333,53.333,53.333h64
                        c23.083,0,42.773-14.72,50.219-35.243c17.749,9.131,41.643,13.931,56.469,13.931H419.84c23.232,0,43.541-15.68,48.32-37.269
                        c2.453-11.115,1.024-22.315-3.84-32.043c15.744-7.936,26.347-24.171,26.347-42.688c0-7.552-1.728-14.784-5.013-21.333
                        C501.397,338.752,512,322.517,512,304.021z M149.333,448c0,17.643-14.379,32-32,32h-64c-17.664,0-32-14.357-32-32V277.333
                        c0-17.643,14.357-32,32-32v0.107h95.957v10.667c0,0.064,0.043,0.107,0.043,0.171V448z M466.987,330.368
                        c-4.117,0.469-7.595,3.264-8.896,7.211c-1.301,3.925-0.235,8.277,2.795,11.115c5.44,5.141,8.427,12.011,8.427,19.349
                        c0,13.44-10.155,24.768-23.637,26.304c-4.117,0.469-7.595,3.264-8.896,7.211c-1.301,3.925-0.235,8.277,2.795,11.115
                        c7.04,6.635,9.856,15.936,7.744,25.472c-2.624,11.883-14.187,20.523-27.499,20.523H224c-15.851,0-41.365-6.848-53.333-15.744
                        V262.656l15.381-7.68c2.155-1.088,3.883-2.88,4.907-5.077l64-138.667c0.64-1.387,0.981-2.923,0.981-4.459V37.909
                        c4.437-2.453,12.139-5.803,21.333-5.803c11.691,0,42.667,29.077,42.667,64c0,37.525-20.416,91.669-20.629,92.203
                        c-1.237,3.264-0.811,6.955,1.195,9.835c2.005,2.88,5.269,4.608,8.789,4.608h146.795c17.792,0,32.896,12.715,34.389,28.971
                        c1.131,12.16-4.672,23.723-15.168,30.187c-3.285,2.005-5.205,5.653-5.056,9.493c0.128,3.84,2.347,7.296,5.781,9.067
                        c9.003,4.608,14.592,13.653,14.592,23.595C490.603,317.504,480.448,328.832,466.987,330.368z"/>
                </g>
            </g>
            </symbol>


    </svg>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</div>
</body>

</html>
