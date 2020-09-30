<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCustomerRequest;
use App\Models\UserCustomer;
use App\Repositories\UserCustomerRepositoryInterface;
use Illuminate\Http\Request;

class UserCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserCustomerRepositoryInterface $userCustomerRepository)
    {
        return $userCustomerRepository->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCustomerRequest $request, UserCustomerRepositoryInterface $userCustomerRepository)
    {
        $customer = $userCustomerRepository->create($request);
        return $customer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(UserCustomer $userCustomer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCustomer $userCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCustomer $userCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCustomer  $userCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCustomer $userCustomer)
    {
        //
    }
}
