<?php
namespace App\Repositories;

interface UserCustomerRepositoryInterface {
    public function create($userCustomerData);
    public function all();
}
