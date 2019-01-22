<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    protected $fillable = [
        'size', 'stock'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'size' => "required|string|max:255|unique:bags,size,$id",
            'stock' => 'required|integer',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'size' => 'required|string|max:255|unique:bags,size',
        ]);

    }
}
