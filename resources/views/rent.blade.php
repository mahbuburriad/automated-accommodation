@extends('layout')
@section('title', 'Rent House')
@section('content')

  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="autoacco/images/pagetitle.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Favorable Appartments for rent</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                
                <li class="active text-gray-silver">Chose your suitable appartment</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


<section>

<div class="container">
        <div class="row">


		                <!-- Tab panes -->
						<h3 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Available Appartments for Rent</h3>
						<div  style="font-size:16px"><p>Here you can choose your suitable appartment from the list below.
						You can give your desire price range and location to find a suitable appartment.</p></div>
						

			  </form>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="orders">
                    <div class="table-responsive">
                      <table class="table table-hover">
                         <thead>
                            <tr>
                               <th>ID</th>
                               <th>Location</th>
                               <th>Property Type</th>
                               <th>Price</th>
                   
                               <th>Squre ft</th>
                               <th>Bed Room</th>
                               <th>Kitchen</th>
                               <th>Balcony</th>
                               <th>Description</th>
                        
                               <th>Order/book</th>
                              
                            </tr>
                         </thead>
                         <tbody>

       
                             


    
                               @foreach ($postad as $postads)
                               
                               
    <tr>
      <td>{{ $postads->pid}}</td>
      <td>{{ $postads->location}}</td>
      <td>{{ $postads->propertytype}}</td>
      <td>{{ $postads->price}}</td>
      <td>{{ $postads->sqrft}}</td>
      <td>{{ $postads->bedroom}}</td>
      <td>{{ $postads->kitchen}}</td>
      <td>{{ $postads->balcony}}</td>
      <td>{{ $postads->description}}</td>
 
       <td><a class="btn btn-success btn-xs" href="/postad/{{$postads->pid}}">Order</a> | <a class="btn btn-success btn-xs" href="/postad/{{$postads->pid}}">Book</a></td>

      <!--<td><a class="btn btn-success btn-xs" href="/postad/{{$postads->pid}}">View Order</a></td>
      <td><a class="btn btn-success btn-xs" href="/postad/{{$postads->pid}}/edit">Edit</a></td>-->
  
               
               </tr>
   
                 @endforeach



                
              
                           
                            
                           
                         </tbody>
                      </table>
                    </div>
                  </div>
    
    
    



    </div>
</div>
</section>
@endsection