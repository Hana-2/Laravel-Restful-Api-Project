<?php
 
namespace App\Http\Validators;
 
use Illuminate\Validation\Rule;

class EmployeeVaildators {
        public function rules()
    {
            Validator::make($data, [
                'email' => [
                    'required',
  Rule::unique('employee')->ignore($employee->id),
                ],
            ]);
    }  
}
