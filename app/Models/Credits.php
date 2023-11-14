<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credits extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'credit_date',
        'credit_amount',
        'credit_des',
        'accounts_id',
        'credit_title',
        'credit_ref',
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
