<?php
header('Content-type: text/html; charset= utf-8');

    //echo debug($lista);
//echo debug($alumno);
        foreach ($alumno as $lista):
            //echo debug($lista);
               $nombre = $lista['Alumno']['nombre'];
               $nombre1 = $lista['Alumno']['segundo_nombre'];
               $cedula_escolar = $lista['Alumno']['cedula_escolar'];
               $apellido = $lista['Alumno']['apellido'];
               $apellido_1 = $lista['Alumno']['segundo_apellido'];
               //$grupo = $lista['GradosSeccione']['0']['descripcion'];
               $nombre_r = $lista['Persona']['0']['nombre'];
               $apellido_r = $lista['Persona']['0']['apellido'];
        endforeach; 
 
      $dia = date('d');
      $mes = date('m');
      $año = date('Y');
   $escolar_a = $mes ;   
      
      switch ($mes)
      {
      case 1:
          $mes = 'Enero';
          break;
      case 2:
          $mes = 'Febrero';
          break;
      case 3:
          $mes = 'Marzo';
          break;
      case 4:
          $mes = 'Abril';
          break;
      case 5:
          $mes = 'Mayo';
          break;
      case 6:
          $mes = 'Junio';
          break;
      case 7:
          $mes = 'Julio';
          break;
      case 8:
          $mes = 'Agosto';
          break;
      case 9:
          $mes = 'Septiembre';
          break;
      case 10:
          $mes = 'Octubre';
          break;
      case 11:
          $mes = 'Noviembre';
          break;
      case 12:
          $mes = 'Diciembre';
          break;
      
      }

class PDF extends FPDF
{

    
    
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
     $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

if ($escolar_a >= 7 ) {
//Año escolar
$ano1=date("Y");
$ano2=date("Y")+1;
$ano_escolar=$ano1."-".$ano2;
}else {
//Año escolar
$ano1=date("Y")-1;
$ano2=date("Y");
$ano_escolar=$ano1."-".$ano2;

}
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','Letter');
$pdf->Ln(10);
	$pdf->SetFont('Arial','',10);
	$pdf->SetFillColor(255);
        $pdf->Image("./img/logos/bolivar_nino.png",16,11,24);
        $pdf->Image("./img/logos/republica.png",135,11,70);
        //$pdf->Image("/img/persona/foto/". $per_foto,156,30,29);
	$pdf->Ln(23);
        //$pdf->Cell(50,	6,"FECHA: ".date("d")."/".date("m")."/".date("Y") ,'0',0,'L',1);
        $pdf->Ln();
        //$fpdf->Cell(50,	6,utf8_decode("AÑO ESCOLAR: ").$ano_escolar,'0',0,'L',1);
        $pdf->Ln(10);
        $pdf->SetFont('Arial','B',14);
        //$pdf->SetFillColor(9,131,156);
        $pdf->MultiCell(200,2,'CONSTANCIA DE SOLVENCIA',0,'C');
        $pdf->Ln(10);
        $pdf->Setx(18);
        $pdf->SetMargins(17, 17, 15);
        $pdf->SetFont('Arial','',12);
        $pdf->MultiCell(0,10, utf8_decode('Quien suscribe, Prof. ELBA RAMOS, C.I. No 13.586.981 Directora del Centro de Educación Inicial "Bolívar Niño", inscrito en el Ministerio del Poder Popular para la Educación, hace constar por medio de la presente que este preescolar brinda sus servicios educativos a los hijos e hijas de los trabajadores del Ministerio del Poder Popular para  la Juventud y  el  Deporte  e  Instituto  Nacional  de  Deporte  de  manera  gratuita, sin  embargo  da  fé  de  que  el (la)  ciudadano (a):') ,0,'J');
        $pdf->SetFont('Arial','B',12);
        $pdf->Setx(19);
        $pdf->Cell(56,6, utf8_decode(strtoupper($nombre_r.' '.$apellido_r)) ,'B',0,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(64,10, utf8_decode('representante del (la) Alumno (a)'),0,0,'');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(60,6, utf8_decode(strtoupper($nombre.' '.$nombre1)) ,'B',1,'C');
        $pdf->Setx(18);
        //$pdf->Cell(1,10, utf8_decode(' ') ,0,0,'C');
        $pdf->Cell(64,8, utf8_decode(strtoupper($apellido.' '.$apellido_1)) ,'B',0,'C');
        $pdf->Cell(2,12, utf8_decode(',') ,0,0,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(72,13, utf8_decode('titular   de   la   Cédula   Escolar   No:   ') ,0,0,'');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(42,8, utf8_decode($cedula_escolar) ,'B',1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(40,12, utf8_decode('cursante del grupo') ,0,0,'');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(34,7, utf8_decode(strtoupper($grupo)) ,'B',0,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(49,12, utf8_decode('durante  el  año  escolar') ,0,0,'');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(28,8, utf8_decode($ano_escolar) ,'B',0,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(44,12, utf8_decode('se ha mostrado') ,0,1,'');
        $pdf->Setx(17);
        $pdf->SetMargins(17, 17, 16);
        $pdf->MultiCell(0,10, utf8_decode('dispuesto(a) y responsable a cumplir con todas las colaboraciones materiales que este Centro Educativo ha requerido de su parte para la elaboración de diferentes recursos y realización de variadas actividades.') ,0,'J');


        
        $pdf->Ln(10);
        $pdf->Setx(17);
        
        ////con esto contruyo el mensaje del final del documento.
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(147, 10, utf8_decode("Constancia que se expide a petición de la parte interesada en Caracas, a los "),0,0,'');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(8, 10,utf8_decode($dia),0,0,'' );
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(10, 10, utf8_decode("dias del mes"),0,1,'');
        $pdf->Setx(17);
        $pdf->Cell(17, 10, utf8_decode("de"),0,0,'');
        $pdf->SetFont('Arial','B',12);
        
        $pdf->Cell(30, 10,utf8_decode(strtoupper($mes)),0,0,'C' );
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(17, 10, utf8_decode("del año"),0,0,'');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(5, 10,utf8_decode($año.'.'),0,0,'' );

        
        $pdf->Ln(14);
        $pdf->Setx(100);
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(8, 10,utf8_decode('Atentamente.'),0,1,'C' );
        $pdf->Ln(10);
        $pdf->Setx(100);
        $pdf->Cell(8, 10,'__________________________',0,1,'C');
        $pdf->Setx(100);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(8, 6, utf8_decode('Prof. Elba Ramos'),0,1,'C');
        $pdf->Setx(100);
        $pdf->Cell(8, 6, utf8_decode('Supervisor Docente Jefe'),0,1,'C');
        $pdf->Setx(100);
        $pdf->Cell(8, 6, utf8_decode('Directora del CEI Bolívar Niño'),0,1,'C');
        
$pdf->Output();
