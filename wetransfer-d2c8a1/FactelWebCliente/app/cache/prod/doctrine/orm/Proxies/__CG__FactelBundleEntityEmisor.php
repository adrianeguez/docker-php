<?php

namespace Proxies\__CG__\FactelBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Emisor extends \FactelBundle\Entity\Emisor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'establecimientos', 'facturas', 'notasCredito', 'notasDebito', 'usuarios', 'retencion', 'guias', 'productos', 'clientes', 'ruc', 'ambiente', 'tipoEmision', 'razonSocial', 'nombreComercial', 'direccionMatriz', 'contribuyenteEspecial', 'obligadoContabilidad', 'logo', 'dirLogo', 'dirFirma', 'firma', 'dirDocAutorizados', 'passFirma', 'servidorCorreo', 'correoRemitente', 'passCorreo', 'puerto', 'SSL', 'activo', 'createdAt', 'updatedAt', 'createdBy', 'updatedBy', 'deletedBy'];
        }

        return ['__isInitialized__', 'id', 'establecimientos', 'facturas', 'notasCredito', 'notasDebito', 'usuarios', 'retencion', 'guias', 'productos', 'clientes', 'ruc', 'ambiente', 'tipoEmision', 'razonSocial', 'nombreComercial', 'direccionMatriz', 'contribuyenteEspecial', 'obligadoContabilidad', 'logo', 'dirLogo', 'dirFirma', 'firma', 'dirDocAutorizados', 'passFirma', 'servidorCorreo', 'correoRemitente', 'passCorreo', 'puerto', 'SSL', 'activo', 'createdAt', 'updatedAt', 'createdBy', 'updatedBy', 'deletedBy'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Emisor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRuc($ruc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRuc', [$ruc]);

        return parent::setRuc($ruc);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRuc', []);

        return parent::getRuc();
    }

    /**
     * {@inheritDoc}
     */
    public function setRazonSocial($razonSocial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRazonSocial', [$razonSocial]);

        return parent::setRazonSocial($razonSocial);
    }

    /**
     * {@inheritDoc}
     */
    public function getRazonSocial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRazonSocial', []);

        return parent::getRazonSocial();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreComercial($nombreComercial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreComercial', [$nombreComercial]);

        return parent::setNombreComercial($nombreComercial);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreComercial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreComercial', []);

        return parent::getNombreComercial();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccionMatriz($direccionMatriz)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccionMatriz', [$direccionMatriz]);

        return parent::setDireccionMatriz($direccionMatriz);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccionMatriz()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccionMatriz', []);

        return parent::getDireccionMatriz();
    }

    /**
     * {@inheritDoc}
     */
    public function setContribuyenteEspecial($contribuyenteEspecial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContribuyenteEspecial', [$contribuyenteEspecial]);

        return parent::setContribuyenteEspecial($contribuyenteEspecial);
    }

    /**
     * {@inheritDoc}
     */
    public function getContribuyenteEspecial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContribuyenteEspecial', []);

        return parent::getContribuyenteEspecial();
    }

    /**
     * {@inheritDoc}
     */
    public function setObligadoContabilidad($obligadoContabilidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObligadoContabilidad', [$obligadoContabilidad]);

        return parent::setObligadoContabilidad($obligadoContabilidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getObligadoContabilidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObligadoContabilidad', []);

        return parent::getObligadoContabilidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirLogo($dirLogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirLogo', [$dirLogo]);

        return parent::setDirLogo($dirLogo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirLogo', []);

        return parent::getDirLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirFirma($dirFirma)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirFirma', [$dirFirma]);

        return parent::setDirFirma($dirFirma);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirFirma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirFirma', []);

        return parent::getDirFirma();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirDocAutorizados($dirDocAutorizados)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirDocAutorizados', [$dirDocAutorizados]);

        return parent::setDirDocAutorizados($dirDocAutorizados);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirDocAutorizados()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirDocAutorizados', []);

        return parent::getDirDocAutorizados();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassFirma($passFirma)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassFirma', [$passFirma]);

        return parent::setPassFirma($passFirma);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassFirma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassFirma', []);

        return parent::getPassFirma();
    }

    /**
     * {@inheritDoc}
     */
    public function setServidorCorreo($servidorCorreo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServidorCorreo', [$servidorCorreo]);

        return parent::setServidorCorreo($servidorCorreo);
    }

    /**
     * {@inheritDoc}
     */
    public function getServidorCorreo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServidorCorreo', []);

        return parent::getServidorCorreo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorreoRemitente($correoRemitente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorreoRemitente', [$correoRemitente]);

        return parent::setCorreoRemitente($correoRemitente);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorreoRemitente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorreoRemitente', []);

        return parent::getCorreoRemitente();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassCorreo($passCorreo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassCorreo', [$passCorreo]);

        return parent::setPassCorreo($passCorreo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassCorreo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassCorreo', []);

        return parent::getPassCorreo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuerto($puerto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuerto', [$puerto]);

        return parent::setPuerto($puerto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuerto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuerto', []);

        return parent::getPuerto();
    }

    /**
     * {@inheritDoc}
     */
    public function setSSL($sSL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSSL', [$sSL]);

        return parent::setSSL($sSL);
    }

    /**
     * {@inheritDoc}
     */
    public function getSSL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSSL', []);

        return parent::getSSL();
    }

    /**
     * {@inheritDoc}
     */
    public function addEstablecimiento(\FactelBundle\Entity\Establecimiento $establecimientos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEstablecimiento', [$establecimientos]);

        return parent::addEstablecimiento($establecimientos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEstablecimiento(\FactelBundle\Entity\Establecimiento $establecimientos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEstablecimiento', [$establecimientos]);

        return parent::removeEstablecimiento($establecimientos);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstablecimientos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstablecimientos', []);

        return parent::getEstablecimientos();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', [$activo]);

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', []);

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsuario(\FactelBundle\Entity\User $usuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsuario', [$usuarios]);

        return parent::addUsuario($usuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsuario(\FactelBundle\Entity\User $usuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsuario', [$usuarios]);

        return parent::removeUsuario($usuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarios', []);

        return parent::getUsuarios();
    }

    /**
     * {@inheritDoc}
     */
    public function addProducto(\FactelBundle\Entity\Producto $productos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProducto', [$productos]);

        return parent::addProducto($productos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProducto(\FactelBundle\Entity\Producto $productos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProducto', [$productos]);

        return parent::removeProducto($productos);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductos', []);

        return parent::getProductos();
    }

    /**
     * {@inheritDoc}
     */
    public function addFactura(\FactelBundle\Entity\Factura $facturas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFactura', [$facturas]);

        return parent::addFactura($facturas);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFactura(\FactelBundle\Entity\Factura $facturas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFactura', [$facturas]);

        return parent::removeFactura($facturas);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacturas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacturas', []);

        return parent::getFacturas();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmbiente($ambiente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmbiente', [$ambiente]);

        return parent::setAmbiente($ambiente);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmbiente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmbiente', []);

        return parent::getAmbiente();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoEmision($tipoEmision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoEmision', [$tipoEmision]);

        return parent::setTipoEmision($tipoEmision);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoEmision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoEmision', []);

        return parent::getTipoEmision();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotasCredito(\FactelBundle\Entity\NotaCredito $notasCredito)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotasCredito', [$notasCredito]);

        return parent::addNotasCredito($notasCredito);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotasCredito(\FactelBundle\Entity\NotaCredito $notasCredito)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotasCredito', [$notasCredito]);

        return parent::removeNotasCredito($notasCredito);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotasCredito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotasCredito', []);

        return parent::getNotasCredito();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotasDebito(\FactelBundle\Entity\NotaDebito $notasDebito)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotasDebito', [$notasDebito]);

        return parent::addNotasDebito($notasDebito);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotasDebito(\FactelBundle\Entity\NotaDebito $notasDebito)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotasDebito', [$notasDebito]);

        return parent::removeNotasDebito($notasDebito);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotasDebito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotasDebito', []);

        return parent::getNotasDebito();
    }

    /**
     * {@inheritDoc}
     */
    public function addRetencion(\FactelBundle\Entity\Retencion $retencion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRetencion', [$retencion]);

        return parent::addRetencion($retencion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRetencion(\FactelBundle\Entity\Retencion $retencion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRetencion', [$retencion]);

        return parent::removeRetencion($retencion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetencion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetencion', []);

        return parent::getRetencion();
    }

    /**
     * {@inheritDoc}
     */
    public function addCliente(\FactelBundle\Entity\Cliente $clientes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCliente', [$clientes]);

        return parent::addCliente($clientes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCliente(\FactelBundle\Entity\Cliente $clientes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCliente', [$clientes]);

        return parent::removeCliente($clientes);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientes', []);

        return parent::getClientes();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', []);

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirma($logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirma', [$logo]);

        return parent::setFirma($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirma', []);

        return parent::getFirma();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo($firma)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', [$firma]);

        return parent::setLogo($firma);
    }

    /**
     * {@inheritDoc}
     */
    public function addGuia(\FactelBundle\Entity\Guia $guia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGuia', [$guia]);

        return parent::addGuia($guia);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGuia(\FactelBundle\Entity\Guia $guia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGuia', [$guia]);

        return parent::removeGuia($guia);
    }

    /**
     * {@inheritDoc}
     */
    public function getGuias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGuias', []);

        return parent::getGuias();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function updateTimestamps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateTimestamps', []);

        return parent::updateTimestamps();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$user]);

        return parent::setCreatedBy($user);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$user]);

        return parent::setUpdatedBy($user);
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedBy($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedBy', [$user]);

        return parent::setDeletedBy($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedBy', []);

        return parent::getDeletedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function isBlameable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isBlameable', []);

        return parent::isBlameable();
    }

}
