<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        @php
            if (!empty($result['id'])) {
                $url = 'admins/doedit/' . $result['id'];
            } else {
                $url = 'admins/doadd';
            }
        @endphp
        <form class="validate-form" action="{{ url($url) }}" method="post">
            @csrf
            <div class="intro-y box p-5">
                <div class="input-form">
                    <label>Nama</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    </label>
                    <input type="text" name="nama" value="{{ !empty($result['name']) ? $result['name'] : '' }}"
                        class="input w-full border mt-2" placeholder="Input Nama" required>
                </div>
                <div class="input-form">
                    <label>Email</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <input type="email" name="email" value="{{ !empty($result['email']) ? $result['email'] : '' }}"
                        class="input w-full border mt-2" placeholder="Input Email" required>
                </div>
                @if (Request::segment(2) == 'edituser')
                    <div class="input-form">
                        <label>
                            {{ !empty($result['password']) ? 'New Password ?' : 'Password' }}
                        </label>
                        <input type="Password" name="password" class="input w-full border mt-2"
                            placeholder="Input Password">
                    </div>
                @else
                    <div class="input-form">
                        <label>
                            {{ !empty($result['password']) ? 'New Password ?' : 'Password' }}
                        </label>
                        <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                        <input type="Password" name="password" class="input w-full border mt-2"
                            placeholder="Input Password" required>
                    </div>
                @endif

                <div class="input-form">
                    <label>Alamat</label>
                    <input type="text" value="{{ !empty($result['address']) ? $result['address'] : '' }}"
                        name="address" class="input w-full border mt-2" placeholder="Input Alamat">
                </div>
                <div class="input-form">
                    <label>No Handphone</label>
                    <input type="text" name="no_hp" value="{{ !empty($result['no_hp']) ? $result['no_hp'] : '' }}"
                        class="input w-full border mt-2" placeholder="Input No Handphone">
                </div>
                <div class="mt-3 input-form">
                    <label>Level</label>
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required</span>
                    <div class="mt-2">
                        <select name="level" data-placeholder="Level" class="tail-select w-full" required>
                            <option value="admin"
                                {{ !empty($result['level']) && $result['level'] == 'admin' ? 'selected' : '' }}>
                                Admin</option>
                            <option value="member"
                                {{ !empty($result['level']) && $result['level'] == 'member' ? 'selected' : '' }}>Member
                            </option>
                        </select>
                    </div>
                </div>
                <div class="text-right mt-5">
                    <a type="button" href="{{ url('admins/user') }}"
                        class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</a>
                    <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
        </form>
    </div>

</div>
