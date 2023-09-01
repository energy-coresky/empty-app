<?php # Auto generated "First-Run" file by Coresky framework

function index(&$unlink = null) {
    $fp = fopen(__FILE__, 'r');
    fseek($fp, __COMPILER_HALT_OFFSET__);
    $code = stream_get_contents($fp);
    fclose($fp);
    if ($unlink)
        $unlink = @unlink(__FILE__);
    return ltrim($code);
}

$ary = array (
  0 => 'ctype',
  1 => 'tokenizer',
  2 => 'intl',
  3 => 'mbstring',
  4 => 'sqlite3',
);
$tests = [
    function () {
        return [
            'PHP version >= 7.0',
            version_compare(PHP_VERSION, '7.0', '>='),
        ];
    },
    function () use ($ary) {
        $ext = array_intersect($ary, get_loaded_extensions());
        return [
            $ext ? 'Extensions: ' . implode(', ', $ext) : false,
            true,
        ];
    },
    function () use ($ary) {
        $ext = array_diff($ary, get_loaded_extensions());
        return [
            $ext ? 'Extensions: ' . implode(', ', $ext) : false,
            false,
        ];
    },
    function ($ok) {
        return ['This is a trivial test. Hit "Run app anyway" if all other OK', false];
    },
];
$path = preg_replace("|[^/]*$|", '', $_SERVER['SCRIPT_NAME']);
$uri = $_SERVER['REQUEST_URI'];
$ok = 1;
$list = [];
foreach ($tests as $fun) {
    $fun = $fun($ok);
    if ($fun[0]) {
        $list[] = $fun;
        $ok &= (int)$fun[1];
    }
}
$anw = $_GET && 'anw' == key($_GET) ? $_GET['anw'] : false;
if ($ok || $anw) {
    file_put_contents(__FILE__, index());
    header("Location: " . ($anw ?: $uri));
    exit;
}
?><!doctype html>
<html>
<head><title>βῆτα.0.498.HOLE.SKY. application First-Run</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<style>
#page {
    margin:8px auto 0 auto; width:600px; padding:5px 100px; border-bottom:2px solid lightblue; min-height:calc(100vh - 55px);
    background:white; font-family:arial, verdana; font-size: 90%;
}
#foo { margin:0 auto; width:790px; font-size:14px; padding:5px; background:white; text-align:center; }
a, h1 { color: #3d7098; }
h1 { font-size: 25px; margin-top:30px; border-bottom:4px solid #3d7098; }
a:hover { text-decoration: none; color: white; background-color: #3d7098; }
dl { width: 100%; margin:0; display:flex; border-bottom: 1px solid #ccc; }
dt { width: 80%; margin:0; padding: 5px 0; }
dd { width: 20%; margin:0; padding: 5px; }
.fail { background:#fcc; } .ok { background:#cfc; }
</style>
</head>
<body style="margin:0; display:inline-block; width:100%; background:lightblue;">
<div id="page">
    <h1>HOLE.SKY. application First-Run</h1>
    <?php foreach ($list as $v): ?>
    <dl>
        <dt><?php echo $v[0] ?></dt>
        <dd class="<?php echo $v[1] ? 'ok' : 'fail' ?>"><?php echo $v[1] ? 'OK' : 'FAIL' ?></dd>
    </dl>
    <?php endforeach ?>
    <div style="background:#ffc; margin:20px 0; padding:10px; border: 1px solid gold;">
        Please fix problem & test again
    </div>
    <button style="float:right" onclick="location.href='<?php echo "$path?anw=" . urlencode($uri) ?>'">Run app anyway</button>
    Problem fixed: <button onclick="location.href='<?php echo $uri ?>'">Test again</button>
</div>
<div id="foo">βῆτα.0.498.HOLE.SKY. powered by 0.497.<a href="https://coresky.net/">Coresky</a> framework</div>
</body>
</html><?php

__halt_compiler();
<?php

define('WWW', basename(__DIR__) . '/');
define('DIR', dirname(__DIR__));
chdir(DIR);
require 'main/conf.php';
new HEAVEN;
