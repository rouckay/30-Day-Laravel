<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';

    // protected $fillable = [
    //     'title',
    //     'salary',
    //     'employer_id'
    // ];

    protected $guarded = [];
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}





























// public static function all()
// {

// }
// public static function find($id)
// {
//     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

//     if (!$job) {
//         abort(404);
//     }
//     return $job;
// }
