<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\TestEnrollment;

class TestEnrollmentController extends Controller
{
    public function sendTestNotification()
    {

        $user = User::first();

        $enrollmentData = [
            'body' => 'You received a new test notification',
            'enrollmentText' => 'You are allowed to enroll',
            'url' => url('/'),
            'thankyou' => 'You have 14 days to enroll'
        ];

        $user->notify(new TestEnrollment($enrollmentData));
    }
}
