<?php

namespace ProductsBundle;

use ProductsBundle\Tool\Install;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ProductsBundle extends AbstractPimcoreBundle
{
    /**
     * {@inheritdoc}
     */
    public function getInstaller()
    {
        return $this->container->get(Install::class);
    }
}