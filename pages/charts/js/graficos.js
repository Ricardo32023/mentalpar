
  function graficoGenero(a,b) {
   $('#dGenero1').html(a);
   $('#dGenero2').html(b);
    var donutData = [
      { label: 'Masculino', data: a, color: '#BD4E4D' },
      { label: 'Femenino', data: b, color: '#0073b7' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
	  labelb="";
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + labelb
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }


  /*
   * GRAFICO ETAREO
   * ----------------------
   */

 function graficoEtareo(a,b,c,d,e) {

   $('#dEtareo1').html(a);
   $('#dEtareo2').html(b);
   $('#dEtareo3').html(c);
   $('#dEtareo4').html(d);
   $('#dEtareo5').html(e);

   var etareoData = [
    { label: 'Menos de 20', data: a, color: '#0073b7' },
	  { label: 'De 20 a 30 a\u00F1os', data: b, color: '#7D629F' },
    { label: 'de 31 a 40 a\u00F1os', data: c, color: '#4BA8C2' },
	  { label: 'de 41 a 50 a\u00F1os', data: d, color: '#BD4E4D' },
	  { label: 'Más de 50 a\u00F1os', data: e, color: '#99B957' }
    ]
    $.plot('#etareo-chart', etareoData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
 }


   /*
   * GRAFICO ESTADO CIVIL TIPO A
   * ----------------------
   */

 function graficoEstadoCivil(a,b,c,d,e,f,g) {

   $('#dEstadoCivil1').html(a);
   $('#dEstadoCivil2').html(b);
   $('#dEstadoCivil3').html(c);
   $('#dEstadoCivil4').html(d);
   $('#dEstadoCivil5').html(e);
   $('#dEstadoCivil6').html(f);
   $('#dEstadoCivil7').html(g);

   var estadoCivilData = [
      { label: 'Soltero(a)', data: a, color: '#0073b7' },
	    { label: 'Casado(a)', data: b, color: '#7D629F' },
      { label: 'Union Libre', data: c, color: '#4BA8C2' }
      { label: 'Separado(a)', data: d, color: '#BD4E4D' }
      { label: 'Divorciado(a)', data: e, color: '#99B957' }
      { label: 'Viudo(a)', data: f, color: '#4BAAC2' }
      { label: 'Sacerdote / Monja', data: g, color: '#4BAAA2' }
    ]
    $.plot('#estadoCivil-chart', estadoCivilData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */
  }


     /*
   * GRAFICO PERSONAS A CARGO TIPO A
   * ----------------------
   */

 function graficoPersonasCargo(a,b,c,d,e,f,g) {

   $('#dPersonasCargo1').html(a);
   $('#dPersonasCargo2').html(b);
   $('#dPersonasCargo3').html(c);
   $('#dPersonasCargo4').html(d);
   $('#dPersonasCargo5').html(e);
   $('#dPersonasCargo6').html(f);
   $('#dPersonasCargo7').html(g);

   var personasCargoData = [
    { label: 'De 1 Persona', data: a, color: '#0073b7' },
	  { label: 'De 2 Personas', data: b, color: '#7D629F' },
	  { label: 'De 3 Personas', data: c, color: '#4BA8C2' },
	  { label: 'De 4 Personas', data: d, color: '#BD4E4D' },
    { label: 'De 5 Personas', data: e, color: '##99B957' },
    { label: 'De 6 Personas', data: f, color: '#4BAAC2' },
	  { label: 'ninguna', data: g, color: '#4BAAA2' }
    ]
    $.plot('#personasCargo-chart', personasCargoData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }



     /*
   * GRAFICO ESCOLARIDAD TIPO A
   * ----------------------
   */

 function graficoEscolaridad(a,b,c,d,e,f) {

   $('#dEscolaridad1').html(a);
   $('#dEscolaridad2').html(b);
   $('#dEscolaridad3').html(c);
   $('#dEscolaridad4').html(d);
   $('#dEscolaridad5').html(e);
   $('#dEscolaridad6').html(f);

   var escolaridadData = [
    { label: 'Ninguna', data: a, color: '#0073b7' },
	  { label: 'Bachillerato Incompleto', data: b, color: '#7D629F' },
    { label: 'Bachillerato Completo', data: c, color: '#4BA8C2' },
	  { label: 'Técnico/Tecnológico completo', data: d, color: '#BD4E4D' },
	  { label: 'Profesional Incompleto', data: e, color: '#99B957' },
	  { label: 'Profesional Completo', data: f, color: '#BDCBE1' }
    ]
    $.plot('#escolaridad-chart', escolaridadData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }


     /*
   * GRAFICO TIPO VIVIENDA TIPO A
   * ----------------------
   */

 function graficoTipoVivienda(a,b,c) {

   $('#dTipoVivienda1').html(a);
   $('#dTipoVivienda2').html(b);
   $('#dTipoVivienda3').html(c);

   var tipoViviendaData = [
      { label: 'Propia', data: a, color: '#0073b7' },
	  { label: 'En Arriendo', data: b, color: '#7D629F' },
      { label: 'Familiar', data: c, color: '#4BA8C2' }
    ]
    $.plot('#tipoVivienda-chart', tipoViviendaData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }



     /*
   * GRAFICO ESTRATO TIPO A
   * ----------------------
   */

 function graficoEstrato(a,b,c,d,e,f,g,h) {

   $('#dEstrato1').html(a);
   $('#dEstrato2').html(b);
   $('#dEstrato3').html(c);
   $('#dEstrato4').html(d);
   $('#dEstrato5').html(e);
   $('#dEstrato6').html(f);
    $('#dFinca').html(g);
    $('#dNose').html(h);

   var estratoData = [
      { label: 'Estrato 1', data: a, color: '#0073b7' },
	    { label: 'Estrato 2', data: b, color: '#7D629F' },
      { label: 'Estrato 3', data: c, color: '#4BA8C2' }
      { label: 'Estrato 4', data: d, color: '#BD4E4D' },
  	  { label: 'Estrato 5', data: e, color: '#99B957' },
  	  { label: 'Estrato 6', data: f, color: '#BDCBE1' }
      { label: 'Finca', data: g, color: '#99BB57' },
      { label: 'Nose', data: h, color: '#BDABE1' }
    ]
    $.plot('#estrato-chart', estratoData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }

      /*
   * GRAFICO ANTIGUEDAD EMPRESA TIPO A
   * ----------------------
   */

 function graficoAntiguedadEmpresa(a,b,c,d,e) {

   $('#dAntiguedadEmpresa1').html(a);
   $('#dAntiguedadEmpresa2').html(b);
   $('#dAntiguedadEmpresa3').html(c);
   $('#dAntiguedadEmpresa4').html(d);
   $('#dAntiguedadEmpresa5').html(e);

   var antiguedadEmpresaData = [
      { label: 'Menos de1 a\u00F3o', data: a, color: '#0073b7' },
	    { label: 'Entre 2 a 6 a\u00F3os', data: b, color: '#7D629F' },
      { label: 'Entre 7 y 10 a\u00F3os', data: c, color: '#4BA8C2' }
      { label: 'Entre 10 y 15 a\u00F3os', data: d, color: '#BD4E4D' }
      { label: 'De 16 o mas a\u00F3os', data: e, color: '#99B957' }
    ]
    $.plot('#antiguedadEmpresa-chart', antiguedadEmpresaData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }

  /*
   * GRAFICO Estres Tipo A
   * ----------------------
   */

 function graficoEstresA(a,b,c,d,e) {

   $('#dEstresA1').html(a);
   $('#dEstresA2').html(b);
   $('#dEstresA3').html(c);
   $('#dEstresA4').html(d);
   $('#dEstresA5').html(e);


   var estresAData = [
      { label: 'Riesgo Muy ALto', data: a, color: '#0073b7' },
	  { label: 'Riesgo Alto', data: b, color: '#7D629F' },
      { label: 'Riesgo Medio', data: c, color: '#4BA8C2' },
	  { label: 'Riesgo Bajo', data: d, color: '#BD4E4D' },
	  { label: 'Sin Riesgo', data: e, color: '#99B957' }

    ]
    $.plot('#estresA-chart', estresAData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }


   /*
   * GRAFICO Extralaboral Tipo A
   * ----------------------
   */

 function graficoExtralaboralA(a,b,c,d,e) {

   $('#dExtralaboralA1').html(a);
   $('#dExtralaboralA2').html(b);
   $('#dExtralaboralA3').html(c);
   $('#dExtralaboralA4').html(d);
   $('#dExtralaboralA5').html(e);


   var ExtralaboralAData = [
      { label: 'Riesgo Muy ALto', data: a, color: '#0073b7' },
	  { label: 'Riesgo Alto', data: b, color: '#7D629F' },
      { label: 'Riesgo Medio', data: c, color: '#4BA8C2' },
	  { label: 'Riesgo Bajo', data: d, color: '#BD4E4D' },
	  { label: 'Sin Riesgo', data: e, color: '#99B957' }

    ]
    $.plot('#ExtralaboralA-chart', ExtralaboralAData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }


   /*
   * GRAFICO Intralaboral Tipo A
   * ----------------------
   */

 function graficoIntralaboralA(a,b,c,d,e) {

   $('#dIntralaboralA1').html(a);
   $('#dIntralaboralA2').html(b);
   $('#dIntralaboralA3').html(c);
   $('#dIntralaboralA4').html(d);
   $('#dIntralaboralA5').html(e);


   var IntralaboralAData = [
      { label: 'Riesgo Muy ALto', data: a, color: '#0073b7' },
	  { label: 'Riesgo Alto', data: b, color: '#7D629F' },
      { label: 'Riesgo Medio', data: c, color: '#4BA8C2' },
	  { label: 'Riesgo Bajo', data: d, color: '#BD4E4D' },
	  { label: 'Sin Riesgo', data: e, color: '#99B957' }

    ]
    $.plot('#IntralaboralA-chart', IntralaboralAData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: true
      }
    })
    /*
     * END DONUT CHART
     */

  }


graficoGenero(10,7);
graficoEtareo(20,7,2,3,1);
graficoEstadoCivil(15,16,17,18,19,20,21);
graficoPersonasCargo(20,10,8,7,2,3,1);
graficoEscolaridad(6,7,2,3,1,10);
graficoTipoVivienda(1,2,3);
graficoEstrato(30,20,10,8,7,2,3,1);
graficoAntiguedadEmpresa(5,8,7);
graficoEstresA(20,7,2,3,1);
graficoExtralaboralA(15,7,2,3,1);
graficoIntralaboralA(30,7,2,3,1);
