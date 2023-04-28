<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    //
    public function index()
    {
        $title = 'Informasi Pemilu';
        $latests = Election::orderByDesc('end_election')->limit(3)->get();
        $oldests = Election::orderByDesc('end_election')->offset(2)->limit(99)->get();

        return view('Election.index', compact('title', 'latests', 'oldests'));
    }

    public function show()
    {
        $title = 'Pemilihan Ketua POSTER 2023';

        return view('Election.show', compact('title'));
    }

    public function coblos()
    {
        $title = "Info Pencoblosan";

        $elections = Election::ofStatus('active');

        return view('Election.coblos', compact('title', 'elections'));
    }

    public function votePage()
    {
        $title = "Pemilihan ketua poster";

        return view('Election.vote-page', compact('title'));
    }

    public function result()
    {
        $title = 'Hasil pemilu';
        $elections = Election::ofStatus('active');

        return view('Election.result', compact('title', 'elections'));
    }

    public function showResult()
    {
        $title = 'Pemilu Ketua poster 2023';

        return view('Election.showResult', compact('title'));
    }
}
