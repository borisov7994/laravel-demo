<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('puth_img');
            $table->string('date');
            $table->integer('price');
            $table->timestamps();
        });
        DB::table('tours')->insert([
            [   'title'=>'Таганай. Поход на Двуглавую сопку', 
                'puth_img'=>'img/tour1.jpg', 
                'date'=>'29.07.2024', 
                'price'=>'1950' ],
            ['title'=>'Аракульский Шихан+ озеро Аракуль', 'puth_img'=>'./img/tour2.jpg', 'date'=>'19.08.2024', 'price'=>'2200'],
            ['title'=>'"Холзан" - питомник хищных птиц (г.Сысерть)', 'puth_img'=>'./img/tour3.jpg', 'date'=>'09.08.2024', 'price'=>'2100'],
            ['title'=>'Обзорная экскурсия по Челябинску', 'puth_img'=>'./img/tour4.jpg', 'date'=>'01.07.2024', 'price'=>'650'],
            ['title'=>'Стеклянная сказка. В гости к стеклодувам!', 'puth_img'=>'./img/tour5.jpg', 'date'=>'07.08.2024', 'price'=>'3000'],
            ['title'=>'Купеческий Троицк', 'puth_img'=>'./img/tour6.jpg', 'date'=>'02.08.2024', 'price'=>'1900'],
            ['title'=>'Обзорная экскурсия по Екатеринбургу', 'puth_img'=>'./img/tour7.jpg', 'date'=>'15.07.2024', 'price'=>'2600'],
        ] );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
