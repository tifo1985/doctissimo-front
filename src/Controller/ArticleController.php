<?php

namespace App\Controller;

use App\Api\ArticleApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/blog/article/{id}", name="article_details")
     */
    public function details(ArticleApi $articleApi, int $id): Response
    {
        $article = $articleApi->getDetails($id)->data;

        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @Route("/blog/articles", name="article_list")
     */
    public function list(ArticleApi $articleApi): Response
    {
        $articles = $articleApi->getList()->data;

        return $this->render('article/list.html.twig', [
            'articles' => $articles,
        ]);
    }
}