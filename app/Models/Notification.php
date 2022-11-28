<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $notificationID
 * @property integer $userID
 * @property integer $notificationType
 * @property boolean $isRead
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property User $user
 */
class Notification extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'notification';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'notificationID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'notificationType', 'isRead', 'message', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userID');
    }
}
