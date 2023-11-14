<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonLedger extends Model
{
    use HasFactory;

    protected $fillable = [
        'accounts_id',
        'title',
        'ref_id',
        'description',
        'date',
        'credit_amount',
        'debit_amount',
    ];
    
     protected $table = 'person_ledger';
     
     public function accounts()
    {
        return $this->belongsTo(Accounts::class, 'accounts_id');

    }
    
}
