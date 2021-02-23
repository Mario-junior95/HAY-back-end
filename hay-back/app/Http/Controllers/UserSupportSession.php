<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ UserSupportGroupS ;

class UserSupportSession extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $userSupportSession = new UserSupportGroupS();
        $userSupportSession->fill($data);
        $userSupportSession->save();
        return response()->json([
            'status' => 200,
            'userSupportSession' => $userSupportSession
        ]);
    }
}
