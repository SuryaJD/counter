<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pageviews', function (Blueprint $table) {
            $table->id();
            $table->string('page_url');
            $table->string('referer')->nullable();
            $table->json('utm')->nullable();
            $table->string('device_type')->nullable();
            $table->string('device')->nullable();
            $table->string('browser')->nullable();
            $table->string('broser_verison')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('screen_size')->default(config('counter.screen_size',null))->nullable();
            $table->boolean('fresh_visit')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('pageviews');
    }
}
