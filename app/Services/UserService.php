<?php

namespace App\Services;

use App\Repos\UserRepo;

class UserService
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    /**
     * Creates a new user with the provided data.
     *
     * @param array $data The user data to create the new user with.
     * @return mixed The result of creating the new user.
     */
    public function crateUser(array $data)
    {
        return $this->userRepo->createUser($data);
    }


    /**
     * Retrieves all users from the system.
     *
     * @return mixed The collection of all user records.
     */
    public function findAllUsers()
    {
        return $this->userRepo->findAllUsers();
    }


    public function findUserById(int $id)
    {
        return $this->userRepo->findUserById($id);
    }

    /**
     * Finds a user by their email address or phone number.
     *
     * @param string $login The email address or phone number to search for.
     * @return mixed The user record, or null if not found.
     */
    public function findUserByEmailORPhone(string $login)
    {
        return $this->userRepo->findUserByEmailORPhone($login);
    }

    /**
     * Finds a user by their email address.
     *
     * @param string $email The email address to search for.
     * @return mixed The user record, or null if not found.
     */
    public function findUserByEmail(string $email)
    {
        return $this->userRepo->findUserByEmail($email);
    }


    /**
     * Updates an existing user with the provided data.
     *
     * @param array $data The updated user data.
     * @param int $id The ID of the user to update.
     * @return mixed The result of updating the user.
     */
    public function updateUser(array $data, int $id)
    {
        return $this->userRepo->updateUser($data, $id);
    }

    /**
     * Finds a user by their phone number.
     *
     * @param string $phone The phone number to search for.
     * @return mixed The user record, or null if not found.
     */
    public function findUserByPhone(string $phone)
    {
        return $this->userRepo->findUserByPhone($phone);
    }
}
