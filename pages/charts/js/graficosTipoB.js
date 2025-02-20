
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
	  { label: 'De 20 a 30 años', data: b, color: '#7D629F' },
      { label: 'de 31 a 40 años', data: c, color: '#4BA8C2' },
	  { label: 'de 41 a 50 años', data: d, color: '#BD4E4D' },
	  { label: 'Más de 50 años', data: e, color: '#99B957' }
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
  
 function graficoEstadoCivil(a,b,c) { 
 
   $('#dEstadoCivil1').html(a);
   $('#dEstadoCivil2').html(b);
   $('#dEstadoCivil3').html(c);
   
   var estadoCivilData = [
      { label: 'Soltero', data: a, color: '#0073b7' },
	  { label: 'Casado', data: b, color: '#7D629F' },
      { label: 'Union Libre', data: c, color: '#4BA8C2' }
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
  
 function graficoPersonasCargo(a,b,c,d,e) { 
 
   $('#dPersonasCargo1').html(a);
   $('#dPersonasCargo2').html(b);
   $('#dPersonasCargo3').html(c);
   $('#dPersonasCargo4').html(d);
   $('#dPersonasCargo5').html(e);
   
   var personasCargoData = [
      { label: 'De 1 Persona', data: a, color: '#0073b7' },
	  { label: 'De 2 Persona', data: b, color: '#7D629F' },
	  { label: 'De 3 Persona', data: c, color: '#4BA8C2' },
	  { label: 'De 4 o mas Persona', data: d, color: '#BD4E4D' },
	  { label: 'ninguna', data: e, color: '#99B957' }
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
      { label: 'Ninguno', data: a, color: '#0073b7' },
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
      { label: 'Propiea', data: a, color: '#0073b7' },
	  { label: 'En Arriendp', data: b, color: '#7D629F' },
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
  
 function graficoEstrato(a,b,c) { 
 	
   $('#dEstrato1').html(a);
   $('#dEstrato2').html(b);
   $('#dEstrato3').html(c);
    
   var estratoData = [
      { label: 'Estrato 1', data: a, color: '#0073b7' },
	  { label: 'Estrato 2', data: b, color: '#7D629F' },
      { label: 'Estrato 3', data: c, color: '#4BA8C2' }
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
  
 function graficoAntiguedadEmpresa(a,b,c) { 
 	
   $('#dAntiguedadEmpresa1').html(a);
   $('#dAntiguedadEmpresa2').html(b);
   $('#dAntiguedadEmpresa3').html(c);
    
   var antiguedadEmpresaData = [
      { label: 'Menos de1 año', data: a, color: '#0073b7' },
	  { label: 'Entre 1 y 5 años', data: b, color: '#7D629F' },
      { label: 'Entre 5 y 10 años', data: c, color: '#4BA8C2' }
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


  function graficoGeneroB(a,b) {
	  
   $('#dGeneroB1').html(a);
   $('#dGeneroB2').html(b);  
 
    var donutBData = [
      { label: 'Masculino', data: a, color: '#BD4E4D' },
      { label: 'Femenino', data: b, color: '#0073b7' }
    ]
    $.plot('#donutB-chart', donutBData, {
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
  
 function graficoEtareoB(a,b,c,d,e) { 
 
   $('#dEtareoB1').html(a);
   $('#dEtareoB2').html(b);
   $('#dEtareoB3').html(c);
   $('#dEtareoB4').html(d);
   $('#dEtareoB5').html(e);
  
   var etareoBData = [
      { label: 'Menos de 20', data: a, color: '#0073b7' },
	  { label: 'De 20 a 30 años', data: b, color: '#7D629F' },
      { label: 'de 31 a 40 años', data: c, color: '#4BA8C2' },
	  { label: 'de 41 a 50 años', data: d, color: '#BD4E4D' },
	  { label: 'Más de 50 años', data: e, color: '#99B957' }
    ]
    $.plot('#etareoB-chart', etareoBData, {
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
   * GRAFICO ESTADO CIVIL TIPO B
   * ----------------------
   */
  
 function graficoEstadoCivilB(a,b,c) { 
 
   $('#dEstadoCivilB1').html(a);
   $('#dEstadoCivilB2').html(b);
   $('#dEstadoCivilB3').html(c);
   
   var estadoCivilBData = [
      { label: 'Soltero', data: a, color: '#0073b7' },
	  { label: 'Casado', data: b, color: '#7D629F' },
      { label: 'Union Libre', data: c, color: '#4BA8C2' }
    ]
    $.plot('#estadoCivilB-chart', estadoCivilBData, {
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
   * GRAFICO PERSONAS A CARGO TIPO B
   * ----------------------
   */
  
 function graficoPersonasCargoB(a,b,c,d,e) { 
 
   $('#dPersonasCargoB1').html(a);
   $('#dPersonasCargoB2').html(b);
   $('#dPersonasCargoB3').html(c);
   $('#dPersonasCargoB4').html(d);
   $('#dPersonasCargoB5').html(e);
   
   var personasCargoBData = [
      { label: 'De 1 Persona', data: a, color: '#0073b7' },
	  { label: 'De 2 Persona', data: b, color: '#7D629F' },
	  { label: 'De 3 Persona', data: c, color: '#4BA8C2' },
	  { label: 'De 4 o mas Persona', data: d, color: '#BD4E4D' },
	  { label: 'ninguna', data: e, color: '#99B957' }
    ]
    $.plot('#personasCargoB-chart', personasCargoBData, {
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
   * GRAFICO ESCOLARIDAD TIPO B
   * ----------------------
   */
  
 function graficoEscolaridadB(a,b,c,d,e,f) { 
 	
   $('#dEscolaridadB1').html(a);
   $('#dEscolaridadB2').html(b);
   $('#dEscolaridadB3').html(c);
   $('#dEscolaridadB4').html(d);
   $('#dEscolaridadB5').html(e);
   $('#dEscolaridadB6').html(f);
   
   var escolaridadBData = [
      { label: 'Ninguno', data: a, color: '#0073b7' },
	  { label: 'Bachillerato Incompleto', data: b, color: '#7D629F' },
      { label: 'Bachillerato Completo', data: c, color: '#4BA8C2' },
	  { label: 'Técnico/Tecnológico completo', data: d, color: '#BD4E4D' },
	  { label: 'Profesional Incompleto', data: e, color: '#99B957' },
	  { label: 'Profesional Completo', data: f, color: '#BDCBE1' }
    ]
    $.plot('#escolaridadB-chart', escolaridadBData, {
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
   * GRAFICO TIPO VIVIENDA TIPO B
   * ----------------------
   */
  
 function graficoTipoViviendaB(a,b,c) { 
 	
   $('#dTipoViviendaB1').html(a);
   $('#dTipoViviendaB2').html(b);
   $('#dTipoViviendaB3').html(c);
    
   var tipoViviendaBData = [
      { label: 'Propiea', data: a, color: '#0073b7' },
	  { label: 'En Arriendp', data: b, color: '#7D629F' },
      { label: 'Familiar', data: c, color: '#4BA8C2' }
    ]
    $.plot('#tipoViviendaB-chart', tipoViviendaBData, {
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
   * GRAFICO ESTRATO TIPO B
   * ----------------------
   */
  
 function graficoEstratoB(a,b,c) { 
 	
   $('#dEstratoB1').html(a);
   $('#dEstratoB2').html(b);
   $('#dEstratoB3').html(c);
    
   var estratoBData = [
      { label: 'Estrato 1', data: a, color: '#0073b7' },
	  { label: 'Estrato 2', data: b, color: '#7D629F' },
      { label: 'Estrato 3', data: c, color: '#4BA8C2' }
    ]
    $.plot('#estratoB-chart', estratoBData, {
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
   * GRAFICO ANTIGUEDAD EMPRESA TIPO B
   * ----------------------
   */
 		  
 function graficoAntiguedadEmpresaB(a,b,c) { 
 	
   $('#dAntiguedadEmpresaB1').html(a);
   $('#dAntiguedadEmpresaB2').html(b);
   $('#dAntiguedadEmpresaB3').html(c);
    
   var AntiguedadEmpresaBData = [
      { label: 'Menos de1 año', data: a, color: '#0073b7' },
	  { label: 'Entre 1 y 5 años', data: b, color: '#7D629F' },
      { label: 'Entre 5 y 10 años', data: c, color: '#4BA8C2' }
    ]
    $.plot('#AntiguedadEmpresaB-chart', AntiguedadEmpresaBData, {
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
  
 function graficoEstresB(a,b,c,d,e) { 
 	
   $('#dEstresB1').html(a);
   $('#dEstresB2').html(b);
   $('#dEstresB3').html(c);
   $('#dEstresB4').html(d);
   $('#dEstresB5').html(e);
   
   
   var estresBData = [
      { label: 'Riesgo Muy ALto', data: a, color: '#0073b7' },
	  { label: 'Riesgo Alto', data: b, color: '#7D629F' },
      { label: 'Riesgo Medio', data: c, color: '#4BA8C2' },
	  { label: 'Riesgo Bajo', data: d, color: '#BD4E4D' },
	  { label: 'Sin Riesgo', data: e, color: '#99B957' }
	  
    ]
    $.plot('#estresB-chart', estresBData, {
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
   * GRAFICO Extralaboral Tipo B
   * ----------------------
   */
 function graficoExtralaboralB(f,b,c,d,e) { 
 	
   $('#dExtralaboralB1').html(f);
   $('#dExtralaboralB2').html(b);
   $('#dExtralaboralB3').html(c);
   $('#dExtralaboralB4').html(d);
   $('#dExtralaboralB5').html(e);
   
   
   var ExtralaboralBData = [
      { label: 'Riesgo Muy ALto', data: f, color: '#0073b7' },
	  { label: 'Riesgo Alto', data: b, color: '#7D629F' },
      { label: 'Riesgo Medio', data: c, color: '#4BA8C2' },
	  { label: 'Riesgo Bajo', data: d, color: '#BD4E4D' },
	  { label: 'Sin Riesgo', data: e, color: '#99B957' }
	  
    ]
    $.plot('#ExtralaboralB-chart', ExtralaboralBData, {
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
   * GRAFICO Intralaboral Tipo B
   * ----------------------
   */
  
 function graficoIntralaboralB(f,g,h,i,j) { 
 	
   $('#dIntralaboralB1').html(f);
   $('#dIntralaboralB2').html(g);
   $('#dIntralaboralB3').html(h);
   $('#dIntralaboralB4').html(i);
   $('#dIntralaboralB5').html(j);
   
   
   var IntralaboralBData = [
      { label: 'Riesgo Muy ALto', data: f, color: '#0073b7' },
	  { label: 'Riesgo Alto', data: g, color: '#7D629F' },
      { label: 'Riesgo Medio', data: h, color: '#4BA8C2' },
	  { label: 'Riesgo Bajo', data: i, color: '#BD4E4D' },
	  { label: 'Sin Riesgo', data: j, color: '#99B957' }
	  
    ]
    $.plot('#IntralaboralB-chart', IntralaboralBData, {
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
graficoEstadoCivil(5,2,5);
graficoPersonasCargo(20,7,2,3,1);
graficoEscolaridad(6,7,2,3,1,10);
graficoTipoVivienda(1,2,3);
graficoEstrato(5,6,10);
graficoAntiguedadEmpresa(5,8,7);
graficoEstresA(20,7,2,3,1);
graficoExtralaboralA(15,7,2,3,1);
graficoIntralaboralA(30,7,2,3,1);
graficoGeneroB(10,7);
graficoEtareoB(20,7,2,3,1);
graficoEstadoCivilB(5,2,5);
graficoPersonasCargoB(20,7,2,3,1);
graficoEscolaridadB(6,7,2,3,1,10);
graficoTipoViviendaB(1,2,3);
graficoEstratoB(5,6,10);
graficoAntiguedadEmpresaB(5,8,7);
graficoEstresB(20,7,2,3,1);
graficoExtralaboralB(75,7,2,3,1);
graficoIntralaboralB(20,7,2,3,1);




    

