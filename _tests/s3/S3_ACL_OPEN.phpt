--TEST--
AmazonS3::S3_ACL_OPEN - Return value test

--FILE--
<?php
	require_once dirname(__FILE__) . '/../../tarzan.class.php';
	$s3 = new AmazonS3();
	echo S3_ACL_OPEN;
?>

--EXPECT--
public-read-write
