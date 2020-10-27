<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\Database\Model\SoftDeletes;
use Hyperf\DbConnection\Model\Model;
/**
 */
class Account extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}