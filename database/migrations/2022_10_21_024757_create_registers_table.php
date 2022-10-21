<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('school', 50);
            $table->integer('grade');
            $table->char('group');
            $table->string('zone', 3);
            $table->string('time');
            $table->string('location', 30);
            $table->string('municipality');
            $table->string('principal', 70);
            $table->string('teacher', 70);
            $table->string('name', 70);
            $table->string('attention_type');
            $table->string('observations', 1200);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
