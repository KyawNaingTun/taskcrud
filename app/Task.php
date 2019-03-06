<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';

    // protected $dateFormat = 'U';
    protected $dates = ['due_at', 'reminder_at'];

    protected $fillable = [
        'created_id',
        'assigned_id',
        'type',
        'company',
        'contact',
        'subject',
        'priority',
        'due_at',
        'reminder_at',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_id');
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_id');
    }

}
