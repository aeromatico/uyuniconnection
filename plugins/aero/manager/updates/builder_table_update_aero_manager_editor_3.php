<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerEditor3 extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->string('services_title')->nullable();
            $table->string('services_subtitle')->nullable();
            $table->text('services')->nullable();
            $table->string('about_title')->change();
            $table->string('about_subtitle')->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->dropColumn('services_title');
            $table->dropColumn('services_subtitle');
            $table->dropColumn('services');
            $table->string('about_title', 191)->change();
            $table->string('about_subtitle', 191)->change();
        });
    }
}
