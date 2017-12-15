<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PosteosAddColumnAvatar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasColumn('posteos', 'avatar')) {
        Schema::table('posteos',function(Blueprint $table){
            $table->string('avatar')->nullable();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if (!Schema::hasColumn('posteos', 'avatar')) {
        Schema::table('posteos',function(Blueprint $table){
            $table->dropColumn('avatar');
        });
      }
    }
}
