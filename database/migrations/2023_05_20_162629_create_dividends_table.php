<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDividendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dividends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fund_id')
                ->constrained('funds');
            $table->integer('total_quotas');
            $table->decimal('dividend_value', 10,2);
            $table->decimal('total_dividend_value', 10,2);
            $table->date('pay_date');
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
        Schema::dropIfExists('dividends');
    }
}
