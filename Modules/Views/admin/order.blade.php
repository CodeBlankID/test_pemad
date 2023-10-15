<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Bordered Table -->
        <div class="intro-y box mt-5">

            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Data Order
                </h2>
            </div>
            <div class="p-5" id="bordered-table">
                <div class="preview">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead class="bg-gray-700 dark:bg-dark-1 text-white">
                                <tr>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Tagihan
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Pembayaran
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Note Shipping
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Status
                                    </th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-no-wrap">Nama Klien
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
                                        <td class="border">{{ $data->tagihan }}</td>
                                        <td class="border">{{ $data->payment }}</td>
                                        <td class="border">{{ $data->shipping }}</td>
                                        <td class="border">{{ strtoupper($data->status) }}
                                            <a href="#" onclick="getClassName({{ $data->id }})"
                                                data-id="{{ $data->id }}" data-toggle="modal"
                                                data-target="#medium-modal-size-preview"
                                                class="button button--sm w-8 float-right bg-theme-12 text-black idbutton">
                                                <i data-feather="edit" class="w-4 h-4 mr-2" style="display: unset"></i>
                                            </a>
                                        </td>
                                        <td class="border">{{ $data->klien_name }}</td>
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
<div class="modal" id="medium-modal-size-preview">
    <div class="modal__content p-10 text-center">
        <form id="statusForm" method="post" action="{{ url('admins/editorderstatus') }}">
            @csrf
            <div>
                <label>Set Status</label>
                <div class="mt-2">
                    <input id="idorder" type="hidden" value="" name="id_order">
                    <select name="status" data-placeholder="Status" class="tail-select w-full">
                        <option value="accept">Accept</option>
                        <option value="pending">Pending</option>
                        <option value="reject">Reject</option>
                    </select>
                </div>
            </div>
            <div class="mt-5">
                <button type="button" data-dismiss="modal"
                    class="button w-20 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button>
                <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
            </div>
        </form>
    </div>
</div>
