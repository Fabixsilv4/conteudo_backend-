<?php
    $produto1 = ["nome" => "Cãmera",
                "marca" => "LG",
                "preco" => 2500];
                
    
     $produto2 = ["nome" => "notebook",
                "marca" => "dell",
                "preco" => 7500];

    $produto3 = ["nome" => "smartphone",
                "marca" => "Sansung",
                "preco" => 3500] ;
            
//matriz
$produtos = [
    $produto1, 
    $produto2, 
    $produto3] ;

echo json_encode($produtos);