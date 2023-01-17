<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    @foreach ($items as $item)
        {{--@php
            echo $item->url
        @endphp--}}
        @if ( url()->current() == $item->url )
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ $item->url }}" class="active">{{ $item->title }}</a></li>
        @else
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ $item->url }}">{{ $item->title }}</a></li>
        @endif
    @endforeach
</ul>
