<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "date",
        "description",
        "link",
        "types_id"
    ];
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
