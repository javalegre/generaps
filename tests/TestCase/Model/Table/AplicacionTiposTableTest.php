<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AplicacionTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AplicacionTiposTable Test Case
 */
class AplicacionTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AplicacionTiposTable
     */
    public $AplicacionTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aplicacion_tipos',
        'app.aplicaciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AplicacionTipos') ? [] : ['className' => AplicacionTiposTable::class];
        $this->AplicacionTipos = TableRegistry::get('AplicacionTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AplicacionTipos);

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
