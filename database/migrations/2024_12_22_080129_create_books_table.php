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
            $table->id(); // Tự động tạo cột ID (primary key)
            $table->string('name'); // Tên sách
            $table->string('author'); // Tác giả
            $table->string('category'); // Thể loại
            $table->year('year'); // Năm xuất bản
            $table->integer('quantity'); // Số lượng sách
            $table->timestamps(); // Tự động tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
