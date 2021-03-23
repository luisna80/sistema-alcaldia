<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detallecargo;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
   public function crearWord(){
   	$trabajador= DB::select('select * from detallecargos');
$word = new  \PhpOffice\PhpWord\PhpWord();
$team='luis';
$section1 = $word->AddSection();
$section1->addText("CALIFICACIONES - ".strtoupper($team),array("size"=>22,"bold"=>true,"align"=>"center"));
$styleTable = array('borderSize' => 6, 'borderColor' => '888888', 'cellMargin' => 40);
$styleFirstRow = array('borderBottomColor' => '0000FF', 'bgColor' => 'AAAAAA');

$table1 = $section1->addTable("table1");
$table1->addRow();
$table1->addCell()->addText("Nombre Completo");
foreach ($trabajador as $block) {
$table1->addCell()->addText($block->trabajador_cedula);
}
$section1->addText("");
$section1->addText("");
$section1->addText("");
$section1->addText("Generado por Xoolar Lite v1.0");

$filename = "califications-".time().".html";
#$word->setReadDataOnly(true);
$word->save($filename,"HTML");
//chmod($filename,0444);
header("Content-Disposition: attachment; filename=$filename");
readfile($filename); // or echo file_get_contents($filename);
unlink($filename); 


   }
}
