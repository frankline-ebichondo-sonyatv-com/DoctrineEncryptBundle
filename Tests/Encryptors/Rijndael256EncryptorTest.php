<?php

namespace Ambta\DoctrineEncryptBundle\Tests\Encryptors;

use Ambta\DoctrineEncryptBundle\Encryptors\Rijndael256Encryptor;

class Rijndael256EncryptorTest extends \PHPUnit_Framework_TestCase 
{

    
    protected $encryptor = null;

    public function setUp() 
    {
        $this->encryptor = new Rijndael256Encryptor('thisistheawesomepass');
    }
    
    public function testEncrypt() 
    {
        $this->assertEquals('qy73STUyGolzwIYriyiBnMwq3VxynCgYks/GXt9Nt1E=<ENC>', $this->encryptor->encrypt('partylikeits1999'));
    }

    public function testDecrypt()
    {
        $this->assertEquals('mychinnychinchin', $this->encryptor->decrypt('q8ZEhpojNROK8X9jnqb+EEj4F2spJyPu4mhVqy2rz9U=<ENC>'));
    }
}
