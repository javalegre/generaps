<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArrozVariedadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArrozVariedadesTable Test Case
 */
class ArrozVariedadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArrozVariedadesTable
     */
    public $ArrozVariedades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.arroz_variedades',
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
        $config = TableRegistry::exists('ArrozVariedades') ? [] : ['className' => ArrozVariedadesTable::class];
        $this->ArrozVariedades = TableRegistry::get('ArrozVariedades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArrozVariedades);

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
