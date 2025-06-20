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
    Schema::table('accounts', function (Blueprint $table) {
        $table->string('reset_token')->nullable();
        $table->timestamp('reset_token_expires_at')->nullable();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('accounts', function (Blueprint $table) {
        $table->dropColumn(['reset_token', 'reset_token_expires_at']);
    });
}
};
