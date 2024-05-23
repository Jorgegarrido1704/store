<?php
require "conection.php";
require 'vendor/autoload.php'; 
date_default_timezone_set("America/Mexico_City");
$date=date("d-m-Y");
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet = new Spreadsheet();$sheet = $spreadsheet->getActiveSheet();$t=2;
$sheet->setCellValue('A1', 'Date');
$sheet->setCellValue('B1', 'Part Num');
$sheet->setCellValue('C1', 'Client');
$sheet->setCellValue('D1', 'Rev');
$sheet->setCellValue('E1', 'Wo');
$sheet->setCellValue('F1', 'Sono');
$sheet->setCellValue('G1', 'Qty');
$sheet->setCellValue('H1', 'Where');
$sheet->setCellValue('I1', 'paro');
$sheet->setCellValue('J1', 'Test');
$buscarinfo=mysqli_query($con,"SELECT * FROM registro WHERE (count=2 or count=3 ) and donde Like '%%corte'");
$rows=mysqli_num_rows($buscarinfo);
while($row=mysqli_fetch_array($buscarinfo)){
    $fecha= $row['fecha'];
    $parte= $row['NumPart'];
    $Client= $row['cliente'];
    $rev= $row['rev'];
    $wo= $row['wo'];
    $po= $row['po'];
    $Qty= $row['Qty'];
    $where= 'CUTTING';
    $paro= $row['paro'];
    $info=$row['info'];
    $po=$row['po'];
    $busacartest=mysqli_query($con,"SELECT * FROM regsitrocalidad WHERE info='$info'");
    $rowscal=mysqli_num_rows($busacartest);
    $cantidad=mysqli_query($con,"SELECT * FROM po WHERE po='$po'");
    $cantpo=mysqli_fetch_assoc($cantidad);
    $pocant=$cantpo['qty'];

$sheet->setCellValue('A'.$t, $fecha);
$sheet->setCellValue('B'.$t, $parte);
$sheet->setCellValue('C'.$t, $Client);
$sheet->setCellValue('D'.$t, $rev);
$sheet->setCellValue('E'.$t, $wo);
$sheet->setCellValue('F'.$t, $po);
$sheet->setCellValue('G'.$t, $Qty);
$sheet->setCellValue('H'.$t, $where);
$sheet->setCellValue('I'.$t, $paro);
$sheet->setCellValue('J'.$t, $rowscal."/".$pocant);

$t++;}
$buscarinfo=mysqli_query($con,"SELECT * FROM registro WHERE (count=4 or count=5 ) and donde Like '%%liberacion'");
$rows=mysqli_num_rows($buscarinfo);
while($row=mysqli_fetch_array($buscarinfo)){
    $fecha= $row['fecha'];
    $parte= $row['NumPart'];
    $Client= $row['cliente'];
    $rev= $row['rev'];
    $wo= $row['wo'];
    $po= $row['po'];
    $Qty= $row['Qty'];
    $where= 'TERMINALS';
    $paro= $row['paro'];
    $info=$row['info'];
    $po=$row['po'];
    $busacartest=mysqli_query($con,"SELECT * FROM regsitrocalidad WHERE info='$info'");
    $rowscal=mysqli_num_rows($busacartest);
    $cantidad=mysqli_query($con,"SELECT * FROM po WHERE po='$po'");
    $cantpo=mysqli_fetch_assoc($cantidad);
    $pocant=$cantpo['qty'];
    
$sheet->setCellValue('A'.$t, $fecha);
$sheet->setCellValue('B'.$t, $parte);
$sheet->setCellValue('C'.$t, $Client);
$sheet->setCellValue('D'.$t, $rev);
$sheet->setCellValue('E'.$t, $wo);
$sheet->setCellValue('F'.$t, $po);
$sheet->setCellValue('G'.$t, $Qty);
$sheet->setCellValue('H'.$t, $where);
$sheet->setCellValue('I'.$t, $paro);
$sheet->setCellValue('J'.$t, $rowscal."/".$pocant);
$t++;}
$buscarinfo=mysqli_query($con,"SELECT * FROM registro WHERE (count=6 or count=7 ) and donde Like '%%ensamble'");
$rows=mysqli_num_rows($buscarinfo);
while($row=mysqli_fetch_array($buscarinfo)){
    $fecha= $row['fecha'];
    $parte= $row['NumPart'];
    $Client= $row['cliente'];
    $rev= $row['rev'];
    $wo= $row['wo'];
    $po= $row['po'];
    $Qty= $row['Qty'];
    $where= 'ASSEMBLY';
    $paro= $row['paro'];
    $info=$row['info'];
    $po=$row['po'];
    $busacartest=mysqli_query($con,"SELECT * FROM regsitrocalidad WHERE info='$info'");
    $rowscal=mysqli_num_rows($busacartest);
    $cantidad=mysqli_query($con,"SELECT * FROM po WHERE po='$po'");
    $cantpo=mysqli_fetch_assoc($cantidad);
    $pocant=$cantpo['qty'];
    $sheet->setCellValue('A'.$t, $fecha);
$sheet->setCellValue('B'.$t, $parte);
$sheet->setCellValue('C'.$t, $Client);
$sheet->setCellValue('D'.$t, $rev);
$sheet->setCellValue('E'.$t, $wo);
$sheet->setCellValue('F'.$t, $po);
$sheet->setCellValue('G'.$t, $Qty);
$sheet->setCellValue('H'.$t, $where);
$sheet->setCellValue('I'.$t, $paro);
$sheet->setCellValue('J'.$t, $rowscal."/".$pocant);
$t++;}

$rows=mysqli_num_rows($buscarinfo);
while($row=mysqli_fetch_array($buscarinfo)){
    $fecha= $row['fecha'];
    $parte= $row['NumPart'];
    $Client= $row['cliente'];
    $rev= $row['rev'];
    $wo= $row['wo'];
    $po= $row['po'];
    $Qty= $row['Qty'];
    $where= 'LOOMING';
    $paro= $row['paro'];
    $info=$row['info'];
    $po=$row['po'];
    $busacartest=mysqli_query($con,"SELECT * FROM regsitrocalidad WHERE info='$info'");
    $rowscal=mysqli_num_rows($busacartest);
    $cantidad=mysqli_query($con,"SELECT * FROM po WHERE po='$po'");
    $cantpo=mysqli_fetch_assoc($cantidad);
    $pocant=$cantpo['qty'];
    $sheet->setCellValue('A'.$t, $fecha);
$sheet->setCellValue('B'.$t, $parte);
$sheet->setCellValue('C'.$t, $Client);
$sheet->setCellValue('D'.$t, $rev);
$sheet->setCellValue('E'.$t, $wo);
$sheet->setCellValue('F'.$t, $po);
$sheet->setCellValue('G'.$t, $Qty);
$sheet->setCellValue('H'.$t, $where);
$sheet->setCellValue('I'.$t, $paro);
$sheet->setCellValue('J'.$t, $rowscal."/".$pocant);
$t++;}
$buscarinfo=mysqli_query($con,"SELECT * FROM registro WHERE (count=15 ) and donde Like '%%cables%%%'");
$rows=mysqli_num_rows($buscarinfo);
while($row=mysqli_fetch_array($buscarinfo)){
    $fecha= $row['fecha'];
    $parte= $row['NumPart'];
    $Client= $row['cliente'];
    $rev= $row['rev'];
    $wo= $row['wo'];
    $po= $row['po'];
    $Qty= $row['Qty'];
    $where= 'SPECIAL WIRE';
    $paro= $row['paro'];
    $info=$row['info'];
    $po=$row['po'];
    $busacartest=mysqli_query($con,"SELECT * FROM regsitrocalidad WHERE info='$info'");
    $rowscal=mysqli_num_rows($busacartest);
    $cantidad=mysqli_query($con,"SELECT * FROM po WHERE po='$po'");
    $cantpo=mysqli_fetch_assoc($cantidad);
    $pocant=$cantpo['qty'];
    $sheet->setCellValue('A'.$t, $fecha);
$sheet->setCellValue('B'.$t, $parte);
$sheet->setCellValue('C'.$t, $Client);
$sheet->setCellValue('D'.$t, $rev);
$sheet->setCellValue('E'.$t, $wo);
$sheet->setCellValue('F'.$t, $po);
$sheet->setCellValue('G'.$t, $Qty);
$sheet->setCellValue('H'.$t, $where);
$sheet->setCellValue('I'.$t, $paro);
$sheet->setCellValue('J'.$t, $rowscal."/".$pocant);
$t++;}
$buscarinfo=mysqli_query($con,"SELECT * FROM registro WHERE (count=8 or count=9 ) and donde Like '%%loom%%'");
$rows=mysqli_num_rows($buscarinfo);
while($row=mysqli_fetch_array($buscarinfo)){
    $fecha= $row['fecha'];
    $parte= $row['NumPart'];
    $Client= $row['cliente'];
    $rev= $row['rev'];
    $wo= $row['wo'];
    $po= $row['po'];
    $Qty= $row['Qty'];
    $where= 'LOOMING';
    $paro= $row['paro'];
    $info=$row['info'];
    $po=$row['po'];
    $busacartest=mysqli_query($con,"SELECT * FROM regsitrocalidad WHERE info='$info'");
    $rowscal=mysqli_num_rows($busacartest);
    $cantidad=mysqli_query($con,"SELECT * FROM po WHERE po='$po'");
    $cantpo=mysqli_fetch_assoc($cantidad);
    $pocant=$cantpo['qty'];
    $sheet->setCellValue('A'.$t, $fecha);
$sheet->setCellValue('B'.$t, $parte);
$sheet->setCellValue('C'.$t, $Client);
$sheet->setCellValue('D'.$t, $rev);
$sheet->setCellValue('E'.$t, $wo);
$sheet->setCellValue('F'.$t, $po);
$sheet->setCellValue('G'.$t, $Qty);
$sheet->setCellValue('H'.$t, $where);
$sheet->setCellValue('I'.$t, $paro);
$sheet->setCellValue('J'.$t, $rowscal."/".$pocant);
$t++;}
$buscarinfo=mysqli_query($con,"SELECT * FROM registro WHERE (count=11 or count=10 ) and donde Like '%%prueba%%'");
$rows=mysqli_num_rows($buscarinfo);
while($row=mysqli_fetch_array($buscarinfo)){
    $fecha= $row['fecha'];
    $parte= $row['NumPart'];
    $Client= $row['cliente'];
    $rev= $row['rev'];
    $wo= $row['wo'];
    $po= $row['po'];
    $Qty= $row['Qty'];
    $where= 'TESTING';
    $paro= $row['paro'];
    $info=$row['info'];
    $po=$row['po'];
    $busacartest=mysqli_query($con,"SELECT * FROM regsitrocalidad WHERE info='$info'");
    $rowscal=mysqli_num_rows($busacartest);
    $cantidad=mysqli_query($con,"SELECT * FROM po WHERE po='$po'");
    $cantpo=mysqli_fetch_assoc($cantidad);
    $pocant=$cantpo['qty'];
    $sheet->setCellValue('A'.$t, $fecha);
$sheet->setCellValue('B'.$t, $parte);
$sheet->setCellValue('C'.$t, $Client);
$sheet->setCellValue('D'.$t, $rev);
$sheet->setCellValue('E'.$t, $wo);
$sheet->setCellValue('F'.$t, $po);
$sheet->setCellValue('G'.$t, $Qty);
$sheet->setCellValue('H'.$t, $where);
$sheet->setCellValue('I'.$t, $paro);
$sheet->setCellValue('J'.$t, $rowscal."/".$pocant);

$t++;}
$buscarinfo=mysqli_query($con,"SELECT * FROM registro WHERE count=12 and donde Like '%%embarque'");
$rows=mysqli_num_rows($buscarinfo);
while($row=mysqli_fetch_array($buscarinfo)){
    $fecha= $row['fecha'];
    $parte= $row['NumPart'];
    $Client= $row['cliente'];
    $rev= $row['rev'];
    $wo= $row['wo'];
    $po= $row['po'];
    $Qty= $row['Qty'];
    $where= 'SHIPPING';
    $paro= $row['paro'];
    $info=$row['info'];
    $po=$row['po'];
    $busacartest=mysqli_query($con,"SELECT * FROM regsitrocalidad WHERE info='$info'");
    $rowscal=mysqli_num_rows($busacartest);
    $cantidad=mysqli_query($con,"SELECT * FROM po WHERE po='$po'");
    $cantpo=mysqli_fetch_assoc($cantidad);
    $pocant=$cantpo['qty'];
    $sheet->setCellValue('A'.$t, $fecha);
$sheet->setCellValue('B'.$t, $parte);
$sheet->setCellValue('C'.$t, $Client);
$sheet->setCellValue('D'.$t, $rev);
$sheet->setCellValue('E'.$t, $wo);
$sheet->setCellValue('F'.$t, $po);
$sheet->setCellValue('G'.$t, $Qty);
$sheet->setCellValue('H'.$t, $where);
$sheet->setCellValue('I'.$t, $paro);
$sheet->setCellValue('J'.$t, $rowscal."/".$pocant);
$t++;}


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="WO Station '.$date.'.xlsx"');
header('Cache-Control: max-age=0');
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit();


