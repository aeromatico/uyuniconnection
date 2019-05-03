<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerPacks4 extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_packs', function($table)
        {
            $table->string('days')->nullable();
            $table->boolean('avalaible')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_packs', function($table)
        {
            $table->dropColumn('days');
            $table->dropColumn('avalaible');
        });
    }
}
