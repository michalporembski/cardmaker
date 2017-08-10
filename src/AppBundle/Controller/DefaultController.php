<?php

namespace AppBundle\Controller;

use AppBundle\Form\CardGenerateType;
use AppBundle\Services\Generator;
use CardMakerBundle\Entity\Dto\GenerateCard;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $command = new GenerateCard();
        $form = $this->createForm(CardGenerateType::class, $command);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $cardGenerator = $this->get('cardmaker.handler.card_generate');
            try {
                $command->setSave(true);
                $card = $cardGenerator->handle($command);
            } catch (\Exception $e) {
                $message = $this->get('translator')->trans($e->getMessage());
                $this->addFlash('error', $message);
                var_dump($e->getMessage());
                die;
            }
        }
        return $this->render(
            'AppBundle:Default:create_card.form.html.twig',
            [
                'form' => $form->createView(),
                'card'=>$card
            ]
        );
    }

    /**
     * @Route("/generate", name="generator")
     */
    public function generatorAction(Request $request)
    {
        $service = new Generator();
        $service->generateCard();
    }
}
