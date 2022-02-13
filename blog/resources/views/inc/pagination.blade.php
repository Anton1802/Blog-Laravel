@if ($paginator->hasPages())
<div class="container">
<nav>
  <div>
  <ul class="pagination">
    @if(!$paginator->onFirstPage())
    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Предыдущая</a></li>
    @endif
    @if($paginator->hasMorePages())
    <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Следующая</a></li>
    @endif
  </ul>
  </div>
</nav>
</div>
@endif
