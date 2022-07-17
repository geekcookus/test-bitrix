<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('highloadblock');
$BarCodeClass = GetEntityDCName('Barcodes');
$ProductsClass = GetEntityDCName('Products');



if($_REQUEST['step']=="one"){
    $id =  intval($_REQUEST['params'][0]);
    $price =  floatval($_REQUEST['params'][1]);
    $array=["status" => 0, "BarCode" => ""];
    if(is_int($id) && is_float($price)){
        $res = $BarCodeClass::GetList(array('filter' => ["ID"=>$id], "select"=>['UF_CODE']));
        if($arRes = $res->Fetch()){
            $array=["status" => 1, "BarCode" => $arRes['UF_CODE']];
            $resProduct = $ProductsClass::GetList(array('filter' => ["UF_BARCODE"=>$id], "select"=>['ID']));
            if($arResProduct = $resProduct->Fetch()){
                $arFields['UF_PRICE']=$price;
                $r=$ProductsClass::update($arResProduct['ID'], $arFields);
            }
        }
    }
    echo json_encode($array);
}elseif($_REQUEST['step']=="two"){
    $input = str_replace("a","@", $_REQUEST['ans'][0])." ".date("d.m.Y");
    $bar =  $_REQUEST['ans'][1];
    if(!empty($bar)){
        $res = $BarCodeClass::GetList(array('filter' => ["UF_CODE"=> $bar ], "select"=>['ID']));
        if($arRes = $res->Fetch()){
            $array=["status" => 1, "BarCode" => $arRes['UF_CODE']];
            $arFields['UF_DESCRIPTION']=$input;
            $BarCodeClass::update($arRes['ID'], $arFields);
        }
    }
    $array=["status" => 1, "BarCode" => $bar, "input" => $input];
    echo json_encode($array);
}

?>