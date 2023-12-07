
<div class="container1">
    <h1>Pagar con tarjeta de forma segura</h1>
    <h2 class="lead">Pagar con tarjeta de forma segura. Redsys y TPV Virtual de caixabank.</h2>
    

    
    <div class="row1">
        <div id="content" class="col-lg-12">


<?php
error_reporting(E_ERROR);
//$resultadoC=$_POST['userID'];
//echo "resultado esperado".$resultadoC;

$error = false;
$amount = false;
$amount =$_GET['variable'];
if (isset($_GET['error']))
    $error = $_GET['error'];

if (isset($_GET['amount']))
    //$amount = $_GET['amount'];
    $amount =$_GET['variable'];
if (isset($_POST['submitPayment'])) {
    
    //$amount = $_POST['amount']; 
    $amount =$_GETt['variable'];
    if (!is_numeric($amount)) {
        header('Location: https://www.jose-aguilar.com/scripts/php/redsys-pago-con-tarjeta/?error=1');
    }
    
    include "api/apiRedsys.php";  
    $miObj = new RedsysAPI;

    //$url_tpv = 'https://sis.redsys.es/sis/realizarPago';
    $url_tpv = 'https://sis-t.redsys.es:25443/sis/realizarPago';
    $version = "HMAC_SHA256_V1"; 
    $clave = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7'; //poner la clave SHA-256
    $name = 'TU NOMBRE'; //cambiar este dato
    $code = 'TU CODIGIO DE COMERCIO'; //cambiar este dato
    $terminal = '1';
    $order = date('ymdHis');
    $amount = $amount * 100;
    $currency = '978';
    $consumerlng = '001';
    $transactionType = '0';
    $urlMerchant = 'https://www.jose-aguilar.com/scripts/php/redsys-pago-con-tarjeta/'; //cambiar este dato
    $urlweb_ok = 'https://www.jose-aguilar.com/scripts/php/redsys-pago-con-tarjeta/tpv_ok.php'; //cambiar este dato
    $urlweb_ko = 'https://www.jose-aguilar.com/scripts/php/redsys-pago-con-tarjeta/tpv_ko.php'; //cambiar este dato

    $miObj->setParameter("DS_MERCHANT_AMOUNT", $amount);
    $miObj->setParameter("DS_MERCHANT_CURRENCY", $currency);
    $miObj->setParameter("DS_MERCHANT_ORDER", $order);
    $miObj->setParameter("DS_MERCHANT_MERCHANTCODE", $code);
    $miObj->setParameter("DS_MERCHANT_TERMINAL", $terminal);
    $miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE", $transactionType);
    $miObj->setParameter("DS_MERCHANT_MERCHANTURL", $urlMerchant);
    $miObj->setParameter("DS_MERCHANT_URLOK", $urlweb_ok);      
    $miObj->setParameter("DS_MERCHANT_URLKO", $urlweb_ko);
    $miObj->setParameter("DS_MERCHANT_MERCHANTNAME", $name); 
    $miObj->setParameter("DS_MERCHANT_CONSUMERLANGUAGE", $consumerlng);    

    $params = $miObj->createMerchantParameters();
    $signature = $miObj->createMerchantSignature($clave);
    ?>
    <form id="realizarPago" action="<?php echo $url_tpv; ?>" method="post">
        <input type='hidden' name='Ds_SignatureVersion' value='<?php echo $version; ?>'> 
        <input type='hidden' name='Ds_MerchantParameters' value='<?php echo $params; ?>'> 
        <input type='hidden' name='Ds_Signature' value='<?php echo $signature; ?>'> 
    </form>
    <p>Un momento por favor...</p>
    <script>
    $(document).ready(function () {
        $("#realizarPago").submit();
    });
    </script>
<?php
}
else {   
?>
<div class="jumbotron1">
    <h3>Formulario de pago</h3>
    <form class="form-amount" action="index.php" method="post">
        <?php if ($error) { ?><div class="alert alert-danger">El valor introducido no es correcto. Debe introducir por ejemplo: 50.99</div><?php } ?>
        <div class="form-group">
            <label for="amount">Importe</label>
            <input type="text" id="amount" name="amount" class="form-control"<?php if ($amount) { ?> value="<?php echo $amount; ?>"<?php }else{ ?> placeholder="Por ejemplo: 50.00"<?php } ?>>
        </div>
        <input class="btn btn-lg btn-primary btn-block" name="submitPayment" type="submit" value="Pagar">
    </form> 
</div>    
<?php
}
?>
        </div>
    </div>
    
    <div class="row1">
        <div class="col-lg-12">
            <img class="img-responsive" src="https://www.jose-aguilar.com/scripts/php/redsys-pago-con-tarjeta/images/redsys-caixabank.png" alt="Redsys vs CaixaBank"><br/>
        </div>
    </div>
    
    <div class="row1">
        <div class="col-lg-12">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Bloque de anuncios adaptable -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-6676636635558550"
                 data-ad-slot="8523024962"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    



