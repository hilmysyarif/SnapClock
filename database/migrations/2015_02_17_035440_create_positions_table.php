<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('positions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('code', 20);
            $table->integer('organization_id');
            $table->string('name', 100);
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
        Schema::drop('positions');
	}

	private function fill()
	{
		DB::table('positions')->insert(
			[
				[
					'organization_id' => 1,
					'code' => 'KA001',
					'name' => 'KETUA PROGRAM STUDI'
				],
				[
					'organization_id' => 1,
					'code' => 'KA002',
					'name' => 'WAKIL PROGRAM STUDI'
				],
				[
					'organization_id' => 1,
					'code' => 'UA001',
					'name' => 'KEPALA KEUANGAN'
				],
			]
		);
	}

}
