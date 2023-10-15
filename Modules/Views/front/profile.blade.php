@include('front.partials.header');
<div class="container mb-5">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">History Order</div>

            </div>
            <div class="sidebar-filter mt-50">

            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Project</th>
                        <th scope="col">Author</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Price</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Bahasa</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $n = 1;
                    @endphp
                    @foreach ($dataHistoryOrder as $dataHistory)
                        <tr>
                            <td>{{ $n++ }}</td>
                            <td>{{ $dataHistory->nama }}</td>
                            <td>{{ $dataHistory->owner_project }}</td>
                            <td>{{ $dataHistory->tipe }}</td>
                            <td>{{ $dataHistory->field }}</td>
                            <td>{{ $dataHistory->kategori }}</td>
                            <td>{{ $dataHistory->bahasa }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('front.partials.footer');
