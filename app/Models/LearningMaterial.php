<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $materialID
 * @property string $name
 * @property string $fileURL
 * @property string $type
 * @property integer $postedBy
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Teacher $teacher
 * @property PostedMaterial[] $postedMaterials
 */
class LearningMaterial extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'learning_material';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'materialID';

    /**
     * @var array
     */
    protected $fillable = ['name', 'fileURL', 'type', 'postedBy', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'postedBy', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postedMaterials()
    {
        return $this->hasMany('App\Models\PostedMaterial', 'materialID', 'materialID');
    }
}
