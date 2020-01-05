<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerAddSexField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('customers', 'sex')) {
            Schema::table('customers', function (Blueprint $table) {
                $table->string('sex')->after('birthdate');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('customers', 'sex')) {
            Schema::table('customers', function (Blueprint $table) {
                $table->dropColumn('sex');
            });
        }
    }
}
