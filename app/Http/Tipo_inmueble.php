<?php
/**
 * @Author: Roque
 * @Date:   2017-08-15 23:43:19
 * @Last Modified by:   Roque
 * @Last Modified time: 2017-08-15 23:44:16
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Tipo_inmueble extends Model
{
	protected $table = 'tipos_inmueble';
    protected $fillable = ['id','name'];
}
?>