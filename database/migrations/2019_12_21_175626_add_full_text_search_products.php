<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFullTextSearchProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
       Schema::table('products', function (Blueprint $table) {
           DB::statement('ALTER TABLE products ADD FULLTEXT `name` (`name`)'); //đánh index cho cột name
           DB::statement('ALTER TABLE products ENGINE = MyISAM'); // đánh index theo kiểu MyISam ngoài ra còn có kiểu InnoDB nếu không có dòng này cũng được mysql sẽ mặc định là index kiểu MyISAM nhé
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::table('products', function (Blueprint $table) {
           DB::statement('ALTER TABLE products DROP INDEX name'); // khi chạy lệnh rollback thì làm điều ngược lại với thằng trên thế thôi
       });
   }
}
