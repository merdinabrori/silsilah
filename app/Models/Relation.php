<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // relation
    public function person_1() {
        return $this->belongsTo(Person::class, 'id_1');
    }
    public function person_2() {
        return $this->belongsTo(Person::class, 'id_2');
    }
}
