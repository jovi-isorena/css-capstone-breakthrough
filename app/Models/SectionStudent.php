<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $sectionID
 * @property integer $studentID
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Student $student
 * @property Section $section
 */
class SectionStudent extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'section_student';

    /**
     * @var array
     */
    protected $fillable = ['sectionID', 'studentID', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'studentID', 'studentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'sectionID', 'sectionID');
    }
}
