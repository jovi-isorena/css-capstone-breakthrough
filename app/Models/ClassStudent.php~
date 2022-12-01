<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $classID
 * @property integer $studentID
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Class $class
 * @property Student $student
 */
class ClassStudent extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'class_student';

    /**
     * @var array
     */
    protected $fillable = ['classID', 'studentID', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function class()
    {
        return $this->belongsTo('App\Models\Class', 'classID', 'classID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'studentID', 'studentID');
    }
}
