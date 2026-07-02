import "./bootstrap";

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

function reloadAttendance() {
    if ($.fn.DataTable.isDataTable("#attendanceTable")) {
        $("#attendanceTable").DataTable().ajax.reload(null, false);
    }
}

function toast(title, icon = "success") {
    Swal.fire({
        toast: true,
        position: "top-end",
        timer: 2500,
        showConfirmButton: false,
        icon,
        title,
    });
}
function reloadDashboard() {
    $.get("/attendance/dashboard-data", function (res) {
        $("#totalAttendance").text(res.total);

        $("#todayAttendance").text(res.today);

        $("#pendingAttendance").text(res.pending);

        dashboardChart.data.datasets[0].data = res.chart;

        dashboardChart.update();
    });
}
window.Echo.channel("attendance-channel")

.listen(".attendance.created", (e) => {
    toast("Có chấm công mới");
    reloadAttendance();
})

.listen(".attendance.updated", (e) => {
    toast("Có chấm công được cập nhật");
    reloadAttendance();
})

.listen(".attendance.deleted", (e) => {
    toast("Có chấm công bị xoá");
    reloadAttendance();
})

.listen(".attendance.approved", (e) => {
    toast("Có chấm công vừa được duyệt");
    reloadAttendance();
})

.listen(".attendance.rejected", (e) => {
    toast("Có chấm công bị từ chối");
    reloadAttendance();
});