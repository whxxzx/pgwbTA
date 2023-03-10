<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstrakulikuler extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'nama_pembina',
    ];

    protected $table = 'ekstrakulikuler';

    public function daftar(){
        return $this->hasManyThrough('App\Models\tabelmaster', 'nama_ekskul');
    }

    public function up(){
        return $this->hasMany('App\Models\update');
    }

    public function tabelmaster(){
        // return $this->hasManyThrough('App\Models\tabelmaster', 'kelas');
        return $this->hasMany('App\Models\tabelmaster');
    }


}
