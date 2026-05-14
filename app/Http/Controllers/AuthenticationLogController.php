<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationLogController extends Controller
{
    public function index(Request $request)
    {
        $logs = $request->user()
            ->authentications()
            ->latest('login_at')
            ->paginate(15);

        return view('authentication_logs.index', compact('logs'));
    }
}
