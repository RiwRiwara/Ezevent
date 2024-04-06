<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AllUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = $request->input('search_string');

        $all_users = User::query()
            ->when($search, function ($query, $search) {
                return $query->where('first_name', 'like', "%$search%");
            })
            ->paginate(10);

        $users_data = [
            'breadcrumbItems' => [
                ['label' => 'Users'],
            ],
            'all_users' => $all_users,
        ];

        return view('admin.admin_users_dashboard', compact('users_data'));
    }
}