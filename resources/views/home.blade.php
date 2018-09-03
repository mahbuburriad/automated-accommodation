@extends('layout')
@section('title', 'User Account')
@section('content')

  <div class="main-content">




 <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-4">
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
              <div class="doctor-thumb">
               <!-- <img src="{!! Auth::user()->photo !!}">-->
                 <img src="autoacco/images/user.png" alt="">
              </div>
              <div class="info p-20 bg-black-333">
                <h4 class="text-uppercase text-white">{!! Auth::user()->name !!}</h4>
                <ul class="list angle-double-right m-0">
                  
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">User Name: </strong>{!! Auth::user()->username !!} </li>
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Gender: </strong>{!! Auth::user()->gender !!} </li>
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Email: </strong>{!! Auth::user()->email !!} </li>
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Address: </strong>{!! Auth::user()->address !!}, {!! Auth::user()->city !!}  </li>
                
                </ul>
                <ul class="styled-icons icon-gray icon-circled icon-sm mt-15 mb-15">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                {!! Html::link('editprofile', 'Edit Profile', array('class' => 'btn btn-info btn-flat mt-10 mb-sm-30')) !!}

                 <a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>


              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
              <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Orders <span class="badge">4</span></a></li>
                  <li role="presentation"><a href="#free-orders" aria-controls="free-orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Post Ad</a></li>
                  <li role="presentation"><a href="#bookmarks" aria-controls="bookmarks" role="tab" data-toggle="tab" class="font-15 text-uppercase">Bookmarks <span class="badge">5</span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="orders">
                    <div class="table-responsive">
                      <table class="table table-hover">
                         <thead>
                            <tr>
                               <th>Order ID</th>
                               <th>Date</th>
                               <th>Payment</th>
                               <th>Total</th>
                               <th></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <th scope="row">#1264</th>
                               <td>24/07/2016</td>
                               <td>PayPal</td>
                               <td>$127.50</td>
                               <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                            </tr>
                            <tr>
                               <th scope="row">#1264</th>
                               <td>24/07/2016</td>
                               <td>PayPal</td>
                               <td>$127.50</td>
                               <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                            </tr>
                            <tr>
                               <th scope="row">#1264</th>
                               <td>24/07/2016</td>
                               <td>PayPal</td>
                               <td>$127.50</td>
                               <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                            </tr>
                            <tr>
                               <th scope="row">#1264</th>
                               <td>24/07/2016</td>
                               <td>PayPal</td>
                               <td>$127.50</td>
                               <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                            </tr>
                         </tbody>
                      </table>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="free-orders">
                    <table class="table table-hover">
                    
  
            
            {!! Form::open(array('route' => 'buy.store' )) !!}

              <div class="row">
                <div class="form-group col-md-6">
                  <label>Location</label>
                 
                 
                  {!! Form::text('location', $value = null, $attributes = array('class'=>'form-control', 'id'=>'location', 'placeholder'=>'Enter Location')); !!}
                </div>
                <div class="form-group col-md-3">
                  <label>Property Type</label>

                  <select  class="form-control" name="propertytype", id="propertytype">
                   <option value="Apartments"> Apartments</option>
                   <option value="Penthouses">Penthouses</option>
                   <option value="Plazas">Plazas</option>
                   <option value="Plots">Plots</option>
                   <option value="Rooms">Rooms</option>
                   <option value="Duplex">Duplex</option>
                   <option value="Buildings">Buildings</option>
                   <option value="Offices">Offices</option>
                   <option value="Shops">Shops</option>
                   <option value="OpenFloor">Open Floor</option>
                   <option value="OfficeApartment">Office Apartment</option>
    
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label>Property For</label>

                  <select  class="form-control" name="propertyfor" id=propertyfor">
                   <option value="Rent">Rent</option>
                   <option value="Sell">Sell</option>
                 </select>
               </div>


              </div>

              <div class="form-group col-md-3">
                <label>Price</label>
                  <input type="text" placeholder="Enter your Price" class="form-control" name="price" id="price">
                </div>
                <div class="form-group col-md-3">
                <label>Sqr. Ft</label>
                  <input type="text" placeholder="Enter Square Feet" class="form-control" name="sqrft" id="sqrft">
                </div>
                <div class="form-group col-md-3">
                <label>Bed Room</label>
                  <input type="text" placeholder="Enter Bedroom Number" class="form-control" name="bedroom" id="bedroom">
                </div>
                <div class="form-group col-md-3">
                <label>Kitchen</label>
                  <input type="text" placeholder="Enter Kitchen Number" class="form-control" name="kitchen" id="kitchen">
                </div>

                </div>
              </div>

               <div class="form-group col-md-3">
                  <label>Balcony Available?</label>

                  <select  class="form-control" name="balcony" id="balcony">
                   <option value="YES">YES</option>
                   <option value="No">No</option>
                 </select>


               </div>
                <div class="form-group col-md-9">
                <label>Describe Your Accommodation</label>

                  <input type="text" placeholder="Enter Square Feet" class="form-control" name="description" id="description">
                </div>

                



              <div <div class="form-group col-md-3">                <button type="submit" class="hvr-grow-shadow">Add Post</button>
              </div>
            </form>
          </div>
          
          </div>
        </div>
      </div>

                    </table>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="bookmarks">
                    <table class="table">
                       <tbody>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>AAAAAA</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>SAAAAAA</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>AAAAAAA</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>AAAAAAAAAA</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection