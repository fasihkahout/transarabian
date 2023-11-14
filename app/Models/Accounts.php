<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'account',
        'name',
        'balance',
        'note',
    ];
    
     public function credits()
    {
        return $this->hasMany(Credits::class, 'accounts_id');
    }

    public function debits()
    {
        return $this->hasMany(Debits::class, 'accounts_id');
    }
    
    public function expenses()
    {
        return $this->hasMany(Expense::class, 'accounts_id');
    }
    
    public function personLedger()
    {
        return $this->hasMany(PersonLedger::class, 'accounts_id');
    }
}
