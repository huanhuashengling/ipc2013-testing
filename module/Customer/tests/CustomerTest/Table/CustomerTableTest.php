<?php
/**
 * Unit-Testing einer Zend Framework 2 Anwendung
 *
 * Zend Framework Session auf der International PHP Conference 2013 in München
 *
 * @package    CustomerTest
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Ralf Eggert <r.eggert@travello.de>
 * @link       http://www.ralfeggert.de/
 */

/**
 * namespace definition and usage
 */
namespace CustomerTest\Table;

use Customer\Entity\CustomerEntity;
use Customer\Hydrator\CustomerHydrator;
use PHPUnit_Framework_TestCase;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;


/**
 * ModuleTest
 *
 * Tests the Module class of the Customer Module
 *
 * @package    CustomerTest
 */
class CustomerTableTest extends PHPUnit_Framework_TestCase
{
    public function testTableFileExistsAndIsInstantiable()
    {
        $mockDbDriver  = $this->getMock('Zend\Db\Adapter\Driver\DriverInterface');
        $mockDbAdapter = $this->getMock('Zend\Db\Adapter\Adapter', null, array($mockDbDriver));

        $className = 'Customer\Table\CustomerTable';

        $this->assertTrue(class_exists($className));

        $customerTable = new $className($mockDbAdapter);

        $this->assertInstanceOf($className, $customerTable);
        $this->assertTrue($customerTable instanceof TableGateway);
    }

    public function testTableName()
    {
        $mockDbDriver  = $this->getMock('Zend\Db\Adapter\Driver\DriverInterface');
        $mockDbAdapter = $this->getMock('Zend\Db\Adapter\Adapter', null, array($mockDbDriver));

        $customerTable = new \Customer\Table\CustomerTable($mockDbAdapter);

        $this->assertEquals('customers', $customerTable->getTable());
    }

    public function testResultSetPrototype()
    {
        $mockDbDriver  = $this->getMock('Zend\Db\Adapter\Driver\DriverInterface');
        $mockDbAdapter = $this->getMock('Zend\Db\Adapter\Adapter', null, array($mockDbDriver));

        $customerTable = new \Customer\Table\CustomerTable($mockDbAdapter);

        $resultSetPrototype = $customerTable->getResultSetPrototype();

        $this->assertTrue($resultSetPrototype instanceof HydratingResultSet);
        $this->assertTrue($resultSetPrototype->getArrayObjectPrototype() instanceof CustomerEntity);
        $this->assertTrue($resultSetPrototype->getHydrator() instanceof CustomerHydrator);
    }
}