<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'country',
        'amount',
        'charged_amount',
    ];

    public function expenses()
    {
        return $this->hasMany(Expenses::class, 'company_n', 'company_name');
    }
}
