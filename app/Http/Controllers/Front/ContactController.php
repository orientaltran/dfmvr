<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\ContactRepositoryEloquent;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct(ContactRepositoryEloquent $repository)
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
            'email' => 'required|email',
            'name'  => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return ['error' => 1, 'message' => __('contacts.messages.erro')];
        }

        $this->repository->saveContact($data);

        return ['error' => 0, 'message' => __('contacts.messages.success')];
    }

}
