<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * 
 * @property int $id
 * @property string $title
 * @property string $priority
 * @property Carbon $due_date
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Task extends Model
{
	protected $table = 'vue';
	public $timestamps = false;

	protected $casts = [
		'title' => 'string',
		'priority' => 'string',
		'due_date' => 'date',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];

	protected $fillable = [
		'title',
		'priority',
		'due_date'
	];
}
