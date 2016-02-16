<?php namespace StudyDigital\Demorelationuser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStudydigitalDemorelationuserProjects extends Migration
{
    public function up()
    {
        Schema::create('studydigital_demorelationuser_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('studydigital_demorelationuser_projects');
    }
}
