<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('cardIndex');
            $table->boolean('featuredProject');
            $table->string('featuredProjectFrontDescriptionString', 300)->nullable();
            $table->string('featuredProjectBackDescriptionString', 300)->nullable();
            $table->string('projectName', 100)->nullable();
            $table->string('minifiedBackgroundImage', 150)->nullable();
            $table->string('projectURL', 150)->nullable();
            $table->string('gitHubRepoURL', 150)->nullable();
            $table->string('toolTipString', 500)->nullable();
            $table->string('toolTipIconClassNameString', 500)->nullable();
            $table->string('projectOverlay', 150)->nullable();
            $table->string('projectOverlayAlt', 150)->nullable();
            $table->string('projectGIF', 150)->nullable();
            $table->string('projectGIFAlt', 150)->nullable();
            $table->string('contributorsNameString', 150)->nullable();
            $table->string('subProjectsNameString1', 1500)->nullable();
            $table->string('subProjectsNameString2', 1500)->nullable();
            $table->string('gitHubRepoURLString', 1500)->nullable();
            $table->string('contributorsLinkString', 1500)->nullable();
            $table->string('contributionsString', 1000)->nullable();
            $table->string('projectDescriptionString', 5000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
