<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ZipCodeRule;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == '/'){
            return true ;
        }else if($this->path() == 'confirm'){
            return true ;
        }else if($this->path() == 'create'){
            return true;
        }else if($this->path() == 'thank'){
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
            'hname' => ['required', 'string'] ,
            'fname' => ['required', 'string'] ,
            'fullname' => ['max:126'],
            'gender' => ['required'],
            'email' => ['required', 'email', 'min:8', 'max:255'],
            'postcode' => ['required', 'min:8', 'max:8', new ZipCodeRule()],
            'address' => ['required', 'string', 'max:127'],
            'building_name' => ['nullable', 'max:127'],
            'opinion' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages() {
        return [
            'hname.required' => '名前(姓)を入力してください。',
            'fname.required' => '名前(名)を入力してください。',
            'fullname.max' => '姓名は合わせ126文字まで入力できます。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.max' => 'メールアドレスは255文字まで入力できます。',
            'postcode.required' => '郵便番号を入力してください。',
            'postcode.min' => '郵便番号を999-9999形式で入力してください。',
            'postcode.max' => '郵便番号を999-9999形式で入力してください。',
            'address.required' => '住所を入力してください。',
            'address.max' => '住所は1271文字まで入力できます。',
            'building_name.max' => '建物名は127文字まで入力できます。',
            'opinion.required' => 'ご意見を入力してください。',
            'opinion.max' => 'ご意見は120文字まで入力できます。',
        ];
    }

}
