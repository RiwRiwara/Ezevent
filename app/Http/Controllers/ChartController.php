<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function showChart($chartType = 'bar')
    {
        // Mockup data
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June'],
            'datasets' => [
                [
                    'label' => 'Sample Data',
                    'data' => [10, 20, 15, 25, 30, 22],
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1
                ]
            ]
        ];

        // Pass data and chart type to the view
        return view('guest.summary', compact('data', 'chartType'));
    }
}
