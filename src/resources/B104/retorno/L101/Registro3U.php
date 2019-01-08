<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace CnabPHP\resources\B104\retorno\L101;
use CnabPHP\resources\generico\retorno\L040\Generico3;
//use CnabPHP\RetornoAbstract;
use CnabPHP\Exception;

class Registro3U extends Generico3
{
	protected $meta = array(
		'codigo_banco'=>array(          // 01.3U
			'tamanho'=>3,
			'default'=>'104',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(           // 02.3U
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(         // 03.3U
			'tamanho'=>1,
			'default'=>3,
			'tipo'=>'int',
			'required'=>true),
		'numero_registro'=>array(       // 04.3U
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'seguimento'=>array(            // 05.3U
			'tamanho'=>1,
			'default'=>'U',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1'=>array(               // 06.3U
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_movimento'=>array(      // 07.3U
			'tamanho'=>2,
			'default'=>'',
			'tipo'=>'int',
			'required'=>true),
			
			// - ------------------ até aqui é igual para todo registro tipo 3

        'capital_social_empresa'=>array(        //08.3U
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'capital_social_estabelecimento'=>array(        //09.3U
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'numero_empregados_contribuintes'=>array(      //10.3U
            'tamanho'=>9,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'total_remuneracao_contribuintes'=>array(        //11.3U
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'total_empregados_estabelecimento'=>array(      //12.3U
            'tamanho'=>9,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'codigo_atividade_contribuinte'=>array(      //13.3U
            'tamanho'=>5,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'tipo_entidade_sindical'=>array(      //14.3U
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'codigo_entidade_sindical'=>array(      //15.3U
            'tamanho'=>5,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'tipo_arrecadacao'=>array(      //16.3U
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
		'vlr_pago'=>array(               //17.3U
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'vlr_liquido'=>array(      //18.3U
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
        'vlr_juros_multa'=>array(               // 19.3U
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
		'vlr_outros_creditos'=>array(   //20.3U
			'tamanho'=>13,
			'default'=>'',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'data_ocorrencia'=>array(      //21.3U
			'tamanho'=>8,
			'default'=>'',
			'tipo'=>'date',
			'required'=>true),
		'data_credito'=>array(        //22.3U
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'date',
			'required'=>true),
		'filler2'=>array(          // 23.3U
			'tamanho'=>4,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'data_debito_tarifa'=>array(        //24.3U
			'tamanho'=>8,
			'default'=>' ',
			'tipo'=>'date',
			'required'=>true),
		'codigo_pagador_no_banco'=>array(            //25.3U
			'tamanho'=>15,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'filler3'=>array(               //26.3U
			'tamanho'=>30,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
        'filler4'=>array(               //27.3U
            'tamanho'=>21,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
	);
}

?>
