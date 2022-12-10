<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $postID
 * @property integer $userID
 * @property integer $sectionSubjectID
 * @property string $content
 * @property string $file_url
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Teacher $teacher
 * @property SectionSubject $sectionSubject
 */
class PostThread extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'post_thread';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'postID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'sectionSubjectID', 'content', 'file_url', 'created_at', 'updated_at', 'status'];

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
    public function sectionSubject()
    {
        return $this->belongsTo('App\Models\SectionSubject', 'sectionSubjectID', 'sectionSubjectID');
    }
}
