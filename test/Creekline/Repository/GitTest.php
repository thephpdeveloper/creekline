<?php
namespace Creekline\Repository;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-05-10 at 08:56:10.
 */
class GitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Git
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Git('https://github.com/thephpdeveloper/creekline.git');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Creekline\Repository\Git::fetch
     */
    public function testFetch()
    {
        
    }
}
