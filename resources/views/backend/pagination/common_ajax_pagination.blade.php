@if ($paginator->hasPages())
    <div class="d-sm-flex justify-content-between align-items-center text-center" style="margin-top: 15px">
        <span class="fs-14">Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} Entries</span>
        <nav aria-label="Page navigation example">
            <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link icon" href="#" aria-label="Previous">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link icon" href="javascript:void(0)" data-href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" onclick="getPaginatedData(this)">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @if($paginator->lastPage() <= 7)
                    @for($i = 1; $i <= $paginator->lastPage(); $i++)
                        @if ($i == $paginator->currentPage())
                            <li class="page-item"><a class="page-link active" href="#">{{ $i }}</a></li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url($i) }}" onclick="getPaginatedData(this)">{{ $i }}</a>
                            </li>
                        @endif
                    @endfor
                @else
                    {{-- Dynamic Ellipsis --}}
                    @if($paginator->currentPage() <= 3)
                        @for($i = 1; $i <= 4; $i++)
                            @if ($i == $paginator->currentPage())
                                <li class="page-item"><a class="page-link active" href="#">{{ $i }}</a></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url($i) }}" onclick="getPaginatedData(this)">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor
                        <li class="page-item">
                            <a class="page-link disabled" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url($paginator->lastPage() - 1) }}" onclick="getPaginatedData(this)">
                                {{ $paginator->lastPage() - 1 }}
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url($paginator->lastPage()) }}" onclick="getPaginatedData(this)">
                                {{ $paginator->lastPage() }}
                            </a>
                        </li>
                    @elseif($paginator->currentPage() >= ($paginator->lastPage() - 2))
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url(1) }}" onclick="getPaginatedData(this)">
                                {{ 1 }}
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url(2) }}" onclick="getPaginatedData(this)">
                                {{ 2 }}
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link disabled" href="#">...</a>
                        </li>
                        @for($i = ($paginator->lastPage() - 3); $i <= $paginator->lastPage(); $i++)
                            @if ($i == $paginator->currentPage())
                                <li class="page-item"><a class="page-link active" href="#">{{ $i }}</a></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url($i) }}" onclick="getPaginatedData(this)">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor
                    @else
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url(1) }}" onclick="getPaginatedData(this)">
                                {{ 1 }}
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link disabled" href="#">...</a>
                        </li>
                        @for($i = ($paginator->currentPage() - 1); $i <= ($paginator->currentPage() + 1); $i++)
                            @if ($i == $paginator->currentPage())
                                <li class="page-item"><a class="page-link active" href="#">{{ $i }}</a></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url($i) }}" onclick="getPaginatedData(this)">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor
                        <li class="page-item">
                            <a class="page-link disabled" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" data-href="{{ $paginator->url($paginator->lastPage()) }}" onclick="getPaginatedData(this)">
                                {{ $paginator->lastPage() }}
                            </a>
                        </li>
                    @endif
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link icon" href="javascript:void(0)" data-href="{{ $paginator->nextPageUrl() }}" aria-label="Next" onclick="getPaginatedData(this)">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link icon" href="#" aria-label="Next">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
