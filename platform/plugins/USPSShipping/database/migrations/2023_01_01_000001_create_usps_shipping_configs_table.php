<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUspsShippingConfigsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usps_shipping_configs', function (Blueprint $table) {
            $table->id();
            $table->string('api_user_id');
            $table->string('api_password');
            $table->decimal('default_weight', 8, 2);
            $table->decimal('default_length', 8, 2);
            $table->decimal('default_width', 8, 2);
            $table->decimal('default_height', 8, 2);
            $table->decimal('additional_handling_fee', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('usps_shipping_configs');
    }
}