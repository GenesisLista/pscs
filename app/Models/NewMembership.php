<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\EducationalAttainment;
use App\Models\SocialMedia;
use App\Models\Renewal;

class NewMembership extends Model
{
    use HasFactory;

    protected $table = 'new_memberships';
    protected $fillable = [
        'name',
        'date_of_birth',
        'personal_email_address',
        'personal_tel_number',
        'mobile_number',
        'personal_address',
        'company_name',
        'company_email_address',
        'position',
        'length_of_stay',
        'company_tel_number',
        'company_address',
        'educational_id',
        'school_university',
        'degree',
        'prc_number',
        'graduate_school',
        'social_media_id',
        'who_invite',
        'allow_retention_id',
        'status'
    ];

    // Educational Attainment Relationship
    public function educational_info()
    {
        return $this->belongsTo(EducationalAttainment::class, 'educational_id');
    }

    // Social Media Relationship
    public function social_media_info()
    {
        return $this->belongsTo(SocialMedia::class, 'social_media_id');
    }

    /** 
     * Relation to Renewal DB - Pivot table
     */
    public function renewals()
    {
        return $this->belongsToMany(Renewal::class)->withTimestamp();
    }
}
