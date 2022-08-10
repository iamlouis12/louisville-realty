
<?php 

function divide($x,$y){
    if($y==0){
        throw new exception('cannot divide by zero');
    }
    return $x/$y;
}
// echo divide(5,0);
// echo divide(5,1);
try{
    echo divide(5,0);
} catch (exception $ex){
    echo 'cant divide by zero';
}

?>