<?php

namespace MyCommonBundle\EventListener;

use MyCommonBundle\Exception\ParametrizedException;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Class ExceptionListener
 * @package MyCommonBundle\EventListener
 */
class ExceptionListener
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @var Router
     */
    private $router;

    /**
     * @var string
     */
    private $homepage;

    /**
     * ExceptionListener constructor.
     * @param Session $session
     * @param TranslatorInterface $translator
     * @param Router $router
     */
    public function __construct(Session $session, TranslatorInterface $translator, Router $router, string $homepage)
    {
        $this->session = $session;
        $this->translator = $translator;
        $this->router = $router;
        $this->homepage = $homepage;
    }

    /**
     * @param GetResponseForExceptionEvent $event
     */
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();
        if ($exception instanceof ParametrizedException) {
            $message = $this->translator->trans(
                $exception->getMessage(),
                $exception->getParams()
            );
        } else {
            $message = $this->translator->trans(
                $exception->getMessage()
            );
        }
        $this->session->getFlashBag()->add('error', $message);

        $response = $this->redirect($this->generateUrl($this->homepage));
        $event->setResponse($response);
    }

    /**
     * @param $url
     * @param int $status
     * @return RedirectResponse
     */
    protected function redirect($url, $status = 302)
    {
        return new RedirectResponse($url, $status);
    }

    /**
     * @param $route
     * @param array $parameters
     * @param int $referenceType
     * @return string
     */
    protected function generateUrl($route, $parameters = [], $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH)
    {
        return $this->router->generate($route, $parameters, $referenceType);
    }
}
