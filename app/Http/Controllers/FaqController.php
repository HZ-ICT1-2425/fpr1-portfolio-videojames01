<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store(Request $request)
    {
        $validated = $request ->validate([
            'question' => 'required|string|min:10',
                'answer' => 'required|string|min:10',
                'link' => 'url'
            ]);

        $faq = new Faq($validated);

        $faq->save();

        return redirect()->route('faqs.index');
    }
}
