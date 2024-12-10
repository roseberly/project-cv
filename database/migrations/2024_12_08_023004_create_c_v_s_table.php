<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
    {
    /**
     * Run the migrations.
     **/

    public function up() {
        Schema::create('c_v_s', function (Blueprint $table) {
            $table->id();
            $table->foreingid('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->text('profile');
            $table->text('education');
            $table->text('expierence');
            $table->text('skills');
            $table->timestamps(); 
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_v_s');
    }
};
