<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * School Controller
 *
 * @property \App\Model\Table\SchoolTable $School
 *
 * @method \App\Model\Entity\School[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SchoolController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $school = $this->paginate($this->School);

        $this->set(compact('school'));
    }

    /**
     * View method
     *
     * @param string|null $id School id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $school = $this->School->get($id, [
            'contain' => []
        ]);

        $this->set('school', $school);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $school = $this->School->newEntity();
        if ($this->request->is('post')) {
            $school = $this->School->patchEntity($school, $this->request->getData());
            if ($this->School->save($school)) {
                $this->Flash->success(__('The school has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school could not be saved. Please, try again.'));
        }
        $this->set(compact('school'));
    }

    /**
     * Edit method
     *
     * @param string|null $id School id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $school = $this->School->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $school = $this->School->patchEntity($school, $this->request->getData());
            if ($this->School->save($school)) {
                $this->Flash->success(__('The school has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school could not be saved. Please, try again.'));
        }
        $this->set(compact('school'));
    }

    /**
     * Delete method
     *
     * @param string|null $id School id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $school = $this->School->get($id);
        if ($this->School->delete($school)) {
            $this->Flash->success(__('The school has been deleted.'));
        } else {
            $this->Flash->error(__('The school could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
