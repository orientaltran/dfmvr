<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ContactRepository;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
    }

    public function post (Request $request)
    {
        $input = $request->all();

        $data = [
            'name'    => $input['name'],
            'email'   => $input['email'],
            'phone'   => $input['phone'],
            'field'   => $input['field'],
            'message' => $input['message'],
            'status'  => Contact::STATUS_ACTIVE,
        ];

        $validator = Validator::make($data, [
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'field'   => 'required',
            'message' => 'required'
        ]);
        if ($validator->fails()) {
            return ['error' => 1, 'message' => $validator->errors()->all()[0] ];
        }

        $this->repository->saveContact($data);

        return ['error' => 0, 'message' => 'Success !!!'];
    }

    public function get()
    {
        return view('frontend.contact.index');
    }

}
