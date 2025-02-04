<?php

namespace ContainerCGRICnz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PEbkeZmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pEbkeZm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pEbkeZm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Admin\\AdminDashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\ArticleCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ArticleCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ArticleCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ArticleController::getArticleInfo' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CrudArticleController::delete' => ['privates', '.service_locator.zwPUnYq', 'get_ServiceLocator_ZwPUnYqService', true],
            'App\\Controller\\CrudArticleController::edit' => ['privates', '.service_locator.zwPUnYq', 'get_ServiceLocator_ZwPUnYqService', true],
            'App\\Controller\\CrudArticleController::index' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\CrudArticleController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CrudArticleController::show' => ['privates', '.service_locator.XqCCpgA', 'get_ServiceLocator_XqCCpgAService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\AdminDashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\ArticleCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\ArticleCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ArticleCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\ArticleCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\ArticleCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ArticleController:getArticleInfo' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CrudArticleController:delete' => ['privates', '.service_locator.zwPUnYq', 'get_ServiceLocator_ZwPUnYqService', true],
            'App\\Controller\\CrudArticleController:edit' => ['privates', '.service_locator.zwPUnYq', 'get_ServiceLocator_ZwPUnYqService', true],
            'App\\Controller\\CrudArticleController:index' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\CrudArticleController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CrudArticleController:show' => ['privates', '.service_locator.XqCCpgA', 'get_ServiceLocator_XqCCpgAService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\AdminDashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::delete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::detail' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::edit' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::index' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::new' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController::updateEntity' => '?',
            'App\\Controller\\ArticleController::getArticleInfo' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\CrudArticleController::delete' => '?',
            'App\\Controller\\CrudArticleController::edit' => '?',
            'App\\Controller\\CrudArticleController::index' => '?',
            'App\\Controller\\CrudArticleController::new' => '?',
            'App\\Controller\\CrudArticleController::show' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\AdminDashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:delete' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:detail' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:edit' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:index' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:new' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ArticleCrudController:updateEntity' => '?',
            'App\\Controller\\ArticleController:getArticleInfo' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\CrudArticleController:delete' => '?',
            'App\\Controller\\CrudArticleController:edit' => '?',
            'App\\Controller\\CrudArticleController:index' => '?',
            'App\\Controller\\CrudArticleController:new' => '?',
            'App\\Controller\\CrudArticleController:show' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
