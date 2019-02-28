<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Withdrawal extends Model
{
    protected $table = 'withdrawals';

    protected $fillable = [
        'receipt', 'whithdrawal_date', 'withdrawal_person', 'description', 'lisence_plate'
    ];

    protected $dates = [
        'whithdrawal_date',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'receipt' => 'required|integer',
            'withdrawal_date' => 'required|date_format:Y-M-D H:m',
            'withdrawal_person' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'lisence_plate' => 'required|string|max:255',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'receipt' => 'required|integer|unique:withdrawals,receipt',
        ]);
    }

    /*public function formDateAttribute($withdrawal_date)
    {
        return Carbon::parse($withdrawal_date)->format('Y-m-d H:i');
    }*/
}