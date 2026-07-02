{{-- <x-salary::layouts.master>
    <h1>Hello World</h1>

    <p>Module: {!! config('salary.name') !!}</p>
</x-salary::layouts.master> --}}

 {{-- @extends('layouts.app')

@section('content') --}}

@include('layouts.parts.header')
@include('layouts.parts.sidebar')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="content-wrapper">
    {{-- HEADER --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-1 font-weight-bold"> Cơ chế lương</h1>
                    <small class="text-muted">Quản lý lương nhân sự</small>
                </div>
               <div class="d-flex gap-2">
    <button class="btn btn-success" data-toggle="modal" data-target="#createModal" >
        <i class="fas fa-plus"></i>
        Thêm lương
    </button>
    <a href="{{ route('salary.export') }}" class="btn btn-primary" >
        <i class="fas fa-file-excel"></i>
        Xuất Excel
    </a>
          </div>
        </div>
      </div>
    </section>
    {{-- CONTENT --}}
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm border-0">
                <div class="card-body table-responsive">
                    <table
                        class="table table-hover table-bordered"
                        id="salaryTable"
                        width="100%"
                    >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nhân viên</th>
                                <th>Bộ phận</th>
                                <th>Chức vụ</th>
                                <th>Lương CB</th>
                                <th>Phụ cấp</th>
                                <th>Thưởng</th>
                                <th>Tăng ca</th>
                                <th>BH trừ</th>
                                <th>Thuế trừ</th>
                                <th>Phạt đi trễ</th>
                                <th>Điểm NL</th>
                                <th>Tổng lương</th>
                                <th>Năng lực</th>
                                <th>Ngày tạo</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
{{-- =========================
MODAL CREATE
========================= --}}
<div class="modal fade" id="createModal" >
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="createForm">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Thêm lương</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nhân viên</label>
                            <select name="user_id" class="form-control" required>
                                <option value="">Chọn nhân viên</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Lương cơ bản</label>
                            <input type="number" name="basic_salary" class="form-control" value="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phụ cấp</label>
                            <input type="number" name="allowance" class="form-control" value="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Thưởng</label>
                            <input type="number" name="bonus" class="form-control" value="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Tăng ca</label>
                            <input type="number" name="overtime_salary" class="form-control" value="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Khấu trừ bảo hiểm</label>
                            <input type="number" name="insurance_deduction" class="form-control" value="0" >

                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Khấu trừ thuế</label>
                             <input type="number" name="tax_deduction" class="form-control" value="0" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phạt đi trễ</label>
                            <input type="number" name="late_penalty" class="form-control" value="0" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Điểm năng lực</label>
                            <input type="number" name="performance_score" class="form-control" value="0" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Đóng
                    </button>
                    <button type="submit" class="btn btn-success">
                        Lưu
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- =========================
MODAL EDIT
========================= --}}
<div class="modal fade" id="editModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="editForm">
                @csrf
                <input type="hidden" id="edit_id" >
                <div class="modal-header">
                    <h5 class="modal-title">
                        Sửa lương
                    </h5>

                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                    >
                        <span>&times;</span>
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label>Lương cơ bản</label>

                            <input
                                type="number"
                                id="edit_basic_salary"
                                name="basic_salary"
                                class="form-control"
                            >

                        </div>





                        <div class="col-md-6 mb-3">

                            <label>Phụ cấp</label>

                            <input
                                type="number"
                                id="edit_allowance"
                                name="allowance"
                                class="form-control"
                            >

                        </div>





                        <div class="col-md-6 mb-3">

                            <label>Thưởng</label>

                            <input
                                type="number"
                                id="edit_bonus"
                                name="bonus"
                                class="form-control"
                            >

                        </div>





                        <div class="col-md-6 mb-3">

                            <label>Tăng ca</label>

                            <input
                                type="number"
                                id="edit_overtime_salary"
                                name="overtime_salary"
                                class="form-control"
                            >

                        </div>





                        <div class="col-md-6 mb-3">

                 <label>Khấu trừ bảo hiểm</label> 
 <input
        type="number"
        id="edit_insurance_deduction"
        name="insurance_deduction"
        class="form-control"
    >
                        </div>





                        <div class="col-md-6 mb-3">

                         <label>Khấu trừ thuế</label> 
    <input
        type="number"
        id="edit_tax_deduction"
        name="tax_deduction"
        class="form-control"
    >
                        </div>





                        <div class="col-md-6 mb-3">

                          <label>Phạt đi trễ</label>


    <input
        type="number"
        id="edit_late_penalty"
        name="late_penalty"
        class="form-control"
    >
                        </div>





                        <div class="col-md-6 mb-3">

                            <label>Điểm năng lực</label>

                            <input
                                type="number"
                                id="edit_performance_score"
                                name="performance_score"
                                class="form-control"
                            >

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Đóng
                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Cập nhật
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@include('layouts.parts.footer')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

$.ajaxSetup({

    headers:{

        'X-CSRF-TOKEN':
        $('meta[name="csrf-token"]').attr('content')

    }

});





let table = $('#salaryTable').DataTable({

    processing:true,

    serverSide:true,

    scrollX:true,

    ajax:'{{ route("salary.data") }}',

    columns:[

        {
            data:'id',
            name:'id'
        },





        {
            data:'employee_name',
            name:'employee_name',

            render:function(data,type,row){

                return `

                <div class="employee-hover-wrapper">

                    <span
                        class="employee-name text-primary font-weight-bold"
                        style="cursor:pointer"
                        data-score="${row.performance_score}"
                    >
                        ${data}
                    </span>

                    <div class="employee-card">

                        <div class="card p-3 shadow-lg border-0">

                            <h6>${data}</h6>

                            <p>
                                Đánh giá:
                                <b>${row.performance}</b>
                            </p>

                            <canvas
                                class="mini-chart"
                                width="220"
                                height="120"
                            ></canvas>

                        </div>

                    </div>

                </div>

                `;

            }
        },





        {
            data:'department',
            name:'department'
        },





        {
            data:'position',
            name:'position'
        },





        {
            data:'basic_salary',
            name:'basic_salary'
        },





        {
            data:'allowance',
            name:'allowance'
        },





        {
            data:'bonus',
            name:'bonus'
        },





        {
            data:'overtime_salary',
            name:'overtime_salary'
        },





        {
            data:'insurance_deduction',
            name:'insurance_deduction'
        },





        {
            data:'tax_deduction',
            name:'tax_deduction'
        },





        {
            data:'late_penalty',
            name:'late_penalty'
        },





        {
            data:'performance_score',
            name:'performance_score'
        },





        {
            data:'total_salary',
            name:'total_salary'
        },





        {
            data:'performance',
            name:'performance'
        },





        {
            data:'created_at',
            name:'created_at'
        },





        {
            data:'action',
            orderable:false,
            searchable:false,
        }

    ]

});






/*
|--------------------------------------------------------------------------
| HOVER CHART
|--------------------------------------------------------------------------
*/

$(document).on('mouseenter','.employee-name',function(){

    let wrapper = $(this).closest('.employee-hover-wrapper');

    let canvas = wrapper.find('.mini-chart')[0];

    if(canvas.dataset.loaded){
        return;
    }

    canvas.dataset.loaded = true;

    let score = $(this).data('score');

    new Chart(canvas,{

        type:'line',

        data:{

            labels:[
                'T1',
                'T2',
                'T3',
                'T4',
                'T5'
            ],

            datasets:[{

                data:[
                    45,
                    60,
                    70,
                    80,
                    score
                ],

                borderWidth:2,

                fill:false,

                tension:0.4

            }]

        },

        options:{

            responsive:false,

            plugins:{
                legend:{
                    display:false
                }
            },

            scales:{
                y:{
                    beginAtZero:true,
                    max:100
                }
            }

        }

    });

});







/*
|--------------------------------------------------------------------------
| CREATE
|--------------------------------------------------------------------------
*/

$('#createForm').submit(function(e){

    e.preventDefault();

    $.ajax({

        url:'{{ route("salary.store") }}',

        method:'POST',

        data:$(this).serialize(),

        success:function(){

            $('#createModal').modal('hide');

            $('#createForm')[0].reset();

            table.ajax.reload();

            Swal.fire(
                'Thành công',
                'Đã thêm dữ liệu',
                'success'
            );

        }

    });

});







/*
|--------------------------------------------------------------------------
| EDIT SHOW
|--------------------------------------------------------------------------
*/

$(document).on('click','.editBtn',function(){

    $('#edit_id').val($(this).data('id'));

    $('#edit_basic_salary').val($(this).data('basic_salary'));

    $('#edit_allowance').val($(this).data('allowance'));

    $('#edit_bonus').val($(this).data('bonus'));

    $('#edit_overtime_salary').val($(this).data('overtime_salary'));

    $('#edit_insurance_deduction').val($(this).data('insurance_deduction'));

    $('#edit_tax_deduction').val($(this).data('tax_deduction'));

    $('#edit_late_penalty').val($(this).data('late_penalty'));

    $('#edit_performance_score').val($(this).data('performance_score'));

    $('#editModal').modal('show');
    

});







/*
|--------------------------------------------------------------------------
| UPDATE
|--------------------------------------------------------------------------
*/

$('#editForm').submit(function(e){

    e.preventDefault();

    let id = $('#edit_id').val();

    $.ajax({

        url:`/salary/update/${id}`,

        method:'POST',

        data:$(this).serialize(),

        success:function(){

            $('#editModal').modal('hide');

            table.ajax.reload();

            Swal.fire(
                'Thành công',
                'Đã cập nhật',
                'success'
            );

        }

    });

});







/*
|--------------------------------------------------------------------------
| DELETE
|--------------------------------------------------------------------------
*/
$('#salaryTable').on('click', '.deleteBtn', function (e) {
    e.preventDefault();

    let id = $(this).data('id');

    Swal.fire({
        title: 'Bạn có chắc muốn xoá?',
        text: "Dữ liệu sẽ không thể khôi phục!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Xoá',
        cancelButtonText: 'Huỷ'
    }).then((result) => {

        if (result.isConfirmed) {

            $.ajax({
                url: `/salary/delete/${id}`,
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
                    table.ajax.reload();

                    Swal.fire(
                        'Đã xoá!',
                        'Dữ liệu đã được xoá.',
                        'success'
                    );
                }
            });

        }
    });
});
// $(document).on('click','.deleteBtn',function(){

//     let id = $(this).data('id');

//     Swal.fire({

//         title:'Xoá dữ liệu ?',

//         icon:'warning',

//         showCancelButton:true,

//         confirmButtonText:'Xoá',

//         cancelButtonText:'Huỷ'

//     }).then((result)=>{

//         if(result.isConfirmed){

//             $.ajax({

//                 url:`/salary/delete/${id}`,

//                 method:'POST',

//                 success:function(){

//                     table.ajax.reload();

//                     Swal.fire(
//                         'Đã xoá',
//                         '',
//                         'success'
//                     );

//                 }

//             });

//         }

//     });

// });

</script>

<style>

.employee-hover-wrapper{

    position:relative;

    display:inline-block;

}

.employee-card{

    display:none;

    position:absolute;

    top:35px;

    left:0;

    width:260px;

    z-index:9999;

}

.employee-hover-wrapper:hover .employee-card{

    display:block;

}

.employee-card .card{

    border-radius:14px;

    background:#fff;

}

.dataTables_filter{

    margin-bottom:15px;

}

.dataTables_filter input{

    border-radius:10px !important;

    border:1px solid #dcdcdc !important;

    padding:6px 12px !important;

}

table.dataTable tbody td{

    vertical-align:middle;

    white-space:nowrap;

}

</style>



{{-- 
public/assets/css/salary.css
footer.blade.php 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

nếu chưa có : composer require yajra/laravel-datatables-oracle

--}}