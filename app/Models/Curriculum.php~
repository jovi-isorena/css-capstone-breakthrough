<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $curriculumID
 * @property integer $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property CurriculumSubject[] $curriculumSubjects
 * @property Schoolyear[] $schoolyears
 */
class Curriculum extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'curriculum';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'curriculumID';

    /**
     * @var array
     */
    protected $fillable = ['name', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function curriculumSubjects()
    {
        return $this->hasMany('App\Models\CurriculumSubject', 'curriculumID', 'curriculumID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schoolyears()
    {
        return $this->hasMany('App\Models\Schoolyear', 'curriculumID', 'curriculumID');
    }
}
