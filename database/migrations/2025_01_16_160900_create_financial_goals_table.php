<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('financial_goals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('type_id');
            $table->double('current_value');
            $table->double('target_value');
            $table->unsignedBigInteger('status_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            // Relationships
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('cascade');

            $table->foreign('status_id')
                ->references('id')
                ->on('statues')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_goals');
    }
};
