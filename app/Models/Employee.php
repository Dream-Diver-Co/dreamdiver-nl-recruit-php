<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'education', 'job_title', 'salary', 'job_description', 'location','company_name','skills', 'mobile', 'email', 'image', 'date', 'file', 'process', 'note',
    ];
}

