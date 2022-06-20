<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RaffleDAO extends Model
{
    protected $table = 'raffle';
    protected $fillable = ['name_raffle',
						   'quantity_raffle',
						   'price_raffle',
                           'describe_raffle'];
	public $timestamps = false;

    public function createRaffle($dados){
        return UsuarioDAO::create([
           'name'         => $dados['name'],
           'email'        => $dados['email'],
           'password'     => bcrypt($dados['password']),
        ]);
    }
}
