@php
$navLinks = [
    [
        'title' => 'Characters',
        'link' => route("characters"),
        'name' => "characters"
    ],
    [
        'title' => 'Comics',
        'link' => route("comics"),
        'name' => "comics"
    ],
    [
        'title' => 'Movies',
        'link' => route("movies"),
        'name' => "movies"
    ],
    [
        'title' => 'Tv',
        'link' => route("tv"),
        'name' => "tv"
    ],
    [
        'title' => 'Games',
        'link' => route("games"),
        'name' => "games"
    ],
    [
        'title' => 'Collectibles',
        'link' => route("collectibles"),
        'name' => "collectibles"
    ],
    [
        'title' => 'Videos',
        'link' => route("videos"),
        'name' => "videos"
    ],
    [
        'title' => 'Fans',
        'link' => route("fans"),
        'name' => "fans"
    ],
    [
        'title' => 'News',
        'link' => route("news"),
        'name' => "news"
    ],
    [
        'title' => 'Shop',
        'link' => route("shop"),
        'name' => "shop"
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
                            <a class="nav-link p-3 {{ Request::route()->getName() === $link["name"] ? 'attivo' : '' }}" aria-current="page" href="{{$link['link']}}">{{$link["title"]}}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="search">
                     Search <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </nav>
</header>
