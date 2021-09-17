<?php

use App\Models\Rol;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->unsignedBigInteger('rol_id')->nullable()->default(Rol::CLIENTE);
            $table->foreign('rol_id')->references('id')->on('rols');
            $table->string('name');
            $table->string('apellido')->nullable();
            $table->string('banipay', 100)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
