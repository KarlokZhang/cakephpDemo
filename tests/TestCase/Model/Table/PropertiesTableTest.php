<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertiesTable Test Case
 */
class PropertiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PropertiesTable
     */
    protected $Properties;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Properties',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Properties') ? [] : ['className' => PropertiesTable::class];
        $this->Properties = $this->getTableLocator()->get('Properties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Properties);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
