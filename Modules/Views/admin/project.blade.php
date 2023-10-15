<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Bordered Table -->
        <div class="intro-y box mt-5">

            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Data Project
                </h2>
            </div>
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <a href="{{ url('admins/addproject') }}" class="button w-24 mr-1  bg-theme-9 text-white">Add Data</a>
            </div>
            <div class="p-5" id="bordered-table">
                <div class="preview">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead class="bg-gray-700 dark:bg-dark-1 text-white">
                                <tr>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Judul
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Author
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Tipe
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Harga
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">kategori
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Deskripsi
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Bahasa
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap text-center">
                                        Action
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
                                        <td class="border">{{ $data->author_project }}</td>
                                        <td class="border">{{ $data->tipe }}</td>
                                        <td class="border">{{ $data->field }}</td>
                                        <td class="border">{{ $data->kategori }}</td>
                                        <td class="border">{{ $data->description }}</td>
                                        <td class="border">{{ $data->language }}</td>
                                        <td class="border text-center">
                                            <a href="{{ url('admins/editproject/' . $data->id) }}"
                                                class="button w-24 mr-1 mb-2 bg-theme-12 text-white">Edit</a>
                                            ||
                                            <a href="{{ url('admins/deleteproject/' . $data->id) }}"
                                                class="button w-24 mr-1 mb-2 bg-theme-6 text-white">Delete</a>
                                        </td>
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
