<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerEditor2 extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->string('about_title')->change();
            $table->string('about_subtitle')->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->string('about_title', 191)->change();
            $table->string('about_subtitle', 191)->change();
        });
    }
}
