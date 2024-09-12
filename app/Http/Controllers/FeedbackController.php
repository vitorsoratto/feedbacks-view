<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedbacks(Request $request)
    {
        return response()->json([
            'feedbacks' => Feedback::all(),
        ]);
    }
}
