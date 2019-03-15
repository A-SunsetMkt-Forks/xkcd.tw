<?php

spamBlock();

include __DIR__ . '/../vendor/autoload.php';

date_default_timezone_set('Asia/Taipei');
header('Content-Type: text/html; Charset=utf-8');

$twig = new \Twig_Environment(new \Twig_Loader_Filesystem(__DIR__ . '/../view'));

$og = [
];

$strips = include __DIR__ . '/../src/data/strips.php';
$imageMap = include __DIR__ . '/../build/image_map.php';
foreach ($strips as $id => $strip) {
    $strips[$id]['id'] = $id;
    $strips[$id]['img_url'] = @$strips[$id]['img_url'] ?: "/strip/{$imageMap[$id]}";
}

$path = $_SERVER['REQUEST_URI'] ?? '/';
$path = explode('?', $path)[0];

include __DIR__ . '/../src/' . route($path);
exit;

////////////////////////////////////////////////////////////////

function route($path)
{
    return staticRoute($path) ?: dynamicRoute($path) ?: 'error404.php';
}


function staticRoute($path)
{
    $map = [
        '/'                     => 'index.php',
        '/recommand'            => 'recommand.php',
        '/feed'                 => 'feed.php',
        '/sitemap.xml'          => 'sitemap.php',
        '/404'                  => 'xkcd404.php',
        '/404/'                 => 'xkcd404.php',
        '/api/list_recommand'   => 'api_list_recommand.php',
        '/api/list_recommand/'  => 'api_list_recommand.php',
        '/api/strip'            => 'api_strip.php',
    ];

    return $map[$path] ?? false;
}

function dynamicRoute($path)
{
    $pathParts = preg_split('/[0-9]+/',$path, 2);
    $prefix = $pathParts[0];
    $postfix = $pathParts[1] ?? '';

    if ($postfix !== '/' && $postfix !== '') {
        return false;
    }

    $map = [
        '/'                     => 'strip.php',
        '/api/strip/original/'  => 'api_strip_original.php',
        '/api/recommand/'       => 'api_recommand.php',
    ];

    return $map[$prefix] ?? false;
}

////////////////////////////////////////////////////////////////

function die404($msg = "找不到這一頁，真傷心")
{
    global $twig; // i hate global...

    http_response_code(404);
    echo $twig->render('error_404.twig', [
       'page_title' => '網頁找不到（哭',
       'msg' => $msg,
    ]);
    die();
}

function spamBlock()
{
    if (!isset($_SERVER['HTTP_REFERER'])) {
        return;
    }

    $referer = $_SERVER['HTTP_REFERER'];

    if (false !== strpos($referer, '-seo-') || false !== strpos($referer, '-seo.')) {
        http_response_code(404);
        echo '404';
        exit;
    }
}
