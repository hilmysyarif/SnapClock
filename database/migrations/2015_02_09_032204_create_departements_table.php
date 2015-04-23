<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departements', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('organization_id');
            $table->string('name');
			$table->timestamps();
		});

        $this->fill();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('departements');
	}


	private function fill()
	{
		DB::table('departements')->insert(
			[
                [
                    'organization_id' => 1,
                    'name' => 'KEUANGAN'
                ],
                [
                    'organization_id' => 1,
                    'name' => 'TATA USAHA'
                ]
			]
		);
	}
}
