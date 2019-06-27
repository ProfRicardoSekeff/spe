<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleServices Controller
 *
 * @property \App\Model\Table\PeopleServicesTable $PeopleServices
 *
 * @method \App\Model\Entity\PeopleService[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeopleServicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Services', 'People']
        ];
        $peopleServices = $this->paginate($this->PeopleServices);

        $this->set(compact('peopleServices'));
    }

    /**
     * View method
     *
     * @param string|null $id People Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleService = $this->PeopleServices->get($id, [
            'contain' => ['Services', 'People']
        ]);

        $this->set('peopleService', $peopleService);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleService = $this->PeopleServices->newEntity();
        if ($this->request->is('post')) {
            $peopleService = $this->PeopleServices->patchEntity($peopleService, $this->request->getData());
            if ($this->PeopleServices->save($peopleService)) {
                $this->Flash->success(__('The people service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people service could not be saved. Please, try again.'));
        }
        $services = $this->PeopleServices->Services->find('list', ['limit' => 200]);
        $people = $this->PeopleServices->People->find('list', ['limit' => 200]);
        $this->set(compact('peopleService', 'services', 'people'));
    }

    /**
     * Edit method
     *
     * @param string|null $id People Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleService = $this->PeopleServices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleService = $this->PeopleServices->patchEntity($peopleService, $this->request->getData());
            if ($this->PeopleServices->save($peopleService)) {
                $this->Flash->success(__('The people service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people service could not be saved. Please, try again.'));
        }
        $services = $this->PeopleServices->Services->find('list', ['limit' => 200]);
        $people = $this->PeopleServices->People->find('list', ['limit' => 200]);
        $this->set(compact('peopleService', 'services', 'people'));
    }

    /**
     * Delete method
     *
     * @param string|null $id People Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleService = $this->PeopleServices->get($id);
        if ($this->PeopleServices->delete($peopleService)) {
            $this->Flash->success(__('The people service has been deleted.'));
        } else {
            $this->Flash->error(__('The people service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
