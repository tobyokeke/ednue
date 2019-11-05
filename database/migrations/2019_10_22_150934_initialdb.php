<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Initialdb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('users', function (Blueprint $table) {
		    $table->bigIncrements('id');
		    $table->string('name');
		    $table->string('email')->unique();
		    $table->timestamp('email_verified_at')->nullable();
		    $table->string('password');
		    $table->rememberToken();
		    $table->timestamps();
	    });

	    Schema::create('password_resets', function (Blueprint $table) {
		    $table->string('email')->index();
		    $table->string('token');
		    $table->timestamp('created_at')->nullable();
	    });

	    Schema::create('members', function(Blueprint $table){
	        $table->increments('mid');
	        $table->string('name');
	        $table->string('phone',191);
	        $table->string('email',191);
	        $table->string('pop')->nullable();
	        $table->string('dob')->nullable();
	        $table->string('address',2000)->nullable();
	        $table->string('politically_inclined')->nullable();
	        $table->string('highest_education')->nullable();
	        $table->string('wish',5000)->nullable();
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
	    Schema::dropIfExists('users');
	    Schema::dropIfExists('password_resets');
    }
}
