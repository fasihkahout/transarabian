<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debits extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'debit_date',
        'debit_amount',
        'debit_des',
        'accounts_id',
        'debit_title',
        'debit_ref',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');

    }
    
    public function accounts()
    {
        return $this->belongsTo(Accounts::class, 'accounts_id');

    }
}
