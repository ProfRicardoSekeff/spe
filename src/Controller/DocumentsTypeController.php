<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DocumentsType Controller
 *
 * @property \App\Model\Table\DocumentsTypeTable $DocumentsType
 *
 * @method \App\Model\Entity\DocumentsType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $documentsType = $this->paginate($this->DocumentsType);

        $this->set(compact('documentsType'));
    }

    /**
     * View method
     *
     * @param string|null $id Documents Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentsType = $this->DocumentsType->get($id, [
            'contain' => ['Documents', 'Requirements']
        ]);

        $this->set('documentsType', $documentsType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentsType = $this->DocumentsType->newEntity();
        if ($this->request->is('post')) {
            $documentsType = $this->DocumentsType->patchEntity($documentsType, $this->request->getData());
            if ($this->DocumentsType->save($documentsType)) {
                $this->Flash->success(__('The documents type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documents type could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documents Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentsType = $this->DocumentsType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentsType = $this->DocumentsType->patchEntity($documentsType, $this->request->getData());
            if ($this->DocumentsType->save($documentsType)) {
                $this->Flash->success(__('The documents type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documents type could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documents Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentsType = $this->DocumentsType->get($id);
        if ($this->DocumentsType->delete($documentsType)) {
            $this->Flash->success(__('The documents type has been deleted.'));
        } else {
            $this->Flash->error(__('The documents type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
