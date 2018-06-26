<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class in extends Model
{
	protected $primaryKey = 'id_in';

	 protected $fillable = ['id_in','montant_in','motif_in','remarque_in', 'updated_at', 'created_at'];
}
