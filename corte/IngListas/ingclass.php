<?php
class listaCorte{
    public function insert($con,$pn,$tipo_cons,$cons,$tipo,$awg,$color,$tamano,$term1,$sello1,$nota1,$term2,$sello2,$nota2,$est,$from,$to){
        $inser=mysqli_query($con,"INSERT INTO listascorte(pn,tipo_cons,cons,tipo, aws,color,tamano,terminal1,sello1,Nota1,terminal2,sello2,Nota2,conector,dataFrom,dataTo) VALUES ('$pn','$tipo_cons','$cons','$tipo','$awg','$color','$tamano','$term1','$sello1','$nota1','$term2','$sello2','$nota2','$est','$from','$to')");
        
    }
}
class boms{
    public function insert($con,$pn,$item,$qty){
        $inser=mysqli_query($con,"INSERT INTO boms(np,item,qty) VALUES ('$pn','$item','$qty')");
}}
