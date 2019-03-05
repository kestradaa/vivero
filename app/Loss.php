<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Loss extends Model
{
    use FormAccessible;
    
    protected $fillable = [
    	'plant_id', 'quantity'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'plant_id' => 'required|integer|unique:losses,plant_id,$id',
            'quantity' => 'required|integer',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'plant_id' => 'required|integer|unique:losses,plant_id',
        ]);
    }

    public function plant()
    {
        return $this->belongsTo(Loss::class);
    }
}


