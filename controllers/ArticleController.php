<?php

require_once ROOT . '/models/Article.php';

class ArticleController
{
    public function actionIndex()
    {
        $articleList = [];
        $articleList = Article::getAllArticle();

        require_once(ROOT . '/views/main/index.php');
    }

    public function actionView($id)
    {
        $articleList = [];
        $articleList = Article::getOneArticle($id);

        require_once(ROOT . '/views/post/index.php');
    }
}
