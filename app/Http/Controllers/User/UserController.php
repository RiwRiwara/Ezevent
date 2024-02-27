<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    public function updateUserInformation(Request $request)
    {
        try {
            $user_id = auth()->user()->user_id;
            $updatedField = $request->updatedField;

            $newValue = $request['edit_' . $updatedField];

            if ($updatedField === 'date_of_birth') {
                $newValue = Carbon::createFromFormat('m/d/Y', $newValue)->format('Y-m-d');
            }

            User::where('user_id', $user_id)->update([
                $updatedField => $newValue
            ]);

            flash()->addSuccess($request->label_show . ' ' . __('success.update_success'));

            return redirect()->back();
        } catch (\Exception $e) {
            flash()->addError('Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
