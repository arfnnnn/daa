<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('teachers')) {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('qualification_id'); // Hanya kolom biasa tanpa foreign key
            $table->string('location');
            $table->integer('experience_years');
            $table->decimal('salary', 10, 2);
            $table->timestamps();
        });
    }
}

public function down()
{
    Schema::dropIfExists('teachers');
}

}
