<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $sectionID
 * @property string $name
 * @property string $gradeLevel
 * @property integer $schoolYearID
 * @property integer $teacherID
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Teacher $teacher
 * @property Schoolyear $schoolyear
 * @property SectionStudent[] $sectionStudents
 * @property SectionSubject[] $sectionSubjects
 */
class Section extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'section';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'sectionID';

    /**
     * @var array
     */
    protected $fillable = ['name', 'gradeLevel', 'schoolYearID', 'teacherID', 'created_at', 'updated_at', 'status'];

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
    public function schoolyear()
    {
        return $this->belongsTo('App\Models\Schoolyear', 'schoolYearID', 'schoolYearID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectionStudents()
    {
        return $this->hasMany('App\Models\SectionStudent', 'sectionID', 'sectionID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectionSubjects()
    {
        return $this->hasMany('App\Models\SectionSubject', 'sectionID', 'sectionID');
    }
}
