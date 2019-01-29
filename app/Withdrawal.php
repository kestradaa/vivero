<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    
    protected $fillable = [
        'receipt', 'withdrawal_date', 'withdrawal_person', 'description', 'lisence_plate'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'receipt' => 'required|integer',
            'withdrawal_date' => 'required|date',
            'withdrawal_person' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'lisence_plate' => 'required|string|max:255',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'receipt' => 'required|integer|unique:whitdrawals,receipt',
        ]);
    }
}
