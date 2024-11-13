<?php

namespace App\Repos;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;

class TransactionRepo
{
    protected $transaction;

    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

   
    public function getStats()
    {
        // return $this->transaction->create($data);
    }
}
