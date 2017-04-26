<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyVkRequestsTableAddSuccessAndErrorColumns extends Migration
{
    protected $table = 'vk_users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->boolean('is_success')->default(false)->after('content');
            $table->integer('errors')->default(0)->after('is_success');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->dropColumn(array('errors', 'is_success'));
        });
    }
}
