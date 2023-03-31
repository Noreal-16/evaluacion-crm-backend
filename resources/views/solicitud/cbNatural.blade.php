<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ public_path('css/solicitud_style.css') }}">
    <title>CASABACA</title>

</head>
<body>
    <img class="bb-width-100 bb-mb-30" src="{{ public_path('images/solicitud/cabecera-cb-natural.jpg') }}" alt="cabecera-logo-natural">
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
                <br><div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($solicitud->valor_financiar,2,".",",")}} </div></div>
            </td>
            <td>
                <table class="bb-width-100" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <div class="bb-mb-5 bb-border-btn bb-mr-5 bb-font-medium bb-py-2 bb-px-5  bb-text-label bb-text-gray">Plazo
                            <br><div class="bb-text-black bb-mt-3 bb-text-data">{{$solicitud->plazo}} meses</div></div>
                        </td>
                        <td valign="top">
                            <div class="bb-border-btn bb-py-2 bb-px-5   bb-font-medium bb-text-label bb-text-gray">Fecha de solicitud
                                <br><div class="bb-text-black bb-mt- bb-text-data">{{$solicitud->fecha_solicitud}}</div></div>
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
        <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Datos personales del cliente</div>
        <table class="bb-width-100" cellspacing="0" cellpadding="0">

            <tr>
                <td colspan="2" class="bb-width-33">
                    <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray ">Nombre completo
                        <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->nombres}} {{ $cliente->apellidos}}</div></div>
                </td>
                <td>
                    <div class="bb-width-33 bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray ">Nacionalidad
                        <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->nacionalidad}}</div></div>
                </td>
                <td class="bb-width-33" >
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
                <td colspan= "2">
                    <div class="bb-mb-5 bb-border-btn bb-mr-5 bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Nombre completo del cónyugue
                        <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->cyg_nombres}} {{$cliente->cyg_apellidos}}</div></div>
                </td>
                <td valign="top">
                    <div class="bb-border-btn bb-mr-5 bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Nacionalidad
                        <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->cyg_nacionalidad}}</div></div>
                </td>
                <td valign="top">
                    <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">No. cédula del cónyugue
                        <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->cyg_cedula}}</div></div>
                </td>
            </tr>

        </table>
    </div>

<!-- Formulario 3 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Datos de ubicación de domicilio</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Provincia
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{ App\Models\Provincia::where('id', $cliente->provincia)->first()->nombre }}</div></div>
            </td>
            <td >
                <div class="bb-mb-5 bb-border-btn bb-mr-5 bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Ciudad
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{ App\Models\Ciudad::where('id', $cliente->ciudad)->where('provincia_id', $cliente->provincia)->first()->nombre }}</div></div>
            </td>
            <td >
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Sector/Barrio
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->sector}}</div></div>
            </td>
        </tr>

        <tr >
            <td colspan= "3">
                <table class="bb-width-100">
                    <tr>
                        <td >
                            <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Calle principal
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->calle_principal}}</div></div>
                        </td>
                        <td>
                            <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">No.
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->no_casa}}</div></div>
                        </td>
                    </tr>
                </table>
            </td>

        </tr>
        <tr >
            <td colspan= "3">
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Calle secundaria
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->calle_secundaria}}</div></div>
            </td>
        </tr>

        <tr>
            <td  >
                <div class="bb-mb-5 bb-mr-5 bb-font-medium bb-border-btn bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray">No. teléfono fijo
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->telefono}}</div></div>
            </td>
            <td >
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">No. de celular
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->celular}}</div></div>
            </td>
            <td >
                <div class="bb-mb-5 bb-font-medium bb-border-btn bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray">Correo electrónico
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->correo}}</div></div>
            </td>
        </tr>



        <tr>
            <td >
                <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Su casa es
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->casa_tipo}}</div></div>
            </td>
            <td  >
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <div class="bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Tiempo de residencia
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->tiempo_residencia}} años</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<!-- Formulario 4 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Datos de trabajo / actividad económica del cliente</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <div class="bb-border-btn bb-mb-5 bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Situación Laboral
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->situacion_laboral}}</div></div>
            </td>
            <td></td>
        </tr>

        <tr >
            <td >
                <div class="bb-border-btn bb-mb-5 bb-mr-5 bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Nombre de la empresa
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->nombre}}</div></div>
            </td>
            <td  >
                <div class="bb-border-btn bb-mb-5 bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Actividad de empresa
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->actividad}}</div></div>
            </td>
        </tr>

        <tr>
            <td >
                <div class="bb-border-btn bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-font-medium bb-text-label bb-text-gray">Cargo
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->cargo}}</div></div>
            </td>
            <td >
                <table class="w-full" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <div class="bb-border-btn bb-mb-5 bb-mr-5 bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Tiempo de trabajo
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->tiempo_trabajo}} años</div>
                            </div>
                        </td>
                        <td  valign="top" class="bb-font-medium bb-text-data bb-mb-5 bb-mr-5" >
                            <table class="w-full" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div class="bb-font-medium bb-border-btn bb-text-label bb-mr-5 bb-border-btn bb-py-2 bb-px-5  bb-text-gray">Teléfono
                                            <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->telefono}}</div></div>
                                    </td>
                                    <td>
                                        <div class="bb-font-medium bb-border-btn bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray">ext.
                                            <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->ext_telefono}}</div></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Dirección empresa
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->direccion}}</div></div>
            </td>
        </tr>
    </table>
</div>
{{-- otro --}}
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Datos de trabajo / actividad económica del cónyugue</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <div class="bb-border-btn bb-mb-5 bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Situación Laboral
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->cyg_nombre}}</div></div>
            </td>
            <td></td>
        </tr>

        <tr >
            <td >
                <div class="bb-border-btn bb-mb-5 bb-mr-5 bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Nombre de la empresa
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->cyg_situacion_laboral}}</div></div>
            </td>
            <td  >
                <div class="bb-border-btn bb-mb-5 bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray">Actividad de empresa
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->cyg_actividad}}</div></div>
            </td>
        </tr>

        <tr>
            <td >
                <div class="bb-border-btn bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-font-medium bb-text-label bb-text-gray">Cargo
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->cyg_cargo}}</div></div>
            </td>
            <td >
                <table class="w-full" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <div class="bb-border-btn bb-mb-5 bb-border-btn bb-mr-5 bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Tiempo de trabajo
                                <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->cyg_tiempo_trabajo}} años</div>
                            </div>
                        </td>
                        <td align="center" valign="top" class="bb-font-medium bb-text-data bb-mb-5" >
                            <table class="w-full" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div class="bb-text-black bb-border-btn bb-text-label bb-mr-5 bb-border-btn bb-py-2 bb-px-5  bb-text-gray">Teléfono
                                            <div class="bb-font-medium bb-mt-3 bb-text-data">{{$empresa->cyg_telefono}}</div></div>
                                    </td>
                                    <td>
                                        <div class="bb-font-medium bb-border-btn bb-text-label bb-border-btn bb-py-2 bb-px-5  bb-text-gray">ext.
                                            <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->cyg_ext_telefono}}</div></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Dirección empresa
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$empresa->cyg_direccion}}</div></div>
            </td>
        </tr>
    </table>
</div>

<!-- Formulario 5 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" > Ingresos mensuales</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Sueldo/Ventas mensuales
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->sueldo_ventas,2,".",",")}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Otros ingresos
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->otros_ingresos,2,".",",")}}</div></div>
            </td><td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Total ingresos
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->ingreso_total,2,".",",")}}</div></div>
            </td>
        </tr>
        <tr>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Sueldo del cónyugue
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->cyg_sueldo,2,".",",")}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Total ingreso familiar
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->ingreso_familiar,2,".",",")}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Descripción otros ingresos
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$cliente->descripcion_otros_ingresos}}</div></div>
            </td>
        </tr>
    </table>
</div>
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" > Gastos / egresos mensuales </div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Alimentación
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->alimentacion,2,".",",")}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Arriendo / Vivienda
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->arriendo_vivienda,2,".",",")}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-text-gray">Entidades bancarias
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->entidades_bancarias,2,".",",")}}</div></div>
            </td>
        </tr>
        <tr>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Otros gastos
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->otros_gastos,2,".",",")}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-border-btn bb-py-2 bb-px-5  bb-font-medium bb-text-label bb-mr-5 bb-text-gray">Total gastos / egresos
                    <div class="bb-text-black bb-mt-3 bb-text-data">${{number_format($cliente->gastos_total,2,".",",")}}</div></div>
            </td>
        </tr>
    </table>
</div>
<!-- Formulario 6 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">

    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Situación patrimonial</div>
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


<!-- Formulario 7 -->
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Referencias bancarias</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td >
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Institución
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->institucion_1}}</div></div>
            </td>
            <td >
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Tipo de cuenta
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->cuenta_tipo_1}}</div></div>
            </td>
            <td >
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">No. de cuenta
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->no_cuenta_1}}</div></div>
            </td>
            <td >
                <div class="bb-mb-5 bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Tipo de Tarjeta de crédito
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->tarjeta_tipo_1}}</div></div>
            </td>
            <td ">
                <div class="bb-mb-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Emisor
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->banco_emisor_1}}</div></div>
            </td>
        </tr>
        <tr>
            <td >
                <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Institución
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->institucion_2}}</div></div>
            </td>
            <td >
                <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Tipo de cuenta
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->cuenta_tipo_2}}</div></div>
            </td>
            <td >
                <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">No. de cuenta
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->no_cuenta_2}}</div></div>
            </td>
            <td >
                <div class="bb-mr-5 bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Tipo de Tarjeta de crédito
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->tarjeta_tipo_2}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Emisor
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->banco_emisor_2}}</div></div>
            </td>
        </tr>

    </table>
</div>
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Referencias: 1 familiar y 2 personales</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Nombre completo
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->nombre_completo_1}}</div></div>
            </td>
            <td  >
                <div class= "bb-border-btn bb-font-medium bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Relación con el cliente
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->relacion_cliente_1}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Ciudad
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->ciudad_1}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Teléfono
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->telefono_1}}</div></div>
            </td>
        </tr>
        <tr>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Nombre completo
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->nombre_completo_2}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Relación con el cliente
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->relacion_cliente_2}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Ciudad
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->ciudad_2}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-mb-5 bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Teléfono
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->telefono_2}}</div></div>
            </td>
        </tr>
        <tr>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Nombre completo
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->nombre_completo_3}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Relación con el cliente
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->relacion_cliente_3}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Ciudad
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->ciudad_3}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Teléfono
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->telefono_3}}</div></div>
            </td>
        </tr>
    </table>
</div>
<div class="bb-max-width bb-mx-auto bb-width-100 bb-mb-5">
    <div class="bb-width-100 bb-text-title bb-font-semibold bb-mb-5" >Referencias comerciales</div>
    <table class="bb-width-100" cellspacing="0" cellpadding="0">
        <tr>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mb-5 bb-mr-5 bb-text-label bb-text-gray ">Empresa
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_nombre_1}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mb-5 bb-mr-5 bb-text-label bb-text-gray ">Ciudad
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_ciudad_1}}</div></div>
            </td>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mb-5 bb-text-label bb-text-gray ">Teléfono
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_telefono_1}}</div></div>
            </td>
        </tr>
        <tr>
            <td >
                <div class= "bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Empresa
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_nombre_2}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-mr-5 bb-text-label bb-text-gray ">Ciudad
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_ciudad_2}}</div></div>
            </td>
            <td >
                <div class="bb-border-btn bb-font-medium bb-border-btn bb-py-2 bb-px-5  bb-text-label bb-text-gray ">Teléfono
                    <div class="bb-text-black bb-mt-3 bb-text-data">{{$referencia->empresa_telefono_2}}</div></div>
            </td>
        </tr>
    </table>
</div>

<div class="absolute bottom-0">
    <table class="bb-width-100 bb-mb-60" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center">
                <div class="bb-text-label bb-font-semibold bb-border-btn bb-border-btn bb-py-2 bb-px-5 ">
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
    <table class="bb-width-75 bb-mx-auto bb-mb-30" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" class="bb-width-250">
                <div class="border-top bb-text-data bb-font-medium">
                    Firma
                </div>
            </td>
            <td style="width: 50px"></td>
            <td align="center" class="bb-width-250">
                <div class="border-top bb-text-data bb-font-medium">
                    Firma Cónyuge
                </div>
            </td>
        </tr>
    </table>
    <div class="bb-bg-red bb-p-10"></div>
</div>
</body>
</html>
