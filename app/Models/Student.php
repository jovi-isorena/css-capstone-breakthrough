<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StudentController;

/**
 * @property integer $studentID
 * @property integer $userID
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property integer $gradeLevel
 * @property string $gender
 * @property string $imageURL
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property SectionStudent[] $sectionStudents
 * @property User $user
 * @property StudentBadge[] $studentBadges
 * @property Submission[] $submissions
 */
class Student extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'student';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'studentID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'firstName', 'middleName', 'lastName', 'gradeLevel', 'gender', 'imageURL', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectionStudents()
    {
        return $this->hasMany('App\Models\SectionStudent', 'studentID', 'studentID');
    }
    public function sectionSubjects()
    {
        return $this->hasMany('App\Models\SectionSubject', 'teacherID', 'teacherID');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentBadges()
    {
        return $this->hasMany('App\Models\StudentBadge', 'studentID', 'studentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
        return $this->hasMany('App\Models\Submission', 'submittedBy', 'studentID');
    }
}
