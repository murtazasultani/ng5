<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'PUT':
            {
                return [
                    'name' => 'required',
                    'fname' => 'required',
                    'fees' => 'required',
                    'phone' => 'required|max:255|unique:customers,phone,' . $this->route()->parameter('customer')->id,
                    'locker' => 'max:255',
                    'category' => 'required',
                    'date' => 'max:255',
                    'gender' => 'max:255',
                ];
            }
            default:
            {
                return [
                    'name' => 'required',
                    'fname' => 'required',
                    'fees' => 'required',
                    'phone' => 'required|max:255|unique:customers',
                    'locker' => 'max:255',
                    'category' => 'required',
                    'date' => 'max:255',
                    'gender' => 'max:255',
                ];
            }
        }
    }
}
