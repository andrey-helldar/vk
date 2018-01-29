<?php

namespace Helldar\Vk\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VkUser extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'expired_at'];

    protected $fillable = ['user_id', 'vk_user_id', 'access_token', 'content', 'expired_at'];
}
