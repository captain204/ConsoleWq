<?php

namespace App\Services;


use App\Services\OTPService;
use App\Services\UserService;
use App\Services\EncryptionService;
use App\Events\UserCreated;
use Illuminate\Support\Facades\Log;


class AuthService
{

    protected $encryptionService;
    protected $otpService;
    protected $userService;

    public function __construct(OTPService $otpService, EncryptionService $encryptionService, UserService $userService)
    {
        $this->otpService = $otpService;
        $this->encryptionService = $encryptionService;
        $this->userService = $userService;
    }

    /**
     * Registers a new user with the provided data.
     *
     * @param array $data An associative array containing the user registration data, such as name, email, password, etc.
     * @return \App\Models\User|null The newly created user, or null if the registration failed.
     */
    public function register(array $data)
    {
        try {
            
            $data['password'] = $this->encryptionService->hash($data['password']);
            $user = $this->userService->crateUser($data);
            UserCreated::dispatch(($user));
            return $user;
        } catch (\Exception $e) {
            // dd($e);
            Log::error($e);
            return $e;
        }
    }

    /**
     * Attempts to log in a user with the provided credentials.
     *
     * @param array $data An associative array containing the login credentials, such as email/phone and password.
     * @return \App\Models\User|null The logged in user, or null if the login failed.
     */
    public function login(array $data)
    {
        try {
            $user = $this->userService->findUserByEmailORPhone($data['login']);
            if ($user) {
                if ($this->encryptionService->compareHash($data['password'], $user->password)) {
                    return $user;
                }
            }
            return null;
        } catch (\Exception $e) {
            Log::error($e);
            return null;
        }
    }


    /**
     * Resends the OTP (One-Time Password) for the provided mobile number.
     *
     * @param array $data An associative array containing the mobile number to resend the OTP for.
     * @return void
     */
    public function resendOTP(array $data)
    {
        $user = $this->userService->findUserByEmail($data['email']);
        if ($user) {
            $this->otpService->sendOTP($user->email, $user->name);
            return true;
        }

        return false;
    }


    /**
     * Resets the password for a user with the provided data.
     *
     * @param array $data An associative array containing the user's ID and new password.
     * @return \App\Models\User|null The updated user, or null if the reset failed.
     */
    public function resetPassword(array $data)
    {
        try {
            $user = $this->userService->findUserById($data['id']);

            if ($user) {
                $hashedPassword = $this->encryptionService->hash($data['password']);
                $user->password = $hashedPassword;
                return $this->userService->updateUser($data, $user['id']);
            }
        } catch (\Exception $e) {
            Log::error($e);
            return null;
        }
    }

    public function logout()
    {
        // Implement logout logic here
    }
}
