<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArrozTipoCuradosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArrozTipoCuradosTable Test Case
 */
class ArrozTipoCuradosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArrozTipoCuradosTable
     */
    public $ArrozTipoCurados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.arroz_tipo_curados',
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
        $config = TableRegistry::exists('ArrozTipoCurados') ? [] : ['className' => ArrozTipoCuradosTable::class];
        $this->ArrozTipoCurados = TableRegistry::get('ArrozTipoCurados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArrozTipoCurados);

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
