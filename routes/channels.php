<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel(
    'attendance-channel',
    function () {
        return true;
    }
);
