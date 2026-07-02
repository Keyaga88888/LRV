<div class="row">
{{-- {{
    dd($user);
}} --}}
    {{-- Họ tên --}}
    <div class="col-md-4 mb-3">

        <label>Họ tên</label>      
          {{-- $user=user của function create > return "user"  |  9Controllers/UserController.php--}}
        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
        @error('name') <div class="text-danger small">{{ $message }}</div> @enderror

    </div>

    {{-- Email --}}
    <div class="col-md-4 mb-3">

        <label>Email</label>

        <input type="text" name="email" class="form-control" value="{{ old('email', $user->email) }}">
        @error('email') <div class="text-danger small">{{ $message }}</div> @enderror

    </div>

    {{-- Password --}}
    <div class="col-md-4 mb-3">

        <label>Mật khẩu</label>
{{-- minlength="6"  tối thiểu = 6 ký tự | nếu VALIDATE controller thì cái này bỏ ra--}}
        <input type="password" name="password" class="form-control" value="" >
        @error('password') <div class="text-danger small">{{ $message }}</div> @enderror

    </div>

    {{-- Ngày sinh --}}
    <div class="col-md-4 mb-3">
        <label>Ngày sinh</label>
        <input type="date" name="birthday" class="form-control" value="{{ old('birthday', $user->birthday ? \Carbon\Carbon::parse($user->birthday)->format('Y-m-d') : '') }}">
        @error('birthday') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>
{{-- php artisan optimize:clear --}}
    {{-- Giới tính --}}
    <div class="col-md-4 mb-3">
        <label>Giới tính</label>
       @php
    $selectedSex = old('sexx', isset($user->sex) ? (string)$user->sex : '');
@endphp

<select name="sexx" class="form-control form-select">
    <option value="">Giới tính</option>

    @foreach($option['genders'] as $item)
        <option value="{{ $item['id'] }}"
            {{ $selectedSex === (string)$item['id'] ? 'selected' : '' }}>
            {{ $item['text'] }}
        </option>
    @endforeach
</select>
        @error('sexx')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>
     {{-- Bộ phận --}}
    <div class="col-md-4 mb-3">
        <label>Bộ phận</label>
        <select name="part_id" class="form-control form-select">
            <option value="">Chọn bộ phận</option>
            @foreach($option['part'] as $item)
                <option value="{{ $item->id }}"
                    {{ old('part_id', $user->part_id) == $item->id ? 'selected' : '' }}>
                    {{ $item->text }}
                </option>
            @endforeach
        </select>
        @error('part_id')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    {{-- Vị trí --}}
    <div class="col-md-4 mb-3">
        <label>Vị trí</label>
        <select name="position_id" class="form-control form-select">
            <option value="">Chọn vị trí</option>
            @foreach($option['position'] as $item)
                <option value="{{ $item->id }}"
                    {{ old('position_id', $user->position_id) == $item->id ? 'selected' : '' }}>
                    {{ $item->text }}
                </option>
            @endforeach
        </select>
        @error('position_id')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    {{-- Team --}}
    <div class="col-md-4 mb-3">
        <label>Đội nhóm</label>
        <select name="team_id" class="form-control form-select">
            <option value="">Chọn đội nhóm</option>
            @foreach($option['team'] as $item)
                <option value="{{ $item->id }}"
                    {{ old('team_id', $user->team_id) == $item->id ? 'selected' : '' }}>
                    {{ $item->text }}
                </option>
            @endforeach
        </select>
        @error('team_id')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    {{-- Loại tài khoản --}}
    <div class="col-md-4 mb-3">
        <label>Loại tài khoản</label>
        <select name="type_account_id" class="form-control form-select">
            <option value="">Chọn loại tài khoản</option>
            @foreach($option['type_account'] as $item)
                <option value="{{ $item->id }}"
                    {{ old('type_account_id', $user->type_account_id) == $item->id ? 'selected' : '' }}>
                    {{ $item->text }}
                </option>
            @endforeach
        </select>
        @error('type_account_id')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    {{-- Hình thức làm việc --}}
    <div class="col-md-4 mb-3">
        <label>Hình thức làm việc</label>
 {{-- 0 1 DÙNG LỆNH NÀY //0 1 bỏ )->default(0) --}}
     @php
    $selectedTypeWork = old('type_work', isset($user->type_work) ? (string)$user->type_work : '');
@endphp
<select name="type_work" class="form-control form-select">
    <option value="">Chọn hình thức</option>
    @foreach($option['type_workk'] as $item)
        <option value="{{ $item['id'] }}"
            {{ $selectedTypeWork === (string)$item['id'] ? 'selected' : '' }}>
            {{ $item['text'] }}
        </option>
    @endforeach
</select>
        @error('type_work')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    {{-- SĐT --}}
    <div class="col-md-4 mb-3">
        <label>Số điện thoại</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}">
        @error('phone')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>
  {{-- Thumnail --}}
    <div class="col-md-6 mb-3">
    <label class="form-label">Thumbnail</label>
    <input type="file" name="thumbnail" id="thumbnail-input" class="form-control" accept="image/*">
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">Preview</label>
    <div>
        <img
            id="thumbnail-preview"

  src="{{ old('thumbnail_preview', $user->thumbnail 
        ? asset('storage/'.$user->thumbnail) 
        : '') }}"

            style="
                width:120px;
                height:120px;
                object-fit:cover;
                border-radius:12px;
                border:1px solid #ddd;
                display:
{{ $user->thumbnail ? 'block' : 'none' }};
             ">

    </div>

</div>
    {{-- Địa chỉ --}}
    <div class="col-md-4 mb-3">
        <label>Địa chỉ</label>
        <input type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
        @error('address')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    {{-- Trạng thái --}}
    <div class="col-md-4 mb-3">
        <label>Trạng thái</label>
         {{-- 0 1 DÙNG LỆNH NÀY //0 1 bỏ )->default(0) --}}
       @php
    $selectedStatus = old('statuss', isset($user->status) ? (string)$user->status : '');
@endphp
<select name="statuss" class="form-control form-select">
    <option value="">Chọn trạng thái</option>

    @foreach($option['status'] as $item)
        <option value="{{ $item['id'] }}"
            {{ $selectedStatus === (string)$item['id'] ? 'selected' : '' }}>
            {{ $item['text'] }}
        </option>
    @endforeach
</select>
        @error('statuss')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    {{-- Ngày bắt đầu --}}
    <div class="col-md-4 mb-3">
        <label>Ngày bắt đầu</label>
        <input type="date" name="start_day" class="form-control" value="{{ old('start_day', $user->start_day ? \Carbon\Carbon::parse($user->start_day)->format('Y-m-d') : '') }}">
        @error('start_day')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    {{-- Ngày nghỉ việc --}}
    <div class="col-md-4 mb-3">
        <label>Ngày nghỉ việc</label>
        <input type="date" name="end_day" class="form-control" value="{{ old('end_day', $user->end_day ? \Carbon\Carbon::parse($user->end_day)->format('Y-m-d') : '') }}">
        @error('end_day')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>
  
</div>
<script>

$(document).ready(function () {
    $('#thumbnail-input').on('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (ev) {
                $('#thumbnail-preview')
                    .attr('src', ev.target.result)
                    .show();
            }
            reader.readAsDataURL(file);
        }
    });
});
</script>