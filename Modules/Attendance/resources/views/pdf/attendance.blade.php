<h1>Attendance Report</h1>

<table border="1" width="100%" cellspacing="0" cellpadding="5">

<tr>
    <th>ID</th>
    <th>User ID</th>
    <th>Name</th>
    <th>Work Date</th>
    <th>Check In</th>
    <th>Check Out</th>
    <th>Late Minutes</th>
    <th>Work Hours</th>
    <th>Overtime Hours</th>
    <th>Status</th>
    <th>Created At</th>
</tr>

@foreach($attendances as $row)

<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->user_id }}</td>
    <td>{{ $row->user->name ?? '' }}</td>
    <td>{{ $row->work_date }}</td>
    <td>{{ $row->check_in }}</td>
    <td>{{ $row->check_out }}</td>
    <td>{{ $row->late_minutes }}</td>
    <td>{{ $row->work_hours }}</td>
    <td>{{ $row->overtime_hours }}</td>
    <td>{{ $row->status }}</td>
    <td>{{ $row->created_at }}</td>
</tr>

@endforeach

</table>
{{-- 
Nhiệm vụ : Template Export PDF.
Khai báo : Attendance Table
Luồng :
AttendancePdfController
↓
Blade
↓
DomPDF
↓
PDF

 --}}
