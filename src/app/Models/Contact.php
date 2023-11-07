<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];

    public static $rules = array(
        'last_name' => 'required',
        'first_name' => 'required',
        // 'gender' => 'required',
        'email' => 'email|required',
        'postcode' => 'required|integer|min:8|max:8',
        'address' => 'required',
        'building_name' => 'nullable',
        'opinion' => 'required|max:120'
    );
}
