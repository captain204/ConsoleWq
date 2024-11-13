<?php

namespace App\Repos;

use App\Models\Wallet;

class WalletRepo
{
    protected $wallet;

    public function __construct(Wallet $wallet)
    {
        $this->wallet = $wallet;
    }

    /**
     * Creates a new wallet record with the provided data.
     *
     * @param array $data The data to use when creating the new wallet.
     * @return \App\Models\Wallet The newly created wallet instance.
     */
    public function createWallet(array $data): Wallet
    {
        return $this->wallet->create($data);
    }

    /**
     * Retrieves all wallets from the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\Wallet[] An array of all wallets.
     */
    public function findAllWallets()
    {
        return $this->wallet->all();
    }

    /**
     * Finds a wallet by its ID.
     *
     * @param int $id The ID of the wallet to find.
     * @return \App\Models\Wallet|null The found wallet, or null if not found.
     */
    public function findWalletById(int $id): ?Wallet
    {
        return $this->wallet->find($id);
    }

    /**
     * Finds a wallet by its unique wallet reference.
     *
     * @param string $walletReference The unique wallet reference to find.
     * @return \App\Models\Wallet|null The found wallet, or null if not found.
     */
    public function findWalletByReference(string $walletReference): ?Wallet
    {
        return $this->wallet->where('wallet_reference', $walletReference)->first();
    }

    /**
     * Updates an existing wallet with the provided data.
     *
     * @param array $data The updated data for the wallet.
     * @param int $id The ID of the wallet to update.
     * @return \App\Models\Wallet|null The updated wallet, or null if not found.
     */
    public function updateWallet(array $data, int $id): ?Wallet
    {
        $wallet = $this->findWalletById($id);
        if ($wallet) {
            $wallet->update($data);
            return $wallet;
        }
        return null;
    }

    /**
     * Deletes a wallet by its ID.
     *
     * @param int $id The ID of the wallet to delete.
     * @return bool True if the wallet was deleted, false otherwise.
     */
    public function deleteWallet(int $id): bool
    {
        $wallet = $this->findWalletById($id);
        if ($wallet) {
            return $wallet->delete();
        }
        return false;
    }
}
