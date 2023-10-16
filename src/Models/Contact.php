<?php

namespace CodeFusion\contact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable =[
      'name',
      'company',
      'email',
      'phone',
      'message'
    ];
}