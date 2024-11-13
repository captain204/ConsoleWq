<?php

namespace App\Repos;

use Illuminate\Support\Facades\Redis;

class OTPRepo {
    
    protected $redis;

    public function __construct()
    {
        $this->redis = Redis::connection();
    }

    /**
     * Sends an OTP (One-Time Password) to the specified mobile number.
     *
     * @param string $mobile_number The mobile number to send the OTP to.
     * @param string $otp The OTP to be sent.
     * @return void
     */
    public function setOTP(string $mobile_number, string $otp): void {
        $this->redis->set($mobile_number, $otp);
        $this->redis->expire($mobile_number, 30); // expire in 30 seconds (adjust as needed)
    }

    /**
     * Verifies the provided OTP (One-Time Password) for the given mobile number.
     *
     * @param string $mobile_number The mobile number to verify the OTP for.
     * @param string $otp The OTP to be verified.
     * @return bool True if the OTP is valid, false otherwise.
     */
    public function verifyOTP(string $mobile_number, string $otp): bool {
        $redis_otp = $this->redis->get($mobile_number);
        return ($redis_otp === $otp);
    }

    /**
     * Deletes the OTP (One-Time Password) for the specified mobile number.
     *
     * @param string $mobile_number The mobile number to delete the OTP for.
     * @return bool True if the OTP was successfully deleted, false otherwise.
     */
    public function deleteOTP(string $mobile_number): bool {
        return (bool) $this->redis->del($mobile_number);
    }
}
