<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class FilesController extends Controller
{
    public function index(): View
    {
        return view(
            'files.index',
            ['files' => Auth::user()->files->toArray()]
        );
    }

    public function create(): Response
    {
        //
    }

    public function store(Request $request): Response
    {
        //
    }

    public function show(File $file): Response
    {
        //
    }

    public function edit(File $file): Response
    {
        //
    }

    public function update(Request $request, File $file): Response
    {
        //
    }

    public function destroy(File $file): Response
    {
        //
    }
}
