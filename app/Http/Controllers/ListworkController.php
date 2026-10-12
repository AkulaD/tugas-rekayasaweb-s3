<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listwork;

class ListworkController extends Controller
{
    public function index(Request $request)
    {
        $query = Listwork::query();

        if ($request->filled('search')) {
            $query->where('judul_anime', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('musim')) {
            $query->where('musim_rilis', $request->musim);
        }

        if ($request->filled('tipe')) {
            $query->where('tipe', $request->tipe);
        }

        $works = $query->latest()->paginate(10)->appends($request->query());

        $musims = Listwork::select('musim_rilis')->whereNotNull('musim_rilis')->distinct()->pluck('musim_rilis');
        $tipes = Listwork::select('tipe')->whereNotNull('tipe')->distinct()->pluck('tipe');

        return view('page.works', compact('works', 'musims', 'tipes'));
    }

    public function show($id)
    {
        $work = Listwork::findOrFail($id);
        return view('page.detail', compact('work'));
    }
}