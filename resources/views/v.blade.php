@extends('layouts/header')
@section('title')
    MainMenu
@endsection
@section('select_main')
    main
@endsection
@section('main')
                <div class="center">
                <div class="center-top">
                    <div id="BtnCont">
                        <button class="btn active" onclick="filterSelection('all')"><p>Show all</p></button>
                        <button class="btn" onclick="filterSelection('inform')"><p>Information</p></button>
                        <button class="btn" onclick="filterSelection('news')"><p>News</p></button>
                        <button class="btn" onclick="filterSelection('study')"><p>Study</p></button>
                        <button class="btn" onclick="filterSelection('art')"><p>Art</p></button>
                    </div>

                </div>
                <div  class="filter inform">
                    <div  class="q">
                        <img  src="images/005.jpg">

                        <p>Greetings<br>
                            Добропожаловать, путник!
                            Ты забрёл в место где ты можешь делиться своим творчеством,
                            искать полезную информацию,
                            новости или просто усладу для глаз.
                            <br>
                            <a href="/q">
                                <button>
                                    More
                                </button>
                            </a>
                        </p>

                    </div>
                </div>
                <div  class="filter news">
                    <div  class="q">
                        <img  src="images/news.jpg">
                        <p> Start computers<br>
                        В 40-х годах прошлого столетия функционировало сразу
                        несколько компьютеров, которые можно назвать первыми.
                        <br>
                        Однако еще в 1822 году изобретатель Чарльз Бэббидж выпустил счетную машину,
                        которую с большой натяжкой можно назвать компьютером.
                        <br>
                        Уже в 1941 году компанией IBM при участии математика Говарда Эйксона была разработана
                        и выпущена усовершенствованная машина «Марк 1» (по чертежам Чарльза Бэббиджа).
                        <br>
                        Это первый в США программируемый аппарат, который применялся
                        для разработки военного оборудования.
                        <br>
                        <a href="/w">
                            <button>
                                More
                            </button>
                        </a>



                    </div>
                </div>

                <div  class="filter art">
                    <div  class="q">
                        <img  src="images/1.jpg">

                        <p>Sunrise!<br>Рассвет на Киевском Вокзале. Слепит даже через фото.
                            <br>
                            <a href="/e">
                                <button>
                                    More
                                </button>
                            </a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="right">
                <a href="https://www.instagram.com/"><img class="inst" src="images/inst.jpg"height="150px"width="285px"></a>
                <a href="https://www.reserved.com/ru/ru/"><img class="res" src="images/res.jpg"height="150px"width="285px"></a>
            </div>

        </div>

    </div>

</div>
<script src="js/js.js"></script>
@endsection
