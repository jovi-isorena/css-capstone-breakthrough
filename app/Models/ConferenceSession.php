<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $conferenceSessionID
 * @property integer $conferenceID
 * @property string $startDateTime
 * @property string $endDateTime
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Conference $conference
 * @property ConferenceSessionAttendance[] $conferenceSessionAttendances
 */
class ConferenceSession extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'conference_session';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'conferenceSessionID';

    /**
     * @var array
     */
    protected $fillable = ['conferenceID', 'startDateTime', 'endDateTime', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conference()
    {
        return $this->belongsTo('App\Models\Conference', 'conferenceID', 'conferenceID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conferenceSessionAttendances()
    {
        return $this->hasMany('App\Models\ConferenceSessionAttendance', 'conferenceSessionID', 'conferenceSessionID');
    }
}
