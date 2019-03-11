<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'Employees';
    
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
        $commun = [
            'dpi' => 'required|string',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'rol' => 'required|string|max:255',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'dpi' => 'required|string|unique:employees,dpi',
        ]);
    }

    public function setNameAttribute($value = '')
    {
        $this->attributes['name'] = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }

    public function setLastnameAttribute($value = '')
    {
        $this->attributes['last_name'] = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }

    public function setRolAttribute($value = '')
    {
        $this->attributes['rol'] = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }
}
