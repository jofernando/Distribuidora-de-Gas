<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Pessoa
{
    use hasFactory;

    protected $fillable = [
        'tipo', 'telefone'
    ];

    public static $rules = [
        'tipo' => 'required',
        'telefone' => 'required',
    ];
    public function vendas()
    {
        return $this->hasMany('App\Models\Venda');
    }

    public function pessoa()
    {
        return $this->belongsTo('App\Models\Pessoa');
    }
}
