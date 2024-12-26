<?php # Auto generated "First-Run" file by Coresky framework

function index() {
    $fp = fopen(__FILE__, 'r');
    fseek($fp, __COMPILER_HALT_OFFSET__);
    $code = stream_get_contents($fp);
    fclose($fp);
    return ltrim($code);
}

$ary = ['ctype', 'fileinfo', 'filter', 'gd', 'intl', 'mbstring', 'sqlite3', 'tokenizer'];
$anyway = $_GET && 'anw' == key($_GET) ? $_GET['anw'] : false;
$tests = [
    function () use ($anyway) {
        return [
            'PHP version >= 7.0',
            $anyway ? true : version_compare(PHP_VERSION, '7.0', '>='),
            $anyway ? 'Skipped' : false,
        ];
    },
    function () use ($ary, $anyway) {
        $ext = array_intersect($ary, get_loaded_extensions());
        return [
            $ext ? 'Extensions: <b>' . implode('</b>, <b>', $ext) . '</b>' : false,
            true, false,
        ];
    },
    function () use ($ary, $anyway) {
        $ext = array_diff($ary, get_loaded_extensions());
        return [
            $ext ? 'Extensions not found: <b>' . implode('</b>, <b>', $ext) . '</b>' : false,
            (bool)$anyway,
            $anyway ? 'Skipped' : false,
        ];
    },
    function ($ok) {
if (!$ok)
    return false;
if ($_POST)
    file_put_contents('../.env', "APP_DEV true\nAPP_TZ " . $_POST['tz']);
return ['Select timezone: <select onchange="tzset(this)"></select> <select name="tz"></select>
<script>
let tz = JSON.parse(\'{"Africa":["Abidjan","Accra","Addis_Ababa","Algiers","Asmara","Bamako","Bangui","Banjul","Bissau","Blantyre","Brazzaville","Bujumbura","Cairo","Ceuta","Conakry","Dakar","Dar_es_Salaam","Djibouti","Douala","Freetown","Gaborone","Harare","Johannesburg","Juba","Kampala","Khartoum","Kigali","Kinshasa","Lagos","Libreville","Lome","Luanda","Lubumbashi","Lusaka","Malabo","Maputo","Maseru","Mbabane","Mogadishu","Monrovia","Nairobi","Ndjamena","Niamey","Nouakchott","Ouagadougou","Porto-Novo","Sao_Tome","Tripoli","Tunis","Windhoek"],"America":["Adak","Anchorage","Anguilla","Antigua","Argentina\\/Buenos_Aires","Argentina\\/Catamarca","Argentina\\/Cordoba","Argentina\\/Jujuy","Argentina\\/La_Rioja","Argentina\\/Mendoza","Argentina\\/Rio_Gallegos","Argentina\\/Salta","Argentina\\/San_Juan","Argentina\\/San_Luis","Argentina\\/Tucuman","Argentina\\/Ushuaia","Aruba","Asuncion","Atikokan","Bahia_Banderas","Barbados","Belize","Blanc-Sablon","Bogota","Boise","Cambridge_Bay","Cancun","Caracas","Cayman","Chicago","Chihuahua","Costa_Rica","Creston","Curacao","Danmarkshavn","Dawson","Dawson_Creek","Denver","Detroit","Dominica","Edmonton","El_Salvador","Fort_Nelson","Glace_Bay","Goose_Bay","Grand_Turk","Grenada","Guadeloupe","Guatemala","Guayaquil","Halifax","Havana","Hermosillo","Indiana\\/Indianapolis","Indiana\\/Knox","Indiana\\/Marengo","Indiana\\/Petersburg","Indiana\\/Tell_City","Indiana\\/Vevay","Indiana\\/Vincennes","Indiana\\/Winamac","Inuvik","Iqaluit","Jamaica","Juneau","Kentucky\\/Louisville","Kentucky\\/Monticello","Kralendijk","La_Paz","Los_Angeles","Lower_Princes","Managua","Marigot","Martinique","Matamoros","Mazatlan","Menominee","Merida","Metlakatla","Mexico_City","Miquelon","Moncton","Monterrey","Montevideo","Montserrat","Nassau","New_York","Nipigon","Nome","North_Dakota\\/Beulah","North_Dakota\\/Center","North_Dakota\\/New_Salem","Ojinaga","Panama","Pangnirtung","Paramaribo","Phoenix","Port-au-Prince","Port_of_Spain","Puerto_Rico","Punta_Arenas","Rainy_River","Rankin_Inlet","Regina","Resolute","Santiago","Santo_Domingo","Sitka","St_Barthelemy","St_Johns","St_Kitts","St_Lucia","St_Thomas","St_Vincent","Swift_Current","Tegucigalpa","Thule","Thunder_Bay","Tijuana","Toronto","Tortola","Vancouver","Whitehorse","Winnipeg","Yakutat","Yellowknife"],"Antarctica":["Macquarie","McMurdo"],"Arctic":["Longyearbyen"],"Asia":["Amman","Baghdad","Bangkok","Beirut","Colombo","Damascus","Dhaka","Famagusta","Gaza","Hebron","Ho_Chi_Minh","Hong_Kong","Irkutsk","Jakarta","Jayapura","Jerusalem","Karachi","Kolkata","Kuala_Lumpur","Macau","Makassar","Manila","Nicosia","Phnom_Penh","Pontianak","Pyongyang","Seoul","Shanghai","Singapore","Taipei","Tbilisi","Tehran","Tokyo","Vientiane","Yangon","Yekaterinburg"],"Atlantic":["Azores","Bermuda","Canary","Faroe","Madeira","Reykjavik","St_Helena","Stanley"],"Australia":["Adelaide","Brisbane","Broken_Hill","Darwin","Hobart","Lindeman","Lord_Howe","Melbourne","Perth","Sydney"],"Europe":["Amsterdam","Andorra","Athens","Belgrade","Berlin","Bratislava","Brussels","Bucharest","Budapest","Busingen","Chisinau","Copenhagen","Dublin","Gibraltar","Guernsey","Helsinki","Isle_of_Man","Istanbul","Jersey","Kaliningrad","Kiev","Lisbon","Ljubljana","London","Luxembourg","Madrid","Malta","Mariehamn","Minsk","Monaco","Moscow","Oslo","Paris","Podgorica","Prague","Riga","Rome","San_Marino","Sarajevo","Simferopol","Skopje","Sofia","Stockholm","Tallinn","Tirane","Uzhgorod","Vaduz","Vatican","Vienna","Vilnius","Warsaw","Zagreb","Zaporozhye","Zurich"],"Indian":["Antananarivo","Comoro","Maldives","Mayotte"],"Pacific":["Auckland","Easter","Guam","Honolulu","Midway","Pago_Pago","Saipan"]}\');
let st = document.querySelectorAll("select");
function tzset(el,x) {
  let s0 = "<option>**Region</option>",
    s1 = "<option>UTC</option>";
  if(x) { Object.keys(tz).forEach(function (name) {
    s0 += "<option>" + name + "</option>";
  }); st[0].innerHTML = s0; }
  st[1].innerHTML = s1;
  if(x) return;
  for (var i in tz[el.value]) {
    s1 += "<option>" + el.value + "/" + tz[el.value][i] + "</option>";
  }
  st[1].innerHTML = s1;
}
tzset(st[0],1)
</script>
', (bool)$_POST, '<input type="submit" value="select">'];
    },
];
$path = preg_replace("|[^/]*$|", '', $_SERVER['SCRIPT_NAME']);
$uri = $_SERVER['REQUEST_URI'];
$ok = 1;
$list = [];
foreach ($tests as $fun) {
    $fun = $fun($ok);
    if ($fun && $fun[0]) {
        $list[] = $fun;
        $ok &= (int)$fun[1];
    }
}
if ($ok) {
    file_put_contents(__FILE__, index());
    header("Location: " . ($anyway ?: $uri));
    exit;
}
?><!doctype html>
<html>
<head><title>ἄλφα.0.5145.HOLE.SKY. application First-Run</title>
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
    <form method="post">
    <?php foreach ($list as $v): ?>
    <dl>
        <dt><?php echo $v[0] ?></dt>
        <?php if($v[2]): ?>
        <dd><?php echo $v[2] ?></dd>
        <?php else: ?>
        <dd class="<?php echo $v[1] ? 'ok' : 'fail' ?>"><?php echo $v[1] ? 'OK' : 'FAIL' ?></dd>
        <?php endif ?>
    </dl>
    <?php endforeach; ?>
    </form>
    <?php if (!$v[2]): ?>
    <div style="background:#ffc; margin:20px 0; padding:10px; border: 1px solid gold;">
        Please fix problem & test again
    </div>
    <button style="float:right" onclick="location.href='<?php echo "$path?anw=" . urlencode($uri) ?>'">Run app anyway</button>
    Problem fixed: <button onclick="location.href='<?php echo $uri ?>'">Test again</button><?php endif ?>
</div>
<div id="foo">ἄλφα.0.5145.HOLE.SKY. powered by 0.573.<a href="https://coresky.net/">Coresky</a> framework</div>
</body>
</html><?php

__halt_compiler();
<?php

define('START_TS', microtime(true));
require __DIR__ . '/../bootstrap.php';
new HEAVEN;
