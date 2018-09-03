@extends('master')
@section('title', 'Admin Panel')
@section('content')


<div class="main-content">
    <section>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-12">

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
          	</div>
        </div>
      </div>
    </section>
  </div>

@endsection