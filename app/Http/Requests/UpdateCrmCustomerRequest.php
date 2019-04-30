<?php

namespace App\Http\Requests;

use App\CrmCustomer;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCrmCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('crm_customer_edit');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'required',
                'min:2',
            ],
            'last_name'  => [
                'required',
                'min:50',
                'max:155',
            ],
            'status_id'  => [
                'required',
                'integer',
            ],
            'phone'      => [
                'required',
            ],
        ];
    }
}
