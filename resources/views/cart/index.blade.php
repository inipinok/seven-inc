@extends('template.main')
@section('content')
<!-- check out section -->
<div class="checkout-section mt-50 mb-100">
		<div class="container fluid">
			<div class="row">

				<div class="col-lg-12">
					<div>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Image</th>
									<th>Nama Kost</th>
									<th>Detail</th>
									<th>Price</th>
									<th>Qty</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($carts as $cart)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td style="height: 10px; width: 10px;">
										<img src="{{ asset('storage/' . $cart->image) }}" alt="">
									</td>
									<td>{{$cart->nama_kost}}</td>
									<td>{{$cart->alamat}}</td>
									<td>{{$cart->harga}}</td>
									<td>
										<style>
									input[type=number]::-webkit-inner-spin-button {
										background-color:grey;
										opacity: 1
									}

									</style>
									<input type="number" value="1" min="1" max="999">
									</td>
									<td>
										<a href="https://wa.me/+6281568289486?text=saya%20mau%20pesan%20kost" class="btn btn-sm btn-success mb-2"><i class="bi bi-whatsapp"></i></a>
										<form action="{{ url('tambah_cart/' .$cart->id) }}" method="post" >
											@csrf
											<button class="btn btn-sm btn-danger mb-2" onclick="return confirm('Anda yakin mau menghapus ini?')">
											<i class="bi bi-trash3"></i>                     
										</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<!-- <a href="#" class="boxed-btn">Place Order</a> -->
					</div>
				</div>
			</div>
		</div>
</div>
<!-- end check out section -->
@endsection