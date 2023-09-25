<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('branch', function (Blueprint $table)
         {
            //$table->increments('id');
            $table->softDeletes();
           // $table->softDeletes($column = 'deleted_at');
          //return $this->where(sprintf('%s.id', $this->getTable(), $this->getKeyName()), '=', $id)
          //->pluck('id');'
        
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('branch', function (Blueprint $table) {
           // $table->increments('id');
            $table->dropsoftdeletes();
        });
    }
}