
  @include('layouts.parts.header')
@include('layouts.parts.sidebar')

{{-- tạo route/wed.php cho create --}}
<div class="content-wrapper">
    <section class="content pt-3">
        <div class="container-fluid">
                <h3>Thêm mới nhân sự</h3>
    {{-- nối vào route = name store --}}
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        {{-- nhúng form.blade.php --}}
        @csrf
@include('user::users.form')
        {{-- ::link trong module | . link bình thường bên ngoài --}}
        <button type="submit" class="btn btn-primary">Tạo mới</button>
    </form>
      </div>

    </section>
</div>
@include('layouts.parts.footer')