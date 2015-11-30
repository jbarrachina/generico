
<?php
    $key = "esta es una palabra secreta";
    $input = "cWGAeGoaB3jOcR32U25xQWg5yJAgYofQJYlwr2gkPDjB/ONV1+2ZGOM5hFUqhAJs";

    $td = mcrypt_module_open('tripledes', '', 'ecb', '');
    $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    mcrypt_generic_init($td, $key, $iv);
    $encrypted_data = trim(mdecrypt_generic($td, base64_decode($input)));
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    echo $encrypted_data;
?>

