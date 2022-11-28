<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $classID
 * @property string $name
 * @property string $gradeLevel
 * @property integer $schoolYearID
 * @property integer $teacherID
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Schoolyear $schoolyear
 * @property Teacher $teacher
 * @property ClassStudent[] $classStudents
 * @property ClassSubject[] $classSubjects
 */
class Class extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'class';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'classID';

    /**
     * @var array
     */
    protected $fillable = ['name', 'gradeLevel', 'schoolYearID', 'teacherID', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schoolyear()
    {
        return $this->belongsTo('App\Models\Schoolyear', 'schoolYearID', 'schoolYearID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacherID', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classStudents()
    {
        return $this->hasMany('App\Models\ClassStudent', 'classID', 'classID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classSubjects()
    {
        return $this->hasMany('App\Models\ClassSubject', 'classID', 'classID');
    }
}
