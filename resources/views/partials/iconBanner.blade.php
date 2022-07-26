@php
$icons = [
    [
        'iconName' => 'buy-comics-digital-comics',
        'extension' => 'png',
        'title' => 'DIGITAL COMICS',
    ],
    [
        'iconName' => 'buy-comics-merchandise',
        'extension' => 'png',
        'title' => 'DC MERCHANDDISE',
    ],
    [
        'iconName' => 'buy-comics-subscriptions',
        'extension' => 'png',
        'title' => 'SUBSCRIPTION',
    ],
    [
        'iconName' => 'buy-comics-shop-locator',
        'extension' => 'png',
        'title' => 'COMIC SHOP LOCATOR',
    ],
    [
        'iconName' => 'buy-dc-power-visa',
        'extension' => 'svg',
        'title' => 'DC POWER VISA',
    ],
];

@endphp


<div class="banner p-5">
    <div class="container">
        <ul class="d-flex justify-content-around">
            @foreach ($icons as $icon)
            <li>
                <img src="{{asset('images/' . $icon['iconName'] . '.' . $icon['extension'])}}" alt="{{$icon["iconName"]}}">
                <span>{{ $icon["title"]}}</span>

            </li>
            @endforeach
          
        </ul>
    </div>
</div>
