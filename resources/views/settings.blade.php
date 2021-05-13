@extends('layouts/header')
@section('title')
    Settings
@endsection
@section('select_main')
    main_dop
@endsection
@section('main')

<div class="center-qwe">
    <ul>
        <li><div class="set"><p>Пароль<br><button>Изменить</button></p></div></li>
        <li><div class="set"><p>Электронная почта<br><button>Изменить</button></p></div></li>
        <li><div class="set"><p>Имя пользователя<br><button>Изменить</button></p></div></li>
        <li><div class="set"><p>Публиковать записи</p>
                <p> <button>От своего имени</button></p>
                <p><button>Анонимно</button></p></div>
        </li>
        <li><div class="set"><p>Получать уведомления о публикациях понравившихся авторов</p>
                <p><button>Уведомлять</button></p>
                <p><button>Не требуется</button></p></div>
        </li>
    </ul>
</div>
@endsection



