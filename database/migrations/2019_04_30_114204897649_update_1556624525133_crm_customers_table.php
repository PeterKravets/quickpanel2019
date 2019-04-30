<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1556624525133CrmCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('crm_customers', function (Blueprint $table) {
            $table->string('first_name')->nullable()->change();
            $table->string('last_name')->change();
            $table->string('phone')->change();
        });
    }

    public function down()
    {
        Schema::table('crm_customers', function (Blueprint $table) {
        });
    }
}
