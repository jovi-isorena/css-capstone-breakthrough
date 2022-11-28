<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $submissionID
 * @property integer $postedAssessmentID
 * @property integer $submittedBy
 * @property string $submissionDateTime
 * @property integer $score
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property PostedAssessment $postedAssessment
 * @property Student $student
 */
class Submission extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'submission';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'submissionID';

    /**
     * @var array
     */
    protected $fillable = ['postedAssessmentID', 'submittedBy', 'submissionDateTime', 'score', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function postedAssessment()
    {
        return $this->belongsTo('App\Models\PostedAssessment', 'postedAssessmentID', 'postedAssessmentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'submittedBy', 'studentID');
    }
}
