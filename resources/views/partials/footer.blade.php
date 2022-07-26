@php 


$footerLink = 
[
                [
                 "nomeLink" => "DC COMICS",
                 "link" => ["Character" , "Comics" , "Movies" , "TV" , "Games" , "Videos" , "News"],
],
                [
                      "nomeLink" => "DC",
                 "link" => ["Terms Of Use" , "Privacy Policy (New)" , "Ad Choices" , "Advertising" , "Jobs" , "Subscriptions" , 
                        "Talent Workshops" , "CPSC Certificates" , "Ratings" , "Shop Help" , "Contact Us"],
],
                [
                     "nomeLink" => "SITES",
                 "link" => ["DC" , "MAD Magazine" , "DC Kids" , "DC Universe" , "DC Power Visa"],
],
                [
                    "nomeLink" => "SHOP",
                 "link" =>  ["Shop DC" , "Shop DC Collectibles"],
],
            ]


@endphp


<footer>
    <div class="container d-flex">
        <div class="row col-6">
            <ul class="row">
                @foreach ($footerLink as $link)
                    
                <li class="col-4">
                    <h2 class="py-3">{{$link["nomeLink"]}}</h2>
                  
                @foreach ($link as $subtitle)
                    @dump($subtitle)
                @endforeach
    
                </li>
                @endforeach
            </ul>
             
        </div>
        <div class="h-100">
            <img class="logo-dc" src="" alt="">
        </div>
    </div>

</footer>