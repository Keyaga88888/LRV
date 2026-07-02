

  @include('layouts.parts.header')
@include('layouts.parts.sidebar')
<div class="content-wrapper">


    {{-- header page --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-1 font-weight-bold">
                        Danh sách nhân sự
                    </h1>
                    <small class="text-muted">
                        Quản lý toàn bộ thông tin nhân viên
                    </small>
                </div>
                {{-- muốn ko liên kết 2 bảng kia thì làm cái popup ngay trong file này --}}
                {{-- nếu có session thì in ra  |  session của UserController.php--}}
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@can('user.create')
<a href="{{ route('users.create') }}" class="btn btn-success" id="btn-open-create">Thêm tài khoản </a>
@endcan
{{-- chỉnh css gợi ý : nối thẻ với class h2.users-table --}}
            </div>
        </div>
    </section>

    {{-- content --}}
    <section class="content">

        {{-- container-fluid để full ngang --}}
        <div class="container-fluid">

            <div class="card shadow-sm border-0">

                <div class="card-body p-0">

                    {{-- KHUNG SCROLL NGANG --}}
                    <div class="table-responsive-custom">

                        <table class="table table-hover align-middle mb-0"
                               id="users-table">

                            <thead>

                                <tr>
                                    <th width="70">STT</th>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Bộ phận</th>
                                    <th>Vị trí</th>
                                    <th>Hình thức</th>
                                    <th>Đội nhóm</th>
                                    <th>SĐT</th>
                                    <th>Địa chỉ</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày bắt đầu</th>
                                    <th>Ngày nghỉ việc</th>
                                    <th>Loại tài khoản</th>
                                    <th width="160">Tác vụ</th>
                                </tr>

                            </thead>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>




@include('layouts.parts.footer')
{{-- này làm lại cái layout phân trang --}}
<style>


    /* pagination đơn giản */

    .dataTables_wrapper .pagination{

        gap: 4px;

    }

    .dataTables_wrapper .page-link{

        border-radius: 6px !important;

        border: 1px solid #dee2e6 !important;

        background: #fff !important;

        color: #374151 !important;

        padding: 6px 12px;

        font-size: 14px;

        transition: .2s;

        box-shadow: none !important;

    }

    /* hover */

    .dataTables_wrapper .page-link:hover{

        background: #f3f4f6 !important;

        color: #111827 !important;

    }

    /* active */

    .dataTables_wrapper .page-item.active .page-link{

        background: #2563eb !important;

        border-color: #2563eb !important;

        color: #fff !important;

    }

    /* disabled */

    .dataTables_wrapper .page-item.disabled .page-link{

        background: #f9fafb !important;

        color: #9ca3af !important;

    }
    .dataTables_filter{

    display: flex !important;

    align-items: center;

    justify-content: flex-end;

    gap: 10px;

    flex-wrap: nowrap;

    width: 590px;

    margin-left: auto;

    padding: 16px;

}
/* nút xoá filter modern */

.reset-filter-btn{

    height: 38px;

    padding: 0 16px;

    border: none;

    border-radius: 12px;

    background: linear-gradient(135deg, #ef4444, #dc2626);

    color: #fff;

    font-size: 13px;

    font-weight: 600;

    display: flex;

    align-items: center;

    gap: 8px;

    cursor: pointer;

    transition: all .25s ease;

    box-shadow: 0 4px 10px rgba(239,68,68,.25);

}

/* hover */

.reset-filter-btn:hover{

    transform: translateY(-1px);

    box-shadow: 0 8px 18px rgba(239,68,68,.35);

}

/* click */

.reset-filter-btn:active{

    transform: scale(.96);

}

/* icon */

.reset-filter-btn i{

    font-size: 14px;

}
.okokkk{
    padding-right: 9px;
}
#users-table_wrapper{

    width: 2200px !important;

}
</style>
<script>
    window.DT = null; 
// $(document).ready(function () {
$(function () {

    // $('#users-table').DataTable({// id này phải để id của cái bảng muốn đổ dữ liệu
window.DT = $('#users-table').DataTable({
        processing: true,
        serverSide: true, 

        ajax: {
            url:"{{ route('users.list.data') }}",
            data: function(d){//gửi data vào ô input để gửi request đến server  | truyền d.  vào if  để kiểm tra  trong  UserController.php
                d.part_id = $('#f_part').val() || '';//d = object request mặc định của DataTable. |  cột trong cái nút 
                d.status = $('#f_status').val() || '';//d = object request mặc định của DataTable. |  cột trong cái nút 
                d.team = $('#f_team').val() || '';//d = object request mặc định của DataTable. |  cột trong cái nút 
                d.type_account_id = $('#f_type_account').val() || '';//d = object request mặc định của DataTable. |  cột trong cái nút 
            }
        },// bấm name cột> gửi lệnh và trả data về

        columns: [
            {
// STT tự tạo từ addIndexColumn()
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
// không cho sort

                orderable: false,
// không cho search
                searchable: false
            },
// _id đổi thành .name  >  ra chữ    |     đây là cách 2
{ data: 'thumbnail', name: 'thumbnail', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            
            { data: 'birthday', name: 'birthday' },
            { data: 'sex', name: 'sex' },
            { data: 'part_id', name: 'part_id' },
            { data: 'position_id', name: 'position_id' },
            { data: 'type_work', name: 'type_work' },
            { data: 'team_id', name: 'team_id' },
            { data: 'phone', name: 'phone' },
            { data: 'address', name: 'address' },
            { data: 'status', name: 'status' },
            { data: 'start_day', name: 'start_day' },
            { data: 'end_day', name: 'end_day' },
            { data: 'type_account_id', name: 'type_account_id' },
               {
        data: 'action',
        name: 'action',
        orderable: false,
        searchable: false
    }
    // do  ajax: { url:"{{ route('users.list.data') }}",  load ra dữ liệu trước đó tuy nó đóng nhưng vẫn nằm trong Object lớn của DataTable vẫn còn mở DataTable({ nên khi tiếp tục đọc Nó map JSON vào cột.data:'name'
    // route > views/users/list.blade.php > Model <> UserController.php > UserRepository.php 
        ],  
          language: {
        info: 'Hiển thị page _PAGE_ of _PAGES_ trang',
        infoEmpty: 'Không có dữ liệu',
        // infoFiltered: '(filtered from _MAX_ total records)',
        search: 'Tìm kiếm:',
        lengthMenu: 'Hiển thị _MENU_ users mỗi trang',
        // zeroRecords: 'Nothing found - sorry'
    },
    
    // cách 1 tạo bộ lọc cho đatatable | vào google : dom in datatable
dom: `
<'row mb-3 align-items-center'
    <'col-md-2'l>
    <'col-md-10 d-flex justify-content-end align-items-center'
        f
        <'dt-toolbar ms-2'>
    >
> 
rt
<'row mt-2'
    <'col-md-6'i>
    <'col-md-6'p>
>
`,

// đổ filter sau khi datatable render xong | vào google : initcomplete trong datatables
initComplete: function () {
    const api = this.api();
    // lấy toolbar
    const $bar = $('.dt-toolbar', api.table().container());
    // console.log($bar.length);
//tạo giao diện filter
    // nếu chưa có thì render
    if (!$bar.children().length) {
$bar.html(`
    <select id="f_status" class="form-select form-select-sm"><option value="">Trạng thái</option></select>
    <select id="f_part" class="form-select form-select-sm"><option value="">Bộ phận</option></select>
    <select id="f_team" class="form-select form-select-sm"><option value="">Đội nhóm</option></select>
    <select id="f_type_account" class="form-select form-select-sm"><option value="">Loại tài khoản</option></select>
    <button id="btn-clear-filters" class="btn btn-sm btn-danger">Xoá lọc</button>
`);

    } 
    // load dữ liệu từ server
    $.getJSON("{{ route('users.filters') }}")//gọi tới function filters>name('filters')ở wed.php > UserController.php=function getFilters - return > views/users/list.blade.php các bộ lọc
.done(res =>{
// console.log(res);
// ô select dữ liệu
fill('#f_status', res.status_f);//id nút gọi biến function Controller để in ra cột name
fill('#f_part', res.part_f);//id nút gọi biến function Controller để in ra cột name
fill('#f_team', res.team_f);//id nút gọi biến function Controller để in ra cột name
fill('#f_type_account', res.role_f);//id nút gọi biến function Controller để in ra cột name
 
});
// Hàm dổ dữ liệu từ dropdown filter
function fill(selector, items){//selector=id 'f_status' | items = ['Đang làm', 'Nghỉ việc']
var element = $(selector);//$(selector) = $('#f_status')
//Kiểm tra items
if(!items){
    items = [];
}
items.forEach(function (item){
    // đổ dữ liệ vào option - tạo option
var option = new Option(item.text, item.id);//Option() = đổ dữ liệu vào trong ô   | dữ liệu ở UserController.php > function getFilters
// thêm option vào trong select
element.append(option);

});
}
// Thay đổi filter -> Datatable reload lại Ajax 
$('#f_status, #f_part, #f_team, #f_type_account').on('change', function () {//chage = nếu nút thay đổi thì sẽ bắt sự kiện | ô select dữ liệu
window.DT.ajax.reload();//mỗi lần reload gọi tới datatable , biến gộp datatablle ở trên
});

// Xử lý xoá bộ lọc
// reset filter
$('#btn-clear-filters').on('click', function () {
    $('#f_status, #f_part, #f_team, #f_type_account').val('');
    window.DT.ajax.reload();//mỗi lần reload gọi tới datatable , biến gộp datatablle ở trên
    // $('#f_status').val('');
    // $('#f_part').val('');
    // $('#f_team').val('');
    // $('#f_type_account').val('');
    // // reset search datatable
    // api.search('');
    // api.columns().search('');
    // api.draw();

});
// chỉnh cái nút search tìm kiếm thì vào UserController chỉnh
}


    });
    // cách 2 tạo bộ lọc cho datatable
//      // append filter SAU KHI DataTable tạo xong
//   $('.dataTables_filter').append(`

//     <select id="filter-sex" class="custom-filter">
//         <option value="">Giới tính</option>
//         <option value="0">Nam</option>
//         <option value="1">Nữ</option>
//     </select>

//     <select id="filter-part" class="custom-filter">
//         <option value="">Bộ phận</option>
//         <option value="IT">IT</option>
//         <option value="Marketing">Marketing</option>
//         <option value="Kinh doanh">Kinh doanh</option>
//     </select>

//     <select id="filter-position" class="custom-filter">
//         <option value="">Vị trí</option>
//         <option value="Trưởng phòng">Trưởng phòng</option>
//         <option value="Nhân viên">Nhân viên</option>
//     </select>

//     <select id="filter-status" class="custom-filter">
//         <option value="">Trạng thái</option>
//         <option value="0">Đang làm</option>
//         <option value="1">Nghỉ việc</option>
//     </select>

//     <button id="reset-filter" class="reset-filter-btn">
//         <i class="fas fa-filter-circle-xmark"></i>
//         <span class="okokkk">Xoá lọc</span>
//     </button>

// `);

//  // filter giới tính
//     $('#filter-sex').on('change', function () {

//         table.column(4).search($(this).val()).draw();

//     });
//  // filter bộ phận
//     $('#filter-part').on('change', function () {

//         table.column(5).search($(this).val()).draw();

//     });

// // vị trí
// $('#filter-position').change(function () {

//     table.column(6).search($(this).val()).draw();

// });

// // trạng thái
// $('#filter-status').change(function () {

//     table.column(11).search($(this).val()).draw();

// });

// // reset
// $('#reset-filter').click(function () {

//     $('#filter-sex').val('');
//     $('#filter-part').val('');
//     $('#filter-position').val('');
//     $('#filter-status').val('');

//     table.search('').columns().search('').draw();

// });

});

// Thông báo SweetAlert2
$(document).on('click', '.delete-btn', function(e){
    e.preventDefault();
    const $form = $(this).closest('form');
    Swal.fire({
        title: "Bạn có chắc muốn xoá ?",
        icon: "question",
        confirmButtonText: "Xoá",
        cancelButtonText: "Huỷ",
        showCancelButton: true,
        showCloseButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $form.submit();
        }
    });
});

</script>
{{-- đã tải composer require yajra/laravel-datatables-oracle
đây là cho backend còn sử dụng fontend thì phải cho nó cái link CDN --}}
{{-- gắn cái link dãn css,js datatable của adminlte3.2.0 vào 
header : resources/views/layouts/parts/header.blade.php 
footer : resources/views/layouts/parts/footer.blade.php
--}}


{{-- tạo route --}}
{{-- tạo function Controller --}}   
{{-- <form action="{{ route('users.update', $user->id) }}">
    {{ csrf_field() }}
{{ method_field('DELETE') }}
 <button
class="btn btn-light border btn-sm action-btn delete-btn"
data-id="' . $row->id . '">
<i class="fas fa-trash-alt"></i>
 </button>
</form> --}}