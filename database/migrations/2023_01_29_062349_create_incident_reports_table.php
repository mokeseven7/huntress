<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incident_reports', function (Blueprint $table) {
            //Primary Key 
            $table->id();
            
            //Foreign Key Constraints 
            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')->references('id')->on('accounts');

            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id')->references('id')->on('agents');
            
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations');
            
            $table->string('status');
            $table->string('summary');
            $table->string('body');
            $table->string('status_updated_at');
            $table->string('sent_at');
            $table->string('subject');
            $table->string('created_by_id');
            $table->string('remediation_instructions');
            $table->string('footholds');
            $table->string('severity');
            $table->string('assigned_to_id');
            $table->string('closed_at');
            $table->json('indicator_types');
            $table->json('indicator_counts');
            $table->json('details');
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
        Schema::dropIfExists('incident_reports');
    }
};
