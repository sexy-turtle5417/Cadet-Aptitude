@if ($paginator->hasPages())
    <div class=" w-full gap-3">

        <div class="ml-auto">
            <nav>
                <ul class="pagination join bg-base-100 shadow">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span aria-hidden="true">«</span>
                        </li>
                    @else
                        <li>
                            <a class="join-item btn" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <li class="btn-disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="join-item btn btn-active" aria-current="page">
                                        <span>{{ $page }}</span>
                                    </li>
                                @else
                                    <li><a href="{{ $url }}" class="join-item btn">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li>
                            <a class="join-item btn" href="{{ $paginator->nextPageUrl() }}" rel="next"
                                aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>

    </div>
@endif
