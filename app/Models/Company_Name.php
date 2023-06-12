<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Name extends Model
{
    use HasFactory;
    protected $table = "company__names";
    protected $fillable = [
        'user_id',
        'company_name',
        'image',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
