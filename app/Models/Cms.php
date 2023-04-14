<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    use HasFactory;

    // protected $fillable =[
    //     'home_heading',
    //     'home_sub_heading',
    //     'home_banner_img',
    //     'about_heading',
    //     'about_sub_heading',
    //     'about_banner_img',
    //     'about_content',
    //     'contact_heading',
    //     'contact_sub_heading',
    //     'contact_banner_img',
    //     'contact_content',
    // ];

    protected $guarded = [];
}
