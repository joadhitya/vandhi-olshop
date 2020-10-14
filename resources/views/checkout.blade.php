@extends('app')
@section('content')

<section class="section-features bg-faded" style="padding-top:20px">
    {{-- <h4>Checkout</h4> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="display-3 text-uppercase" style="font-weight:bold;text-align:left;font-size:2em">Checkout
                    </h3>
                    <div class="card-body">
                        <div class="order">
                            <h5>Order #0101</h5>
                            <ul class="order-list">

                            </ul>
                            <span class="field_error" style="margin-left:1px;display:table-header-group"
                                id="coupon_result"></span>

                            <h5 class="total" style="margin-top:15px">Total Transaction</h5>
                            <h3 style="margin-bottom:0px">Rp. <span
                                    id="total_transaction"></span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
