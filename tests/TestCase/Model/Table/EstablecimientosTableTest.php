<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstablecimientosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstablecimientosTable Test Case
 */
class EstablecimientosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstablecimientosTable
     */
    public $Establecimientos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.establecimientos',
        'app.responsables',
        'app.establecimiento_tipos',
        'app.sectores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Establecimientos') ? [] : ['className' => EstablecimientosTable::class];
        $this->Establecimientos = TableRegistry::get('Establecimientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Establecimientos);

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
