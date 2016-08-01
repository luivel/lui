<?php namespace Luivel\Lui;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $connection = 'lui';
}