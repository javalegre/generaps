<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstablecimientoTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstablecimientoTiposTable Test Case
 */
class EstablecimientoTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstablecimientoTiposTable
     */
    public $EstablecimientoTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.establecimiento_tipos',
        'app.establecimientos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstablecimientoTipos') ? [] : ['className' => EstablecimientoTiposTable::class];
        $this->EstablecimientoTipos = TableRegistry::get('EstablecimientoTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstablecimientoTipos);

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
