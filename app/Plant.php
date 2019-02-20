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
        $commun = [
            'name' => "required|string|max:255|unique:plants,name,$id",
            'initial_quantity' => 'required|integer',
            'actual_quantity' => 'required|integer',
            'exit_quantity' => 'required|integer',
            'goal' => 'required|integer',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'name' => 'required|string|max:255|unique:plants,name',
        ]);

    }

    public function loss()
    {
        return $this->hasMany(Loss::class);
    }

    public function process()
    {
        return $this->belongsToMany(Process::class);
    }   
}
