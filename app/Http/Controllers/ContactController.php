<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class ContactController extends Controller
{


    public function index()
    {
        return view('admin.contact', [
            'data' => Contact::all(),
            'title' => 'Contact List'
        ]);


    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'    => 'required|string|max:255',
                'phone'   => 'required|string|max:12',
                'email'   => 'nullable',
                'city'    => 'nullable',
                'message' => 'nullable',
            ]);

            Contact::create($validated);

            notyf()
                ->duration(4000)
                ->position('x', 'right')->position('y', 'top')->success('Submit Successful');

            return redirect()->back();

        } catch (\Illuminate\Validation\ValidationException $e) {
            foreach ($e->errors() as $field => $messages) {
                foreach ($messages as $message) {
                    notyf()->error($message);
                }
            }
            return redirect()->back()->withInput();

        } catch (\Exception $e) {
            notyf()
                ->duration(4000)
                ->position('x', 'right')->position('y', 'top')
                ->error('Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
