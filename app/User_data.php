<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class User_data extends Model
{

	protected $table='user_data';

	protected $fillable =['comment','file','userid'];
    
}
