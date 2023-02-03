<?php

namespace Database\Class;

class TBCLIENTE implements \JsonSerializable {

    private ?int $TB_CUENTAS_CODIGO_CUENTA_FK = null;
    private ?string $TB_CLIENTE_TIPO_TERCERO = null;
    private ?string $TB_CLIENTE_RAZON_SOCIAL = null;
    private ?string $TB_CLIENTE_TIPO_DE_IDENTIFICACION = null;
    private ?int $CODIGO_CLIENTE_PK = null;
    private ?string $TB_CLIENTE_CODIGO_IDENTIFICACION = null;
    private ?string $TB_CLIENTE_PRIMER_APELLIDO = null;
    private ?string $TB_CLIENTE_SEGUNDO_APELLIDO = null;
    private ?string $TB_CLIENTE_PRIMER_NOMBRE = null;
    private ?string $TB_CLIENTE_SEGUNDO_NOMBRE = null;
    private ?string $TB_CLIENTE_PAIS = null;
    private ?string $TB_CLIENTE_DEPARTAMENTO = null;
    private ?string $TB_CLIENTE_CIUDAD = null;
    private ?string $TB_CLIENTE_DIRECCION = null;
    private ?string $TB_CLIENTE_BARRIO = null;
    private ?string $TB_CLIENTE_CODIGO_POSTAL = null;
    private ?string $TB_CLIENTE_TELEFONO = null;
    private ?string $TB_CLIENTE_CELULAR = null;
    private ?string $TB_CLIENTE_CORREO_ELECTRONICO = null;
    private ?string $TB_CLIENTE_CODIGO_CIIU = null;
    private ?string $TB_CLIENTE_OBSERVACION = null;
    private ?string $TB_CLIENTE_NOMBRE_CONTACTO = null;
    private ?string $TB_CLIENTE_TELEFONO_CONTACTO = null;
    private ?string $TB_CLIENTE_CORREO_ELECTRONICO_CONTACTO = null;
    private ?string $TB_CLIENTE_PLAZO_DE_PAGO = null;
    private ?string $TB_CLIENTE_CUPO_CREDITO = null;
    private ?string $TB_CLIENTE_PORCENTAJE_CREDITO = null;
    private ?string $TB_CLIENTE_CUENTA_BANCARIA = null;
    private ?string $TB_CLIENTE_TIPO_DE_CUENTA_BANCARIA = null;
    private ?string $TB_CLIENTE_INICIO_DE_OPERACION = null;
    private ?string $TB_CLIENTE_OPERADOR = null;
    private ?string $TB_CLIENTE_ESTADO = null;
    private ?string $TB_CLIENTE_FECHA_DE_CREACION = null;
    private ?string $TB_CLIENTE_ACCION = null;
    private ?string $TB_CLIENTE_COLOR = null;

    public function __construct() {

    }

    public function jsonSerialize(): mixed {
        return get_object_vars($this);
    }

    public static function formFields(): TBCLIENTE {
        $tbcliente = new TBCLIENTE();

        $tbcliente->setTBCUENTASCODIGOCUENTAFK(
            isset(request->TB_CUENTAS_CODIGO_CUENTA_FK) ? request->TB_CUENTAS_CODIGO_CUENTA_FK : null
        );

        $tbcliente->setTBCLIENTETIPOTERCERO(
            isset(request->TB_CLIENTE_TIPO_TERCERO) ? request->TB_CLIENTE_TIPO_TERCERO : null
        );

        $tbcliente->setTBCLIENTERAZONSOCIAL(
            isset(request->TB_CLIENTE_RAZON_SOCIAL) ? request->TB_CLIENTE_RAZON_SOCIAL : null
        );

        $tbcliente->setTBCLIENTETIPODEIDENTIFICACION(
            isset(request->TB_CLIENTE_TIPO_DE_IDENTIFICACION) ? request->TB_CLIENTE_TIPO_DE_IDENTIFICACION : null
        );

        $tbcliente->setCODIGOCLIENTEPK(
            isset(request->CODIGO_CLIENTE_PK) ? request->CODIGO_CLIENTE_PK : null
        );

        $tbcliente->setTBCLIENTECODIGOIDENTIFICACION(
            isset(request->TB_CLIENTE_CODIGO_IDENTIFICACION) ? request->TB_CLIENTE_CODIGO_IDENTIFICACION : null
        );

        $tbcliente->setTBCLIENTEPRIMERAPELLIDO(
            isset(request->TB_CLIENTE_PRIMER_APELLIDO) ? request->TB_CLIENTE_PRIMER_APELLIDO : null
        );

        $tbcliente->setTBCLIENTESEGUNDOAPELLIDO(
            isset(request->TB_CLIENTE_SEGUNDO_APELLIDO) ? request->TB_CLIENTE_SEGUNDO_APELLIDO : null
        );

        $tbcliente->setTBCLIENTEPRIMERNOMBRE(
            isset(request->TB_CLIENTE_PRIMER_NOMBRE) ? request->TB_CLIENTE_PRIMER_NOMBRE : null
        );

        $tbcliente->setTBCLIENTESEGUNDONOMBRE(
            isset(request->TB_CLIENTE_SEGUNDO_NOMBRE) ? request->TB_CLIENTE_SEGUNDO_NOMBRE : null
        );

        $tbcliente->setTBCLIENTEPAIS(
            isset(request->TB_CLIENTE_PAIS) ? request->TB_CLIENTE_PAIS : null
        );

        $tbcliente->setTBCLIENTEDEPARTAMENTO(
            isset(request->TB_CLIENTE_DEPARTAMENTO) ? request->TB_CLIENTE_DEPARTAMENTO : null
        );

        $tbcliente->setTBCLIENTECIUDAD(
            isset(request->TB_CLIENTE_CIUDAD) ? request->TB_CLIENTE_CIUDAD : null
        );

        $tbcliente->setTBCLIENTEDIRECCION(
            isset(request->TB_CLIENTE_DIRECCION) ? request->TB_CLIENTE_DIRECCION : null
        );

        $tbcliente->setTBCLIENTEBARRIO(
            isset(request->TB_CLIENTE_BARRIO) ? request->TB_CLIENTE_BARRIO : null
        );

        $tbcliente->setTBCLIENTECODIGOPOSTAL(
            isset(request->TB_CLIENTE_CODIGO_POSTAL) ? request->TB_CLIENTE_CODIGO_POSTAL : null
        );

        $tbcliente->setTBCLIENTETELEFONO(
            isset(request->TB_CLIENTE_TELEFONO) ? request->TB_CLIENTE_TELEFONO : null
        );

        $tbcliente->setTBCLIENTECELULAR(
            isset(request->TB_CLIENTE_CELULAR) ? request->TB_CLIENTE_CELULAR : null
        );

        $tbcliente->setTBCLIENTECORREOELECTRONICO(
            isset(request->TB_CLIENTE_CORREO_ELECTRONICO) ? request->TB_CLIENTE_CORREO_ELECTRONICO : null
        );

        $tbcliente->setTBCLIENTECODIGOCIIU(
            isset(request->TB_CLIENTE_CODIGO_CIIU) ? request->TB_CLIENTE_CODIGO_CIIU : null
        );

        $tbcliente->setTBCLIENTEOBSERVACION(
            isset(request->TB_CLIENTE_OBSERVACION) ? request->TB_CLIENTE_OBSERVACION : null
        );

        $tbcliente->setTBCLIENTENOMBRECONTACTO(
            isset(request->TB_CLIENTE_NOMBRE_CONTACTO) ? request->TB_CLIENTE_NOMBRE_CONTACTO : null
        );

        $tbcliente->setTBCLIENTETELEFONOCONTACTO(
            isset(request->TB_CLIENTE_TELEFONO_CONTACTO) ? request->TB_CLIENTE_TELEFONO_CONTACTO : null
        );

        $tbcliente->setTBCLIENTECORREOELECTRONICOCONTACTO(
            isset(request->TB_CLIENTE_CORREO_ELECTRONICO_CONTACTO) ? request->TB_CLIENTE_CORREO_ELECTRONICO_CONTACTO : null
        );

        $tbcliente->setTBCLIENTEPLAZODEPAGO(
            isset(request->TB_CLIENTE_PLAZO_DE_PAGO) ? request->TB_CLIENTE_PLAZO_DE_PAGO : null
        );

        $tbcliente->setTBCLIENTECUPOCREDITO(
            isset(request->TB_CLIENTE_CUPO_CREDITO) ? request->TB_CLIENTE_CUPO_CREDITO : null
        );

        $tbcliente->setTBCLIENTEPORCENTAJECREDITO(
            isset(request->TB_CLIENTE_PORCENTAJE_CREDITO) ? request->TB_CLIENTE_PORCENTAJE_CREDITO : null
        );

        $tbcliente->setTBCLIENTECUENTABANCARIA(
            isset(request->TB_CLIENTE_CUENTA_BANCARIA) ? request->TB_CLIENTE_CUENTA_BANCARIA : null
        );

        $tbcliente->setTBCLIENTETIPODECUENTABANCARIA(
            isset(request->TB_CLIENTE_TIPO_DE_CUENTA_BANCARIA) ? request->TB_CLIENTE_TIPO_DE_CUENTA_BANCARIA : null
        );

        $tbcliente->setTBCLIENTEINICIODEOPERACION(
            isset(request->TB_CLIENTE_INICIO_DE_OPERACION) ? request->TB_CLIENTE_INICIO_DE_OPERACION : null
        );

        $tbcliente->setTBCLIENTEOPERADOR(
            isset(request->TB_CLIENTE_OPERADOR) ? request->TB_CLIENTE_OPERADOR : null
        );

        $tbcliente->setTBCLIENTEESTADO(
            isset(request->TB_CLIENTE_ESTADO) ? request->TB_CLIENTE_ESTADO : null
        );

        $tbcliente->setTBCLIENTEFECHADECREACION(
            isset(request->TB_CLIENTE_FECHA_DE_CREACION) ? request->TB_CLIENTE_FECHA_DE_CREACION : null
        );

        $tbcliente->setTBCLIENTEACCION(
            isset(request->TB_CLIENTE_ACCION) ? request->TB_CLIENTE_ACCION : null
        );

        $tbcliente->setTBCLIENTECOLOR(
            isset(request->TB_CLIENTE_COLOR) ? request->TB_CLIENTE_COLOR : null
        );

        return $tbcliente;
    }

    public function getTBCUENTASCODIGOCUENTAFK(): ?int {
        return $this->TB_CUENTAS_CODIGO_CUENTA_FK;
    }

    public function setTBCUENTASCODIGOCUENTAFK(?int $TB_CUENTAS_CODIGO_CUENTA_FK): TBCLIENTE {
        $this->TB_CUENTAS_CODIGO_CUENTA_FK = $TB_CUENTAS_CODIGO_CUENTA_FK;
        return $this;
    }

    public function getTBCLIENTETIPOTERCERO(): ?string {
        return $this->TB_CLIENTE_TIPO_TERCERO;
    }

    public function setTBCLIENTETIPOTERCERO(?string $TB_CLIENTE_TIPO_TERCERO): TBCLIENTE {
        $this->TB_CLIENTE_TIPO_TERCERO = $TB_CLIENTE_TIPO_TERCERO;
        return $this;
    }

    public function getTBCLIENTERAZONSOCIAL(): ?string {
        return $this->TB_CLIENTE_RAZON_SOCIAL;
    }

    public function setTBCLIENTERAZONSOCIAL(?string $TB_CLIENTE_RAZON_SOCIAL): TBCLIENTE {
        $this->TB_CLIENTE_RAZON_SOCIAL = $TB_CLIENTE_RAZON_SOCIAL;
        return $this;
    }

    public function getTBCLIENTETIPODEIDENTIFICACION(): ?string {
        return $this->TB_CLIENTE_TIPO_DE_IDENTIFICACION;
    }

    public function setTBCLIENTETIPODEIDENTIFICACION(?string $TB_CLIENTE_TIPO_DE_IDENTIFICACION): TBCLIENTE {
        $this->TB_CLIENTE_TIPO_DE_IDENTIFICACION = $TB_CLIENTE_TIPO_DE_IDENTIFICACION;
        return $this;
    }

    public function getCODIGOCLIENTEPK(): ?int {
        return $this->CODIGO_CLIENTE_PK;
    }

    public function setCODIGOCLIENTEPK(?int $CODIGO_CLIENTE_PK): TBCLIENTE {
        $this->CODIGO_CLIENTE_PK = $CODIGO_CLIENTE_PK;
        return $this;
    }

    public function getTBCLIENTECODIGOIDENTIFICACION(): ?string {
        return $this->TB_CLIENTE_CODIGO_IDENTIFICACION;
    }

    public function setTBCLIENTECODIGOIDENTIFICACION(?string $TB_CLIENTE_CODIGO_IDENTIFICACION): TBCLIENTE {
        $this->TB_CLIENTE_CODIGO_IDENTIFICACION = $TB_CLIENTE_CODIGO_IDENTIFICACION;
        return $this;
    }

    public function getTBCLIENTEPRIMERAPELLIDO(): ?string {
        return $this->TB_CLIENTE_PRIMER_APELLIDO;
    }

    public function setTBCLIENTEPRIMERAPELLIDO(?string $TB_CLIENTE_PRIMER_APELLIDO): TBCLIENTE {
        $this->TB_CLIENTE_PRIMER_APELLIDO = $TB_CLIENTE_PRIMER_APELLIDO;
        return $this;
    }

    public function getTBCLIENTESEGUNDOAPELLIDO(): ?string {
        return $this->TB_CLIENTE_SEGUNDO_APELLIDO;
    }

    public function setTBCLIENTESEGUNDOAPELLIDO(?string $TB_CLIENTE_SEGUNDO_APELLIDO): TBCLIENTE {
        $this->TB_CLIENTE_SEGUNDO_APELLIDO = $TB_CLIENTE_SEGUNDO_APELLIDO;
        return $this;
    }

    public function getTBCLIENTEPRIMERNOMBRE(): ?string {
        return $this->TB_CLIENTE_PRIMER_NOMBRE;
    }

    public function setTBCLIENTEPRIMERNOMBRE(?string $TB_CLIENTE_PRIMER_NOMBRE): TBCLIENTE {
        $this->TB_CLIENTE_PRIMER_NOMBRE = $TB_CLIENTE_PRIMER_NOMBRE;
        return $this;
    }

    public function getTBCLIENTESEGUNDONOMBRE(): ?string {
        return $this->TB_CLIENTE_SEGUNDO_NOMBRE;
    }

    public function setTBCLIENTESEGUNDONOMBRE(?string $TB_CLIENTE_SEGUNDO_NOMBRE): TBCLIENTE {
        $this->TB_CLIENTE_SEGUNDO_NOMBRE = $TB_CLIENTE_SEGUNDO_NOMBRE;
        return $this;
    }

    public function getTBCLIENTEPAIS(): ?string {
        return $this->TB_CLIENTE_PAIS;
    }

    public function setTBCLIENTEPAIS(?string $TB_CLIENTE_PAIS): TBCLIENTE {
        $this->TB_CLIENTE_PAIS = $TB_CLIENTE_PAIS;
        return $this;
    }

    public function getTBCLIENTEDEPARTAMENTO(): ?string {
        return $this->TB_CLIENTE_DEPARTAMENTO;
    }

    public function setTBCLIENTEDEPARTAMENTO(?string $TB_CLIENTE_DEPARTAMENTO): TBCLIENTE {
        $this->TB_CLIENTE_DEPARTAMENTO = $TB_CLIENTE_DEPARTAMENTO;
        return $this;
    }

    public function getTBCLIENTECIUDAD(): ?string {
        return $this->TB_CLIENTE_CIUDAD;
    }

    public function setTBCLIENTECIUDAD(?string $TB_CLIENTE_CIUDAD): TBCLIENTE {
        $this->TB_CLIENTE_CIUDAD = $TB_CLIENTE_CIUDAD;
        return $this;
    }

    public function getTBCLIENTEDIRECCION(): ?string {
        return $this->TB_CLIENTE_DIRECCION;
    }

    public function setTBCLIENTEDIRECCION(?string $TB_CLIENTE_DIRECCION): TBCLIENTE {
        $this->TB_CLIENTE_DIRECCION = $TB_CLIENTE_DIRECCION;
        return $this;
    }

    public function getTBCLIENTEBARRIO(): ?string {
        return $this->TB_CLIENTE_BARRIO;
    }

    public function setTBCLIENTEBARRIO(?string $TB_CLIENTE_BARRIO): TBCLIENTE {
        $this->TB_CLIENTE_BARRIO = $TB_CLIENTE_BARRIO;
        return $this;
    }

    public function getTBCLIENTECODIGOPOSTAL(): ?string {
        return $this->TB_CLIENTE_CODIGO_POSTAL;
    }

    public function setTBCLIENTECODIGOPOSTAL(?string $TB_CLIENTE_CODIGO_POSTAL): TBCLIENTE {
        $this->TB_CLIENTE_CODIGO_POSTAL = $TB_CLIENTE_CODIGO_POSTAL;
        return $this;
    }

    public function getTBCLIENTETELEFONO(): ?string {
        return $this->TB_CLIENTE_TELEFONO;
    }

    public function setTBCLIENTETELEFONO(?string $TB_CLIENTE_TELEFONO): TBCLIENTE {
        $this->TB_CLIENTE_TELEFONO = $TB_CLIENTE_TELEFONO;
        return $this;
    }

    public function getTBCLIENTECELULAR(): ?string {
        return $this->TB_CLIENTE_CELULAR;
    }

    public function setTBCLIENTECELULAR(?string $TB_CLIENTE_CELULAR): TBCLIENTE {
        $this->TB_CLIENTE_CELULAR = $TB_CLIENTE_CELULAR;
        return $this;
    }

    public function getTBCLIENTECORREOELECTRONICO(): ?string {
        return $this->TB_CLIENTE_CORREO_ELECTRONICO;
    }

    public function setTBCLIENTECORREOELECTRONICO(?string $TB_CLIENTE_CORREO_ELECTRONICO): TBCLIENTE {
        $this->TB_CLIENTE_CORREO_ELECTRONICO = $TB_CLIENTE_CORREO_ELECTRONICO;
        return $this;
    }

    public function getTBCLIENTECODIGOCIIU(): ?string {
        return $this->TB_CLIENTE_CODIGO_CIIU;
    }

    public function setTBCLIENTECODIGOCIIU(?string $TB_CLIENTE_CODIGO_CIIU): TBCLIENTE {
        $this->TB_CLIENTE_CODIGO_CIIU = $TB_CLIENTE_CODIGO_CIIU;
        return $this;
    }

    public function getTBCLIENTEOBSERVACION(): ?string {
        return $this->TB_CLIENTE_OBSERVACION;
    }

    public function setTBCLIENTEOBSERVACION(?string $TB_CLIENTE_OBSERVACION): TBCLIENTE {
        $this->TB_CLIENTE_OBSERVACION = $TB_CLIENTE_OBSERVACION;
        return $this;
    }

    public function getTBCLIENTENOMBRECONTACTO(): ?string {
        return $this->TB_CLIENTE_NOMBRE_CONTACTO;
    }

    public function setTBCLIENTENOMBRECONTACTO(?string $TB_CLIENTE_NOMBRE_CONTACTO): TBCLIENTE {
        $this->TB_CLIENTE_NOMBRE_CONTACTO = $TB_CLIENTE_NOMBRE_CONTACTO;
        return $this;
    }

    public function getTBCLIENTETELEFONOCONTACTO(): ?string {
        return $this->TB_CLIENTE_TELEFONO_CONTACTO;
    }

    public function setTBCLIENTETELEFONOCONTACTO(?string $TB_CLIENTE_TELEFONO_CONTACTO): TBCLIENTE {
        $this->TB_CLIENTE_TELEFONO_CONTACTO = $TB_CLIENTE_TELEFONO_CONTACTO;
        return $this;
    }

    public function getTBCLIENTECORREOELECTRONICOCONTACTO(): ?string {
        return $this->TB_CLIENTE_CORREO_ELECTRONICO_CONTACTO;
    }

    public function setTBCLIENTECORREOELECTRONICOCONTACTO(?string $TB_CLIENTE_CORREO_ELECTRONICO_CONTACTO): TBCLIENTE {
        $this->TB_CLIENTE_CORREO_ELECTRONICO_CONTACTO = $TB_CLIENTE_CORREO_ELECTRONICO_CONTACTO;
        return $this;
    }

    public function getTBCLIENTEPLAZODEPAGO(): ?string {
        return $this->TB_CLIENTE_PLAZO_DE_PAGO;
    }

    public function setTBCLIENTEPLAZODEPAGO(?string $TB_CLIENTE_PLAZO_DE_PAGO): TBCLIENTE {
        $this->TB_CLIENTE_PLAZO_DE_PAGO = $TB_CLIENTE_PLAZO_DE_PAGO;
        return $this;
    }

    public function getTBCLIENTECUPOCREDITO(): ?string {
        return $this->TB_CLIENTE_CUPO_CREDITO;
    }

    public function setTBCLIENTECUPOCREDITO(?string $TB_CLIENTE_CUPO_CREDITO): TBCLIENTE {
        $this->TB_CLIENTE_CUPO_CREDITO = $TB_CLIENTE_CUPO_CREDITO;
        return $this;
    }

    public function getTBCLIENTEPORCENTAJECREDITO(): ?string {
        return $this->TB_CLIENTE_PORCENTAJE_CREDITO;
    }

    public function setTBCLIENTEPORCENTAJECREDITO(?string $TB_CLIENTE_PORCENTAJE_CREDITO): TBCLIENTE {
        $this->TB_CLIENTE_PORCENTAJE_CREDITO = $TB_CLIENTE_PORCENTAJE_CREDITO;
        return $this;
    }

    public function getTBCLIENTECUENTABANCARIA(): ?string {
        return $this->TB_CLIENTE_CUENTA_BANCARIA;
    }

    public function setTBCLIENTECUENTABANCARIA(?string $TB_CLIENTE_CUENTA_BANCARIA): TBCLIENTE {
        $this->TB_CLIENTE_CUENTA_BANCARIA = $TB_CLIENTE_CUENTA_BANCARIA;
        return $this;
    }

    public function getTBCLIENTETIPODECUENTABANCARIA(): ?string {
        return $this->TB_CLIENTE_TIPO_DE_CUENTA_BANCARIA;
    }

    public function setTBCLIENTETIPODECUENTABANCARIA(?string $TB_CLIENTE_TIPO_DE_CUENTA_BANCARIA): TBCLIENTE {
        $this->TB_CLIENTE_TIPO_DE_CUENTA_BANCARIA = $TB_CLIENTE_TIPO_DE_CUENTA_BANCARIA;
        return $this;
    }

    public function getTBCLIENTEINICIODEOPERACION(): ?string {
        return $this->TB_CLIENTE_INICIO_DE_OPERACION;
    }

    public function setTBCLIENTEINICIODEOPERACION(?string $TB_CLIENTE_INICIO_DE_OPERACION): TBCLIENTE {
        $this->TB_CLIENTE_INICIO_DE_OPERACION = $TB_CLIENTE_INICIO_DE_OPERACION;
        return $this;
    }

    public function getTBCLIENTEOPERADOR(): ?string {
        return $this->TB_CLIENTE_OPERADOR;
    }

    public function setTBCLIENTEOPERADOR(?string $TB_CLIENTE_OPERADOR): TBCLIENTE {
        $this->TB_CLIENTE_OPERADOR = $TB_CLIENTE_OPERADOR;
        return $this;
    }

    public function getTBCLIENTEESTADO(): ?string {
        return $this->TB_CLIENTE_ESTADO;
    }

    public function setTBCLIENTEESTADO(?string $TB_CLIENTE_ESTADO): TBCLIENTE {
        $this->TB_CLIENTE_ESTADO = $TB_CLIENTE_ESTADO;
        return $this;
    }

    public function getTBCLIENTEFECHADECREACION(): ?string {
        return $this->TB_CLIENTE_FECHA_DE_CREACION;
    }

    public function setTBCLIENTEFECHADECREACION(?string $TB_CLIENTE_FECHA_DE_CREACION): TBCLIENTE {
        $this->TB_CLIENTE_FECHA_DE_CREACION = $TB_CLIENTE_FECHA_DE_CREACION;
        return $this;
    }

    public function getTBCLIENTEACCION(): ?string {
        return $this->TB_CLIENTE_ACCION;
    }

    public function setTBCLIENTEACCION(?string $TB_CLIENTE_ACCION): TBCLIENTE {
        $this->TB_CLIENTE_ACCION = $TB_CLIENTE_ACCION;
        return $this;
    }

    public function getTBCLIENTECOLOR(): ?string {
        return $this->TB_CLIENTE_COLOR;
    }

    public function setTBCLIENTECOLOR(?string $TB_CLIENTE_COLOR): TBCLIENTE {
        $this->TB_CLIENTE_COLOR = $TB_CLIENTE_COLOR;
        return $this;
    }

}