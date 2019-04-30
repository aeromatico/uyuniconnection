<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerEditor extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->string('about_title')->nullable();
            $table->string('about_subtitle')->nullable();
            $table->text('about_mission')->nullable();
            $table->text('about_vision')->nullable();
            $table->text('about')->nullable();
            $table->text('about_faqs')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->dropColumn('about_title');
            $table->dropColumn('about_subtitle');
            $table->dropColumn('about_mission');
            $table->dropColumn('about_vision');
            $table->dropColumn('about');
            $table->dropColumn('about_faqs');
        });
    }
}
