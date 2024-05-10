<?php

namespace App\Http\Controllers;

use App\Services\GeminiService;
use Illuminate\Http\Request;

class GeminiController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request, GeminiService $geminiService)
    {
        $request->validate([
            'search' => ['required', 'string', 'max:255']
        ]);
        $prompt = $request->search;

        try {
            $result = $geminiService->hotelReviews($prompt);
            $message = $result;
        } catch (\Exception $e) {
            $message = "Não foi possível trazer um retorno: " . $e->getMessage();
        }

        return back()->with('message', $message);
    }
}
