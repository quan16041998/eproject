<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerControllerWithRepos extends Controller
{
    public function index()
    {
        $customer = CustomerRepos::getAllCustomer();

        return view('customer.customerindex',
            [
                'customer' => $customer,
            ]);
    }

    public function show($ID)
    {

        $customer = CustomerRepos::getsCustomerById($ID);
        return view('customer.customershow',
            [
                'customer' => $customer[0]

            ]);
    }

    public function edit($ID)
    {
        $customer = CustomerRepos::getsCustomerById($ID);

        return view(
            'customer.customerupdate',
            [
                "customer" => $customer[0],

            ]);
    }

    public function update(Request $request, $ID)
    {
        if ($ID != $request->input('ID')) {
            return redirect()->action('CustomerControllerWithRepos@index');
        }

        $this->formValidate($request)->validate();

        $customer = (object)[
            'ID' => $request->input('ID'),
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
        ];
        CustomerRepos::update($customer);

        return redirect()->action('CustomerControllerWithRepos@index')
            ->with('msg', 'Update Successfully');
    }


    private function formValidate(Request $request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'dob' => ['required'],
                'contact' => ['required'],
                'email' => ['required'],
                'address' => ['required']
            ],
            [
                'name.required' => 'Customer name can not be empty',
                'dob.required' => 'dob can not be empty',
                'contact.required' => 'contact can not be empty',
                'email.required' => 'email can not be empty',
                'address.required' => 'history can not be empty',
            ]
        );
    }
}
