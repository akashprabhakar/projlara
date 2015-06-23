<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateTimesheetRequest extends Request
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
        return [
            //
            'task_date' => 'required|date',
            'proj_name' => 'required|min:3',
            'task_desc' => 'required',
            'dev_initials' => 'required',
            'reference' => 'required',
            'hours' =>  'required|integer',
            'solution' => 'required'

        ];
    }
}
