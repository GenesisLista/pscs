<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMembershipRenewalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_membership_renewal', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('new_membership_id')->unsigned()->nullable(); // Foreign key
            $table->bigInteger('renewal_id')->unsigned()->nullable(); // Foreign key
            $table->timestamps();

            $table->foreign('new_membership_id')->references('id')->on('new_memberships')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('renewal_id')->references('id')->on('renewals')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_membership_renewal');
    }
}
