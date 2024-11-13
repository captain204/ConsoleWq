<?php

namespace App\Repos;


use App\Models\User;

class UserRepo
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Creates a new user with the provided data.
     *
     * @param array $data The data to use when creating the new user.
     * @return \App\Models\User The newly created user.
     */
    public function createUser(array $data): User
    {
        return $this->user->create($data);
    }

    /**
     * Retrieves all users from the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\User[] An array of all users.
     */
    public function findAllUsers()
    {
        return $this->user->all();
    }

    /**
     * Finds a user by their email or phone number.
     *
     * @param string $login The email or phone number of the user to find.
     * @return \App\Models\User|null The found user, or null if not found.
     */
    public function findUserByEmailORPhone(string $login): ?User
    {
        return $this->user->where('email', $login)->orWhere('phone', $login)->first();
    }

    /**
     * Finds a user by their ID.
     *
     * @param int $id The ID of the user to find.
     * @return \App\Models\User|null The found user, or null if not found.
     */
    public function findUserById(int $id): ?User
    {
        return $this->user->find($id);
    }

    /**
     * Finds a user by their email address.
     *
     * @param string $email The email address of the user to find.
     * @return \App\Models\User|null The found user, or null if not found.
     */
    public function findUserByEmail(string $email): ?User
    {
        return $this->user->where('email', $email)->first();
    }

    /**
     * Finds a user by their phone number.
     *
     * @param string $phone The phone number of the user to find.
     * @return \App\Models\User|null The found user, or null if not found.
     */
    public function findUserByPhone(string $phone): ?User
    {
        return $this->user->where('phone', $phone)->first();
    }

    /**
     * Updates an existing user with the provided data.
     *
     * @param array $data The updated data for the user.
     * @param int $id The ID of the user to update.
     * @return \App\Models\User|null The updated user, or null if not found.
     */
    public function updateUser(array $data, int $id): ?User
    {
        $user = $this->findUserById($id);
        if ($user) {
            $user->update($data);
            return $user;
        }
        return null;
    }

    /**
     * Deletes a user by their ID.
     *
     * @param int $id The ID of the user to delete.
     * @return bool True if the user was deleted, false otherwise.
     */
    public function deleteUser(int $id): bool
    {
        $user = $this->findUserById($id);
        if ($user) {
            return $user->delete();
        }
        return false;
    }
}
