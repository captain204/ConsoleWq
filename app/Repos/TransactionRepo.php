<?php

namespace App\Repos;

use App\Models\Transaction;

class TransactionRepo
{
    protected $transaction;

    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Creates a new transaction record with the provided data.
     *
     * @param array $data The data to use when creating the new transaction.
     * @return \App\Models\Transaction The newly created transaction instance.
     */
    public function createTransaction(array $data): Transaction
    {
        return $this->transaction->create($data);
    }

    /**
     * Retrieves all transactions from the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\Transaction[] An array of all transactions.
     */
    public function findAllTransactions()
    {
        return $this->transaction->all();
    }

    /**
     * Finds a transaction by its ID.
     *
     * @param int $id The ID of the transaction to find.
     * @return \App\Models\Transaction|null The found transaction, or null if not found.
     */
    public function findTransactionById(int $id): ?Transaction
    {
        return $this->transaction->find($id);
    }

    /**
     * Updates an existing transaction with the provided data.
     *
     * @param array $data The updated data for the transaction.
     * @param int $id The ID of the transaction to update.
     * @return \App\Models\Transaction|null The updated transaction, or null if not found.
     */
    public function updateTransaction(array $data, int $id): ?Transaction
    {
        $transaction = $this->findTransactionById($id);
        if ($transaction) {
            $transaction->update($data);
            return $transaction;
        }
        return null;
    }

    /**
     * Deletes a transaction by its ID.
     *
     * @param int $id The ID of the transaction to delete.
     * @return bool True if the transaction was deleted, false otherwise.
     */
    public function deleteTransaction(int $id): bool
    {
        $transaction = $this->findTransactionById($id);
        if ($transaction) {
            return $transaction->delete();
        }
        return false;
    }
}
