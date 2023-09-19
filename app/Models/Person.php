<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // relation
    public function relation_1() {
        return $this->hasMany(Relation::class, 'id_1');
    }
    public function relation_2() {
        return $this->hasMany(Relation::class, 'id_2');
    }
}
