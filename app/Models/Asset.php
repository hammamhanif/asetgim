<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function assetReports()
    {
        return $this->hasMany(AssetReport::class);
    }
    public function ratings()
    {
        return $this->hasMany(Ratings::class, 'asset_id');
    }
}
