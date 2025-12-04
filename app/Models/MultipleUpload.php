<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MultipleUpload extends Model
{
    protected $table = 'multiuploads';

    protected $fillable = [
        'filename',
        'ref_table',
        'ref_id',
    ];
}
