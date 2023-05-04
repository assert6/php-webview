<?php

require_once '../../vendor/autoload.php';

use PhpWebView\Example\RowContext;
use PhpWebView\WebView;
use PhpWebView\WindowSizeHint;

$webview = new WebView('Php WebView', 480, 320, WindowSizeHint::HINT_NONE, true);

$webview->setHTML('<center> Hello World </center>');

$webview->run();
$webview->destroy();
