<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();
        $apps = $feedbacks->pluck('app')->unique();

        return view('feedbacks', [
            'feedbacks' => $feedbacks,
            'apps' => $apps,
        ]);
    }

    public function feedbacks(Request $request)
    {
        return response()->json([
            'feedbacks' => Feedback::all(),
        ]);
    }
}
