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
<title>Pager_Sliding example 1</title>
<style type="text/css">
<!--
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
go to <a href="SWPager_example1.php">Example1</a> - <a href="SWPager_example2.php">Example2</a> - <a href="SWPager_example3.php">Example3</a> - <a href="SWPager_example4.php">Example4</a> - <a href="../">home</a>
<hr />

<h2>Example 1</h2>

<pre>
SETTINGS:
$params['totalItems'] = 800;
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
			<pre><?php print_r($data); ?></pre>
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

<pre>
NB:

<b>echo $pager->links</b>

is the same as

<b>$links = $pager->getLinks();
echo $links['all'];
</b>
</pre>

<hr />

</body>
</html>