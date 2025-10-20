<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company_detail extends Model
{
    protected $table = "company_details";
    protected $fillable = [
        'name',
        'logo',
        'address_line_1',
        'address_line_2',
        'address_line_3',
        'gst',
        'udyam',
        'email',
        'mobile',
        'whatsapp',
        'facebook',
        'instagram',
        'twitter',
        'youtube'
    ];
}
