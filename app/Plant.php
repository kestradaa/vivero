<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'name', 'status', 'initial_quantity', 'actual_quantity', 'exit_quantity', 'loss_quantity', 'goal'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun2 = [
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'initial_quantity' => 'required|integer|max:255',
            'actual_quantity' => 'required|integer|max:255',
            'exit_quantity' => 'required|integer|max:255',
            'loss_quantity' => 'required|integer|max:255',
            'goal' => 'required|integer|max:255',
        ];

    }
}
