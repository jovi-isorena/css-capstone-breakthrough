<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $postedAssessmentID
 * @property integer $assessmentID
 * @property integer $subjectID
 * @property string $startDateTime
 * @property integer $durationInSecond
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property SectionSubject $sectionSubject
 * @property Assessment $assessment
 * @property Submission[] $submissions
 */
class PostedAssessment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'posted_assessment';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'postedAssessmentID';

    /**
     * @var array
     */
    protected $fillable = ['assessmentID', 'subjectID', 'startDateTime', 'durationInSecond', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sectionSubject()
    {
        return $this->belongsTo('App\Models\SectionSubject', 'subjectID', 'classSubjectID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assessment()
    {
        return $this->belongsTo('App\Models\Assessment', 'assessmentID', 'assessmentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
        return $this->hasMany('App\Models\Submission', 'postedAssessmentID', 'postedAssessmentID');
    }
}
