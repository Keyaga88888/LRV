<?php

// // gửi realtime ra frontend
// namespace Modules\Salary\App\Events;

// use Illuminate\Broadcasting\Channel;
// use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
// use Illuminate\Queue\SerializesModels;

// /**
//  * =========================
//  * EVENT BROADCAST (REALTIME)
//  * =========================
//  * 👉 gửi dữ liệu ra frontend (Laravel Echo / Pusher)
//  */
// class SalaryUpdatedBroadcast implements ShouldBroadcast
// {
//     use SerializesModels;

//     public $salaryId;

//     public function __construct($salaryId)
//     {
//         $this->salaryId = $salaryId;
//     }

//     /**
//      * Channel frontend sẽ listen
//      */
//     public function broadcastOn()
//     {
//         return new Channel('salary-channel');
//     }

//     /**
//      * tên event frontend nhận
//      */
//     public function broadcastAs()
//     {
//         return 'salary.updated';
//     }

//     /**
//      * data gửi ra frontend
//      */
//     public function broadcastWith()
//     {
//         return [
//             'salary_id' => $this->salaryId
//         ];
//     }
// }
// // Bạn cần kiểm tra .env:
// // BROADCAST_DRIVER = log
// // 👉 nếu dùng realtime thật:
// // BROADCAST_DRIVER = pusher
