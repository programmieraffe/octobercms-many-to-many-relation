<?php namespace StudyDigital\Demorelationuser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStudydigitalDemorelationuserProjectUsers extends Migration
{
    public function up()
    {
        Schema::create('studydigital_demorelationuser_project_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('project_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('studydigital_demorelationuser_project_users');
    }
}
