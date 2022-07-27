<section>
    <div class="divider">
        <div class="thumb-div">
            <img src="{{$thumb}}" alt="">
            <span class="thumb genre">{{$type}}</span>
            <span class="thumb gallery"><a href="/">VIEW GALLERY</a></span>
        </div>

    </div>


    <div class="comic-info container px-4">
        <div class="row g-5">
            <div class="col-7">
                <h2>{{ $title }}</h2>
                <div class="avaibility py-3 px-4 d-flex justify-content-between align-items-center">
                    <div>
                        <span class="green">U.S Price:</span>
                        <span class="white">{{$price}}</span>
                    </div>

                    <div class="d-flex g-4">
                        <div class="green">AVAILABLE</div>
                        <div class="white ms-5 check">Check Avaibility <i class="fa-solid fa-angle-down"></i></div>
                    </div>

                </div>
                <p>{{ $description }}</p>
            </div>
            <div class="advsertisement col-3">
                <h3>Advertisement</h3>
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>



</section>
