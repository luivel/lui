<?php namespace Luivel\Lui;

class Demo extends BaseModel
{
    protected $table = 'demo';

    protected $fillable = ['name', 'type', 'group', 'url', 'middleware', 'controller', 'action', 'as'];
}