<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\OTPService;
use Illuminate\Support\Facades\Log;


class SendUserOTP implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    protected $otpService;

    public function __construct(OTPService $otpService)
    {
        $this->otpService = $otpService;
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event)
    {
        try {
            $email = $event->user->email;
            $name = $event->user->name;

            // Now you can use $email and $name to perform actions like sending OTP
            $this->otpService->sendOTP($email, $name);
        } catch (\Exception $e) {
            Log::error($e);
        }
    }
}
