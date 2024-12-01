<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CrimesFixture
 */
class CrimesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'case_number' => 'Lorem ipsum dolor sit a',
                'location' => 'Lorem ipsum dolor sit amet',
                'agency' => 'Lorem ipsum dolor sit amet',
                'reported_date' => '2024-12-01 17:52:11',
                'created' => '2024-12-01 17:52:11',
                'modified' => '2024-12-01 17:52:11',
            ],
        ];
        parent::init();
    }
}
