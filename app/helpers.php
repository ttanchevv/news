<?php

use Carbon\Carbon;

if (!function_exists('calculateTimeAgo')) {
    function calculateTimeAgo($date): string
    {
        $now = Carbon::now();
        $createdAt = Carbon::parse($date);
        $hoursDifference = round($createdAt->diffInHours($now));

        if ($hoursDifference < 24) {
            return "{$hoursDifference}ч.";
        }

        $daysDifference = round($createdAt->diffInDays($now));
        return "{$daysDifference} дни";
    }
}
