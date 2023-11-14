<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\job;
use App\Models\Company;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobs_id',
        'companies_id',
        'amount_ch',
        'received',
    ];

    public function credits()
    {
        return $this->hasMany(Credits::class, 'candidate_id');
    }

    public function debits()
    {
        return $this->hasMany(Debits::class, 'candidate_id');
    }
    
    public function jobs()
        {
            return $this->belongsTo(job::class,'jobs_id');
        }
        
         public function companies()
        {
            return $this->belongsTo(Company::class,'companies_id');
        }
}
