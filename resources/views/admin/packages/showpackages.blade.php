@extends('admin.layouts.master')


@section('content')

    <div class="col-md-10">

        <div class="widget">
            <center><h5>Friday Meals</h5></center>

            <div class="row">

                @foreach($packages as $package)

                    <div class="col-md-4">
                        <h5>Standard meaal</h5>
                        <div class="card card-margin-r">
                            <center>
                                {{--<img class="card-img-top meal-img" src="{{ asset('images/lunch_01.jpg')}}" alt="Card image">--}}

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
            </div>
        </div>


        <div class="widget">

        </div>

    </div>

@endsection
