<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == '/admin'){
            return true ;
        }else if($this->path() == 'admin/list'){
            return true;
        }else if($this->path() == 'admin/remove'){
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['nullable', 'string', 'max:126'],
            'str_date' => ['nullable', 'date', ''],
            'end_date' => ['nullable', 'date'],
            'email' => ['nullable', 'string', 'max:255'], 
        ];
    }

    public function withValidator($validator) {
        $validator->after(function ($validator){
            if($this->filled(['str_date, end_date'])){
                if($this->input('str_date') > $this->input('end_date')){
                    $validator->erros()->add('正常な開始日付、終了日付を設定してください。');
                }
            }
        });
    }

    public function messages() {
        return [
            'name.max' => '名前は126文字まで入力できます。',
            'email.max' => 'メールアドレスは255文字まで入力できます。',
        ];
    }

}
