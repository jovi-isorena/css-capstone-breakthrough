<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $classSubjectID
 * @property integer $teacherID
 * @property integer $classID
 * @property string $name
 * @property integer $gradeLevel
 * @property string $status
 * @property Teacher $teacher
 * @property Class $class
 * @property Conference[] $conferences
 * @property PostedAssessment[] $postedAssessments
 * @property PostedMaterial[] $postedMaterials
 */
class ClassSubject extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'class_subject';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'classSubjectID';

    /**
     * @var array
     */
    protected $fillable = ['teacherID', 'classID', 'name', 'gradeLevel', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacherID', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function class()
    {
        return $this->belongsTo('App\Models\Class', 'classID', 'classID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conferences()
    {
        return $this->hasMany('App\Models\Conference', 'subjectID', 'classSubjectID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postedAssessments()
    {
        return $this->hasMany('App\Models\PostedAssessment', 'subjectID', 'classSubjectID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postedMaterials()
    {
        return $this->hasMany('App\Models\PostedMaterial', 'subjectID', 'classSubjectID');
    }
}
