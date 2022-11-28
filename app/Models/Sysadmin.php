<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $sysadminID
 * @property integer $userID
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property boolean $isRootAdmin
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property User $user
 */
class Sysadmin extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sysadmin';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'sysadminID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'firstName', 'middleName', 'lastName', 'isRootAdmin', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userID');
    }
}
