<section class="authors">



    <div class="container px-4">
        <div class="row py-4">
            <div class="col-6">
                <div class="border-bottom py-3">
                    <h3>Talent</h3>
                </div>
                <div class="border-bottom py-3 row">
                    <div class="col-4">
                        <h4>Art By:</h4>
                    </div>
                    <div class="col-6 names">
                        @foreach ($artists as $artist)
                            <span>{{ $artist }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="border-bottom py-3 row">
                    <div class="col-4">
                        <h4>Written By:</h4>
                    </div>
                    <div class="col-6 names">
                        @foreach ($writers as $writer)
                            <span>{{ $writer }}</span>
                        @endforeach
                    </div>
                </div>


            </div>
            <div class="col-6">
                <div class="border-bottom py-3">
                    <h3>Specs</h3>
                </div>
                <div class="border-bottom py-3 row">
                    <div class="col-4">
                        <h4>Series: </h4>
                    </div>
                    <div class="col-8 names text-uppercase">{{$series}}</div>
                </div>
                <div class="border-bottom py-3 row">
                    <div class="col-4">
                        <h4>U.S. Price: </h4>
                    </div>
                    <div class="col-8">{{$price}}</div>
                </div>
                <div class="border-bottom py-3 row">
                    <div class="col-4">
                        <h4>On Sale Date: </h4>
                    </div>
                    <div class="col-8">{{$sale_date}}</div>
                </div>
            </div>

        </div>

    </div>

</section>
