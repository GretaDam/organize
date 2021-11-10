<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'reference',
        'checked_or_not',
        'priority',
        'joined_file',
        'start_date',
        'end_date',
        'user_id', 
    ];

    public function user() {
        return $this->hasOne(User::class);
    }

    public function getPriorityImg() {
        switch ($this->priority) {
            case 1: return 'priorityH.svg';
            case 2: return 'priorityN.svg';
            case 3: return 'priorityB.svg';
            default: return null;
        }
    }

    public function getCheckedImg() {
        switch ($this->checked_or_not) {
            case 0: return 'checkN.svg';
            case 1: return 'checkOk.svg';
            default: return null;
        }
    }

}
