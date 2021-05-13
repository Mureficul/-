@extends('layouts/header')
@section('title')
NewPost
@endsection
@section('select_main')
main_add
@endsection
@section('main')
<div class="vvod">
    <div class="inf">
        @if($errors->any())
            <div class="alert alert-danger"></div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>

        @endif
        <form method="post" action="/add/check" >
            @csrf
        <input type="text" name="text"id="text" placeholder="Введите текст для публикации" class="form-control">
            <button  type="submit" class="btn-success">
                <img  src="images/enter.png" style="height:40px; width:30px; margin-top:600px;">
            </button>
            <button   type="file" name="file" id="file" class="btn-success">
                <img  src="images/add_file.png"style="height:35px; width:30px;margin-top:650px;">
            </button>
        </form>
    </div>
</div>
@endsection
