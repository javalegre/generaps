<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TecnicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TecnicasTable Test Case
 */
class TecnicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TecnicasTable
     */
    public $Tecnicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tecnicas',
        'app.campanias',
        'app.aplicaciones',
        'app.lotes',
        'app.aplicacion_tipos',
        'app.aplicacion_detalles',
        'app.productos',
        'app.producto_tipos',
        'app.sectores',
        'app.establecimientos',
        'app.responsables',
        'app.establecimiento_tipos',
        'app.sistema_laboreos',
        'app.arroz_variedades',
        'app.arroz_tipo_curados',
        'app.tecnica_responsables',
        'app.users',
        'app.aros',
        'app.acos',
        'app.aros_acos',
        'app.groups',
        'app.roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tecnicas') ? [] : ['className' => TecnicasTable::class];
        $this->Tecnicas = TableRegistry::get('Tecnicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tecnicas);

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
