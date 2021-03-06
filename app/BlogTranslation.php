<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogTranslation extends Model
{
    use SoftDeletes;

    protected $table = 'blog_translations';

    public $timestamps = false;

    public function blog() {
        return $this->belongsTo('App\Blog');
    }
}
