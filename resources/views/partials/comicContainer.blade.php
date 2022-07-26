<div class="series pt-5 text-center">
    <div class="current-series">
        CURRENT SERIES
    </div>
    <div class="container p-4">
        <div class="row g-4">
            @foreach ($comics as $comic)
                {{-- <span>{{$comic["series"]}}</span> --}}

                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 ">
                    @include('partials.comicCard')
                </div>
            @endforeach

        </div>

    </div>
    <button class="btn btn-primary rounded-0 px-5 text-light my-4">LOAD MORE</button>
</div>
