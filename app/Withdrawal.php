<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Withdrawal extends Model
{

    use FormAccessible;

    protected $table = 'withdrawals';

    protected $fillable = [
        'receipt', 'whithdrawal_date', 'withdrawal_person', 'description', 'lisence_plate', 'file'
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
            'receipt' => 'required|integer|unique:withdrawals,receipt',
            'withdrawal_date' => 'nullable|date',
            'withdrawal_person' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'lisence_plate' => 'required|string|max:255',
            'file' => 'mimes:jpg,jpeg,png,gif',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'receipt' => 'required|integer|unique:withdrawals,receipt',
        ]);
    }

    public function setNameAttribute($value = '')
    {
        $this->attributes['withdrawal_person'] = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }
}