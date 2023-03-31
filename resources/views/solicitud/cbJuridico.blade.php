<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ public_path('css/solicitud_style.css') }}">
    <title>CASABACA PERSONA JURÍDICA</title>

</head>
<body>

    <img class="bb-width-100 bb-mb-30" src="{{ public_path('images/solicitud/cabecera-cb-juridica.jpg') }}" alt="cabecera-logo-casabaca">
<!-- /*   Fin Cabecera   */ -->

<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-font-semibold bb-mb-5 bb-text-title" >Datos Generales</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="2">
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Producto
                <br><div class="bb-text-black bb-mt-3 bb-text-data">{{ $solicitud->producto }}</div></div>
            </td>
            <td>
                <div class="bb-mb-5 bb-mr-5 bb-font-medium bb-text-label bb-py-2 bb-px-5 bb-border-btn bb-text-gray">ID de Cotización
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{ $solicitud->id_cotizacion }}</div>
                </div>
            </td>
            <td>
                <div class="bb-mb-5 bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Tipo de financiación
                <br><div class="bb-text-black bb-mt-3 bb-text-data">{{ $solicitud->tipo_financiamiento }}</div></div>
            </td>
        </tr>

        <tr >
            <td>
                <div class="bb-mb-5 bb-border-btn bb-mr-5 bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Valor de Producto
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($solicitud->valor_producto,2,".",",")}}</div></div>
            </td>
            <td>
                <div class="bb-mb-5 bb-border-btn bb-mr-5 bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Entrada
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($solicitud->entrada,2,".",",")}}</div></div></td>
            <td>
                <div class="bb-mb-5 bb-border-btn bb-mr-5 bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Valor a financiar
                <br><div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($solicitud->valor_financiar,2,".",",")}}</div></div>
            </td>
            <td>
                <table class="bb-width-100" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <div class="bb-mb-5 bb-border-btn bb-mr-5 bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Plazo
                            <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$solicitud->plazo}} meses</div></div>
                        </td>
                        <td  valign="top" class="bb-font-medium bb-text-data bb-mb-5">
                            <div class="bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-font-medium bb-text-label bb-text-gray">Fecha de solicitud
                                <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$solicitud->fecha_solicitud}}</div></div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div class="bb-font-medium bb-mr-5 bb-border-btn bb-text-label bb-py-2 bb-px-5  bb-text-gray">Asesor
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$solicitud->asesor}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-font-medium bb-text-label bb-text-gray">Agencia
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$solicitud->agencia}}</div></div>
            </td>
        </tr>
    </table>
</div>

<!-- Formulario 2 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Datos de la empresa</div>
        <table class="bb-width-100" cellspacing="0" cellpadding="0">
            <tr>
                <td >
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-mb-5 bb-text-label bb-text-gray ">Razón social
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->razon_social}}</div></div>
                </td>
            </tr>
            <tr>
                <td >
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-mb-5 bb-text-label bb-text-gray ">Actividad económica
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->actividad_economica}}</div></div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-mb-5 bb-text-label bb-text-gray ">Número de RUC
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->ruc}}</div></div>
                </td>
            </tr>
        </table>
        <table cellspacing="0" cellpadding="0">
            <tr>
                <td  >
                    <div class="bb-font-medium bb-text-title bb-mr-5 bb-text-black">Tiempo de constitución</div>
                </td>
                <td>
                    <table class="bb-mr-5" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="bb-border-btn bb-font-medium bb-text-data bb-text-black" style="padding: 8px 10px">{{$empresa->cosntitucion_anios}}</td>
                                <td class="bb-border-btn bb-font-medium bb-text-data "  style="padding: 5.5px 10px;">años</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="bb-border-btn bb-font-medium bb-text-data bb-text-black" style="padding: 8px 10px">{{$empresa->cosntitucion_meses}}</td>
                                <td class=" bb-font-medium bb-text-data"  style="border-bottom: 1px solid gray; padding: 5.5px 10px;">meses</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>
<!-- Formulario 3 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Datos de ubicación de la empresa</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td class="bb-width-100">
                <div class=" bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-mr-5 bb-mb-5 bb-text-label bb-text-gray">Provincia
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{ App\Models\Provincia::where('id', $empresa->provincia)->first()->nombre }}</div></div>
            </td>
            <td class="bb-width-100">
                @if ( $empresa->ciudad != null)
                    <div class=" bb-border-btn bb-mr-5 bb-font-medium bb-py-2 bb-px-5  bb-mb-5 bb-text-label bb-text-gray">Ciudad
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{ App\Models\Ciudad::where('id', $empresa->ciudad)->where('provincia_id', $empresa->provincia)->first()->nombre }}</div></div>
                @endif
            </td>
            <td class="bb-width-100">
                <div class=" bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-mr-5 bb-mb-5 bb-text-label bb-text-gray">Sector/Barrio
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->sector}}</div></div>
            </td>
        </tr>

        <tr >
            <td colspan="2">
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-mr-5 bb-mb-5 bb-text-label bb-text-gray">Calle principal
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->calle_principal}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-mr-5 bb-mb-5 bb-text-label bb-text-gray">No.
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->no_casa}}</div></div>
            </td>

        </tr>

        <tr>
            <td colspan="3">
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-mb-5 bb-text-label bb-text-gray">Calle secundaria
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->calle_secundaria}}</div></div>
            </td>
        </tr>

        <tr>
            <td  >
                <div class="bb-font-medium bb-border-btn bb-text-label bb-mr-5 bb-py-2 bb-px-5  bb-mb-5 bb-text-gray">No. teléfono fijo
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->telefono}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-mr-5 bb-mb-5 bb-text-label bb-text-gray">No. de celular
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->celular}}</div>
                </div>
            </td>
            <td >
                <div class="bb-font-medium bb-border-btn bb-text-label bb-py-2 bb-px-5  bb-mb-5 bb-text-gray">Correo electrónico
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->correo}}</div>
                </div>
            </td>
        </tr>

        <tr>
            <td  >
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray">Instalaciones
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->instalaciones}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Número de sucursales
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->sucursales}}</div></div>
            </td>
        </tr>
    </table>
</div>
<!-- Formulario 4 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Datos de representante legal</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">

        <tr>
            <td class="bb-width-33">
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray ">Nombre completo
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->nombre_completo}}</div></div>
            </td>
            <td class="bb-width-33">
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray ">Nacionalidad
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->nacionalidad}}</div></div>
            </td>
            <td  class="bb-width-33" >
                @if ($cliente->tipo_identificacion == 'CEDULA')
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">No. de cédula
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->num_identificacion}}</div></div>
                @endif
                @if ($cliente->tipo_identificacion == 'PASAPORTE')
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">No. de pasaporte
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->num_identificacion}}</div></div>
                @endif
                @if ($cliente->tipo_identificacion == 'RUC')
                <div class="bb-mb-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">RUC
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->num_identificacion}}</div></div>
                @endif
            </td>
        </tr>

        <tr>
            <td>
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Estado Civil
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->civil}}</div></div>
            </td>
            <td>
                <div class="bb-mb-5 bb-mr-5 bb-font-medium bb-border-btn bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray">Separación de bienes
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->separacion_bienes}}</div></div>
            </td>
            <td>
                <div class="bb-mb-5 bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Cargas familiares
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->carga_familiar}}</div></div>
            </td>
        </tr>

        <tr>
            <td >
                <div class="bb-mb-5 bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Nombre completo del cónyugue
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->cyg_nombres}} {{$cliente->cyg_apellidos}}</div></div>
            </td>
            <td align="top" >
                <div class="bb-border-btn bb-mr-5 bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Nacionalidad
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->cyg_nacionalidad}}</div></div>
            </td>
            <td align="top">
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">No. cédula del cónyugue
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->cyg_cedula}}</div></div>
            </td>
        </tr>
    </table>
</div>
<!-- Formulario 5 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Datos de ubicación del represente legal</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td >
                <div class="bb-width-33 bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-mr-5 bb-mb-5 bb-text-gray">Provincia
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{ App\Models\Provincia::where('id', $cliente->provincia)->first()->nombre }}</div></div>
            </td>
            <td >
                @if ($cliente->ciudad)
                    <div class="bb-width-33 bb-border-btn bb-mr-5 bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-mb-5 bb-text-gray">Ciudad
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{ App\Models\Ciudad::where('id', $cliente->ciudad)->where('provincia_id', $cliente->provincia)->first()->nombre }}</div></div>
                @endif
            </td>
            <td >
                <div class="bb-width-33 bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-mb-5 bb-text-gray">Sector/Barrio
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->sector}}</div></div>
            </td>
        </tr>

        <tr >
            <td colspan="2">
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-mr-5 bb-mb-5 bb-text-gray">Calle principal
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->calle_principal}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-mr-5 bb-mb-5 bb-text-gray">No.
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->no_casa}}</div></div>
            </td>

        </tr>
        <tr>
            <td colspan="3">
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-mb-5 bb-text-gray">Calle secundaria
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->calle_secundaria}}</div></div>
            </td>
        </tr>

        <tr>
            <td  >
                <div class="bb-font-medium bb-border-btn bb-text-label bb-mr-5 bb-py-2 bb-px-5  bb-mb-5 bb-text-gray">No. teléfono fijo
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->telefono}}</div></div>
            </td>
            <td  >
                <div class="bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-mb-5 bb-text-gray">No. de celular
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->celular}}</div></div>
            </td>
            <td >
                <div class="bb-font-medium bb-border-btn bb-text-label bb-py-2 bb-px-5  bb-mb-5 bb-text-gray">Correo electrónico
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->correo}}</div></div>
            </td>
        </tr>

        <tr>
            <td >
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-mr-5 bb-text-gray">Su casa es
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->casa_tipo}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-mr-5 bb-text-gray">Tiempo de residencia
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->tiempo_residencia}} años</div></div>
            </td>
        </tr>
    </table>
</div>

<!-- Formulario 6 -->
<div class="bb-max-width bb-mx-auto bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Situación económica</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td style="width: 115px">
                <div class="bb-font-medium bb-form-text bb-text-data bb-text-black bb-text-center bb-pb-4 ">
                    <span>Total activos</span>
                </div>
            </td>
            <td colspan="2" class="bb-px-5 bb-py-2 bb-pr-none bb-width-18">
                <div class=" bb-border-btn bb-font-medium bb-form-text bb-text-data bb-text-gray ">${{number_format($empresa->total_pasivos,2,".",",")}}</div>
            </td>
            <td style="width: 115px">
                <div class="bb-font-medium bb-form-text bb-text-data bb-text-black bb-text-center bb-pb-4">
                    <span >Total pasivos</span>
                </div>
            </td>
            <td colspan="2" class="bb-px-5 bb-py-5 bb-pr-none bb-width-18">
                <div class="bb-border-btn bb-font-medium bb-form-text bb-text-data bb-text-gray">${{number_format($empresa->total_activos,2,".",",")}}</div>
            </td>
            <td style="width: 115px">
                <div class="bb-font-medium bb-form-text bb-text-data bb-text-black bb-text-center bb-pb-4">
                    <span > Total patrimonio</span>
                </div>
            </td>
            <td colspan="2" class="bb-px-5 bb-py-5 bb-pr-none bb-width-18">
                <div class="bb-border-btn bb-font-medium bb-form-text bb-text-data bb-text-gray">${{number_format($empresa->total_patrimonio,2,".",",")}}</div>
            </td>
        </tr>
    </table>
    <table class="bb-width-100"><tr><td class="bb-border-btg bb-width-100 bb-py-5 bb-px-5"></td></tr></table>

    <div class="bb-width-100">
        <div class="bb-width-100 bb-text-title bb-font-semibold bb-mt-15 bb-mb-5" >Situación patrimonial</div>
        @foreach ($patrimonios as $value)
            @if ($value->patrimonio_tipo == 'B')
                <table class="bb-width-100 bb-mb-5" cellspacing="0" cellpadding="0">
                    <tr >
                        <td >
                            <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Bienes/Inmuebles
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->bien_inmueble}}</div></div>
                        </td>
                        <td >
                            <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Ciudad/Dirección
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->ciudad_direccion}}</div></div>
                        </td>
                        <td >
                            <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Valor comercial
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->valor_comercial}}</div></div>
                        </td>
                        <td>
                            <div class="bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Hipotecado
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->hipotecado}}</div></div>
                        </td>
                    </tr>
                </table>
                <table class="bb-width-100"><tr><td class="bb-border-btg bb-py-5 bb-px-5 "></td></tr></table>
            @endif
            @if ($value->patrimonio_tipo == 'V')
                <table class="bb-width-100" cellspacing="0" cellpadding="0">
                    <tr>
                        <td >
                            <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Marca vehículo
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->marca_vehiculo}}</div></div>
                        </td>
                        <td >
                            <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Modelo
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->modelo_vehiculo}}</div></div>
                        </td>
                        <td >
                            <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Año
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->anio}}</div></div>
                        </td>
                        <td >
                            <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Valor comercial
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->valor_comercial}}</div></div>
                        </td>
                        <td >
                            <div class="bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Prendado
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$value->prendado}}</div></div>
                        </td>
                    </tr>
                </table>
                <table class="bb-width-100"><tr><td class="bb-border-btg bb-py-5 bb-px-5 "></td></tr></table>
            @endif
        @endforeach

    </div>
</div>

<!-- Formulario 7 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold" >Referencias bancarias</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td class="bb-px-5 bb-py-5 bb-pl-none bb-width-20 ">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Institución
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->institucion_1}}</div></div>
            </td>
            <td  class="bb-px-5 bb-py-5 bb-width-20 ">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Tipo de cuenta
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->cuenta_tipo_1}}</div></div>
            </td>
            <td class="bb-px-5 bb-py-5 bb-width-17  ">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">No. de cuenta
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->no_cuenta_1}}</div></div>
            </td>
            <td class="bb-px-5 bb-py-5 bb-width-25 ">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Tipo de Tarjeta de crédito
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->tarjeta_tipo_1}}</div></div>
            </td>
            <td class="bb-px-5 bb-py-5  bb-pr-none  bb-width-17">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Emisor
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->banco_emisor_1}}</div></div>
            </td>
        </tr>
        <tr>
            <td class="bb-px-5 bb-py-5 bb-pl-none bb-width-20 ">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Institución
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->institucion_2}}</div></div>
            </td>
            <td  class="bb-px-5 bb-py-5 bb-width-20 ">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Tipo de cuenta
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->cuenta_tipo_2}}</div></div>
            </td>
            <td class="bb-px-5 bb-py-5 bb-width-17 ">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">No. de cuenta
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->no_cuenta_2}}</div></div>
            </td>
            <td class="bb-px-5 bb-py-5 bb-width-25">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Tipo de Tarjeta de crédito
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->tarjeta_tipo_2}}</div></div>
            </td>
            <td class="bb-px-5 bb-py-5  bb-pr-none bb-width-17 ">
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Emisor
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->banco_emisor_2}}</div></div>
            </td>
        </tr>
    </table>

    <div>
        <div class="bb-width-100 bb-text-title bb-font-semibold bb-mt-15" >Referencias comerciales</div>
        <table class="bb-width-100" cellspacing="0" cellpadding="0">
            <tr >
                <td class="bb-px-5 bb-py-5 bb-pl-none bb-width-40">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Empresa
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_nombre_1}}</div></div>
                </td>
                <td  class="bb-px-5 bb-py-5 bb-width-30 ">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Ciudad
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_ciudad_1}}</div></div>
                </td>
                <td class="bb-px-5 bb-py-5 bb-width-30 ">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Teléfono
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_telefono_1}}</div></div>
                </td>
            </tr>
            <tr >
                <td class="bb-px-5 bb-py-5 bb-pl-none ">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Empresa
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_nombre_2}}</div></div>
                </td>
                <td  class="bb-px-5 bb-py-5  ">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Ciudad
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_ciudad_2}}</div></div>
                </td>
                <td class="bb-px-5 bb-py-5  ">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Teléfono
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_telefono_2}}</div></div>
                </td>
            </tr>
            <tr >
                <td class="bb-px-5 bb-py-5 bb-pl-none ">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Empresa
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_nombre_3}}</div></div>
                </td>
                <td  class="bb-px-5 bb-py-5  ">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Ciudad
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_ciudad_3}}</div></div>
                </td>
                <td class="bb-px-5 bb-py-5  ">
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Teléfono<br>
                        <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_telefono_3}}</div></div>
                </td>
            </tr>
        </table>
    </div>

</div>

<!-- Formulario 8 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold " >Responsable de compras</div>
    <table class="bb-width-100">
        <tr>
            <td colspan="4" >
                <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Nombre completo
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->compra_nombre_completo}}</div></div>
            </td>
            <td colspan="4" class="bb-px-5 bb-py-5">
                <div class=" bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Correo electrónico
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->compra_correo}}</div></div>
            </td>
        </tr>
        <tr >
            <td colspan="2" >
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Celular
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->compra_celular}}</div></div>
            </td>
            <td colspan="2" class="bb-px-5 bb-py-5">
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Teléfono
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->compra_telefono}}</div></div>
            </td>
            <td class="bb-px-5 bb-py-5 bb-pr-none bb-width-13">
                <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Ext.
                    <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->compra_ext_telefono}}</div></div>
            </td>
            <td class="bb-width-36"></td>
        </tr>
    </table>
    <div >
        <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Responsable de pagos</div>
        <table class="bb-width-100">
            <tr>
                <td colspan="4" >
                    <div class= "bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Nombre completo
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->pago_nombre_completo}}</div></div>
                </td>
                <td colspan="4" class="bb-px-5 bb-py-5">
                    <div class=" bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Correo electrónico
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->pago_correo}}</div></div>
                </td>
            </tr>
            <tr >
                <td colspan="2" >
                    <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Celular
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->pago_celular}}</div></div>
                </td>
                <td colspan="2" class="bb-px-5 bb-py-5">
                    <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Teléfono
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->pago_telefono}}</div></div>
                </td>
                <td class="bb-px-5 bb-py-5 bb-pr-none bb-width-13">
                    <div class="bb-border-btn bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Ext.
                        <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->pago_ext_telefono}}</div></div>
                </td>
                <td class="bb-width-36"><div></div></td>
            </tr>
        </table>
    </div>
</div>

<div class="absolute bottom-0">
    <table class="bb-width-100 bb-mb-60" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center">
                <div class="bb-text-label bb-font-semibold bb-border-btn bb-py-2 bb-px-5 ">
                    DECLARACIÓN Y AUTORIZACIÓN DE CONSULTA DE BURÓ DE CRÉDITO:
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="bb-text-10 bb-px-10 bb-font-medium">
                    Declaro (amos) y me (nos) responsabilizo (amos) de que toda la información contenida en esta solicitud es correcta. Así mismo para facilitar el proceso de mi solicitud de crédito, expresamente autorizo (amos) a Casabaca S.A., Importadora Tomebamba S.A., Comprasigma S.A., así como cualquier otra institución legalmente constituida del sistema financiero y no financiero que el cliente escoja para obtener su crédito,  mecanismos de compra de cartera o compra programada, para que obtenga(n) de cualquier fuente de información cuantas veces sean necesarias, referencias relativas a mi (nuestras) obligaciones incluida la Central de Riesgos y Burós de Información Crediticia autorizados para operar en el país, mis referencias personales y/o patrimoniales anteriores o posteriores a la suscripción de esta autorización, sea como deudor principal, codeudor o garante, sobre mi comportamiento crediticio, manejo de mi(s) cuenta(s), corriente(s), de ahorro, tarjetas de crédito, etc., y en general al cumplimiento de mis obligaciones y demás activos, pasivos, datos personales y/o patrimoniales, aplicables para uno o más de los servicios y productos que brindan las Instituciones del Sistema Financiero y no financiero, que sean compradores de cartera, según corresponda; así mismo autorizamos también a que se proporcione información a (de) sociedades de información crediticia autorizadas, burós de crédito o cualquier de naturaleza similar sobre operaciones de crédito y otras análogas que haya (amos) celebrado o celebre (emos); así también para que se realicen visitas domiciliarias, del negocio o empresa si fuera del caso.
                </div>
            </td>
        </tr>
    </table>
    <table class="bb-mx-auto bb-mb-20" style="width: 350px" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center">
                <div class="border-top bb-text-data bb-font-medium">
                    Firma y Sello Representante Legal
                </div>
            </td>
        </tr>
    </table>
    <div class="bb-bg-red bb-p-10"></div>
</div>
</body>
</html>
