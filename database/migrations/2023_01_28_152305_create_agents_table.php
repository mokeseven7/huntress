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
        Schema::create('agents', function (Blueprint $table) {
            //Primary Key
            $table->id();
            
            //Foreign Key Constraints
            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')->references('id')->on('accounts');
            
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations');

            $table->string('version');
            $table->string('arch');
            $table->string('win_build_number');
            $table->string('domain_name');
            $table->string('hostname');
            $table->string('ipv4_address');
            $table->string('external_ip');
            $table->string('mac_addresses');
            $table->string('last_survey_at');
            $table->string('last_callback_at');
            $table->string('platform');
            $table->string('os');
            $table->string('service_pack_major');
            $table->string('service_pack_minor');
            $table->string('tags');
            $table->string('os_major');
            $table->string('os_minor');
            $table->string('os_patch');
            $table->string('version_number');
            $table->string('edr_version');
            $table->string('os_build_version');
            $table->string('serial_number');
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
        Schema::dropIfExists('agents');
    }
};
