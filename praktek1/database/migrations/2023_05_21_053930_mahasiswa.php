<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*/
public function up(): void
{
Schema::create('mahasiswa', function (Blueprint $table) {
$table->string('nim')->primary();
$table->string('nama');
$table->int('umur');
$table->string('alamat');
$table->string('kota');
$table->string('kelas');
$table->string('jurusan');
$table->datetime('created_at');
$table->datetime('updated_at');
});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::drop('mahasiswa');
}
};
