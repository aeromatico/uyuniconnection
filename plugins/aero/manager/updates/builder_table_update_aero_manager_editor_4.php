<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerEditor4 extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->string('home_destinations_title')->nullable();
            $table->string('home_destinations_subtitle')->nullable();
            $table->string('home_tours_title')->nullable();
            $table->string('home_tours_subtitle')->nullable();
            $table->text('home_features')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->dropColumn('home_destinations_title');
            $table->dropColumn('home_destinations_subtitle');
            $table->dropColumn('home_tours_title');
            $table->dropColumn('home_tours_subtitle');
            $table->dropColumn('home_features');
        });
    }
}
