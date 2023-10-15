<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        @php
            if (!empty($result['id'])) {
                $url = 'admins/doeditlang/' . $result['id'];
            } else {
                $url = 'admins/doaddlang';
            }
        @endphp
        <form action="{{ url($url) }}" method="post" class="validate-form">
            @csrf
            <div class="intro-y box p-5">
                <div class="input-form">
                    <label>Nama</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <input type="text" name="nama" value="{{ !empty($result['name']) ? $result['name'] : '' }}"
                        class="input w-full border mt-2" placeholder="Input Nama" required>
                </div>
                <div class="input-form">
                    <label>Code</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <input type="text" name="code" value="{{ !empty($result['code']) ? $result['code'] : '' }}"
                        class="input w-full border mt-2" placeholder="Input Code" required>
                </div>

                <div class="text-right mt-5">
                    <a type="button" href="{{ url('admins/lang') }}"
                        class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</a>
                    <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
        </form>
    </div>

</div>
