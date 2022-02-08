<div class="alert alert-danger">
<ul>
  Ошибка!
</ul>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
