<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\AssignThisVariablePass;

class Payout extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref_no',
        'cus_id',
        'amount',
        'payment_type',
        'upi_id',
        'bank_ac',
        'ifsc',
        'phone',
        'customer_name',
        'created_at',
        'updated_at',
        'bank',
        'bank_ref',
        'status'
    ];

    public function transaction()
    {
        return $this->hasOne(PayoutTransaction::class,);
    }
}
