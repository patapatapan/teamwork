<ul class="main-menu">
    @foreach ($items as $item)
        {{--@php
            echo $item->url
        @endphp--}}
        @if ( url()->current() == 'http://127.0.0.1:8000'.$item->url )
            <li><a href="{{ $item->url }}" class="active">{{ $item->title }}</a></li>
        @else 
        <li><a href="{{ $item->url }}">{{ $item->title }}</a></li>
        @endif   
    @endforeach
</ul>
