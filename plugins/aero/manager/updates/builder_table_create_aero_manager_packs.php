<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroManagerPacks extends Migration
{
    public function up()
    {
        Schema::create('aero_manager_packs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('itinerary')->nullable();
            $table->text('services_shared')->nullable();
            $table->text('services_private')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_manager_packs');
    }
}
