@extends('layouts.app')

@section('title-block')Это страница контактов!@endsection

@section('content')
    <h1>Это страница контактов!</h1><br>

    <form action="{{ route('contact_form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите адрес электронной почты</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Введите тему</label>
            <input type="text" name="subject" placeholder="Введите тему" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" placeholder="Введите ваше сообщение" id="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
