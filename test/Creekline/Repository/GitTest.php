<?php
namespace Creekline\Repository;

use Packfire\FuelBlade\Container;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-05-10 at 08:56:10.
 */
class GitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Git
     */
    protected $object;
    
    protected $processor;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Git('https://github.com/thephpdeveloper/creekline.git');
        $this->processor = '\\Creekline\\MockProcess';
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Creekline\Repository\Git::__invoke
     */
    public function testInvoke()
    {
        $c = new Container();
        $c['processor'] = $this->processor;
        $c['url'] = 'http://hexhex.dev/example.git';
        $c['branch'] = '2.1.5';
        call_user_func($this->object, $c);
        
        $processor = new \ReflectionProperty(get_class($this->object), 'processor');
        $processor->setAccessible(true);
        $this->assertEquals($this->processor, $processor->getValue($this->object));
        
        $branch = new \ReflectionProperty(get_class($this->object), 'branch');
        $branch->setAccessible(true);
        $this->assertEquals($c['branch'], $branch->getValue($this->object));
        
        $url = new \ReflectionProperty(get_class($this->object), 'url');
        $url->setAccessible(true);
        $this->assertEquals($c['url'], $url->getValue($this->object));
    }

    /**
     * @covers Creekline\Repository\Git::fetch
     */
    public function testFetch()
    {
        $c = new Container();
        $c['branch'] = 'develop';
        $c['processor'] = $this->processor;
        call_user_func($this->object, $c);
        $this->object->fetch();
    }

    /**
     * @covers Creekline\Repository\Git::fetch
     */
    public function testFetch1()
    {
        $c = new Container();
        $c['processor'] = $this->processor;
        call_user_func($this->object, $c);
        $this->object->fetch();
    }

    /**
     * @covers Creekline\Repository\Git::fetch
     * @expectedException \RuntimeException
     */
    public function testFetchFail()
    {
        $c = new Container();
        $c['branch'] = 'FAIL';
        $c['processor'] = $this->processor;
        call_user_func($this->object, $c);
        $this->object->fetch();
    }
    
}
