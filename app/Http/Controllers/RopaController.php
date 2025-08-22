<?php

namespace App\Http\Controllers;

use App\Models\Ropa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RopaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RopaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ropas = Ropa::paginate();

        return view('ropa.index', compact('ropas'))
            ->with('i', ($request->input('page', 1) - 1) * $ropas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ropa = new Ropa();

        return view('ropa.create', compact('ropa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RopaRequest $request): RedirectResponse
    {
        Ropa::create($request->validated());

        return Redirect::route('ropas.index')
            ->with('success', 'Ropa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $ropa = Ropa::find($id);

        return view('ropa.show', compact('ropa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $ropa = Ropa::find($id);

        return view('ropa.edit', compact('ropa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RopaRequest $request, Ropa $ropa): RedirectResponse
    {
        $ropa->update($request->validated());

        return Redirect::route('ropas.index')
            ->with('success', 'Ropa updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Ropa::find($id)->delete();

        return Redirect::route('ropas.index')
            ->with('success', 'Ropa deleted successfully');
    }
}
