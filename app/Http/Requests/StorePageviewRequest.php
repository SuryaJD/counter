<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StorePageviewRequest extends FormRequest
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
            // 'page_url'                  => 'required|url', 
            // 'referer'                   => 'string', 
            // 'device'                    => 'requires|string',
            // 'operating_system'          => 'required|string',
            // 'browser'                   => 'required|string',
            // 'browser_version'           => 'string',
        ];
    }
} 






 