<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $commentID
 * @property integer $userID
 * @property integer $sectionSubjectID
 * @property integer $postID
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property SectionSubject $sectionSubject
 * @property Teacher $teacher
 * @property PostThread $postThread
 * @property Student $student
 */
class Comments extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'comment';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'commentID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'sectionSubjectID', 'postID', 'content', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sectionSubject()
    {
        return $this->belongsTo('App\Models\SectionSubject', 'sectionSubjectID', 'sectionSubjectID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'userID', 'userID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function postThread()
    {
        return $this->belongsTo('App\Models\PostThread', 'postID', 'postID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'userID', 'userID');
    }
}
