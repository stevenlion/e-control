<?php

namespace Database\Class;

class TBMARCAS implements \JsonSerializable {

    private ?int $CODIGO_MARCA_PK = null;
    private ?string $TB_MARCAS_NOMBRE_DE_LA_MARCA = null;
    private ?int $TB_CLIENTE_CODIGO_CLIENTE_FK = null;
    private ?string $TB_MARCAS_USUARIO = null;
    private ?string $TB_MARCAS_FECHA_DE_CREACION = null;

    public function __construct() {

    }

    public function jsonSerialize(): mixed {
        return get_object_vars($this);
    }

    public static function formFields(): TBMARCAS {
        $tbmarcas = new TBMARCAS();

        $tbmarcas->setCODIGOMARCAPK(
            isset(request->CODIGO_MARCA_PK) ? request->CODIGO_MARCA_PK : null
        );

        $tbmarcas->setTBMARCASNOMBREDELAMARCA(
            isset(request->TB_MARCAS_NOMBRE_DE_LA_MARCA) ? request->TB_MARCAS_NOMBRE_DE_LA_MARCA : null
        );

        $tbmarcas->setTBCLIENTECODIGOCLIENTEFK(
            isset(request->TB_CLIENTE_CODIGO_CLIENTE_FK) ? request->TB_CLIENTE_CODIGO_CLIENTE_FK : null
        );

        $tbmarcas->setTBMARCASUSUARIO(
            isset(request->TB_MARCAS_USUARIO) ? request->TB_MARCAS_USUARIO : null
        );

        $tbmarcas->setTBMARCASFECHADECREACION(
            isset(request->TB_MARCAS_FECHA_DE_CREACION) ? request->TB_MARCAS_FECHA_DE_CREACION : null
        );

        return $tbmarcas;
    }

    public function getCODIGOMARCAPK(): ?int {
        return $this->CODIGO_MARCA_PK;
    }

    public function setCODIGOMARCAPK(?int $CODIGO_MARCA_PK): TBMARCAS {
        $this->CODIGO_MARCA_PK = $CODIGO_MARCA_PK;
        return $this;
    }

    public function getTBMARCASNOMBREDELAMARCA(): ?string {
        return $this->TB_MARCAS_NOMBRE_DE_LA_MARCA;
    }

    public function setTBMARCASNOMBREDELAMARCA(?string $TB_MARCAS_NOMBRE_DE_LA_MARCA): TBMARCAS {
        $this->TB_MARCAS_NOMBRE_DE_LA_MARCA = $TB_MARCAS_NOMBRE_DE_LA_MARCA;
        return $this;
    }

    public function getTBCLIENTECODIGOCLIENTEFK(): ?int {
        return $this->TB_CLIENTE_CODIGO_CLIENTE_FK;
    }

    public function setTBCLIENTECODIGOCLIENTEFK(?int $TB_CLIENTE_CODIGO_CLIENTE_FK): TBMARCAS {
        $this->TB_CLIENTE_CODIGO_CLIENTE_FK = $TB_CLIENTE_CODIGO_CLIENTE_FK;
        return $this;
    }

    public function getTBMARCASUSUARIO(): ?string {
        return $this->TB_MARCAS_USUARIO;
    }

    public function setTBMARCASUSUARIO(?string $TB_MARCAS_USUARIO): TBMARCAS {
        $this->TB_MARCAS_USUARIO = $TB_MARCAS_USUARIO;
        return $this;
    }

    public function getTBMARCASFECHADECREACION(): ?string {
        return $this->TB_MARCAS_FECHA_DE_CREACION;
    }

    public function setTBMARCASFECHADECREACION(?string $TB_MARCAS_FECHA_DE_CREACION): TBMARCAS {
        $this->TB_MARCAS_FECHA_DE_CREACION = $TB_MARCAS_FECHA_DE_CREACION;
        return $this;
    }

}