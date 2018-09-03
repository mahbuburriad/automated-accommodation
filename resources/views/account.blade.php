@extends('layout')
@section('title', 'User Account')
@section('content')

  <div class="main-content">
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/pagetitle.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">AA || Account</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-gray-silver">All</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>



 <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-4">
              <div class="doctor-thumb">
                <img src="images/user.png" alt="">
              </div>
              <div class="info p-20 bg-black-333">
                <h4 class="text-uppercase text-white">Riad</h4>
                <p class="text-gray-silver">Lol Lol Details</p>
                <ul class="list angle-double-right m-0">
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Email</strong><br> aaa@gmail.com</li>
                  <li>domainname.com</li>
                </ul>
                <ul class="styled-icons icon-gray icon-circled icon-sm mt-15 mb-15">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                {!! Html::link('editprofile', 'Edit Profile', array('class' => 'btn btn-info btn-flat mt-10 mb-sm-30')) !!}
                {!! Html::link('index', 'Logout', array('class' => 'btn btn-danger btn-flat mt-10 mb-sm-30')) !!}
              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
              <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Orders <span class="badge">4</span></a></li>
                  <li role="presentation"><a href="#free-orders" aria-controls="free-orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Search</a></li>
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
                    
  
            <div class="heading-line-bottom">
              <h4 class="heading-title">Search </h4>
            </div>
            <form action="#" method="post">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Location</label>
                  <input type="text" placeholder="Enter Location" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Property Type</label>

                  <select  class="form-control">
                   <option> Apartments</option>
                   <option>Penthouses</option>
                   <option>Plazas</option>
                   <option>Plots</option>
                   <option>Rooms</option>
                   <option>Duplex</option>
                   <option>Buildings</option>
                   <option>Offices</option>
                   <option>Shops</option>
                   <option>Open Floor</option>
                   <option>Office Apartment</option>
                   <option>Duplex</option>
                   <option>Plazas</option>
                   <option>Plots</option>
                  </select>
                </div>
              </div>
              <label>Price Range</label>
              <div class="row">
                <div class="col-xs-4">
                  
    <input type="text" class="form-control" placeholder="Min Price">
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Max Price">
  </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Beds</label><br />
                  <div class="form-group col-md-6">
                  <label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox4" value="option1"> 1
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox5" value="option2"> 2
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox6" value="option3"> 3
</label>


</div>


                </div>
                <div class="form-group col-md-6">
                  <label>Sqr. Ft</label>
                  <div class="row">
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Minimum">
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="Maximum">
  </div>
</div>
                  
                </div>
              </div>
              <div class="form-group">

                <button type="submit" class="hvr-grow-shadow">Search Now</button>
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