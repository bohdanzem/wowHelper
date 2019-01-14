<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->increments('id');
            $table->string('word');
            $table->integer('n1')->default(0);
            $table->integer('n2')->default(0);
            $table->integer('n3')->default(0);
            $table->integer('n4')->default(0);
            $table->integer('n5')->default(0);
            $table->integer('n6')->default(0);
            $table->integer('n7')->default(0);
            $table->integer('n8')->default(0);
            $table->integer('n9')->default(0);
            $table->integer('n10')->default(0);
            $table->integer('n11')->default(0);
            $table->integer('n12')->default(0);
            $table->integer('n13')->default(0);
            $table->integer('n14')->default(0);
            $table->integer('n15')->default(0);
            $table->integer('n16')->default(0);
            $table->integer('n17')->default(0);
            $table->integer('n18')->default(0);
            $table->integer('n19')->default(0);
            $table->integer('n20')->default(0);
            $table->integer('n21')->default(0);
            $table->integer('n22')->default(0);
            $table->integer('n23')->default(0);
            $table->integer('n24')->default(0);
            $table->integer('n25')->default(0);
            $table->integer('n26')->default(0);
            $table->integer('n27')->default(0);
            $table->integer('n28')->default(0);
            $table->integer('n29')->default(0);
            $table->integer('n30')->default(0);
            $table->integer('n31')->default(0);
            $table->integer('n32')->default(0);
            $table->integer('n33')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
}
