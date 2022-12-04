<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $assessmentID
 * @property string $name
 * @property integer $createdBy
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Teacher $teacher
 * @property PostedAssessment[] $postedAssessments
 */
class Assessment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'assessment';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'assessmentID';

    /**
     * @var array
     */
    protected $fillable = ['name', 'createdBy', 'type', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'createdBy', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postedAssessments()
    {
        return $this->hasMany('App\Models\PostedAssessment', 'assessmentID', 'assessmentID');
    }
}
