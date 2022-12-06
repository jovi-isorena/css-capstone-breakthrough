<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $classSubjectID
 * @property integer $teacherID
 * @property integer $sectionID
 * @property string $name
 * @property integer $gradeLevel
 * @property string $status
 * @property Conference[] $conferences
 * @property PostedAssessment[] $postedAssessments
 * @property PostedMaterial[] $postedMaterials
 * @property Teacher $teacher
 * @property Section $section
 */
class SectionSubject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'section_subject';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sectionSubjectID';

    /**
     * @var array
     */
    protected $fillable = ['teacherID', 'sectionID', 'name', 'gradeLevel', 'status'];

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
    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'sectionID', 'sectionID');
    }

    public function sectionstudent()
    {
        return $this->belongsTo('App\Models\SectionStudent', 'sectionID', 'sectionID');
    }
}
