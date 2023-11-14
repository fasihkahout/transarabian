<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'expense_category_id',
        'accounts_id',
        'title',
        'ref_id',
        'description',
        'date',
        'expense_price',
    ];
    
     protected $table = 'expense';
     
     public function accounts()
    {
        return $this->belongsTo(Accounts::class, 'accounts_id');

    }
    
    public function expenseCategory()
    {
        return $this->belongsTo(ExpenseCategory::class, 'expense_category_id');

    }
}
