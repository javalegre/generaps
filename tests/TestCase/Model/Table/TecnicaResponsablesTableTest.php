<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TecnicaResponsablesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TecnicaResponsablesTable Test Case
 */
class TecnicaResponsablesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TecnicaResponsablesTable
     */
    public $TecnicaResponsables;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tecnica_responsables',
        'app.users',
        'app.aros',
        'app.acos',
        'app.aros_acos',
        'app.groups',
        'app.roles',
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
        $config = TableRegistry::exists('TecnicaResponsables') ? [] : ['className' => TecnicaResponsablesTable::class];
        $this->TecnicaResponsables = TableRegistry::get('TecnicaResponsables', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TecnicaResponsables);

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
