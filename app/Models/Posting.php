<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Posting extends Model
{
    use HasFactory;

    protected $fillable = ['title','content','published_at'];
    // protected $guarded = ['id', '_token', 'created_at'];

    protected $casts = [

        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];


    // == Attributes

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = trim($value);
    }

    /*
    public function getTitleAttribute()
    {
        return Str::limit($this->attributes['title'], 15);
    }
    */

    public function setPublishedAtAttribute($value)
    {
        $now = Carbon::now();
        $this->attributes['published_at'] = Carbon::parse($value)->setTime($now->hour, $now->minute, $now->second);
    }

}
