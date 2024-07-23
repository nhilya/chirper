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
        // update the table to create the relationship between users table with the chirps table.
        Schema::create('chirps', function (Blueprint $table) {
            $table->id(); // created the auto-incremented id column.
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // created a user_id column (as a foreign key) that linking user_id to the is column on the users table.
            $table->string('message'); // adding the message column that will storing the chirp message.
            $table->timestamps(); // timestamp columns created to the table, which will auto managed by Eloquent to track each record that is created and updated.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chirps');
    }
};
