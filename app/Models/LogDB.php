<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogDB extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'ip',
        'event',
        'extra'
    ];

    public static function record($user_id = null, $event, $extra)
    {
        return static::create([
            'name' => is_null($user_id) ? null : $user_id->name,
            'ip' => request()->ip(),
            'event' => $event,
            'extra' => $extra
        ]);
    }
}
