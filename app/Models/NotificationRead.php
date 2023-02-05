<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationRead extends Model
{
    use HasFactory;

    protected $table = 'notification_reads';
    protected $guard = ['id'];

    public function users()
    {
        return $this->hasOne(User::class);
    }

    public function notifications()
    {
        return $this->hasOne(Notification::class);
    }
}