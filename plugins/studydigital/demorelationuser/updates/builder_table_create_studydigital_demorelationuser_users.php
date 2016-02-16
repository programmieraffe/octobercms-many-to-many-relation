<?php namespace StudyDigital\Demorelationuser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStudydigitalDemorelationuserUsers extends Migration
{
    public function up()
    {
        Schema::create('studydigital_demorelationuser_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('username')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('studydigital_demorelationuser_users');
    }
}
