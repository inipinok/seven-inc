@extends('template.main')
@section('content')
<!-- check out section -->
<div class="checkout-section mt-60 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Data Customer
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="checkout"  method="POST">
										@csrf
						        		<p><input type="nama_customer" placeholder="Name"  name="nama_customer"></p>
						        		<p><input type="phone_number" placeholder="Phone Number" name="phone_number"></p>
                        <input type="hidden" name="nama_kost" value="{{$checkout->nama_kost}}">
						        </div>
						      </div>
						    </div>
						  </div>
						  </div>
						</div>
					</div>
          <div class="col-lg-4">
            <div class="order-details-wrap">
              <table class="order-details">
                <thead>
                  <tr>
                    <th>Detail Pemesanan</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($checkouts as $checkout)
                  <tr>
                    <td><input type="text" name="nama_kost" value="{{$nama_kost}}"></td>
                    <td>{{$checkout->price}}</td>
                  </tr>
                  @endforeach
                </tbody>     
              </table>
              <button type="submit" class="boxed-btn">Place Order</button>
              </form>
  
            </div>
          </div>
				</div>

			</div>
		</div>
</div>
<!-- end check out section -->
@endsection