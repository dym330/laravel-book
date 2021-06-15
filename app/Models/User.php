<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|between:2,20',
        'email' => 'email|required',
        'password' => 'required'
    );

    public static $update_rules = array(
        'name' => 'required|between:2,20',
        'introduction' => 'max:50',
        'image' => ['file', 'image', 'mimes:jpeg,png']
    );

    public function Books() {
        return $this->hasMany(Book::class);
    }
}
