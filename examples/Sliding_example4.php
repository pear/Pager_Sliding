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
go to <a href="SWPager_example1.php">Example1</a> - <a href="SWPager_example2.php">Example2</a> - <a href="SWPager_example3.php">Example3</a> - <a href="../">home</a>
<hr />

<h2>Example 4</h2>

<?php
$params = array(
            'perPage'    => 3,
            'delta'      => 2,
            'expanded'   => true,
            'itemData'   => array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z')
            );
$pager = &new Pager_Sliding($params);
$data  = $pager->getPageData();
$links = $pager->getLinks();
?>


<pre>
SETTINGS:
$params = array(
            'perPage'    => 3,
            'delta'      => 2,
            'expanded'   => true,
            'itemData'   => array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z')
            );
$pager = &new Pager_Sliding($params);
</pre>

<hr />

<b>Have a look at "expanded" mode:</b> Window width is always 2*$delta+1


<br /> <br />

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