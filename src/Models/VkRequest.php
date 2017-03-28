<?php

namespace Helldar\Vk\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VkRequest extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = array('deleted_at');

    protected $fillable = array('user_id', 'vk_user_id', 'request', 'response');
}
