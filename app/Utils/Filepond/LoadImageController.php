<?php

declare(strict_types=1);

namespace App\Utils\Filepond;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


final class LoadImageController extends Controller
{
    public function __invoke(string $img_url)
    {

        $url = config('azure.base_url') . '/' . config('azure.containers.userprofile') . '/' . $img_url;
        $response = Http::get($url);
        $img = $response->body();

        if ($response->status() !== 200) {
            $img = file_get_contents(public_path('images/default_thumnail.png'));
            return response($img, 200, ['Content-Type' => 'image/png']);
        }

        $response = response($img, 200, ['Content-Type' => 'image/webp']);
        return $response;
    }
}
