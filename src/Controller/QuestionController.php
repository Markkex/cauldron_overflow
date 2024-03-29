<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController{
    
    #[Route('/', 'app_homepage')]
    public function homepage() {
        return $this->render('question/homepage.html.twig');
    }

    #[Route('/questions/{slug}', 'app_question_show')]
    public function show($slug) {
        dump($this);
        $answers = [
            'Make sure your cat is sitting purrrfectly still ?',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];


        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)), 
            'answers' => $answers
        ]);
    }


}