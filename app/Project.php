<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'nama_pt', 'nama_project', 'alamat'
    ];
    
    protected $primaryKey = 'id_project';
    
    public function building()
    {
        return $this->hasMany('App\Building');
    }
}
