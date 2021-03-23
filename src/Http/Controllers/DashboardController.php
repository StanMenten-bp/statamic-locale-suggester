<?php

namespace Parfaitementweb\StatamicLocaleSuggester\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('statamic-locale-suggester::cp.dashboard', [
            'title' => __('statamic-locale-suggester-cp::cp.dashboard.title'),
        ]);
    }

}
