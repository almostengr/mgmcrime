<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Crime Entity
 *
 * @property int $id
 * @property string $description
 * @property string $case_number
 * @property string $location
 * @property string $agency
 * @property \Cake\I18n\DateTime $reported_date
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Crime extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'description' => true,
        'case_number' => true,
        'location' => true,
        'agency' => true,
        'reported_date' => true,
        'created' => true,
        'modified' => true,
    ];
}
