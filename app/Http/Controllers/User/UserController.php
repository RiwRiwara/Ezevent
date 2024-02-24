<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function updateUserInformation(Request $request)
    {
        try {
            $user_id = auth()->user()->user_id;
            $updatedField = $request->updatedField;
            User::where('user_id', $user_id)->update([
                $updatedField => $request['edit_' . $updatedField]
            ]);

        flash()->addSuccess($request->label_show.' '.__('success.update_success'));

            return redirect()->back();
        } catch (\Exception $e) {
            flash()->addError('Something went wrong');
            return redirect()->back();
        }
    }
}
