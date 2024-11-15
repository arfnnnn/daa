<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformanceLogsTable extends Migration
{
    public function up()
    {
        Schema::create('performance_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id'); // FK ke teachers
            $table->decimal('score', 5, 2); // Skor evaluasi
            $table->text('remarks')->nullable(); // Catatan evaluasi
            $table->timestamps();

            // Foreign key
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('performance_logs');
    }
}
