<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logins', function (Blueprint $table) {
            $table->string('sesstion',64);
           $table->timestamp('expiration')->nullable(false);
           $table->foreignId('employee_id')->constrained('employees');
           $table->timestamp('created_at')->useCurrent()->nullable();
           $table->timestamp('updated_at')->useCurrent()->nullable();
           $table->primary(['sesstion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logins');
    }
}
