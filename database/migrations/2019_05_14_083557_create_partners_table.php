<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePartnersTable.
 */
class CreatePartnersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partners', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
            $table->text('description')->nullable();
            $table->string('link')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('position')->nullable();
            $table->enum('active', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('partners');
	}
}
