@extends('layout')

@section('title')Регистрация пользователя@endsection

@section('main_content')
    <div class="container">
        <h1 class="display-1 m-5 text-center">Регистрация</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="m-auto w-50" method="POST" action="/registration/check">
            @csrf
            <!-- /column -->
            <div>
                <div class="form-floating mb-4">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                    <label for="form_email">Email *</label>
                    <div class="invalid-feedback"> Введите свою почту. </div>
                </div>
            </div>
            <!-- /column -->
            <div>
                <div class="form-floating mb-4">
                    <input id="form_name" type="text" name="name" class="form-control" required>
                    <label for="form_name">ФИО *</label>
                    <div class="invalid-feedback"> Введите свои ФИО. </div>
                </div>
            </div>
            <!-- /column -->
            <div>
                <div class="form-floating mb-4">
                    <input id="form_password" type="password" name="password" class="form-control" required>
                    <label for="form_password">Пароль *</label>
                    <div class="invalid-feedback"> Некорректный пароль. </div>
                </div>
            </div>
            <!-- /column -->
            <div>
                <div class="form-floating mb-4">
                    <input id="form_password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                    <label for="form_password_confirmation">Повтор пароля *</label>
                    <div class="invalid-feedback"> Некорректный пароль. </div>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember_token" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Запомнить меня
                </label>
            </div>
            <!-- /column -->
            <div class="col-12 text-center">
                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Регистрация">
                <p class="text-muted"><strong>*</strong> Эти поля обязательны</p>
            </div>
            <!-- /column -->
        </form>
    </div>
@endsection
