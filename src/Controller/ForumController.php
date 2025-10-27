<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Topic;
use App\Form\TopicType;
use App\Repository\TopicRepository;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;

final class ForumController extends AbstractController
{
    #[Route('/', name: 'app_forum')]
    public function index(TopicRepository $topicRepository): Response
    {
        return $this->render('forum/index.html.twig', [
            'topics' => $topicRepository->findAll(),
        ]);
    }

    #[Route('/apropos', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('forum/about.html.twig', []);
    }
}