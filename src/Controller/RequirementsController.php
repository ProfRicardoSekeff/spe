<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Requirements Controller
 *
 * @property \App\Model\Table\RequirementsTable $Requirements
 *
 * @method \App\Model\Entity\Requirement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequirementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Services', 'DocumentsType']
        ];
        $requirements = $this->paginate($this->Requirements);

        $this->set(compact('requirements'));
    }

    /**
     * View method
     *
     * @param string|null $id Requirement id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requirement = $this->Requirements->get($id, [
            'contain' => ['Services', 'DocumentsType']
        ]);

        $this->set('requirement', $requirement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requirement = $this->Requirements->newEntity();
        if ($this->request->is('post')) {
            $requirement = $this->Requirements->patchEntity($requirement, $this->request->getData());
            if ($this->Requirements->save($requirement)) {
                $this->Flash->success(__('The requirement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requirement could not be saved. Please, try again.'));
        }
        $services = $this->Requirements->Services->find('list', ['limit' => 200]);
        $documentsType = $this->Requirements->DocumentsType->find('list', ['limit' => 200]);
        $this->set(compact('requirement', 'services', 'documentsType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Requirement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requirement = $this->Requirements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requirement = $this->Requirements->patchEntity($requirement, $this->request->getData());
            if ($this->Requirements->save($requirement)) {
                $this->Flash->success(__('The requirement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requirement could not be saved. Please, try again.'));
        }
        $services = $this->Requirements->Services->find('list', ['limit' => 200]);
        $documentsType = $this->Requirements->DocumentsType->find('list', ['limit' => 200]);
        $this->set(compact('requirement', 'services', 'documentsType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Requirement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requirement = $this->Requirements->get($id);
        if ($this->Requirements->delete($requirement)) {
            $this->Flash->success(__('The requirement has been deleted.'));
        } else {
            $this->Flash->error(__('The requirement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
