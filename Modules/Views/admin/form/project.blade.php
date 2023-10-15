<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        @php
            if (!empty($result['id'])) {
                $url = 'admins/doeditproject/' . $result['id'];
            } else {
                $url = 'admins/doaddproject';
            }
        @endphp
        <form action="{{ url($url) }}" method="post" class="validate-form">
            @csrf
            <div class="intro-y box p-5">
                <div class="input-form">
                    <label>Nama</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <input type="text" name="nama" value="{{ !empty($result['nama']) ? $result['nama'] : '' }}"
                        class="input w-full border mt-2" placeholder="Input Nama" required>
                </div>
                <div class="mt-3" class="input-form">
                    @if (Request::segment(2) == 'addproject')
                        <label>Author Project</label>
                        <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                        <div class="mt-2">
                            <select name="user_id" data-placeholder="Author Project" class="tail-select w-full"
                                required>
                                @foreach ($userData as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @else
                        <label>Author Project</label>
                        <input type="hidden" name="user_id"
                            {{ !empty($result['user_id']) ? 'value=' . $result['user_id'] : '' }}
                            class="input w-full border mt-2" placeholder="Input Author ID">
                        <input type="text"
                            {{ !empty($result['author_project']) ? 'value=' . $result['author_project'] : '' }}
                            class="input w-full border mt-2" placeholder="Input Author ID" readonly>
                    @endif
                </div>
                <div class="mt-3" class="input-form">
                    <label>Tipe</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <div class="mt-2">
                        <select name="tipe" data-placeholder="Tipe" class="tail-select w-full" required>
                            <option value="fulltime"
                                {{ !empty($result['tipe']) && $result['tipe'] == 'fulltime' ? 'selected' : '' }}>
                                Full Time</option>
                            <option value="parttime"
                                {{ !empty($result['tipe']) && $result['tipe'] == 'parttime' ? 'selected' : '' }}>Part
                                Time
                            </option>
                            <option value="freelance"
                                {{ !empty($result['tipe']) && $result['tipe'] == 'freelance' ? 'selected' : '' }}>
                                Freelance
                            </option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 input-form">
                    <label>Harga</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <input type="text" name="field"
                        {{ !empty($result['field']) ? 'value=' . $result['field'] : '' }}
                        class="input w-full border mt-2" placeholder="Input Harga" required>
                </div>
                <div class="mt-3" class="input-form">
                    <label>Kategori</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <div class="mt-2">
                        <select name="kategori" data-placeholder="Kategori" class="tail-select w-full" required>
                            <option value="request"
                                {{ !empty($result['tipe']) && $result['tipe'] == 'request' ? 'selected' : '' }}>
                                Pembelian Project</option>
                            <option value="offer"
                                {{ !empty($result['tipe']) && $result['tipe'] == 'offer' ? 'selected' : '' }}>Request
                                Project
                            </option>
                        </select>
                    </div>
                </div>
                <div class="mt-3" class="input-form">
                    <label>Language</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <div class="mt-2">
                        <select name="lang_id" data-placeholder="Language" class="tail-select w-full" required>
                            @foreach ($langData as $lang)
                                <option value="{{ $lang->id }}"
                                    {{ !empty($result['lang_id']) && $lang->id == $result['lang_id'] ? 'selected' : '' }}>
                                    {{ $lang->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- <div class="mt-3">
                    <label>Lang ID</label>
                    <input type="text" name="lang_id"
                        {{ !empty($result['lang_id']) ? 'value=' . $result['lang_id'] : '' }}
                        class="input w-full border mt-2" placeholder="Input Language ID">
                </div> --}}
                <div class="mt-3">
                    <label>Deskripsi</label>
                    <textarea type="text" name="description" class="input w-full border mt-2" placeholder="Input Deskripsi">{{ !empty($result['description']) ? $result['description'] : '' }}</textarea>
                </div>
                <div class="text-right mt-5">
                    <a type="button" href="{{ url('admins/project') }}"
                        class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</a>
                    <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
        </form>
    </div>

</div>
