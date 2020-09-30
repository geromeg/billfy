<?php

namespace App\Repositories;
use App\Models\UserCustomer;
use App\Repositories\UserCustomerRepositoryInterface;

class UserCustomerRepository implements UserCustomerRepositoryInterface
{
    public function create($userCustomerData) {
        $customer = new UserCustomer();
        $customer->name = $userCustomerData->name;
        $customer->email = $userCustomerData->email;
        $customer->mobile_number = $userCustomerData->mobile_number;
        $customer->incorporation_number = $userCustomerData->incorporation_number;
        $customer->address = $userCustomerData->address;
        $customer->save();
        return $customer;
    }
    public function all() {
        return UserCustomer::all();
    }
}
