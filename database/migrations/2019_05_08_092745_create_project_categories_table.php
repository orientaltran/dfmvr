<?php

use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('project_categories')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->integer('order')->default(1);
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->enum('status', ProjectCategory::$statuses)->default(ProjectCategory::STATUS_INACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_categories');
    }
}
