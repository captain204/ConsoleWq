<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;

class EncryptionService
{

    protected $rounds;


    public function __construct()
    {
        $this->rounds = config('app.hash_rounds', 12);
    }

    /**
     * Hashes a plain text password.
     *
     * @param string $password
     * @return string
     */
    public function hash(string $password): string
    {
        return Hash::make($password, [
            'rounds' => $this->rounds,
        ]);
    }

    /**
     * Verifies a plain text password against a hashed password.
     *
     * @param string $password
     * @param string $hashedPassword
     * @return bool
     */
    public function compareHash(string $password, string $hashedPassword): bool
    {
        return Hash::check($password, $hashedPassword);
    }
}
