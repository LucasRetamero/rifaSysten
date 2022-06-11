<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioDAO extends Model
{
    protected $table = 'users';
    protected $fillable = ['name',
						   'email',
						   'password'];
	public $timestamps = false;

    public function addUsser($dados){
        return UsuarioDAO::create([
           'name'         => $dados['name'],
           'email'        => $dados['email'],
           'password'     => bcrypt($dados['password']),
        ]);
    }
}
