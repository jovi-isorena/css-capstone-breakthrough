<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $postedMaterialID
 * @property integer $materialID
 * @property integer $subjectID
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property SectionSubject $sectionSubject
 * @property LearningMaterial $learningMaterial
 */
class PostedMaterial extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'posted_material';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'postedMaterialID';

    /**
     * @var array
     */
    protected $fillable = ['materialID', 'subjectID', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sectionSubject()
    {
        return $this->belongsTo('App\Models\SectionSubject', 'subjectID', 'classSubjectID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function learningMaterial()
    {
        return $this->belongsTo('App\Models\LearningMaterial', 'materialID', 'materialID');
    }
}
