<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use osmanager\Categoria;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CategoriaSeeder');
	}

}

class CategoriaSeeder extends Seeder{
	public function run(){
		Categoria::create(['nome'=>'Manutenção']);
		Categoria::create(['nome'=>'Upgrade']);
		Categoria::create(['nome'=>'Empresarial']);
	}
}
