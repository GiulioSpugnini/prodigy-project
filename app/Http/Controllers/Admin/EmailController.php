<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = Email::orderBy('updated_at', 'DESC')->paginate(10);

        return view('admin.emails.index', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email = new Email();
        return view('admin.emails.create', compact('email'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'date_time' => 'required',
        ]);
        $data = $request->all();
        $email = new Email();

        $email->fill($data);
        $email->save();

        return redirect()->route('admin.emails.show', $email->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        return view('admin.emails.show', compact('email', $email->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        return view('admin.emails.edit', compact('email'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'date_time' => 'required',
        ]);
        $data = $request->all();

        $email->update($data);

        return redirect()->route('admin.emails.show', $email->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\email $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        $email->delete();
        return redirect()->route('admin.emails.index');
    }
}
