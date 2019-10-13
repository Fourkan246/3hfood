
    @extends('layouts.master')

    @section('content')
    
                <div class="col-md-10">

                  <div class="widget">
                    <center><h5>Friday Meals</h5></center>

                      <div class="row">
                        <div class="col-md-4">
                          <h5>Standard meaal</h5>
                          <div class="card card-margin-r">
                            <center>
                              <img class="card-img-top meal-img" src="{{ asset('images/lunch_01.jpg')}}" alt="Card image">
                              <div class="card-body">
                                <h6 class="card-title">Fried rice with chicken</h6>
                                <p class="card-text">Price 95 BDT (+vat)</p>
                                <a href="#" class="btn btn-primary">Order now!!</a>
                              </div>
                            </center>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <h5>Corporate meal</h5>
                          <div class="card card-margin-r">
                            <center>
                              <img class="card-img-top meal-img" src="{{ asset('images/lunch_02.jpg')}}" alt="Card image">
                              <div class="card-body">
                                <h6 class="card-title">Fried rice with beaf curry</h6>
                                <p class="card-text">Price 140 BDT (+vat)</p>
                                <a href="#" class="btn btn-primary">Order now!!</a>
                              </div>
                            </center>
                          </div>
                        </div>


                        <div class="col-md-4">
                          <h5>Special meal</h5>
                          <div class="card card-margin-r">
                            <center>
                              <img class="card-img-top meal-img" src="{{ asset('images/lunch_03.jpg')}}" alt="Card image">
                              <div class="card-body">
                                <h6 class="card-title">Kacchi biryani</h6>
                                <p class="card-text">Price 250 BDT (+vat)</p>
                                <a href="#" class="btn btn-primary">Order now!!</a>
                              </div>
                            </center>
                          </div>
                        </div>

                      </div>
                  </div>


                  <div class="widget">

                  </div>

                </div>

    @endsection
