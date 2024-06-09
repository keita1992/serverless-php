<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Log\Log;

/**
 * Articles Controller
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    public function index()
    {
        $articles = $this->articles_table->find('all');
        $this->set(compact('articles'));
        $this->viewBuilder()->setOption('serialize', ['articles']);
    }

    public function add()
    {
        $article = $this->request->getData();
        $entity = $this->articles_table->newEntity($article);
        $this->articles_table->saveOrFail($entity);
        $this->response = $this->response->withStatus(201);

        return $this->response->withStringBody(json_encode($entity));
    }

    public function edit(int $article_id)
    {
        $article = $this->articles_table->get($article_id);
        if (!$article) {
            $this->response = $this->response->withStatus(404);
            return $this->response;
        }
        $article = $this->articles_table->patchEntity($article, $this->request->getData());
        $this->articles_table->saveOrFail($article);

        return $this->response->withStringBody(json_encode($article));
    }

    public function delete(int $article_id)
    {
        $article = $this->articles_table->get($article_id);
        $this->articles_table->deleteOrFail($article);

        return $this->response->withStatus(204);
    }
}
