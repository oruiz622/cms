@if ($paginator->hasPages())
<nav class="flexbox mt-30">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="page-item disabled" aria-disabled="true">
        <span class="btn btn-white disabled page-link"><i class="fas fa-arrow-left fs-9 mr-4"></i>
            Previous Page</span>
    </li>
    @else
    <li class="page-item">
        <a class="btn btn-white page-link" href="{{ $paginator->previousPageUrl() }}"><i
                class="fas fa-arrow-left fs-9 mr-4"></i> Previous Page</a>
    </li>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="page-item">
        <a class="btn btn-white page-link" href="{{ $paginator->nextPageUrl() }}">Next Page<i
                class="fas fa-arrow-right fs-9 ml-4"></i></a>
    </li>
    @else
    <li class="page-item disabled" aria-disabled="true">
        <span class="btn btn-white page-link" href="#">Next Page<i class="fas fa-arrow-right fs-9 ml-4"></i></span>
    </li>
    @endif
</nav>
@endif
