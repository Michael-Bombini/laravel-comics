@php
$navLinks = [
    [
        'title' => 'Characters',
        'link' => route("characters"),
    ],
    [
        'title' => 'Comics',
        'link' => route("characters"),
    ],
    [
        'title' => 'Movies',
        'link' => route("characters"),
    ],
    [
        'title' => 'Tv',
        'link' => route("characters"),
    ],
    [
        'title' => 'Games',
        'link' => route("characters"),
    ],
    [
        'title' => 'Collectibles',
        'link' => route("characters"),
    ],
    [
        'title' => 'Videos',
        'link' => route("characters"),
    ],
    [
        'title' => 'Fans',
        'link' => route("characters"),
    ],
    [
        'title' => 'News',
        'link' => route("characters"),
    ],
    [
        'title' => 'Shop',
        'link' => route("characters"),
    ],
];
@endphp


<header>
    <div class="container text-end py-2">
        <span>DC POWER VISA</span>
        <span>ADDITIONAL DC SITES</span>
    </div>
    <nav class="p-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <a href="/">
                        <img src="{{ asset('images/dc-logo.png') }}" alt="">
                    </a>

                </div>

                <ul class="nav justify-content-center">
                    @foreach ($navLinks as $link)
                        <li class="nav-item">
                            <a class="nav-link active p-3" aria-current="page" href="{{$link['link']}}">{{$link["title"]}}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="search">
                     Search
                </div>
            </div>
        </div>
    </nav>
</header>
