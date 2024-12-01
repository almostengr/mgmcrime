<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Crimes Model
 *
 * @method \App\Model\Entity\Crime newEmptyEntity()
 * @method \App\Model\Entity\Crime newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Crime> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crime get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Crime findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Crime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Crime> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crime|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Crime saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Crime>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Crime>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Crime>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Crime> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Crime>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Crime>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Crime>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Crime> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CrimesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('crimes');
        $this->setDisplayField('description');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('description')
            ->maxLength('description', 1000)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('case_number')
            ->maxLength('case_number', 25)
            ->requirePresence('case_number', 'create')
            ->notEmptyString('case_number');

        $validator
            ->scalar('location')
            ->maxLength('location', 150)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

        $validator
            ->scalar('agency')
            ->maxLength('agency', 150)
            ->requirePresence('agency', 'create')
            ->notEmptyString('agency');

        $validator
            ->dateTime('reported_date')
            ->requirePresence('reported_date', 'create')
            ->notEmptyDateTime('reported_date');

        return $validator;
    }
}
