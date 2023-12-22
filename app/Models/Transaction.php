<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'transaction_date',
        'user_id',
        'amount',
        'description',
    ];

    protected $dates = [
        'transaction_date',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = $value * 100;
    }

    public function setTransactionDateAttribute($value)
    {
        $this->attributes['transaction_date'] = Carbon::createFromFormat('m/d/Y' , $value )
        ->format('Y-m-d');
    }
}