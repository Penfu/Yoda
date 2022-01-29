<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changelogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('reason')->nullable(); // user's reason for change
            $table->string('previously'); // the value before the change
            $table->foreignId('user_id')->constrained('users')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
            $table->foreignId('practice_id')->constrained('practices')
                ->onUpdate('NO ACTION')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('changelogs');
    }
}
