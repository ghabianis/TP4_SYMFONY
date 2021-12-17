<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;

class ArticlesController extends AbstractController
{

/**
 * @Route("/article/add", name="article_add")
 */
public function addArticle(EntityManagerInterface $entityManger):Response
{
    $article = new Article();
    $article->getId();
    $article->setDesignation("the breakfast");
    $article->setDescription("the breakfast burrito on my plate");
    $article->setPrix(5000);
    $entityManger->persist($article);

    $article2 = new Article();
    $article2->getId();
    $article2->setDesignation("the breakfast");
    $article2->setDescription("the breakfast burrito on my plate");
    $article2->setPrix(5000);
    $entityManger->persist($article2);

    $article3 = new Article();
    $article3->getId();
    $article3->setDesignation("the breakfast");
    $article3->setDescription("the breakfast burrito on my plate");
    $article3->setPrix(5000);
    $entityManger->persist($article2);
    $entityManger->flush();
    return $this->render('articles/index.html.twig', [
        'article'=>$article ,
        
    ]);

}


    /**
     * @Route("/articles", name="articles")
     */
    public function showArticles(ArticleRepository $ArticleRepository): Response
    {
        $articles=["Article1","Article2","Article3"];
        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    
    /**
     * @Route("/home/{name?}/{age?}", name="home")
     */
    public function index1($name,$age): Response
    {
        
        return $this->render('shared/home.html.twig', [
            'name' => $name,
            'age' => $age
        ]);
    }



}
