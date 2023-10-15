<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        @php
            if (!empty($result['id'])) {
                $url = 'admins/doedit/' . $result['id'];
            } else {
                $url = 'admins/doadd';
            }
        @endphp
        <form action="{{ url($url) }}" method="post">
            @csrf
            <div class="intro-y box p-5">
                <div>
                    <label>Nama</label>
                    <input type="text" name="nama" {{ !empty($result['name']) ? 'value=' . $result['name'] : '' }}
                        class="input w-full border mt-2" placeholder="Input Nama">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email"
                        {{ !empty($result['email']) ? 'value=' . $result['email'] : '' }}
                        class="input w-full border mt-2" placeholder="Input Email">
                </div>
                <div>
                    <label>
                        {{ !empty($result['password']) ? 'New Password ?' : 'Password' }}
                    </label>
                    <input type="Password" name="password" class="input w-full border mt-2"
                        placeholder="Input Password">
                </div>
                <div>
                    <label>Alamat</label>
                    <input type="text" {{ !empty($result['address']) ? 'value=' . $result['address'] : '' }}
                        name="address" class="input w-full border mt-2" placeholder="Input Alamat">
                </div>
                <div>
                    <label>No Handphone</label>
                    <input type="text" name="no_hp"
                        {{ !empty($result['no_hp']) ? 'value=' . $result['no_hp'] : '' }}
                        class="input w-full border mt-2" placeholder="Input No Handphone">
                </div>
                <div class="mt-3">
                    <label>Level</label>
                    <div class="mt-2">
                        <select name="level" data-placeholder="Level" class="tail-select w-full">
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
