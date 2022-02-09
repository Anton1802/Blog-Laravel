extends('index')

@section('title', 'Регистрация')


@section('content')
<div class="autho">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
        <form action="{{ route('register_process') }}" method="POST">
            @csrf
            @if($errors->any())
            @include('errors.error')
            @endif
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="">
            </div>
            <div class="form-group">
                <label>Пароль</label>
                <input type="password" class="form-control" name="password" value="">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Регистрация</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
