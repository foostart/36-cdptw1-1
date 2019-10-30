<?php

$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
    require_once($dir_block.'/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/1383.less', 'css/1383.css');

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>module 1383</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-2.1.4.min.js"></script>              
    <script src="./js/bootstrap.min.js"></script>
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet"  />
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo $url_path ?>/css/1383.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" ></script>
    <script src="<?php echo $url_path ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo $url_path ?>/js/1383.js"></script>
</head>

<body>   
    <?php  include'./1383-content.php'; ?>
</body>
</html>