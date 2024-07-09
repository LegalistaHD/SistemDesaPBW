<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatatanPenolakanToSuratsTable extends Migration
{
    public function up()
    {
        Schema::table('surats', function (Blueprint $table) {
            $table->text('catatan_penolakan')->nullable();
        });
    }

    public function down()
    {
        Schema::table('surats', function (Blueprint $table) {
            $table->dropColumn('catatan_penolakan');
        });
    }
}

