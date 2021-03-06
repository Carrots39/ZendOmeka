<?php
namespace VatiruLibrary\Service\Form;

use Interop\Container\ContainerInterface;
use VatiruLibrary\Form\BasicForm;
use Zend\ServiceManager\Factory\FactoryInterface;

class BasicFormFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        $form = new BasicForm(null, $options);
        return $form;
    }
}
