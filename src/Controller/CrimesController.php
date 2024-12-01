<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Crimes Controller
 *
 */
class CrimesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Crimes->find();
        $crimes = $this->paginate($query);

        $this->set(compact('crimes'));
    }

    /**
     * View method
     *
     * @param string|null $id Crime id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crime = $this->Crimes->get($id, contain: []);
        $this->set(compact('crime'));
    }
}
