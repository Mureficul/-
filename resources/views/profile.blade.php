@extends('layouts/header')
@section('title')
User
@endsection
@section('select_main')
    main_profile
@endsection
@section('main')
<div class="center_profile">
<h1>Ваш акаунт</h1>
<img  src="images/profile.png"width="100px">
    <div class="text"> <div class="pol"  id="pol"  ><p>Пользователь</p></div>
<p>Ваши публикации:</p><p>У вас пока нет публикаций</p>
</div>
</div>
@endsection
