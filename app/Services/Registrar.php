<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'prefix' 	=> 'required|max:50',
			'name' 		=> 'required|max:255',
			'surname' 	=> 'required|max:255',
			'email' 	=> 'required|email|max:255|unique:users',
			'name' 		=> 'required|max:50|unique:users',
			'password' 	=> 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'prefix' 	=> $data['prefix'],
			'name' 		=> $data['name'],
			'surname' 	=> $data['surname'],
			'email' 	=> $data['email'],
			'username' 	=> $data['username'],
			'password' 	=> bcrypt($data['password']),
		]);
	}

}
