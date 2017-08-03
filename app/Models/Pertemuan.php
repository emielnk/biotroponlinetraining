<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    protected $table = 'pertemuan';

    protected $primaryKey = 'id_pertemuan';
    protected $foreignKey = 'id_training';

    public $timestamps = false;
}
