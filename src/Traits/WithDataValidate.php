<?php

namespace Sumer5020\ZohoBooks\Traits;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

trait WithDataValidate
{
    /**
     * @param array $data
     * @param array $rules
     * @return void
     * @throws ValidationException
     */
    public function validate(array $data, array $rules): void
    {
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
