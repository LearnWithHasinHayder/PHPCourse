<?php
//Strategy

interface PasswordHashInterface {
	function hash( $data );
}

class MD5HashEngine implements PasswordHashInterface {
	function hash( $data ) {
		return md5( $data );
	}
}

class SHA1HashEngine implements PasswordHashInterface {
	function hash( $data ) {
		return sha1( $data );
	}
}

class NativeHashEngine implements PasswordHashInterface {
	function hash( $data ) {
		return password_hash( $data, PASSWORD_BCRYPT );
	}
}

class PasswordHasher {
	private $hashingEngine;

	function __construct( PasswordHashInterface $hashingEngine = null) {
		if($hashingEngine){
			$this->hashingEngine = $hashingEngine;
		}
	}

	function getHash( $data ) {
		return $this->hashingEngine->hash($data);
	}

	function setHashEngine( PasswordHashInterface $hashingEngine){
		$this->hashingEngine = $hashingEngine;
	}
}

$md5he = new MD5HashEngine();
$sha1he = new SHA1HashEngine();
$nhe = new NativeHashEngine();

$password = "SomePassword";
$ph = new PasswordHasher($md5he);
$ph2 = new PasswordHasher($nhe);

echo $ph->getHash($password);
echo "\n";
$ph->setHashEngine($sha1he);
echo $ph->getHash($password);
echo "\n";
echo $ph2->getHash($password);
echo "\n";