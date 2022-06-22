<?php

namespace App\Http\Controllers;

use App\Repository\StylistRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StylistControllerWithRepos extends Controller
{
    public function index()
    {
        $stylist = StylistRepos::getAllStylist();

        return view('stylist.Stylistindex',
            [
                'stylist' => $stylist,
            ]);
    }


    public function create()
    {
        $stylist = StylistRepos::getAllStylist();

        return view(
            'stylist.Stylistindex',
            [
                "stylist" => (object)[
                    'SID' => '',
                    'name' => '',
                    'dob' => '',
                    'contact' => '',
                    'email' => '',
                    'history' => '',
                    'urlimg' => ''
                ],
            ]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate();

        $stylist = (object)[
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'history' => $request->input('history'),
            'urlimg' => $request->input('urlimg'),
        ];

        $newSID = StylistRepos::insert($stylist);


        return redirect()
            ->action('StylistControllerWithRepos@index')
            ->with('msg', 'New Stylist with id: '.$newSID.' has been inserted');
    }


    public function edit($SID)
    {
        $stylist = StylistRepos::getstylistById($SID);

        return view(
            'stylist.Stylistupdate',
            [
                "stylist" => $stylist[0],

            ]);
    }

    public function update(Request $request, $SID)
    {
        if ($SID != $request->input('SID')) {
            return redirect()->action('StylistControllerWithRepos@index');
        }

        $this->formValidate($request)->validate();

        $stylist = (object)[
            'SID' => $request->input('SID'),
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'history' => $request->input('history'),
            'urlimg' => $request->input('urlimg'),
        ];
        StylistRepos::update($stylist);

        return redirect()->action('StylistControllerWithRepos@index')
            ->with('msg', 'Update Successfully');
    }

    public function confirm($SID){
        $stylist = StylistRepos::getstylistById($SID);

        return view('stylist.Stylistconfirm',
            [
                'stylist' => $stylist[0],
            ]
        );
    }

    public function destroy(Request $request, $SID){
        if ($request->input('SID') != $SID){
            return redirect()->action('StylistControllerWithRepos@index');
        }

        StylistRepos::delete($SID);

        return redirect()->action('StylistControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate(Request $request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'dob' => ['required'],
                'contact' => ['required'],
                'email' => ['required'],
                'history' => ['required'],
                'urlimg' => ['required']
            ],
            [
                'name.required' => 'Stylist name can not be empty',
                'dob.required' => 'dob can not be empty',
                'contact.required' => 'contact can not be empty',
                'email.required' => 'email can not be empty',
                'history.required' => 'history can not be empty',
                'urlimg.required' => 'urlimg can not be empty',

            ]
        );
    }
}
