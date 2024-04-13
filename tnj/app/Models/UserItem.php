<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_title',
        'company_name',
        'status',
        'awareness_date',
        'link_to_advert',
        'how_did_you_find_it',
        'job_description_notes',
        'job_description_upload',
        'job_type',
        'why_do_you_want_it',
        'strong_areas',
        'weak_areas',
        'closing_date',
        'applied_date',
        'how_did_you_apply',
        'telephone_interview_date',
        'second_telephone_interview_date',
        'first_onsite_interview_date',
        'second_onsite_interview_date',
        'interview_notes',
        'feedback_received',
        'offer_received_date',
        'benefits',
        'salary',
        'offer_accepted_date',
    ];

    public function scopeFilter($query, array $filters) {
        if($filters['status'] ?? false) {
            $query->where('status', 'like', '%' . request('status') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('job_title', 'like', '%' . request('search') . '%')
                ->orWhere('company_name', 'like', '%' . request('search') . '%')
                ->orWhere('status', 'like', '%' . request('search') . '%');
        }
    }

    // link between Item(s) AND User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}


