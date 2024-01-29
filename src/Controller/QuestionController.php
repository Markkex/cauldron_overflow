<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController {
    
    #[Route('/')]
    public function homepage() {
        return new Response('cenas da vida');
    }

    #[Route('/questions/{slug}')]
    public function show($slug) {

        return new Response(sprintf(
            'Future page to show the question "%s"',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }


}