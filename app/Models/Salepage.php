<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Apr 2019 13:47:58 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Salepage
 * 
 * @property int $pageID
 * @property string $title
 * @property string $body
 * @property string $tempBody
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Salepage extends Eloquent
{
	protected $table = 'salepage';
	protected $primaryKey = 'pageID';

	protected $fillable = [
		'title',
		'body',
		'tempBody'
	];
}
