<?php


namespace Sadhinrana\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Sadhinrana\Contact\Mail\ContactMailable;
use Sadhinrana\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contact::contact');
    }

    public function send() {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable(request('message'), request('name')));
        Contact::create(request()->all());

        return redirect()->back()->with('success', 'Mail sent successfully');
    }
}
