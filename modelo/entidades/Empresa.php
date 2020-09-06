<?php

class  Empresa{


    private   $cod_empresa;
    private  $nom_empresa ;
    private  $nom_comercial;
    private  $descripccion ;
    private  $cod_t_empresa;
    private  $estado_empresa;
    private  $camara_comercio;




    /**
     * @return mixed
     */
    public function getCodEmpresa()
    {
        return $this->cod_empresa;
    }

    /**
     * @param mixed $cod_empresa
     */
    public function setCodEmpresa($cod_empresa)
    {
        $this->cod_empresa = $cod_empresa;
    }

    /**
     * @return mixed
     */
    public function getNomComercial()
    {
        return $this->nom_comercial;
    }

    /**
     * @param mixed $nom_comercial
     */
    public function setNomComercial($nom_comercial)
    {
        $this->nom_comercial = $nom_comercial;
    }

    /**
     * @return mixed
     */
    public function getNomEmpresa()
    {
        return $this->nom_empresa;
    }

    /**
     * @param mixed $nom_empresa
     * @return Empresa
     */
    public function setNomEmpresa($nom_empresa)
    {
        $this->nom_empresa = $nom_empresa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripccion()
    {
        return $this->descripccion;
    }

    /**
     * @param mixed $descripccion
     */
    public function setDescripccion($descripccion)
    {
        $this->descripccion = $descripccion;
    }

    /**
     * @return mixed
     */
    public function getCodTEmpresa()
    {
        return $this->cod_t_empresa;
    }

    /**
     * @param mixed $cod_t_empresa
     */
    public function setCodTEmpresa($cod_t_empresa)
    {
        $this->cod_t_empresa = $cod_t_empresa;
    }

    /**
     * @return mixed
     */
    public function getEstadoEmpresa()
    {
        return $this->estado_empresa;
    }

    /**
     * @param mixed $estado_empresa
     */
    public function setEstadoEmpresa($estado_empresa)
    {
        $this->estado_empresa = $estado_empresa;
    }

    /**
     * @return mixed
     */
    public function getCamaraComercio()
    {
        return $this->camara_comercio;
    }

    /**
     * @param mixed $camara_comercio
     */
    public function setCamaraComercio($camara_comercio)
    {
        $this->camara_comercio = $camara_comercio;
    }









}

