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
        'title' => 'SHOP DC',
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
        'title' => 'SUBSCRIPTIONS',
    ],
];

@endphp


<div class="show banner p-2">
    <div class="container">
        <ul class="d-flex justify-content-around">
            @foreach ($icons as $icon)
            <li>
                <span>{{ $icon["title"]}}</span>
                <img src="{{asset('images/' . $icon['iconName'] . '.' . $icon['extension'])}}" alt="{{$icon["iconName"]}}">

            </li>
            @endforeach
          
        </ul>
    </div>
</div>
