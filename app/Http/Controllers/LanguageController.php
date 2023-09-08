<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

/**
 * Change the language in the session for that user
 */
class LanguageController extends Controller
{
    public function changeLanguage(Request $request, $language)
    {
        Session::put('lang', $language);
        // back to previous page
        return redirect()->back();
    }
}
