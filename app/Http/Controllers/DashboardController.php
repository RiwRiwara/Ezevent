<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(Request $request)
    {
        $page_data = [
            'breadcrumbItems' => [
                ['label' => 'Welcome'],
            ]
        ];

        return view('dashboard', compact('page_data'));
    }
}
