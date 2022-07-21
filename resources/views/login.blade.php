@extends('layout')

@section('main_content')
    <div class="container mb-14">
        <h1 class="display-1 m-5 text-center">Вход</h1>
        <form class="m-auto w-50" method="post" action="/login/check">
            @csrf
            <div>
                <div class="form-floating mb-4">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                    <label for="form_email">Email *</label>
                    <div class="invalid-feedback"> Введите свою почту. </div>
                </div>
            </div>
            <div>
                <div class="form-floating mb-4">
                    <input id="form_password" type="password" name="password" class="form-control" required>
                    <label for="form_password">Пароль *</label>
                    <div class="invalid-feedback"> Некорректный пароль. </div>
                </div>
            </div>
                <!-- /column -->
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Войти">
                    <p class="text-muted"><strong>*</strong> Эти поля обязательны</p>
                </div>
            <div class="mt-10 text-center">
                <a href="/registration">Регистрация</a>
            </div>
                <!-- /column -->
            <!-- /.row -->
        </form>
    </div>
@endsection
