<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Articles Controller
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    public function index()
    {
        $articles = [
            ['id' => 1, 'name' => '記事1'],
            ['id' => 2, 'name' => '記事2'],
        ];
        $this->set(compact('articles'));
        $this->viewBuilder()->setOption('serialize', ['articles']);
    }
}
