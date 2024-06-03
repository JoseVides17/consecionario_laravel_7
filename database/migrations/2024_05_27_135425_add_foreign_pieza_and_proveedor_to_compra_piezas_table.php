<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignPiezaAndProveedorToCompraPiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compra_piezas', function (Blueprint $table) {
            $table->foreignId('pieza_id')->after('id')->constrained('piezas')->onDelete('cascade');
            $table->foreignId('proveedor_id')->after('pieza_id')->constrained('proveedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compra_piezas', function (Blueprint $table) {
            $table->dropForeign('pieza_id');
            $table->dropForeign('proveedor_id');
        });
    }
}
