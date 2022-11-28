<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $schooladminID
 * @property integer $userID
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $suffix
 * @property string $position
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property User $user
 */
class SchoolAdmin extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'schooladmin';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'schooladminID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'firstName', 'middleName', 'lastName', 'suffix', 'position', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userID');
    }
}
