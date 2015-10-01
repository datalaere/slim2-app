<?php
/**
 * User Model
 */
namespace Models\User;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{

	protected $table = 'Users';
	protected $fillable = array(
		'Email',
		'Username',
		'Password',
		'Active',
		'Active_hash',
		'Session_ID',
		'Session_token'
	);

}
