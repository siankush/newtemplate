<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RatingsFixture
 */
class RatingsFixture extends TestFixture
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
                'user_id' => 1,
                'car_id' => 1,
                'rating' => 'Lorem ipsum dolor sit amet',
                'review' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'created_at' => '2023-02-14 10:55:20',
                'modified_at' => '2023-02-14 10:55:20',
            ],
        ];
        parent::init();
    }
}
