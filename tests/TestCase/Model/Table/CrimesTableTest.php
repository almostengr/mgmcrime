<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrimesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrimesTable Test Case
 */
class CrimesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrimesTable
     */
    protected $Crimes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Crimes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Crimes') ? [] : ['className' => CrimesTable::class];
        $this->Crimes = $this->getTableLocator()->get('Crimes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Crimes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CrimesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
