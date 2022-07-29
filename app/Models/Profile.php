<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id','phone','gender','birthdate'];

    public function scopeActive($query)
    {
        $userId = Auth::id();
        return $query->where('user_id', $userId);
    }

    /**
     * Get the user that owns the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
