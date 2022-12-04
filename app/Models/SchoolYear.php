<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $schoolYearID
 * @property integer $curriculumID
 * @property string $start
 * @property string $end
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Class[] $classes
 * @property Curriculum $curriculum
 */
class SchoolYear extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'schoolyear';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'schoolYearID';

    /**
     * @var array
     */
    protected $fillable = ['curriculumID', 'start', 'end', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classes()
    {
        return $this->hasMany('App\Models\Class', 'schoolYearID', 'schoolYearID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curriculum()
    {
        return $this->belongsTo('App\Models\Curriculum', 'curriculumID', 'curriculumID');
    }
}
