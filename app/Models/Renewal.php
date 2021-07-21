<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\NewMembership;

class Renewal extends Model
{
    use HasFactory;

    protected $table = 'renewals';
    protected $fillable = [
        'soa_no',
        'start_date',
        'notes'
    ];

    /**
     * Relations to NewMembership DB - Pivot Table
     */
    public function new_memberships()
    {
        return $this->belongsToMany(NewMembership::class)->withTimestamps();
    }
}
