<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemaLaboreosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemaLaboreosTable Test Case
 */
class SistemaLaboreosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemaLaboreosTable
     */
    public $SistemaLaboreos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sistema_laboreos',
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
        $config = TableRegistry::exists('SistemaLaboreos') ? [] : ['className' => SistemaLaboreosTable::class];
        $this->SistemaLaboreos = TableRegistry::get('SistemaLaboreos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SistemaLaboreos);

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
