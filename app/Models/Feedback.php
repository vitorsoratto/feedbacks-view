<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $connection = 'prod_db';

    protected $table = 'feedbacks';

    protected $fillable = [
        'feedback',
        'app',
    ];
}
