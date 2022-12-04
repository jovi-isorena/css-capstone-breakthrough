<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $curriculumSubjectID
 * @property integer $curriculumID
 * @property string $name
 * @property string $subjectShorthand
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Curriculum $curriculum
 */
class CurriculumSubject extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'curriculum_subject';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'curriculumSubjectID';

    /**
     * @var array
     */
    protected $fillable = ['curriculumID', 'name', 'subjectShorthand', 'description', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curriculum()
    {
        return $this->belongsTo('App\Models\Curriculum', 'curriculumID', 'curriculumID');
    }
}
