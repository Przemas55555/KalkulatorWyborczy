<?php

use Knp\Bundle\MenuBundle\KnpMenuBundle;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use Layout\LayoutBundle\LayoutBundle;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new KnpPaginatorBundle(),
            new KnpMenuBundle(),
            new LayoutBundle(),
            new Admin\UserBundle\UserBundle(),
            new Admin\StateBundle\StateBundle(),
            new Admin\DistrictBundle\DistrictBundle(),
            new Admin\ConstituencyBundle\ConstituencyBundle(),
            new Admin\ElectionsBundle\ElectionsBundle(),
            new Admin\PartyBundle\PartyBundle(),
            new Admin\CandidateBundle\CandidateBundle(),
            new OKW\VotesBundle\VotesBundle(),
        );

        if (in_array($this->getEnvironment(), ['dev', 'test'])) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
