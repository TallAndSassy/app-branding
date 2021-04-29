@php

$loader = require(__DIR__.'/../../../vendor/autoload.php');//https://stackoverflow.com/questions/48853306/how-to-get-the-file-path-where-a-class-would-be-loaded-from-while-using-a-compos
$loggerPath = $loader->findFile(\TallAndSassy\AppBranding\AppBranding::class);
$realLoggerPath = realpath($loggerPath);
$dirPath = dirname($realLoggerPath);
$packageDirPath =  dirname($dirPath);

$md = file_get_contents($packageDirPath.'/README.md');
$html =  \Illuminate\Mail\Markdown::parse($md);

@endphp
{!! $html !!}



