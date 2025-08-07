 @if ($paginator->hasPages())
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}&{{ http_build_query(request()->except('page')) }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">{{ $element }}</span>
                </li>
                @endif

                {{-- Array Of Links --}}
                {{-- @if (is_object($element))
                @if ($element->label == $paginator->currentPage())
                <li class="page-item active" aria-current="page"><span class="page-link">{{ $element->label }}</span></li>
                @else

                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->parseUrl($element->url) }}&{{ http_build_query(request()->except('page')) }}">
                        {{ $element->label }}
                    </a>
                </li>
                @endif
                @endif --}}

                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="page-item active" aria-current="page"> <span class="page-link">{{ $page }}</span></li>
                @else
                <li class="page-item">
                    {{-- <a class="page-link" href="{{ $paginator->parseUrl($element->url) }}&{{ http_build_query(request()->except('page')) }}">
                    {{ $element->label }}
                    </a> --}}
                    <a class="page-link" href="{{ $url }}&{{ http_build_query(request()->except('page')) }}">{{ $page }}</a>
                </li>
                @endif
                @endforeach
                @endif
                @endforeach


                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}&{{ http_build_query(request()->except('page')) }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
                @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
                @endif

            </ul>
            @endif