<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(): JsonResponse
    {
        $page = Page::with('contentComponents')->where('title', 'რექტორის მიმართვა')->first();

        if (!$page) {
            return response()->json(['Message' => 'Page not found!'], 404);
        }

        return response()->json($page);
    }
}
