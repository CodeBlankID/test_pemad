<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Bordered Table -->
        <div class="intro-y box mt-5">

            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Data Match Project With Client
                </h2>
            </div>
            <div class="p-5" id="bordered-table">
                <div class="preview">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead class="bg-gray-700 dark:bg-dark-1 text-white">
                                <tr>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Nama Project
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Pemilik Project
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Tipe Project
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Bidang
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Kategori
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Deskripsi
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Nama Klien
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Bahasa Referensi
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($result as $data)
                                    <tr>
                                        <td class="border">{{ $no++ }}</td>
                                        <td class="border">{{ $data->nama }}</td>
                                        <td class="border">{{ $data->owner_project }}</td>
                                        <td class="border">{{ $data->tipe }}</td>
                                        <td class="border">{{ $data->field }}</td>
                                        <td class="border">{{ $data->kategori }}</td>
                                        <td class="border">{{ $data->description }}</td>
                                        <td class="border">{{ $data->klient_name }}</td>
                                        <td class="border">{{ $data->bahasa }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- END: Bordered Table -->
    </div>
</div>
