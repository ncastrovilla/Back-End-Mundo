<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'bodegas';

    protected $filleable = ['name'];

    public function dispositivos()
    {
        return $this->hasMany(Dispositivo::class);
    }
}
