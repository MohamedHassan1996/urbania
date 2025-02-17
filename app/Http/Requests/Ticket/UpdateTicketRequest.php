<?php

namespace App\Http\Requests\Ticket;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ticketId'=> 'required',
            'clientId'=> 'required',
            'contractId'=> 'required',
            'serviceId'=> 'required',
            'esito'=> 'nullable',
            'note'=> '',
            'workerId' => '',
            'notifyDate' => '',
            'status' => '',
            'connectTypeId'=> '',
            'description'=> '',
            'anno'=> '',
            'tipologiaIstanza'=>'nullable',
            'segnalazione'=>'nullable',
            'urgenza' => 'nullable'
        ];
    }

    public function failedValidation(Validator $validator) 
    {
        throw new HttpResponseException(response()->json([
            'message' => $validator->errors()
        ], 401));
    }

}
