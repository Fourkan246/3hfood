@extends('member.layouts.master')


@section('content')


    <div class="card" style="width: 100%;">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img class="d-block w-100 image-adjust" src="{{ asset('images/slideshow/s1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 image-adjust" src="{{ asset('images/slideshow/s2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 image-adjust" src="{{ asset('images/slideshow/s3.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 image-adjust" src="{{ asset('images/slideshow/s4.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 image-adjust" src="{{ asset('images/slideshow/s5.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>





    <div class="col-md-1"> </div>

    <div class="col-md-5 shadow p-3 mb-5 bg-white rounded shadow-title text-center">
        <a class="btn btn-info btn-xlg" href="tel:713-992-0916">
            Click to Call <span class="glyphicon glyphicon-earphone " style="padding-left:10px; padding-right:10px;"></span>713-992-0916
        </a>

    </div>
    <div class="col-md-5">
        <div class="container box shadow p-3 mb-5 bg-white rounded shadow-title">

            <form method="POST" action="{{ url('send_email/send') }}">

                {{ csrf_field() }}

                @include('member/layouts/errorMessages')

                <div class="input-group">
                    <input type="number" name="message" placeholder="Give your mobile number" class="form-control"/>
                    <span class="input-group-btn">
                    <button type="submit" name="send" value="send" class="btn btn-info">Call Me Back</button>
                                </span>
                </div>


            </form>

        </div>
    </div>


    <div class="col-md-1"> </div>








    <div class="col-md-1"> </div>

    <div class="col-md-10">

        <div class="widget">
            <div class="shadow p-3 mb-5 bg-white rounded shadow-title font-weight-bold text-center">Daily Meal Service</div>

            <div class="row">
                <div class="col-md-6">

           {{--         <div class="shadow p-3 mb-5 bg-white rounded shadow-title font-weight-bold text-center">Basic Meal</div>--}}
                    <div class="card text-center">
                        <div class="card-header">
                            Basic Meal
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">ব্যাসিক সেট মেনু</h5>
                            <p class="card-text">* প্রতিদিনকার স্বাস্থ্য সম্মত দুপুরের খাবার সল্প মূল্যে সময় মত আপনার দরজায়</p>
                            <p class="card-text">* খাবার হিসেবে থাকছে ভাত, ডাল, মাছ, মাংস, সবজির সমন্বয়ে আইটেম</p>
                            <p class="card-text">* বাসায় তৈরী খাবার আপাত বিকল্প না হলেও সাধারন বাহিরের খাবারের তুলনায় অধীক স্বাস্থ্যসম্মত</p>
                            <p class="card-text">* সীমত খরচের এই প্যাকেজটি পাচ্ছেন আপাততঃ কান্দিরপাড়, রাজগঞ্জ, লাকসাম রোড এবং শাসনগাছা এলাকায়</p>
                            <p class="card-text">* অর্ডার করতে ক্লিক করুন উপরের "Click To Call" অপশনে অধবা আপনার নাম্বারটি দিয়ে ক্লিক করুন "Call Me Back" এ </p>

                            {{--  <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                        <div class="card-footer text-muted">
                           {{-- 2 days ago--}}
                        </div>
                    </div>

                </div>


                <div class="col-md-6">

{{--                    <div class="shadow p-3 mb-5 bg-white rounded shadow-title font-weight-bold text-center">Premium Meal</div>--}}
                    <div class="card text-center">
                        <div class="card-header">
                            Premium Meal
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">প্রিমিয়াম সেট মেনু</h5>
                            <p class="card-text">* খরচের ব্যাপারে যারা একটু সৌখিন তাদের জন্য রয়েছে এই প্রিমিয়াম প্যাকেজটি</p>
                            <p class="card-text">* ভাত, ডাল, মাছ, মাংসের সাথে এই প্যাকেজে থাকছে প্পলাও, মুরগীর, রোস্ট, চাইনিজ সবজি, কাবাবের মতো আইটেম গুলি</p>
                            <p class="card-text">* একটু বেশী দামের তুলনায় পাচ্ছেন অনেক বেশিই</p>
                            <p class="card-text">* এই প্যাকেজটিও আপনি পাচ্ছেন কান্দিরপাড়, রাজগঞ্জ, লাকসাম রোড এবং শাসনগাছা এলাকায়</p>
                            <p class="card-text">* অর্ডার করতে ক্লিক করুন উপরের "Click To Call" অপশনে অধবা আপনার নাম্বারটি দিয়ে ক্লিক করুন "Call Me Back" এ </p>
                            {{--  <a href="#" class="btn btn-primary">Go somewhere</a> --}}

                        </div>
                        <div class="card-footer text-muted">
                            {{-- 2 days ago--}}
                        </div>
                    </div>

                </div>
            </div>

 {{--           <div class="row">

                @foreach($packages as $package)

                    <div class="col-md-4">
                        <h5>Standard meaal</h5>
                        <div class="card card-margin-r">
                            <center>
                                --}}{{--<img class="card-img-top meal-img" src="{{ asset('images/lunch_01.jpg')}}" alt="Card image">--}}{{--

                                @php $i=1; @endphp

                                @foreach($package->images as $image)

                                    @if($i>0)
                                        <img class="card-img-top meal-img" src="{{ asset('images/packages/'. $image->image)}}" alt="Card image">
                                    @endif
                                    @php $i=0; @endphp

                                @endforeach
                                <div class="card-body">
                                    <h6 class="card-title">{{ $package->title }}</h6>
                                    <p class="card-text">Price {{ $package->price }} taka only</p>
                                    @if( $package->discountPrice > 0 )
                                        <p class="card-text">Discount {{ $package->discountPrice }} taka!!</p>
                                    @endif
                                    <a href="#" class="btn btn-primary">Order now!!</a>
                                </div>
                            </center>
                        </div>
                    </div>

                @endforeach
            </div>--}}
        </div>


        <div class="widget">

        </div>

    </div>
    <div class="col-md-1"> </div>





    <div class="col-md-1"> </div>

    <div class="col-md-10">

       {{--  --}} <div class="shadow p-3 mb-5 bg-white rounded shadow-title font-weight-bold text-center">Catering Service</div>


        <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-8">

                {{--         <div class="shadow p-3 mb-5 bg-white rounded shadow-title font-weight-bold text-center">Basic Meal</div>--}}
                <div class="card text-center">
                    <div class="card-header">
                        যেকোনো প্রোগ্রামে খাবার সার্ভিস
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ক্যাটারিং সার্ভিস</h5>
                        <p class="card-text">* হুট করে বাসায় অনুষ্ঠান নাকি বিয়ে, জন্মদিন বা অফিসের কোনো প্রোগ্রামের খাবার তৈরী নিয়ে চিন্তিত?</p>
                        <p class="card-text">* যে কোন অনুষ্ঠান অফিস কিংবা বাসার ছোট খাট সকল আয়োজনে পাশে পাচ্ছেন আমাদের।</p>
                        <p class="card-text">* বাসায় তৈরী খাবার আপাত বিকল্প না হলেও সাধারন বাহিরের খাবারের তুলনায় অধীক স্বাস্থ্যসম্মত</p>
                        <p class="card-text">* সম্পূর্ণ ঘরোয়া পরিবেশে সল্পমূল্যে সর্বোচ্চ মানের খাবার সরবরাহ করাই আমাদের লক্ষ্য</p>
                        <p class="card-text">* কোনো তথ্য জানতে ক্লিক করুন উপরের "Click To Call" অপশনে অধবা আপনার নাম্বারটি দিয়ে ক্লিক করুন "Call Me Back" এ </p>

                        {{--  <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                    <div class="card-footer text-muted">
                        {{-- 2 days ago--}}
                    </div>
                </div>

            </div>
            <div class="col-md-2"> </div>
        </div>
    </div>
    <div class="col-md-1"> </div>
@endsection
