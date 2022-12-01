<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $conferenceID
 * @property integer $subjectID
 * @property integer $roomMaster
 * @property integer $capacity
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Teacher $teacher
 * @property ClassSubject $classSubject
 * @property ConferenceSession[] $conferenceSessions
 */
class Conference extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'conference';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'conferenceID';

    /**
     * @var array
     */
    protected $fillable = ['subjectID', 'roomMaster', 'capacity', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'roomMaster', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classSubject()
    {
        return $this->belongsTo('App\Models\ClassSubject', 'subjectID', 'classSubjectID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conferenceSessions()
    {
        return $this->hasMany('App\Models\ConferenceSession', 'conferenceID', 'conferenceID');
    }
}
