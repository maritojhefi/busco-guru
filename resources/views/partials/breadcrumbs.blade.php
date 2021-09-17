@if (count($breadcrumbs))

    
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item text-sm text-dark active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    

@endif