<div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
    <h3 class="mb-sm-0 mb-1 fs-18">{{ $pageHeaderTitle }}</h3>

    @if(count($pageBreadcrumbs) > 0)
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            @foreach($pageBreadcrumbs as $index => $pageBreadcrumb)
                <li class="
                    {{ ($loop->first) ? '' : 'ms-2' }}
                    {{ (!$loop->first && !$loop->last) ? 'dot2' : '' }}
                    {{ ($loop->last) ? 'fw-semibold fs-14 heading-font text-dark dot ms-2' : '' }}">
                    
                    @if($loop->last)
                        <span class="text-dark">{{ $pageBreadcrumb['text'] }}</span>
                    @else
                        <a href="{{ $pageBreadcrumb['link'] ?? 'javascript:void(0)' }}" class="text-decoration-none">
                            @if(!empty($pageBreadcrumb['icon']))
                                @if($pageBreadcrumb['icon_custom'])
                                    {!! $pageBreadcrumb['icon'] !!}
                                @else
                                    <i class="{{ $pageBreadcrumb['icon'] }}" style="position: relative; top: -1px;"></i>
                                @endif
                            @endif
                            <span>{{ $pageBreadcrumb['text'] }}</span>
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif




</div>