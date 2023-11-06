<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
//     use HasFactory;

//     // Gunakan properti $guarded untuk menentukan kolom yang tidak dapat diisi secara massal
//     protected $guarded = ['id'];

//     public function user()
//     {
//         return $this->belongsTo(User::class, 'user_id');
//     }

//     public function asset()
//     {
//         return $this->belongsTo(Asset::class, 'asset_id');
//     }
// }

    use HasFactory;
    protected $guarded = ['ratings'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function asset()
    {
        return $this->belongsTo(Asset::class, 'asset_id', 'id');
    }
    }
