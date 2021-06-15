<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'email' => 'email',
        'password' => 'required'
    );

    public function Books() {
        return $this->hasMany(Book::class);
    }
}
