<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        //create 3 roles records
        $rows = [
            [
                'id'=>1,
                'name' => 'administrator'
            ],
            [
                'id'=>2,
                'name' => 'author'
            ],
            [
                'id'=>3,
                'name' => 'subscriber'
            ]
        ];
        // insert records
        DB::table('roles')->insert($rows);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}

