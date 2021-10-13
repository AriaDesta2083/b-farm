<?php

namespace App\Http\Controllers;

use App\Models\WebProfile;
use Illuminate\Http\Request;

class WebProfileController extends Controller
{
    private $params;

    public function index()
    {
        $this->params['profile'] = WebProfile::first();
        
        return view('web-profile.index', $this->params);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'link_wa' => 'required',
        ], [
            'required' => ':attribute harus diisi.',
        ], [
            'link_wa' => 'Link Whatsapp',
        ]);

        $editProfile = WebProfile::first();   
        $editProfile->link_wa = $request->link_wa;
        $editProfile->save();

        return back()->withStatus('Berhasil memperbarui data.');
    }
}
