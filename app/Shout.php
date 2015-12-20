<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Shout extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'text'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
