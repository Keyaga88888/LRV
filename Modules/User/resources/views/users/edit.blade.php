
  @include('layouts.parts.header')
@include('layouts.parts.sidebar')

{{-- tạo route/wed.php cho create --}}
<div class="content-wrapper">
    <section class="content pt-3">
          <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-1 font-weight-bold">
                       Chỉnh sửa nhân sự
                    </h1>
                    <small class="text-muted">
                        Update toàn bộ thông tin nhân viên
                    </small>
                </div>
                {{-- muốn ko liên kết 2 bảng kia thì làm cái popup ngay trong file này --}}
                {{-- nếu có session thì in ra  |  session của UserController.php--}}
<a href="{{ route('users.list') }}" class="btn btn-success" id="btn-open-create">Quay lại</a>
{{-- chỉnh css gợi ý : nối thẻ với class h2.users-table --}}
            </div>
        <div class="container-fluid">
    {{-- nối vào route = name update   |  id là truyền từ controller>function edit>lấy models/User.php --}}
    <form action="{{ route('users.update', $user->id) }}" method="POST"  enctype="multipart/form-data">
        {{-- nhúng form.blade.php --}}
        @csrf
@include('user::users.form')
        {{-- ::link trong module | . link bình thường bên ngoài --}}
        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
    </form>
      </div>

    </section>
</div>
@include('layouts.parts.footer')
