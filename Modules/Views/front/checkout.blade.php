@include('front.partials.header');
<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <form action="{{ url('ordersubmit') }}" method="post">
                @csrf
                <input type="hidden" name="project_id" value="{{ $dataproject->id }}">
                <input type="hidden" name="field" value="{{ $dataproject->field }}">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Shipping Details</h3>
                            </div>
                            <textarea class="form-control" name="shipping" id="shipping" rows="5" placeholder="Shipping Notes"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Project <span>{{ $dataproject->nama }}</span></a></li>
                                <li><a href="#">Price <span class="last">{{ $dataproject->kategori }}</span></a>
                                </li>
                                <li><a href="#">Tipe<span class="last">{{ $dataproject->tipe }}</span></a>
                                </li>
                                <li><a href="#">Price <span class="last">{{ $dataproject->field }}</span></a>
                                </li>
                            </ul>
                            <ul class="list list_2">
                                {{-- <li><a href="#">Subtotal <span>$2160.00</span></a></li>
                                <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li> --}}
                                <li><a href="#">Total <span>{{ $dataproject->field }}</span></a></li>
                            </ul>
                            <button type="submit" class="primary-btn" href="#">Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->
@include('front.partials.footer');
