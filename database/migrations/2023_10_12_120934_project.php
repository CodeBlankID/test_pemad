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
        Schema::create('project', function (Blueprint $table)
        {
            $table->id();
            $table->integer("user_id");
            $table->string("nama");
            $table->string("tipe");
            $table->string("field");
            $table->enum("kategori", ["request", "offer"]);
            $table->longText("description");
            $table->integer("lang_id");
            $table->boolean("is_deleted")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};