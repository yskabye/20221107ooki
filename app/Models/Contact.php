<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    protected $fillable = ['fullname', 'gender', 'email', 'postcode',
                           'address', 'building_name', 'opinion'];

    public static function doSearch($name, $gender, $str_date, $end_date, $email)
    {
        $query = self::query();
        if (!empty($name)) {
            $query->where('fullname', 'LIKE', "%{$name}%");
        }

        if($gender != 0){
            $query->where('gender', '=', $gender);
        } 

        if (!empty($str_date) && !empty($end_date)) {
            $query->whereBetween('created_at', [$str_date, $end_date]);
        }else if(!empty($str_date)){
            $query->whereDate('created_at','>=', $str_date);
        }else if(!empty($end_date)){
            $query->whereDate('created_at','<=', $end_date);
        }

        if (!empty($email)) {
            $query->where('email', 'LIKE', "%{$email}%");
        }

        //$results = $query->orderby('id')->paginate(env("PAGE_MAX_LIMIT"));
        $results = $query->orderby('id')->paginate(10)->withQueryString();
        return $results;
    }
}
