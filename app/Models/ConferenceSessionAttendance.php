<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $conferenceSessionAttendanceID
 * @property integer $conferenceSessionID
 * @property integer $participantID
 * @property string $joinedDateTime
 * @property string $leaveDateTime
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property ConferenceSession $conferenceSession
 * @property User $user
 */
class ConferenceSessionAttendance extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'conference_session_attendance';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'conferenceSessionAttendanceID';

    /**
     * @var array
     */
    protected $fillable = ['conferenceSessionID', 'participantID', 'joinedDateTime', 'leaveDateTime', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conferenceSession()
    {
        return $this->belongsTo('App\Models\ConferenceSession', 'conferenceSessionID', 'conferenceSessionID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'participantID');
    }
}
