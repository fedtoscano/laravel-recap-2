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
        Schema::table('recipes', function (Blueprint $table) {
            //
            $table->unsignedBigInteger("kitchen_id")->after("id");
            $table->foreign('kitchen_id')->references('id')->on("kitchens");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
            //
            $table->dropForeign(["kitchen_id"]);
            $table->dropColumn("kitchen_id");
        });
    }
};
