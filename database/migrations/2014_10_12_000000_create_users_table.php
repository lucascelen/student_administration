<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('admin')->nullable();
            $table->string('password');
            $table->timestamp('created_at') ->nullable();
            $table->timestamp('email_verified_at')->nullable();
        });

        DB::table('users')->insert(
            [
                [
                    'name' => 'Michaël Cloots',
                    'email' => 'michael.cloots@gmail.com',
                    'admin' => true,
                    'password' => Hash::make('admin1234'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
