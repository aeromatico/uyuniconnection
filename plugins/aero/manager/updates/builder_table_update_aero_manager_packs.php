<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerPacks extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_packs', function($table)
        {
            $table->string('name')->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_packs', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('slug', 191)->change();
        });
    }
}
