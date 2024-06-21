<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Girl extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'age_group', 'hiv_status', 'dob', 'village', 'schooling_status'
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_girl');
    }
}
