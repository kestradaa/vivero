<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Process extends Model
{
    
    use FormAccessible;

    protected $table = 'processes';

	protected $fillable = [
        'name', 'description'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'name' => 'required|string|max:255|unique:processes,name',
            'description' => 'required|string|max:255',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'name' => 'required|string|unique:processes,name',
        ]);
    }

    public function setNameAttribute($value = '')
    {
        $this->attributes['name'] = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }
    
    public function plant()
    {
        return $this->belongsToMany('\App\Plant','process_plant')->withPivot('quantity');
    }
}
