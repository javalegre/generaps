<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AplicacionDetallesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AplicacionDetallesTable Test Case
 */
class AplicacionDetallesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AplicacionDetallesTable
     */
    public $AplicacionDetalles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aplicacion_detalles',
        'app.aplicaciones',
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
        $config = TableRegistry::exists('AplicacionDetalles') ? [] : ['className' => AplicacionDetallesTable::class];
        $this->AplicacionDetalles = TableRegistry::get('AplicacionDetalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AplicacionDetalles);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
