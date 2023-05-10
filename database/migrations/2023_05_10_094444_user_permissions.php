<?php

use App\Classes\PermissionsManager;
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
        Schema::table("users", static function (Blueprint $table) {
            $table->integer("permissions", unsigned: false)->default(PermissionsManager::P_ZERO);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("users", static function (Blueprint $table) {
            $table->dropColumn("permissions");
        });
    }
};
