<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'bio',
        'telegram',
        'instagram',
        'facebook',
        'progressbar_1',
        'progressbar_2',
        'progressbar_3',
        'progressbar_4',
        'name_of_progressbar_1',
        'name_of_progressbar_2',
        'name_of_progressbar_3',
        'name_of_progressbar_4',
    ];
}
