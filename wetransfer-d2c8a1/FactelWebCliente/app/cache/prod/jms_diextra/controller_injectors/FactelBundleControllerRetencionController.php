<?php

namespace FactelBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class RetencionController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:\\xampp\\htdocs\\FactelWebCliente\\app\\cache\\prod/jms_diextra/proxies/FactelBundle-Controller-RetencionController.php';
        $m = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('FactelBundle\\Controller\\RetencionController' => array('retencionesAction' => array(0 => 'security.access.method_interceptor'), 'procesarAccion' => array(0 => 'security.access.method_interceptor'), 'sendEmail' => array(0 => 'security.access.method_interceptor'), 'descargarAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxyb8ed51cf_f7480d37f903f3391a9dae777b860ca7e6ab4652\__CG__\FactelBundle\Controller\RetencionController();
        $instance->__CGInterception__setLoader($m);
        return $instance;
    }
}
