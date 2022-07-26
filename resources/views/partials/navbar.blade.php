@php
$navLinks = [
    [
        'title' => 'Characters',
    ],
    [
        'title' => 'Comics',
    ],
    [
        'title' => 'Movies',
    ],
    [
        'title' => 'Tv',
    ],
    [
        'title' => 'Games',
    ],
    [
        'title' => 'Collectibles',
    ],
    [
        'title' => 'Videos',
    ],
    [
        'title' => 'Fans',
    ],
    [
        'title' => 'News',
    ],
    [
        'title' => 'Shop',
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
                    <img src="{{ asset('images/dc-logo.png') }}" alt="">
                </div>

                <ul class="nav justify-content-center">
                    @foreach ($navLinks as $link)
                        <li class="nav-item">
                            <a class="nav-link active p-3" aria-current="page" href="#">{{$link["title"]}}</a>
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
