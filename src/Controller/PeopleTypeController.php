<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleType Controller
 *
 * @property \App\Model\Table\PeopleTypeTable $PeopleType
 *
 * @method \App\Model\Entity\PeopleType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeopleTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $peopleType = $this->paginate($this->PeopleType);

        $this->set(compact('peopleType'));
    }

    /**
     * View method
     *
     * @param string|null $id People Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleType = $this->PeopleType->get($id, [
            'contain' => ['People']
        ]);

        $this->set('peopleType', $peopleType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleType = $this->PeopleType->newEntity();
        if ($this->request->is('post')) {
            $peopleType = $this->PeopleType->patchEntity($peopleType, $this->request->getData());
            if ($this->PeopleType->save($peopleType)) {
                $this->Flash->success(__('The people type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people type could not be saved. Please, try again.'));
        }
        $this->set(compact('peopleType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id People Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleType = $this->PeopleType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleType = $this->PeopleType->patchEntity($peopleType, $this->request->getData());
            if ($this->PeopleType->save($peopleType)) {
                $this->Flash->success(__('The people type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people type could not be saved. Please, try again.'));
        }
        $this->set(compact('peopleType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id People Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleType = $this->PeopleType->get($id);
        if ($this->PeopleType->delete($peopleType)) {
            $this->Flash->success(__('The people type has been deleted.'));
        } else {
            $this->Flash->error(__('The people type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
