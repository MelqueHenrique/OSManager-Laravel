<?php namespace osmanager;

use Illuminate\Database\Eloquent\Model;

class Os extends Model {

    protected $fillable = ['nome', 'email', 'descricao', 'preco', 'pago', 'categoria_id'];

}
