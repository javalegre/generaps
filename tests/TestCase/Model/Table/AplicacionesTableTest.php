<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AplicacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AplicacionesTable Test Case
 */
class AplicacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AplicacionesTable
     */
    public $Aplicaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aplicaciones',
        'app.campanias',
        'app.lotes',
        'app.aplicacion_tipos',
        'app.aplicacion_detalles',
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
        $config = TableRegistry::exists('Aplicaciones') ? [] : ['className' => AplicacionesTable::class];
        $this->Aplicaciones = TableRegistry::get('Aplicaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aplicaciones);

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
