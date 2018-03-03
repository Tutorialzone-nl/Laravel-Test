<?php
/**
 * Created by PhpStorm.
 * User: olivia
 * Date: 2/24/18
 * Time: 11:30 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['role'];
}