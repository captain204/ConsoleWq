<?php

namespace App\Services;


use App\Repos\OTPRepo;
use App\Services\MailService;

class OTPService
{
    protected $otpRepo;
    protected $mailService;
    protected $mail_subject;

    public function __construct(OTPRepo $otpRepo, MailService $mailService)
    {
        $this->otpRepo = $otpRepo;
        $this->mailService = $mailService;
        $this->mail_subject = "Your OTP";
    }


    /**
     * Generates a 6-digit one-time password (OTP) for the given mobile number.
     *
     * @return string The generated 6-digit OTP.
     */
    private function generateOTP(): string
    {
        $otp = rand(100000, 999999);
        return $otp;
    }

    /**
     * Generates a template for the one-time password (OTP) that will be sent to the user.
     *
     * @param string $otp The generated 6-digit OTP.
     * @return string The template for the OTP email message.
     */
    private function generateTemplate(string $otp): string
    {
        $template = "Your OTP is: $otp";
        return $template;
    }

    /**
     * Sends an OTP (one-time password) to the given email address.
     *
     * @param string $email The email address to send the OTP to.
     * @param string $name The name of the recipient.
     * @return void
     */
    public function sendOTP(string $email, string $name): void
    {
        $otp = $this->generateOTP();
        $this->otpRepo->setOTP($email, $otp);
        $this->mailService->sendMail($email, $name, $this->mail_subject, $this->generateTemplate($otp));
    }

    /**
     * Verifies the provided one-time password (OTP) for the given email address.
     *
     * @param string $email The email address to verify the OTP for.
     * @param string $otp The one-time password to verify.
     * @return bool True if the OTP is valid, false otherwise.
     */
    public function verifyOTP(string $email, string $otp): bool
    {
        $is_true = $this->otpRepo->verifyOTP($email, $otp);
        if ($is_true) {
            $this->otpRepo->deleteOTP($email);
            return true;
        }
        return false;
    }
}
