<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $postID
 * @property integer $userID
 * @property integer $sectionSubjectID
 * @property string $content
 * @property string $create_at
 * @property string $updated_at
 * @property string $status
 */
class PostThread extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'post-thread';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'postID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'sectionSubjectID', 'content', 'create_at', 'updated_at', 'status'];
}
