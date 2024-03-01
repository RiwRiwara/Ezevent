<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function languageSwitch(Request $request)
    {
        $language = $request->language;
        $request->session()->put('language', $language);
        toastr()->addPreset('language_switch', [
            'title' => __('lang.success'),
            'message' => __('lang.Language_changed_to'),
            'language' => __("lang." . $language)
        ]);
        return redirect()->back();
    }
}
