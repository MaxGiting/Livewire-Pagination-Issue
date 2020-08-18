<div>
@if ($paginator->hasPages())
    Showing
    <span>{{ $paginator->firstItem() }}</span>
    to
    <span>{{ $paginator->lastItem() }}</span>
    of
    <span>{{ $paginator->total() }}</span>
    results

    <nav>
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{ $page }}
                    @else
                        <button wire:click="gotoPage({{ $page }})">
                            {{ $page }}
                        </button>
                    @endif
                @endforeach
            @endif
        @endforeach
    </nav>
@endif
</div>