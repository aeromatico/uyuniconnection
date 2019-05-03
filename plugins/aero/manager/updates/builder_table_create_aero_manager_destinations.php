<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroManagerDestinations extends Migration
{
    public function up()
    {
        Schema::create('aero_manager_destinations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('youtube')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_manager_destinations');
    }
}
