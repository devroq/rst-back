<?php

/**
 * @Author: Roque
 * @Date:   2017-08-15 23:43:19
 * @Last Modified by:   Roque
 * @Last Modified time: 2017-08-15 23:44:16
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $fillable = ['id','nombre'];
}
?>