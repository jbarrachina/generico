
<?php
    $key = "esta es una palabra secreta";
    $input = "Encontrémonos a las 9 en punto en el escondite.";

    $td = mcrypt_module_open('tripledes', '', 'ecb', '');
    $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    mcrypt_generic_init($td, $key, $iv);
    $encrypted_data = mcrypt_generic($td, $input);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    echo base64_encode($encrypted_data);
?>

