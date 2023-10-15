@include('front.partials.header');

<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-12">
                    <h3>REGISTRATION</h3>
                    <form class="row contact_form" action="{{ url('submitregistration') }}" method="post">
                        @csrf
                        <input type="hidden" class="form-control" id="level" name="level" value="member">
                        <div class="col-md-12 form-group p_star">
                            <label for="first">Nama</label>
                            <input type="text" class="form-control" id="first" name="nama"
                                placeholder="Input Nama">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="last">Email</label>
                            <input type="email" class="form-control" id="last" name="email"
                                placeholder="Input Email">

                        </div>
                        <div class="col-md-12 form-group">
                            <label for="company">Password</label>
                            <input type="password" class="form-control" id="company" name="password"
                                placeholder="Password">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="number">Address</label>
                            <input type="text" class="form-control" id="number" name="address"
                                placeholder="Input Address">

                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="no_hp">No Hp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                placeholder="Input No Hp">
                        </div>
                        <button type="submit" class="primary-btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.partials.footer');
