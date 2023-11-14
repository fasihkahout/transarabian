<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferMoney extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'accounts_id',
        'date',
        'title',
        'ref_id',
        'credit',
        'debit',
    ];
    
     protected $table = 'transfer_money';
     
     public function accounts()
    {
        return $this->belongsTo(Accounts::class, 'accounts_id');

    }
    
    public function account()
    {
        return $this->belongsTo(Accounts::class, 'account_id');

    }
    
}
