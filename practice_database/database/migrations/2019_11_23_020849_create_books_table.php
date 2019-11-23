<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('book_name', 255)->comment('本の名前');
            $table->string('author', 100)->index('index_author')->comment('作者・筆者');
            $table->integer('price')->comment('価格');
            $table->integer('stocks')->index('index_stocks')->comment('在庫数');
            $table->timestamp('release_dt')->comment('発売日');
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
        Schema::dropIfExists('books');
    }
}
