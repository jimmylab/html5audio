<?php
//Turn of Apache output compression
// Necessary if you have gzip setup in your httpd.conf (e.g. LoadModule deflate_module modules/mod_deflate.so)
apache_setenv('no-gzip', 1);
ini_set('zlib.output_compression', 0);

//Disable all PHP output buffering
ini_set('output_buffering', 'Off');
ini_set('implicit_flush', 1);
//ob_implicit_flush(1);
//ob_flush();
?>