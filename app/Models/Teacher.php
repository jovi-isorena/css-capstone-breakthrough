<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $teacherID
 * @property integer $userID
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $suffix
 * @property string $position
 * @property string $employmentStatus
 * @property string $imageURL
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Assessment[] $assessments
 * @property Class[] $classes
 * @property ClassSubject[] $classSubjects
 * @property Conference[] $conferences
 * @property LearningMaterial[] $learningMaterials
 * @property User $user
 */
class Teacher extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teacher';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'teacherID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'firstName', 'middleName', 'lastName', 'suffix', 'position', 'employmentStatus', 'imageURL', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assessments()
    {
        return $this->hasMany('App\Models\Assessment', 'createdBy', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classes()
    {
        return $this->hasMany('App\Models\Class', 'teacherID', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classSubjects()
    {
        return $this->hasMany('App\Models\ClassSubject', 'teacherID', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conferences()
    {
        return $this->hasMany('App\Models\Conference', 'roomMaster', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function learningMaterials()
    {
        return $this->hasMany('App\Models\LearningMaterial', 'postedBy', 'teacherID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userID', 'userID');
    }

       /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function postthread()
    {
        return $this->belongsTo('App\Models\PostThread', 'userID','');
    }
}
