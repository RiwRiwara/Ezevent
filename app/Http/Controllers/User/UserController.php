<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }



    public function updateUserInformation(Request $request)
    {
        try {
            $user_id = $request->user_id;
            $updateFields = $request->all();
            User::where('id', $user_id)->update($updateFields);
            flash()->addSuccess('User information updated successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            flash()->addError('Something went wrong');
            return redirect()->back();
        }

    }
}
