<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This method adds the 'role' column to the 'users' table.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // We define the column as a string, with a default value of 'user'.
            // This ensures that all existing users are assigned the standard user role.
            // Using `after('email')` places the new column in a logical spot in the table.
            $table->string('role')->default('user')->after('email');
        });
    }

    /**
     * Reverse the migrations.
     * This method removes the 'role' column if the migration is rolled back.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // This is the reverse operation of the `up` method.
            $table->dropColumn('role');
        });
    }
};