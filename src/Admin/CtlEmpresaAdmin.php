<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class CtlEmpresaAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('origen')
            ->add('nombre')
            ->add('registroFiscal')
            ->add('nit')
            ->add('consolidadora')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('origen')
            ->add('nombre')
            ->add('registroFiscal')
            ->add('nit')
            ->add('consolidadora')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('origen')
            ->add('nombre')
            ->add('registroFiscal')
            ->add('nit')
            ->add('consolidadora')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('origen')
            ->add('nombre')
            ->add('registroFiscal')
            ->add('nit')
            ->add('consolidadora')
            ;
    }


    public function prePersist($alias) {
        // llenar campos de auditoria
        $user = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser();
        $alias->setUserAdd($user);
        $alias->setDateAdd(new \DateTime());
    }

    public function preUpdate($alias) {
        // llenar campos de auditoria
        $user = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser();
        $alias->setUserMod($user);
        $alias->setDateMod(new \DateTime());
    }
}
