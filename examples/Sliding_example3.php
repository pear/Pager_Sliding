<?php
// +----------------------------------------------------------------------+
// | PEAR :: Pager_Sliding Example                          |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2003 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Author: Lorenzo Alberton <l.alberton at quipo.it>                    |
// +----------------------------------------------------------------------+

require_once 'Pager/Sliding.php';

$params['totalItems'] = 800;
$pager = &new Pager_Sliding($params);
$data  = $pager->getPageData();
$links = $pager->getLinks();


?>
<html>
<head>
<title>Pager_Sliding examples</title>
<style type="text/css">
<!--
a.myClass {
    color: red;
    font-family: verdana;
    font-size: 10pt;
}
.myClass2 {
    color: #222;
    font-family: verdana;
    font-size: 8pt;
}
// -->
</style>
</head>
<body>
<h1>Pager_Sliding</h1>

<hr />
<span class="myClass2">Author: Lorenzo Alberton  &lt;l.alberton at quipo.it&gt;</span> <br />
go to <a href="SWPager_example1.php">Example1</a> - <a href="SWPager_example2.php">Example2</a> - <a href="SWPager_example4.php">Example4</a> - <a href="../">home</a>
<hr />

<h2>Example 3</h2>

<?php
$month = 'september';
$params = array(
            'append'    => false,
            'urlVar'    => 'num',
            'path'      => 'http://myserver.com/articles/' . $month,
            'fileName'  => 'art%d.html',
            'itemData'   => array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'),
            'perPage'   => 3
            );
$pager = &new Pager_Sliding($params);
$data  = $pager->getPageData();
$links = $pager->getLinks();
?>

<h3>This shows how this Pager can be used with mod_rewrite</h3>
<h5 style="color: red; font-weight: 700;">NB: on this server mod_rewrite is not active, so links won't work, but have a look at the status bar to see how url is written.</h5>
<br />

<pre>
Let's suppose we have a .htaccess like this:
-----------------------------------
RewriteEngine on
#Options FollowSymlinks

RewriteBase /
RewriteRule ^articles/([a-z]{1,12})/art([0-9]{1,4})\.html$ /article.php?num=$2&month=$1 [L]
-----------------------------------

It should transform an url like:
   /articles/march/art15.html
into:
   /article.php?num=15&month=march

</pre>
<br />
<hr />
<pre>
SETTINGS:
$month = 'september';
$params = array(
            'append'    => false,
            'urlVar'    => 'num',
            'path'      => 'http://myserver.com/articles/' . $month,
            'fileName'  => 'art%d.html',  //Pager replaces "%d" with page number...
            'itemData'  => array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'),
            'perPage'   => 3
            );
$pager = &new Pager_Sliding($params);
</pre>
<table border="1" width="500" summary="example 1">
	<tr>
		<td colspan="3" align="center">
			<?php echo $links['all']; ?>
		</td>
	</tr>


	<tr>
		<td colspan="3">
			<pre>PAGED DATA: <?php print_r($data); ?></pre>
		</td>
	</tr>
</table>

<h4>Results from methods:</h4>

<pre>
getCurrentPageID()...: <?php var_dump($pager->getCurrentPageID()); ?>
getNextPageID()......: <?php var_dump($pager->getNextPageID()); ?>
getPreviousPageID()..: <?php var_dump($pager->getPreviousPageID()); ?>
numItems()...........: <?php var_dump($pager->numItems()); ?>
numPages()...........: <?php var_dump($pager->numPages()); ?>
isFirstPage()........: <?php var_dump($pager->isFirstPage()); ?>
isLastPage().........: <?php var_dump($pager->isLastPage()); ?>
isLastPageComplete().: <?php var_dump($pager->isLastPageComplete()); ?>
$pager->range........: <?php var_dump($pager->range); ?>
</pre>

<hr />

</body>
</html>