<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $studentBadgeID
 * @property integer $badgeID
 * @property integer $studentID
 * @property integer $quantity
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property Badge $badge
 * @property Student $student
 */
class StudentBadge extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'student_badge';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'studentBadgeID';

    /**
     * @var array
     */
    protected $fillable = ['badgeID', 'studentID', 'quantity', 'created_at', 'updated_at', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function badge()
    {
        return $this->belongsTo('App\Models\Badge', 'badgeID', 'badgeID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'studentID', 'studentID');
    }
}
