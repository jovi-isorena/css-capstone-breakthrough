<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $badgeID
 * @property integer $imageURL
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property StudentBadge[] $studentBadges
 */
class Badge extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'badge';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'badgeID';

    /**
     * @var array
     */
    protected $fillable = ['imageURL', 'name', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentBadges()
    {
        return $this->hasMany('App\Models\StudentBadge', 'badgeID', 'badgeID');
    }
}
