<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\loss;
use App\Process;

class Plant extends Model
{
    protected $fillable = [
        'name', 'status', 'initial_quantity', 'propagation_quantity','exit_quantity', 'actual_quantity', 'goal'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'name' => 'required|string|max:255|unique:plants,name,$id',
            'initial_quantity' => 'required|integer',
            'propagation_quantity' => 'required|integer',
            'exit_quantity' => 'required|integer',
            'actual_quantity' => 'required|integer',
            'goal' => 'required|integer',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'name' => 'required|string|max:255|unique:plants,name',
        ]);

    }

    public function setNameAttribute($value = '')
    {
        $this->attributes['name'] = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }

    public function loss()
    {
        return $this->hasOne(Loss::class);
    }

    public function process()
    {
        return $this->belongsToMany(Process::class)->withTimestamps();
    }   
}
