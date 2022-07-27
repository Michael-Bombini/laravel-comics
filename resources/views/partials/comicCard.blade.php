<div>
    <div class="fumetto text-start">
        <a href="comic/{{$comic['id']}}">
            <img class="card-img-top" src="{{ $comic['thumb'] }}"
                alt="`Fumetto della serie di {{ $comic['series'] }}`" /></a>
        <div class="nome-serie">{{ $comic['series'] }}</div>
        <div class="price-type">
            <ul class="list-unstyled">
                <li>{{ $comic['price'] }}</li>
                <li>{{ $comic['type'] }}</li>
            </ul>
        </div>
    </div>



</div>
