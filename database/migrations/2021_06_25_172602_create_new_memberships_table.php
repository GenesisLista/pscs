<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_memberships', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('personal_email_address')->nullable();
            $table->string('personal_tel_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('personal_address')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_email_address')->nullable();
            $table->string('position')->nullable();
            $table->integer('length_of_stay')->nullable();
            $table->string('company_tel_number')->nullable();
            $table->string('company_address')->nullable();
            $table->bigInteger('educational_id')->unsigned()->nullable(); // Foreign Key
            $table->string('school_university')->nullable();
            $table->string('degree')->nullable();
            $table->string('prc_number')->nullable();
            $table->string('graduate_school')->nullable();
            $table->bigInteger('social_media_id')->unsigned()->nullable(); // Foreign Key
            $table->string('who_invite')->nullable();
            $table->bigInteger('allow_retention_id')->unsigned()->nullable(); // Foreign Key
            $table->integer('status')->nullable(); // Member Status

            // Foreign Keys
            $table->foreign('educational_id')->references('id')->on('educational_attainments')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('social_media_id')->references('id')->on('social_media')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('allow_retention_id')->references('id')->on('retentions')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('new_memberships');
    }
}
