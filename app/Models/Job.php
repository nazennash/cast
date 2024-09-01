<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// class Job extends Model
// {
//     use HasFactory;
// }

class Job{
    public static function all()
    {
        return [
            [
                'id' => 1,  
                'title' => 'Developer',
                'salary' => '2000'
            ],
            [
                'id'=> 2,
                'title' => 'Programmer',
                'salary' => '4000'
            ]
        ] ;
    }

    public static function find($id)
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);  

        if (! $job) {
            abort(404);
        }

        return $job;
    }

}