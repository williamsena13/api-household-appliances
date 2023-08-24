<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('bands', function (Blueprint $table) {
            $table->smallInteger('status')->default(1)->change();            
        });
    }

    public function down()
    {
        Schema::table('bands', function (Blueprint $table) {
            $table->smallInteger('status')->default(null)->change();
        });

        
    }
};