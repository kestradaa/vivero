<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'dpi', 'name', 'last_name', 'rol'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun2 = [
            'dpi' => 'required|integer|max:255',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'rol' => 'required|string|max:255',
        ];

    }
}
