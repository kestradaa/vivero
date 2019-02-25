<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{

	protected $fillable = [
        'name', 'description'
    ];

    protected $table = 'processes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ];

        if ($update) {
            return $commun;
        }
        
        return array_merge($commun, [
            'name' => 'required|string|unique:processes,name',
        ]);
    }

    public function plant()
    {
        return $this->belongsToMany(Plant::class);
    }

    /*
    public function assignProcess($processId = null)
    {
        $processes = $this->processes;

        if (!$processes->contains($processId)) {
            return $this->processes()->attach($processId);
        }

        return false;
    }

    public function revokeProcess($processId = '')
    {
        return $this->processes()->detach($processId);
    }
     
    public function syncProcess(array $processIds = [])
    {
        return $this->processes()->sync($processIds);
    }
     
    public function revokeAllProcess()
    {
        return $this->processes()->detach();
    }
    */
}
