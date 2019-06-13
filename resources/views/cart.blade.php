@extends('layouts.layout')
@section('content')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/RSD.jpg);">
	<h2 class="l-text2 t-center text-dark">
		Cart
	</h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1"></th>
						<th class="column-2">Product</th>
						<th class="column-3">Price</th>
						<th class="column-4 p-l-70">Quantity</th>
						<th class="column-5">Total</th>
					</tr>
					@foreach($cart as $item)
					<tr class="table-row">
						<td class="column-1">
							<a href="{{url("cart?record_id=$item->id&delete=1")}}">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="{{ $item->photo ? asset($item->photo->file) : 'http://placehold.it/400x400' }}"
										alt="IMG-PRODUCT">
								</div>
							</a>
						</td>
						<td class="column-2">{{ $item->name }}</td>
						<td class="column-3">€{{ $item->price }}</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">

								<a href="{{url("cart?record_id=$item->id&decrease=1")}}"
									class="btn-num-product color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</a>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product1"
									value="{{ $item->qty }}">

								<a href="{{url("cart?record_id=$item->id&increment=1")}}"
									class="btn-num-product color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</a>

							</div>
						</td>
						<td class="column-5">€{{ $item->subtotal }}</td>
					</tr>
					@endforeach

				</table>
			</div>
		</div>

		<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			<div class="flex-w flex-m w-full-sm">
				<div class="size11 bo4 m-r-10">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code"
						placeholder="Coupon Code">
				</div>

				<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Apply coupon
					</button>
				</div>
			</div>

			<div class="size10 trans-0-4 m-t-10 m-b-10">
				<!-- Button -->
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
					<a href="{{url('clear-cart')}}">Clear Cart</a>
				</button>
			</div>
		</div>

		<!-- Total -->
		<form method="post" id="payment-form" action="{{url('checkout')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<input id="amount" name="amount" type="hidden" min="1" value="{{ Cart::subTotal() }}"/>	
						€{{ Cart::subTotal() }}
					</span>
				</div>
				
				<div class="bt-drop-in-wrapper">
					<div id="bt-dropin"></div>
				</div>
				<input id="nonce" name="payment_method_nonce" type="hidden" />
				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Checkout
					</button>
				</div>
			</div>
		</form>
	</div>
</section>

<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "{{$token}}";
        braintree.dropin.create({
            authorization: client_token,
            selector: '#bt-dropin',
            paypal: {
                flow: 'vault'
            }
        }, function (createErr, instance) {
            if (createErr) {
                console.log('Create Error', createErr);
                return;
            }
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                instance.requestPaymentMethod(function (err, payload) {
                    if (err) {
                        console.log('Request Payment Method Error', err);
                        return;
                    }
                    // Add the nonce to the form and submit
                    document.querySelector('#nonce').value = payload.nonce;
                    form.submit();
                });
            });
        });
    </script>

@endsection