<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampaniasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampaniasTable Test Case
 */
class CampaniasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CampaniasTable
     */
    public $Campanias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.campanias',
        'app.aplicaciones',
        'app.lotes',
        'app.aplicacion_tipos',
        'app.aplicacion_detalles',
        'app.productos',
        'app.sectores',
        'app.tecnicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Campanias') ? [] : ['className' => CampaniasTable::class];
        $this->Campanias = TableRegistry::get('Campanias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Campanias);

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
