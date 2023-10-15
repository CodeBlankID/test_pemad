@include('front.partials.header');

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    @php
                        $n = 1;
                    @endphp
                    @foreach ($dataProject as $project)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="https://picsum.photos/150/150?random={{ $n++ }}"
                                    alt="">
                                <div class="product-details">
                                    <h6>{{ $project->nama }}</h6>
                                    <div class="price">
                                        <h6>Tipe : {{ $project->tipe }}</h6>
                                        <h6 class="">Kategori : {{ $project->kategori }}</h6>
                                        <p class="">{{ $project->description }}</p>
                                    </div>
                                    <div class="prd-bottom">
                                        <a href="{{ url('checkout/' . $project->id) }}" class="social-info">
                                            <span class="fa fa-shopping-cart" style="font-size: 20px;"></span>
                                            <p class="hover-text">Choose</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- End Best Seller -->
        </div>
    </div>
</div>
@include('front.partials.footer');
