@if ($paginator->hasPages())
<div class="container">
<nav>
  <div>
  <ul class="pagination">
    @if(!$paginator->onFirstPage())
    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Пред</a></li>
    @endif
    @if($paginator->hasMorePages())
    <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">След</a></li>
    @endif
  </ul>
  </div>
</nav>
</div>
@endif
