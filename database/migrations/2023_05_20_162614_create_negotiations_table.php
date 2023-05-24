<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegotiationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negotiations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fund_id')
                ->constrained('funds');

            $table->enum('type', ['B', 'S'])
                ->comment("B=Buy, S=Sale");

            $table->decimal('quota_value', 10,2);
            $table->integer('quantity');
            $table->date('trade_date');
            $table->decimal('total_value', 10,2);
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
        Schema::dropIfExists('negotiations');
    }
}
