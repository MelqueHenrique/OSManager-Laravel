<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use osmanager\Os;

class AdicionaCamposClientes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('os', function($table){
			$table->string('tipo', 10)->default('pj');
			$table->string('cpf', 30)->nullable();
			$table->string('cnpj', 30)->nullable();
			$table->decimal('imposto', 10, 2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('os', function ($table) {
			$table->dropColumn(['tipo', 'cpf', 'cnpj', 'imposto']);
		});
	}

}
