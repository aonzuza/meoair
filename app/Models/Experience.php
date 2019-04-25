<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 23 Apr 2019 14:02:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Experience
 * 
 * @property int $ID
 * @property string $name
 * @property string $image
 * @property string $comment
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Experience extends Eloquent
{
	protected $table = 'experience';
	protected $primaryKey = 'ID';

	protected $fillable = [
		'name',
		'image',
		'comment'
	];
}
