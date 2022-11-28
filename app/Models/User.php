<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'email_verified_at', 'password', 'mandatoryChangePassword', 'lastLoginAttempt', 'loginAttempCount', 'lockedUntil', 'remember_token', 'role', 'created_at', 'updated_at', 'status'];

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
