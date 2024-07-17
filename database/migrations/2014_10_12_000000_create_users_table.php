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
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->integer('place_birth')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('sex')->nullable();
            $table->integer('id_role')->default(1);
            $table->string('role_name')->nullable();
            $table->integer('id_position')->default(1);
            $table->string('position_name')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('id_periode')->default(0);
            $table->string('is_first_login')->default('Y');
            $table->integer('count_error_login')->default(0);
            $table->string('bg_color')->nullable();
            $table->string('forgot_passcode')->nullable();
            $table->datetime('forgot_passcode_valid_to')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
    }
}
