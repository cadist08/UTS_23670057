<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class TablePluginController extends Controller
{
    public function index(): View
    {
        return view('admin.table-plugins');
    }
}
