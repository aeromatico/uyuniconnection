<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerPacks3 extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_packs', function($table)
        {
            $table->string('subtitle')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_packs', function($table)
        {
            $table->dropColumn('subtitle');
        });
    }
}
