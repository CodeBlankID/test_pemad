@include('front.partials.header');
<section class="order_details section_gap">
    <div class="container text-center">
        <h3 class="title_confirmation">Thank you. Your order has been received.</h3>
        <a class="btn btn-lg btn-info " href="{{ url('/') }}">Back To Home</a>
        <a class="btn btn-lg btn-warning" href="{{ url('/profile') }}">Profile</a>
    </div>
</section>
@include('front.partials.footer');
