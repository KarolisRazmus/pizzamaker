<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResourcesIdColumnToIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dt_ingredients', function (Blueprint $table) {
            $table->string('resources_id', 36)->nullable()->index('fk_dt_resources1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dt_ingredients', function (Blueprint $table) {
            $table->dropColumn('resources_id', 36)->nullable()->index('fk_dt_resources1_idx');

        });
    }
}
