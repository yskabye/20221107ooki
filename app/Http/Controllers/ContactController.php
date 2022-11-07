<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\SearchRequest;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        return view('index', ['contact' => $request]);
    }

    public function confirm(ContactRequest $request)
    {
        return view('confirm',['contact' => $request]);
    }

    public function create(ContactRequest $request)
    {
        $form = $request->all();
        Contact::create($form);

        return redirect('thank');
    }

    public function thank(Request $request)
    {
        return view('thank');
    }

    public function search(Request $request)
    {
        return view('admin.search' );
    }

    public function datalist(SearchRequest $request)
    //public function datalist(Request $request)
    {
        $name = $request['name'];
        $gender = $request['gender'];
        $str_date = $request['str_date'];
        $end_date = $request['end_date'];
        $email = $request['email'];
        $items = Contact::doSearch($name, $gender, $str_date, $end_date, $email);
        
        return view('admin.listing', ['sdata' => $request, 'items' => $items]);
    }

    public function remove(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete() ;
        
        return back();
    }

}
