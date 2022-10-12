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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('goi');
            $table->string('soluongve');
            $table->string('ngaysd');
            $table->string('hoten');
            $table->string('sdt');
            $table->string('email');
            $table->integer('sotien')->nullable();
            $table->string('sothe')->nullable();
            $table->string('hotenchuthe')->nullable();
            $table->string('ngayhethan')->nullable();
            $table->string('cvv')->nullable();
            $table->string('tenve')->nullable();
            $table->integer('sove')->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('tickets');
    }
};
