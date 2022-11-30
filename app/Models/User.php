<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property boolean $mandatoryChangePassword
 * @property string $lastLoginAttempt
 * @property integer $loginAttempCount
 * @property string $lockedUntil
 * @property string $remember_token
 * @property string $role
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property ConferenceSessionAttendance[] $conferenceSessionAttendances
 * @property Notification[] $notifications
 * @property Schooladmin[] $schooladmins
 * @property Student[] $students
 * @property Sysadmin[] $sysadmins
 * @property Teacher[] $teachers
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'mandatoryChangePassword', 'lastLoginAttempt', 'loginAttempCount', 'lockedUntil', 'role', 'created_at', 'updated_at', 'status'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conferenceSessionAttendances()
    {
        return $this->hasMany('App\Models\ConferenceSessionAttendance', 'participantID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notifications()
    {
        return $this->hasMany('App\Models\Notification', 'userID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schooladmins()
    {
        return $this->hasMany('App\Models\Schooladmin', 'userID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student', 'userID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sysadmins()
    {
        return $this->hasMany('App\Models\Sysadmin', 'userID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers()
    {
        return $this->hasMany('App\Models\Teacher', 'userID');
    }
}
