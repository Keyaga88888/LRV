@include('layouts.parts.header')
@include('layouts.parts.sidebar')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h1 class="mb-1 font-weight-bold">
                        Chấm công
                    </h1>

                    <small class="text-muted">
                        Quản lý chấm công nhân sự
                    </small>
                </div>
<div class="card mt-3">
    <div class="card-body" style="height:400px;    width: 500px;
">

        <canvas id="attendanceChart"></canvas>

    </div>
</div>
                <div>

<button
    id="openCreateModal"
    type="button"
    class="btn btn-success"
    data-toggle="modal"
    data-target="#createModal">

    <i class="fas fa-plus"></i>

    Thêm chấm công

</button>
<a
    href="{{ route('attendance.export') }}"
    class="btn btn-primary"
>
    Export Excel
</a>
<a
    href="{{ url('/attendance/export/pdf') }}"
    class="btn btn-danger"
>
    Export PDF
</a>
<button
        id="checkInBtn"
        class="btn btn-success">
        Check In
    </button>
    <button
        id="checkOutBtn"
        class="btn btn-warning">
        Check Out
    </button>

                </div>

            </div>

        </div>
    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card shadow-sm border-0">

                <div class="card-body table-responsive">
                    <div class="row">

    <div class="col">
        Present:
        <span id="present">0</span>
    </div>

    <div class="col">
        Late:
        <span id="late">0</span>
    </div>

    <div class="col">
        Absent:
        <span id="absent">0</span>
    </div>

    <div class="col">
        Leave:
        <span id="leave">0</span>
    </div>

</div>
<div class="d-flex mb-3 align-items-center">

    <select id="filter_department" class="form-control mr-2" style="width:200px;">
        <option value="">-- Bộ phận --</option>
        @foreach($users->pluck('part')->unique('id') as $part)
            <option value="{{ $part->name ?? '' }}">
                {{ $part->name ?? '' }}
            </option>
        @endforeach
    </select>

    <select id="filter_position" class="form-control mr-2" style="width:200px;">
        <option value="">-- Chức vụ --</option>
        @foreach($users->pluck('position')->unique('id') as $position)
            <option value="{{ $position->name ?? '' }}">
                {{ $position->name ?? '' }}
            </option>
        @endforeach
    </select>

    <button id="reset_filter" class="btn btn-secondary btn-sm">
        <i class="fas fa-sync"></i> Xoá lọc
    </button>

</div>
                    <table
                        id="attendanceTable"
                        class="table table-bordered table-hover"
                        width="100%"
                    >

                        <thead>

                        <tr>

                            <th>ID</th>

                            <th>Nhân viên</th>

                            <th>Bộ phận</th>

                            <th>Chức vụ</th>

                            <th>Ngày</th>

                            <th>Check In</th>

                            <th>Check Out</th>

                            <th>Đi trễ</th>

                            <th>Giờ làm</th>

                            <th>Tăng ca</th>

                            <th>Trạng thái</th>

                            <th>Ngày tạo</th>

                            <th>Tác vụ</th>
<th>Duyệt</th>
                        </tr>

                        </thead>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>

{{-- CREATE MODAL --}}

<div
    class="modal fade"
    id="createModal"
>

    <div class="modal-dialog modal-xl">

        <div class="modal-content">

            <form id="createForm">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">
                        Thêm chấm công
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

                            <label>Nhân viên</label>

                            <select
                                name="user_id"
                                class="form-control"
                                required
                            >

                                <option value="">
                                    Chọn nhân viên
                                </option>

                                @foreach($users as $user)

                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Ngày làm</label>

                            <input
                                type="date"
                                name="work_date"
                                class="form-control"
                                required
                            >

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Check In</label>

                            <input
                                type="datetime-local"
                                name="check_in"
                                class="form-control"
                            >

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Check Out</label>

                            <input
                                type="datetime-local"
                                name="check_out"
                                class="form-control"
                            >

                        </div>

                        <div class="col-md-4 mb-3">

                            <label>Đi trễ</label>

                            <input
                                type="number"
                                name="late_minutes"
                                class="form-control"
                                value="0"
                            >

                        </div>

                        <div class="col-md-4 mb-3">

                            <label>Giờ làm</label>

                            <input
                                type="number"
                                step="0.01"
                                name="work_hours"
                                class="form-control"
                                value="0"
                            >

                        </div>

                        <div class="col-md-4 mb-3">

                            <label>Tăng ca</label>

                            <input
                                type="number"
                                step="0.01"
                                name="overtime_hours"
                                class="form-control"
                                value="0"
                            >

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Trạng thái</label>

                            <select
                                name="status"
                                class="form-control"
                            >

                                <option value="present">
                                    Có mặt
                                </option>

                                <option value="late">
                                    Đi trễ
                                </option>

                                <option value="absent">
                                    Vắng
                                </option>

                                <option value="leave">
                                    Nghỉ phép
                                </option>

                            </select>

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
                        class="btn btn-success"
                    >
                        Lưu
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

{{-- EDIT MODAL --}}

<div
    class="modal fade"
    id="editModal"
>

    <div class="modal-dialog modal-xl">

        <div class="modal-content">

            <form id="editForm">

                @csrf

                <input
                    type="hidden"
                    id="edit_id"
                >

                <div class="modal-header">

                    <h5 class="modal-title">
                        Cập nhật chấm công
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

                            <label>Check In</label>

                            <input
                                type="datetime-local"
                                id="edit_check_in"
                                name="check_in"
                                class="form-control"
                            >

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Check Out</label>

                            <input
                                type="datetime-local"
                                id="edit_check_out"
                                name="check_out"
                                class="form-control"
                            >

                        </div>

                        <div class="col-md-4 mb-3">

                            <label>Đi trễ</label>

                            <input
                                type="number"
                                id="edit_late_minutes"
                                name="late_minutes"
                                class="form-control"
                            >

                        </div>

                        <div class="col-md-4 mb-3">

                            <label>Giờ làm</label>

                            <input
                                type="number"
                                step="0.01"
                                id="edit_work_hours"
                                name="work_hours"
                                class="form-control"
                            >

                        </div>

                        <div class="col-md-4 mb-3">

                            <label>Tăng ca</label>

                            <input
                                type="number"
                                step="0.01"
                                id="edit_overtime_hours"
                                name="overtime_hours"
                                class="form-control"
                            >

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Trạng thái</label>

                            <select
                                id="edit_status"
                                name="status"
                                class="form-control"
                            >

                                <option value="present">
                                    Có mặt
                                </option>

                                <option value="late">
                                    Đi trễ
                                </option>

                                <option value="absent">
                                    Vắng
                                </option>

                                <option value="leave">
                                    Nghỉ phép
                                </option>

                            </select>

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

@vite([
    'resources/js/app.js',
    'resources/css/app.css'
])
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

$.ajaxSetup({

    headers:{

        'X-CSRF-TOKEN':
        $('meta[name="csrf-token"]').attr('content')

    }

});

let table = $('#attendanceTable').DataTable({

    processing:true,

    serverSide:true,

    scrollX:true,

    ajax:'{{ route("attendance.data") }}',

   columns: [

    { data:'id', name:'attendances.id' },

    { data:'employee_name', name:'users.name' },
    { data:'department', name:'parts.name' },
    { data:'position', name:'positions.name' },

    { data:'work_date', name:'attendances.work_date' },
    { data:'check_in', name:'attendances.check_in' },
    { data:'check_out', name:'attendances.check_out' },

    { data:'late_minutes', name:'attendances.late_minutes' },
    { data:'work_hours', name:'attendances.work_hours' },
    { data:'overtime_hours', name:'attendances.overtime_hours' },
    { data:'status', name:'attendances.status' },
    
    { data:'created_at', name:'attendances.created_at' },

{ data:'action', name:'action', orderable:false, searchable:false },
{
    data:'approval_status',
    name:'attendances.approval_status'
},
]

});
// ================= FILTER DEPARTMENT =================
$('#filter_department').on('change', function () {
    table
        .column(2) // cột Bộ phận
        .search(this.value)
        .draw();
});

// ================= FILTER POSITION =================
$('#filter_position').on('change', function () {
    table
        .column(3) // cột Chức vụ
        .search(this.value)
        .draw();
});
function resetFilter() {
    $('#filter_department').val('');
    $('#filter_position').val('');

    table.columns().search('').draw();
}
$('#reset_filter').on('click', function () {

    $('#filter_department').val('');
    $('#filter_position').val('');

    table
        .columns()
        .search('')
        .draw();
});

// đếm sô 4 cái trạng thái - realtime | nhớ cho Echo vào resources/js/app.js
function reloadSummary() {

    $.get("/attendance/dashboard-summary", function (data) {

        $("#present").text(data.present);

        $("#late").text(data.late);

        $("#absent").text(data.absent);

        $("#leave").text(data.leave);

    });

}

reloadSummary();


/*
|--------------------------------------------------------------------------
| HOVER CHART
|--------------------------------------------------------------------------
*/
$(document).on("mouseenter", ".employee-name", function () {

    const wrapper = $(this).closest(".employee-hover-wrapper");

    const canvas = wrapper.find(".mini-chart")[0];

    if (!canvas) {
        return;
    }

    if (canvas.chart) {
        return;
    }

    const score = Number($(this).data("score"));

    canvas.chart = new Chart(canvas.getContext("2d"), {

        type: "line",

        data: {

            labels: [
                "T1",
                "T2",
                "T3",
                "T4",
                "T5"
            ],

            datasets: [

                {

                    label: "Performance",

                    data: [
                        45,
                        60,
                        70,
                        82,
                        score
                    ],

                    borderWidth: 2,

                    fill: false,

                    tension: 0.4

                }

            ]

        },

        options: {

            responsive: false,

            interaction: {
                mode: "nearest",
                intersect: false
            },

            plugins: {

                legend: {
                    display: false
                },

                tooltip: {
                    enabled: true
                }

            },

            scales: {

                y: {

                    beginAtZero: true,

                    max: 100

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

$('#createForm').on('submit', function (e) {

    e.preventDefault();

    let form = $(this);

    $.ajax({

        url: '{{ route("attendance.store") }}',

        type: 'POST',

        data: form.serialize(),

        beforeSend: function () {

            form.find('button[type="submit"]').prop('disabled', true);

        },

        success: function (res) {

            form[0].reset();

            $('#createModal').modal('hide');

            table.ajax.reload(null, false);

            Swal.fire(
                'Thành công',
                'Đã thêm dữ liệu',
                'success'
            );

        },

        error: function (xhr) {

            console.log(xhr.responseJSON);

            Swal.fire(
                'Lỗi',
                'Không thể thêm dữ liệu',
                'error'
            );

        },

        complete: function () {

            form.find('button[type="submit"]').prop('disabled', false);

        }

    });

});


/*
|--------------------------------------------------------------------------
| FIX MODAL FOCUS (Bootstrap 4)
|--------------------------------------------------------------------------
*/

$('#createModal').on('hide.bs.modal', function () {

    if (
        document.activeElement &&
        this.contains(document.activeElement)
    ) {
        document.activeElement.blur();
    }

});

$('#createModal').on('hidden.bs.modal', function () {

    setTimeout(function () {

        $('#openCreateModal').trigger('focus');

    }, 0);

});

/*
|--------------------------------------------------------------------------
| EDIT SHOW
|--------------------------------------------------------------------------
*/

$(document).on('click','.editBtn',function(){

    $('#edit_id').val(
        $(this).data('id')
    );

    $('#edit_check_in').val(
        $(this).data('check_in')
    );

    $('#edit_check_out').val(
        $(this).data('check_out')
    );

    $('#edit_late_minutes').val(
        $(this).data('late_minutes')
    );

    $('#edit_work_hours').val(
        $(this).data('work_hours')
    );

    $('#edit_overtime_hours').val(
        $(this).data('overtime_hours')
    );

    $('#edit_status').val(
        $(this).data('status')
    );

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

        url:`/attendance/update/${id}`,

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

$('#attendanceTable').on('click','.deleteBtn',function(e){

    e.preventDefault();

    let id = $(this).data('id');

    Swal.fire({

        title:'Bạn có chắc muốn xoá?',

        text:'Dữ liệu sẽ không thể khôi phục!',

        icon:'warning',

        showCancelButton:true,

        confirmButtonText:'Xoá',

        cancelButtonText:'Huỷ'

    }).then((result)=>{

        if(result.isConfirmed){

            $.ajax({

                url:`/attendance/delete/${id}`,

                method:'POST',

                success:function(){

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
$(document).on(
    'click',
    '.rejectBtn',
    function () {

        let id = $(this).data('id');

        Swal.fire({

            title:'Reject chấm công?',

            icon:'warning',

            showCancelButton:true,

            confirmButtonText:'Reject'

        }).then((result)=>{

            if(result.isConfirmed){

                $.post(

                    '/attendance/reject/' + id,

                    {
                        _token:
                        $('meta[name="csrf-token"]').attr('content')
                    },

                    function(res){

                        Swal.fire(
                            'Success',
                            res.message,
                            'success'
                        );

                        table.ajax.reload();

                    }

                );

            }

        });

    }
);
$(document).on(
    'click',
    '.approveBtn',
    function () {

        let id = $(this).data('id');

        Swal.fire({

            title:'Approve chấm công?',
            icon:'question',
            showCancelButton:true,
            confirmButtonText:'Approve'

        }).then((result)=>{

            if(result.isConfirmed){

                $.post(

                    '/attendance/approve/' + id,

                    {
                        _token:
                        $('meta[name="csrf-token"]').attr('content')
                    },

                    function(res){

                        Swal.fire(
                            'Success',
                            res.message,
                            'success'
                        );

                        table.ajax.reload();

                    }

                );

            }

        });

    }
);
// <sc src="https://cdn.jsdelivr.net/npm/chart.js"></sc ript>

// <canvas id="attendanceChart"></canvas>
window.reloadChart = function () {

    const canvas = document.getElementById("attendanceChart");

    if (!canvas) {
        return;
    }

    $.get("/attendance/dashboard-advanced", function (data) {

        console.log("reloadChart", data);

        // Đã có chart -> chỉ cập nhật dữ liệu
        if (window.attendanceChartInstance) {

            window.attendanceChartInstance.data.labels = data.labels;

            window.attendanceChartInstance.data.datasets[0].data = data.totals;

            window.attendanceChartInstance.update();

            return;
        }

        // Chưa có chart -> tạo mới
        window.attendanceChartInstance = new Chart(
            canvas.getContext("2d"),
            {
                type: "line",

                data: {
                    labels: data.labels,

                    datasets: [{
                        label: "Đi trễ",
                        data: data.totals,
                        borderWidth: 2,
                        fill: true,
                        tension: 0.3
                    }]
                },

                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: false
                }
            }
        );

    });

};

// Load lần đầu khi mở trang
window.reloadChart();
// ExportAttendancePdfJob
$(document).on(
    'click',
    '#exportPdfBtn',
    function () {

        $.post(
            '/attendance/export-pdf',
            {
                _token:
                $('meta[name="csrf-token"]').attr('content')
            },
            function(res){

                Swal.fire(
                    'Success',
                    res.message,
                    'success'
                );

            }
        );

    }
);

// Check In / Check Out
$('#checkInBtn').click(function () {

    $.post(
        '/attendance/check-in',
        {
            _token:
            $('meta[name="csrf-token"]').attr('content')
        },
        function(res){

            Swal.fire(
                'Success',
                res.message,
                'success'
            );

        }
    );

});
$('#checkOutBtn').click(function () {

    $.post(
        '/attendance/check-out',
        {
            _token:
            $('meta[name="csrf-token"]').attr('content')
        },
        function(res){

            Swal.fire(
                'Success',
                res.message,
                'success'
            );

        }
    );

});
$(document).on(
    'click',
    '.rejectBtn',
    function () {

        let id = $(this).data('id');

        Swal.fire({
            title: 'Reject attendance?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Reject'
        }).then((result) => {

            if(result.isConfirmed){

                $.post(
                    '/attendance/reject/' + id,
                    {
                        _token:
                        $('meta[name="csrf-token"]').attr('content')
                    },
                    function(res){

                        Swal.fire(
                            'Success',
                            res.message,
                            'success'
                        );

                        table.ajax.reload();

                    }
                );

            }

        });

    }
);
</script>
<style>

.employee-hover-wrapper{
    position:relative;
    display:inline-block;
    cursor:pointer;
}

.employee-card{
    display:none;
    position:absolute;
    top:28px;
    left:0;
    width:250px;
    z-index:999999;
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

.badge{

    font-size:13px;

    padding:6px 10px;

}

</style>
{{--
Nhiệm vụ : Giao diện chính.
Khai báo :
DataTable
Chart.js
AJAX
Modal
CRUD
Approve
Reject
Check In
Export

Luồng :
Browser
↓
index.blade.php
↓
AJAX
↓
Route
↓
Controller 

--}}
