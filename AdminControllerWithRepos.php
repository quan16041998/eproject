<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class   AdminControllerWithRepos extends Controller
{
    public function index()
    {
        $admin = AdminRepos::getAllAdmin();
        return view('admin.adminIndex',
            [
                'admin' => $admin
            ]);
    }

    public function show($username)
    {
        $admin = AdminRepos::getAdminByUsername($username);
        return view('admin.adminShow', [
            'admin' => $admin[0]
        ]);
    }

    public function edit($username)
    {
        $username = AdminRepos::getAdminByUsername($username); //this is always an array


        return view(
            'admin.update',
            ["username" => $username[0]]);
    }

    public function update(Request $request, $username)
    {
        if ($username != $request->input('username')) {
            return redirect()->action('AdminControllerWithRepos@index');
        }
        $this->formValidate($request)->validate();

        $admin = (object)[
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
        ];

        AdminRepos::update($admin);

        return redirect()->action('AdminControllerWithRepos@index')
            ->with('msg', 'Update Successfully');
    }

    private function formValidate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'username' => ['required', 'min:6'],
                'password' => ['required', 'min:6'],
                'name' => ['required', 'min:6'],
                'dob' => ['required'],
                'contact' => ['required'],
                'email' => ['email']
            ],
            [
                'username.required' => 'Username can not be empty',
                'password.required' => 'Password can not be empty',
                'name.required' => 'Name can not be empty',
                'dob.required' => 'Date of birth can not be empty',
                'contact.required' => 'Contact can not be empty',
                'email.required' => 'Email can not be empty',
                'username.min' => 'Username must have at least 6 characters',
                'password.min' => 'Password must have at least 6 characters',
                'name.min' => 'name must have at least 6 characters'
            ]
        );

}

}
