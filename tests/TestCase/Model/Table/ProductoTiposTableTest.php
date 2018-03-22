<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductoTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductoTiposTable Test Case
 */
class ProductoTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductoTiposTable
     */
    public $ProductoTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.producto_tipos',
        'app.productos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductoTipos') ? [] : ['className' => ProductoTiposTable::class];
        $this->ProductoTipos = TableRegistry::get('ProductoTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductoTipos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
