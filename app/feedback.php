<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $fillable=['feedbackType','userType','mainFeedback','detailFeedback'];
}
