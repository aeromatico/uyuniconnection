<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerPacks5 extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_packs', function($table)
        {
            $table->string('type')->nullable();
            $table->string('days')->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_packs', function($table)
        {
            $table->dropColumn('type');
            $table->string('days', 191)->change();
        });
    }
}
