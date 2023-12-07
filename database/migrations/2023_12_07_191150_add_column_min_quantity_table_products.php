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
        /*
        Para fazer a alteração em uma tabela que já existe, é necessário fazer:
        Criar o schema da tabela em uma nova migration.
        Criar a função Schema::table e inserir os dados normalmente como se fosse uma nova migration normal
        escolher com o after(); o local da coluna

        a nomenclatura seria o basicamente o comando sql
        "php artisan make:migration add_column_min_quantity_table_products"
        
        dar o dropcolumn nessa mesma coluna que está criando no down()

        Dessa forma é criado um "versionamento" do banco de dados, onde é possível dar rollback utilizando as migrations sem afetar os dados
        */
        Schema::table('products', function (Blueprint $table) {
            $table->integer('min_quantity')
                ->default(0)
                ->after('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Fazer a exclusão da coluna
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('min_quantity');
        });
    }
};
