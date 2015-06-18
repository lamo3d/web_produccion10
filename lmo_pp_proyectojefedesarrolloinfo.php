<?php

// Global variable for table object
$pp_proyectojefedesarrollo = NULL;

//
// Table class for pp_proyectojefedesarrollo
//
class cpp_proyectojefedesarrollo extends cTable {
	var $IdProyDes;
	var $IdSolDesarrollo;
	var $id_tipopoa;
	var $FechaRequerimiento_log;
	var $FechaSolicitud;
	var $FechaRequerida;
	var $FechaInicio;
	var $FechaAnalisisFin;
	var $FechaDesarrolloInicio;
	var $FechaDesarrolloFin;
	var $FechaPruebasInicio;
	var $FechaTerminoPropuesto;
	var $FechaQAInicio;
	var $FechaTerminoQA;
	var $FechaPruebasUserInicio;
	var $FechaPruebasUserFin;
	var $FechaTermino;
	var $FechaProgramacion;
	var $FechaUltimoPase;
	var $FechaUltimaTareaDiaria;
	var $cant_dias_analisis;
	var $cant_dias_desarrollo;
	var $cant_dias_pruebas;
	var $cant_dias_qa;
	var $cant_dias_prueba_user;
	var $Titulo;
	var $Descripcion;
	var $SolicitudDesarrollo;
	var $ganttProyecto;
	var $IdLiderTecnico;
	var $IdJefeProyecto;
	var $IdQA;
	var $IdUsuario_log;
	var $IdMotivo;
	var $Tipo;
	var $IdSistema;
	var $horasdesarrollo;
	var $idcreadortarea;
	var $idempresa;
	var $idarea;
	var $IdLiderUsuario;
	var $IdGerenteSolicitante;
	var $IdRevisaSolicitud;
	var $idestado;
	var $DesSolicitud;
	var $Objetivo;
	var $Beneficios;
	var $FuncOperativa;
	var $GestionControl;
	var $ReferLegal;
	var $AreasRelacionadas;
	var $Observaciones;
	var $fechaRevisaJRO;
	var $JefeRiesgoOperativo;
	var $Impacto;
	var $Participacion;
	var $Justificativa;
	var $Recomendacion;
	var $dias_analisis_td;
	var $dias_desarrollo_td;
	var $dias_pruebas_td;
	var $dias_qa_td;
	var $avance_analisis_real;
	var $avance_desarrollo_real;
	var $avance_pruebas_real;
	var $avance_qa_real;
	var $avance_analisis_plan;
	var $avance_desarrollo_plan;
	var $avance_pruebas_plan;
	var $avance_qa_plan;
	var $dias_anticipacion;
	var $veces_mod_findes;
	var $ObsGestion;
	var $ObsTareasDiairias;
	var $Duracion;
	var $PorcCompletado;
	var $PorcProyectado;
	var $PorcDiferencia;

	//
	// Table class constructor
	//
	function __construct() {
		global $Language;

		// Language object
		if (!isset($Language)) $Language = new cLanguage();
		$this->TableVar = 'pp_proyectojefedesarrollo';
		$this->TableName = 'pp_proyectojefedesarrollo';
		$this->TableType = 'VIEW';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0; // Page break per every n record (PDF only)
		$this->ExportPageOrientation = "portrait"; // Page orientation (PDF only)
		$this->ExportPageSize = "a4"; // Page size (PDF only)
		$this->DetailAdd = FALSE; // Allow detail add
		$this->DetailEdit = FALSE; // Allow detail edit
		$this->DetailView = FALSE; // Allow detail view
		$this->ShowMultipleDetails = FALSE; // Show multiple details
		$this->GridAddRowCount = 5;
		$this->AllowAddDeleteRow = ew_AllowAddDeleteRow(); // Allow add/delete row
		$this->UserIDAllowSecurity = 0; // User ID Allow
		$this->BasicSearch = new cBasicSearch($this->TableVar);

		// IdProyDes
		$this->IdProyDes = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdProyDes', 'IdProyDes', '`IdProyDes`', '`IdProyDes`', 19, -1, FALSE, '`IdProyDes`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdProyDes->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdProyDes'] = &$this->IdProyDes;

		// IdSolDesarrollo
		$this->IdSolDesarrollo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdSolDesarrollo', 'IdSolDesarrollo', '`IdSolDesarrollo`', '`IdSolDesarrollo`', 19, -1, FALSE, '`IdSolDesarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdSolDesarrollo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdSolDesarrollo'] = &$this->IdSolDesarrollo;

		// id_tipopoa
		$this->id_tipopoa = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_id_tipopoa', 'id_tipopoa', '`id_tipopoa`', '`id_tipopoa`', 17, -1, FALSE, '`id_tipopoa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->id_tipopoa->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['id_tipopoa'] = &$this->id_tipopoa;

		// FechaRequerimiento_log
		$this->FechaRequerimiento_log = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaRequerimiento_log', 'FechaRequerimiento_log', '`FechaRequerimiento_log`', 'DATE_FORMAT(`FechaRequerimiento_log`, \'%d/%m/%Y\')', 135, 11, FALSE, '`FechaRequerimiento_log`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaRequerimiento_log->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaRequerimiento_log'] = &$this->FechaRequerimiento_log;

		// FechaSolicitud
		$this->FechaSolicitud = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaSolicitud', 'FechaSolicitud', '`FechaSolicitud`', 'DATE_FORMAT(`FechaSolicitud`, \'%d/%m/%Y\')', 135, 11, FALSE, '`FechaSolicitud`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaSolicitud->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaSolicitud'] = &$this->FechaSolicitud;

		// FechaRequerida
		$this->FechaRequerida = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaRequerida', 'FechaRequerida', '`FechaRequerida`', 'DATE_FORMAT(`FechaRequerida`, \'%d/%m/%Y\')', 135, 11, FALSE, '`FechaRequerida`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaRequerida->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaRequerida'] = &$this->FechaRequerida;

		// FechaInicio
		$this->FechaInicio = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaInicio', 'FechaInicio', '`FechaInicio`', 'DATE_FORMAT(`FechaInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaInicio'] = &$this->FechaInicio;

		// FechaAnalisisFin
		$this->FechaAnalisisFin = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaAnalisisFin', 'FechaAnalisisFin', '`FechaAnalisisFin`', 'DATE_FORMAT(`FechaAnalisisFin`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaAnalisisFin`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaAnalisisFin->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaAnalisisFin'] = &$this->FechaAnalisisFin;

		// FechaDesarrolloInicio
		$this->FechaDesarrolloInicio = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaDesarrolloInicio', 'FechaDesarrolloInicio', '`FechaDesarrolloInicio`', 'DATE_FORMAT(`FechaDesarrolloInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaDesarrolloInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaDesarrolloInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaDesarrolloInicio'] = &$this->FechaDesarrolloInicio;

		// FechaDesarrolloFin
		$this->FechaDesarrolloFin = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaDesarrolloFin', 'FechaDesarrolloFin', '`FechaDesarrolloFin`', 'DATE_FORMAT(`FechaDesarrolloFin`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaDesarrolloFin`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaDesarrolloFin->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaDesarrolloFin'] = &$this->FechaDesarrolloFin;

		// FechaPruebasInicio
		$this->FechaPruebasInicio = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaPruebasInicio', 'FechaPruebasInicio', '`FechaPruebasInicio`', 'DATE_FORMAT(`FechaPruebasInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaPruebasInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaPruebasInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaPruebasInicio'] = &$this->FechaPruebasInicio;

		// FechaTerminoPropuesto
		$this->FechaTerminoPropuesto = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaTerminoPropuesto', 'FechaTerminoPropuesto', '`FechaTerminoPropuesto`', 'DATE_FORMAT(`FechaTerminoPropuesto`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaTerminoPropuesto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaTerminoPropuesto->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaTerminoPropuesto'] = &$this->FechaTerminoPropuesto;

		// FechaQAInicio
		$this->FechaQAInicio = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaQAInicio', 'FechaQAInicio', '`FechaQAInicio`', 'DATE_FORMAT(`FechaQAInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaQAInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaQAInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaQAInicio'] = &$this->FechaQAInicio;

		// FechaTerminoQA
		$this->FechaTerminoQA = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaTerminoQA', 'FechaTerminoQA', '`FechaTerminoQA`', 'DATE_FORMAT(`FechaTerminoQA`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaTerminoQA`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaTerminoQA->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaTerminoQA'] = &$this->FechaTerminoQA;

		// FechaPruebasUserInicio
		$this->FechaPruebasUserInicio = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaPruebasUserInicio', 'FechaPruebasUserInicio', '`FechaPruebasUserInicio`', 'DATE_FORMAT(`FechaPruebasUserInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaPruebasUserInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaPruebasUserInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaPruebasUserInicio'] = &$this->FechaPruebasUserInicio;

		// FechaPruebasUserFin
		$this->FechaPruebasUserFin = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaPruebasUserFin', 'FechaPruebasUserFin', '`FechaPruebasUserFin`', 'DATE_FORMAT(`FechaPruebasUserFin`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaPruebasUserFin`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaPruebasUserFin->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaPruebasUserFin'] = &$this->FechaPruebasUserFin;

		// FechaTermino
		$this->FechaTermino = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaTermino', 'FechaTermino', '`FechaTermino`', 'DATE_FORMAT(`FechaTermino`, \'%d/%m/%Y\')', 135, 11, FALSE, '`FechaTermino`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaTermino->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaTermino'] = &$this->FechaTermino;

		// FechaProgramacion
		$this->FechaProgramacion = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaProgramacion', 'FechaProgramacion', '`FechaProgramacion`', 'DATE_FORMAT(`FechaProgramacion`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaProgramacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaProgramacion->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaProgramacion'] = &$this->FechaProgramacion;

		// FechaUltimoPase
		$this->FechaUltimoPase = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaUltimoPase', 'FechaUltimoPase', '`FechaUltimoPase`', 'DATE_FORMAT(`FechaUltimoPase`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaUltimoPase`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaUltimoPase->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaUltimoPase'] = &$this->FechaUltimoPase;

		// FechaUltimaTareaDiaria
		$this->FechaUltimaTareaDiaria = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FechaUltimaTareaDiaria', 'FechaUltimaTareaDiaria', '`FechaUltimaTareaDiaria`', 'DATE_FORMAT(`FechaUltimaTareaDiaria`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaUltimaTareaDiaria`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaUltimaTareaDiaria->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaUltimaTareaDiaria'] = &$this->FechaUltimaTareaDiaria;

		// cant_dias_analisis
		$this->cant_dias_analisis = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_cant_dias_analisis', 'cant_dias_analisis', '`cant_dias_analisis`', '`cant_dias_analisis`', 17, -1, FALSE, '`cant_dias_analisis`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_analisis->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_analisis'] = &$this->cant_dias_analisis;

		// cant_dias_desarrollo
		$this->cant_dias_desarrollo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_cant_dias_desarrollo', 'cant_dias_desarrollo', '`cant_dias_desarrollo`', '`cant_dias_desarrollo`', 17, -1, FALSE, '`cant_dias_desarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_desarrollo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_desarrollo'] = &$this->cant_dias_desarrollo;

		// cant_dias_pruebas
		$this->cant_dias_pruebas = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_cant_dias_pruebas', 'cant_dias_pruebas', '`cant_dias_pruebas`', '`cant_dias_pruebas`', 17, -1, FALSE, '`cant_dias_pruebas`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_pruebas->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_pruebas'] = &$this->cant_dias_pruebas;

		// cant_dias_qa
		$this->cant_dias_qa = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_cant_dias_qa', 'cant_dias_qa', '`cant_dias_qa`', '`cant_dias_qa`', 17, -1, FALSE, '`cant_dias_qa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_qa->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_qa'] = &$this->cant_dias_qa;

		// cant_dias_prueba_user
		$this->cant_dias_prueba_user = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_cant_dias_prueba_user', 'cant_dias_prueba_user', '`cant_dias_prueba_user`', '`cant_dias_prueba_user`', 17, -1, FALSE, '`cant_dias_prueba_user`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_prueba_user->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_prueba_user'] = &$this->cant_dias_prueba_user;

		// Titulo
		$this->Titulo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Titulo', 'Titulo', '`Titulo`', '`Titulo`', 200, -1, FALSE, '`Titulo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Titulo'] = &$this->Titulo;

		// Descripcion
		$this->Descripcion = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Descripcion', 'Descripcion', '`Descripcion`', '`Descripcion`', 201, -1, FALSE, '`Descripcion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Descripcion'] = &$this->Descripcion;

		// SolicitudDesarrollo
		$this->SolicitudDesarrollo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_SolicitudDesarrollo', 'SolicitudDesarrollo', '`SolicitudDesarrollo`', '`SolicitudDesarrollo`', 200, -1, TRUE, '`SolicitudDesarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['SolicitudDesarrollo'] = &$this->SolicitudDesarrollo;

		// ganttProyecto
		$this->ganttProyecto = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_ganttProyecto', 'ganttProyecto', '`ganttProyecto`', '`ganttProyecto`', 200, -1, TRUE, '`ganttProyecto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ganttProyecto'] = &$this->ganttProyecto;

		// IdLiderTecnico
		$this->IdLiderTecnico = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdLiderTecnico', 'IdLiderTecnico', '`IdLiderTecnico`', '`IdLiderTecnico`', 2, -1, FALSE, '`IdLiderTecnico`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdLiderTecnico->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdLiderTecnico'] = &$this->IdLiderTecnico;

		// IdJefeProyecto
		$this->IdJefeProyecto = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdJefeProyecto', 'IdJefeProyecto', '`IdJefeProyecto`', '`IdJefeProyecto`', 2, -1, FALSE, '`IdJefeProyecto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdJefeProyecto->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdJefeProyecto'] = &$this->IdJefeProyecto;

		// IdQA
		$this->IdQA = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdQA', 'IdQA', '`IdQA`', '`IdQA`', 2, -1, FALSE, '`IdQA`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdQA->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdQA'] = &$this->IdQA;

		// IdUsuario_log
		$this->IdUsuario_log = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdUsuario_log', 'IdUsuario_log', '`IdUsuario_log`', '`IdUsuario_log`', 2, -1, FALSE, '`IdUsuario_log`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdUsuario_log->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdUsuario_log'] = &$this->IdUsuario_log;

		// IdMotivo
		$this->IdMotivo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdMotivo', 'IdMotivo', '`IdMotivo`', '`IdMotivo`', 17, -1, FALSE, '`IdMotivo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdMotivo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdMotivo'] = &$this->IdMotivo;

		// Tipo
		$this->Tipo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Tipo', 'Tipo', '`Tipo`', '`Tipo`', 200, -1, FALSE, '`Tipo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Tipo'] = &$this->Tipo;

		// IdSistema
		$this->IdSistema = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdSistema', 'IdSistema', '`IdSistema`', '`IdSistema`', 18, -1, FALSE, '`IdSistema`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdSistema->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdSistema'] = &$this->IdSistema;

		// horasdesarrollo
		$this->horasdesarrollo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_horasdesarrollo', 'horasdesarrollo', '`horasdesarrollo`', '`horasdesarrollo`', 18, -1, FALSE, '`horasdesarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->horasdesarrollo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['horasdesarrollo'] = &$this->horasdesarrollo;

		// idcreadortarea
		$this->idcreadortarea = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_idcreadortarea', 'idcreadortarea', '`idcreadortarea`', '`idcreadortarea`', 2, -1, FALSE, '`idcreadortarea`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idcreadortarea->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idcreadortarea'] = &$this->idcreadortarea;

		// idempresa
		$this->idempresa = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_idempresa', 'idempresa', '`idempresa`', '`idempresa`', 17, -1, FALSE, '`idempresa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idempresa->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idempresa'] = &$this->idempresa;

		// idarea
		$this->idarea = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_idarea', 'idarea', '`idarea`', '`idarea`', 18, -1, FALSE, '`idarea`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idarea->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idarea'] = &$this->idarea;

		// IdLiderUsuario
		$this->IdLiderUsuario = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdLiderUsuario', 'IdLiderUsuario', '`IdLiderUsuario`', '`IdLiderUsuario`', 2, -1, FALSE, '`IdLiderUsuario`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdLiderUsuario->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdLiderUsuario'] = &$this->IdLiderUsuario;

		// IdGerenteSolicitante
		$this->IdGerenteSolicitante = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdGerenteSolicitante', 'IdGerenteSolicitante', '`IdGerenteSolicitante`', '`IdGerenteSolicitante`', 2, -1, FALSE, '`IdGerenteSolicitante`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdGerenteSolicitante->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdGerenteSolicitante'] = &$this->IdGerenteSolicitante;

		// IdRevisaSolicitud
		$this->IdRevisaSolicitud = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_IdRevisaSolicitud', 'IdRevisaSolicitud', '`IdRevisaSolicitud`', '`IdRevisaSolicitud`', 2, -1, FALSE, '`IdRevisaSolicitud`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdRevisaSolicitud->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdRevisaSolicitud'] = &$this->IdRevisaSolicitud;

		// idestado
		$this->idestado = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_idestado', 'idestado', '`idestado`', '`idestado`', 17, -1, FALSE, '`idestado`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idestado->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idestado'] = &$this->idestado;

		// DesSolicitud
		$this->DesSolicitud = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_DesSolicitud', 'DesSolicitud', '`DesSolicitud`', '`DesSolicitud`', 201, -1, FALSE, '`DesSolicitud`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['DesSolicitud'] = &$this->DesSolicitud;

		// Objetivo
		$this->Objetivo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Objetivo', 'Objetivo', '`Objetivo`', '`Objetivo`', 201, -1, FALSE, '`Objetivo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Objetivo'] = &$this->Objetivo;

		// Beneficios
		$this->Beneficios = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Beneficios', 'Beneficios', '`Beneficios`', '`Beneficios`', 201, -1, FALSE, '`Beneficios`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Beneficios'] = &$this->Beneficios;

		// FuncOperativa
		$this->FuncOperativa = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_FuncOperativa', 'FuncOperativa', '`FuncOperativa`', '`FuncOperativa`', 201, -1, FALSE, '`FuncOperativa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['FuncOperativa'] = &$this->FuncOperativa;

		// GestionControl
		$this->GestionControl = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_GestionControl', 'GestionControl', '`GestionControl`', '`GestionControl`', 201, -1, FALSE, '`GestionControl`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['GestionControl'] = &$this->GestionControl;

		// ReferLegal
		$this->ReferLegal = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_ReferLegal', 'ReferLegal', '`ReferLegal`', '`ReferLegal`', 201, -1, FALSE, '`ReferLegal`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ReferLegal'] = &$this->ReferLegal;

		// AreasRelacionadas
		$this->AreasRelacionadas = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_AreasRelacionadas', 'AreasRelacionadas', '`AreasRelacionadas`', '`AreasRelacionadas`', 201, -1, FALSE, '`AreasRelacionadas`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['AreasRelacionadas'] = &$this->AreasRelacionadas;

		// Observaciones
		$this->Observaciones = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Observaciones', 'Observaciones', '`Observaciones`', '`Observaciones`', 201, -1, FALSE, '`Observaciones`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Observaciones'] = &$this->Observaciones;

		// fechaRevisaJRO
		$this->fechaRevisaJRO = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_fechaRevisaJRO', 'fechaRevisaJRO', '`fechaRevisaJRO`', 'DATE_FORMAT(`fechaRevisaJRO`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fechaRevisaJRO`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fechaRevisaJRO->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fechaRevisaJRO'] = &$this->fechaRevisaJRO;

		// JefeRiesgoOperativo
		$this->JefeRiesgoOperativo = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_JefeRiesgoOperativo', 'JefeRiesgoOperativo', '`JefeRiesgoOperativo`', '`JefeRiesgoOperativo`', 2, -1, FALSE, '`JefeRiesgoOperativo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->JefeRiesgoOperativo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['JefeRiesgoOperativo'] = &$this->JefeRiesgoOperativo;

		// Impacto
		$this->Impacto = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Impacto', 'Impacto', '`Impacto`', '`Impacto`', 202, -1, FALSE, '`Impacto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Impacto'] = &$this->Impacto;

		// Participacion
		$this->Participacion = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Participacion', 'Participacion', '`Participacion`', '`Participacion`', 202, -1, FALSE, '`Participacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Participacion'] = &$this->Participacion;

		// Justificativa
		$this->Justificativa = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Justificativa', 'Justificativa', '`Justificativa`', '`Justificativa`', 201, -1, FALSE, '`Justificativa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Justificativa'] = &$this->Justificativa;

		// Recomendacion
		$this->Recomendacion = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Recomendacion', 'Recomendacion', '`Recomendacion`', '`Recomendacion`', 201, -1, FALSE, '`Recomendacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Recomendacion'] = &$this->Recomendacion;

		// dias_analisis_td
		$this->dias_analisis_td = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_dias_analisis_td', 'dias_analisis_td', '`dias_analisis_td`', '`dias_analisis_td`', 131, -1, FALSE, '`dias_analisis_td`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_analisis_td->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['dias_analisis_td'] = &$this->dias_analisis_td;

		// dias_desarrollo_td
		$this->dias_desarrollo_td = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_dias_desarrollo_td', 'dias_desarrollo_td', '`dias_desarrollo_td`', '`dias_desarrollo_td`', 131, -1, FALSE, '`dias_desarrollo_td`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_desarrollo_td->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['dias_desarrollo_td'] = &$this->dias_desarrollo_td;

		// dias_pruebas_td
		$this->dias_pruebas_td = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_dias_pruebas_td', 'dias_pruebas_td', '`dias_pruebas_td`', '`dias_pruebas_td`', 131, -1, FALSE, '`dias_pruebas_td`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_pruebas_td->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['dias_pruebas_td'] = &$this->dias_pruebas_td;

		// dias_qa_td
		$this->dias_qa_td = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_dias_qa_td', 'dias_qa_td', '`dias_qa_td`', '`dias_qa_td`', 131, -1, FALSE, '`dias_qa_td`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_qa_td->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['dias_qa_td'] = &$this->dias_qa_td;

		// avance_analisis_real
		$this->avance_analisis_real = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_avance_analisis_real', 'avance_analisis_real', '`avance_analisis_real`', '`avance_analisis_real`', 17, -1, FALSE, '`avance_analisis_real`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_analisis_real->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_analisis_real'] = &$this->avance_analisis_real;

		// avance_desarrollo_real
		$this->avance_desarrollo_real = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_avance_desarrollo_real', 'avance_desarrollo_real', '`avance_desarrollo_real`', '`avance_desarrollo_real`', 17, -1, FALSE, '`avance_desarrollo_real`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_desarrollo_real->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_desarrollo_real'] = &$this->avance_desarrollo_real;

		// avance_pruebas_real
		$this->avance_pruebas_real = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_avance_pruebas_real', 'avance_pruebas_real', '`avance_pruebas_real`', '`avance_pruebas_real`', 17, -1, FALSE, '`avance_pruebas_real`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_pruebas_real->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_pruebas_real'] = &$this->avance_pruebas_real;

		// avance_qa_real
		$this->avance_qa_real = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_avance_qa_real', 'avance_qa_real', '`avance_qa_real`', '`avance_qa_real`', 17, -1, FALSE, '`avance_qa_real`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_qa_real->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_qa_real'] = &$this->avance_qa_real;

		// avance_analisis_plan
		$this->avance_analisis_plan = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_avance_analisis_plan', 'avance_analisis_plan', '`avance_analisis_plan`', '`avance_analisis_plan`', 17, -1, FALSE, '`avance_analisis_plan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_analisis_plan->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_analisis_plan'] = &$this->avance_analisis_plan;

		// avance_desarrollo_plan
		$this->avance_desarrollo_plan = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_avance_desarrollo_plan', 'avance_desarrollo_plan', '`avance_desarrollo_plan`', '`avance_desarrollo_plan`', 17, -1, FALSE, '`avance_desarrollo_plan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_desarrollo_plan->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_desarrollo_plan'] = &$this->avance_desarrollo_plan;

		// avance_pruebas_plan
		$this->avance_pruebas_plan = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_avance_pruebas_plan', 'avance_pruebas_plan', '`avance_pruebas_plan`', '`avance_pruebas_plan`', 17, -1, FALSE, '`avance_pruebas_plan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_pruebas_plan->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_pruebas_plan'] = &$this->avance_pruebas_plan;

		// avance_qa_plan
		$this->avance_qa_plan = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_avance_qa_plan', 'avance_qa_plan', '`avance_qa_plan`', '`avance_qa_plan`', 17, -1, FALSE, '`avance_qa_plan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_qa_plan->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_qa_plan'] = &$this->avance_qa_plan;

		// dias_anticipacion
		$this->dias_anticipacion = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_dias_anticipacion', 'dias_anticipacion', '`dias_anticipacion`', '`dias_anticipacion`', 2, -1, FALSE, '`dias_anticipacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_anticipacion->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['dias_anticipacion'] = &$this->dias_anticipacion;

		// veces_mod_findes
		$this->veces_mod_findes = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_veces_mod_findes', 'veces_mod_findes', '`veces_mod_findes`', '`veces_mod_findes`', 18, -1, FALSE, '`veces_mod_findes`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->veces_mod_findes->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['veces_mod_findes'] = &$this->veces_mod_findes;

		// ObsGestion
		$this->ObsGestion = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_ObsGestion', 'ObsGestion', '`ObsGestion`', '`ObsGestion`', 201, -1, FALSE, '`ObsGestion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ObsGestion'] = &$this->ObsGestion;

		// ObsTareasDiairias
		$this->ObsTareasDiairias = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_ObsTareasDiairias', 'ObsTareasDiairias', '`ObsTareasDiairias`', '`ObsTareasDiairias`', 201, -1, FALSE, '`ObsTareasDiairias`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ObsTareasDiairias'] = &$this->ObsTareasDiairias;

		// Duracion
		$this->Duracion = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_Duracion', 'Duracion', '`Duracion`', '`Duracion`', 18, -1, FALSE, '`Duracion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->Duracion->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['Duracion'] = &$this->Duracion;

		// PorcCompletado
		$this->PorcCompletado = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_PorcCompletado', 'PorcCompletado', '`PorcCompletado`', '`PorcCompletado`', 16, -1, FALSE, '`PorcCompletado`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->PorcCompletado->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['PorcCompletado'] = &$this->PorcCompletado;

		// PorcProyectado
		$this->PorcProyectado = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_PorcProyectado', 'PorcProyectado', '`PorcProyectado`', '`PorcProyectado`', 16, -1, FALSE, '`PorcProyectado`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->PorcProyectado->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['PorcProyectado'] = &$this->PorcProyectado;

		// PorcDiferencia
		$this->PorcDiferencia = new cField('pp_proyectojefedesarrollo', 'pp_proyectojefedesarrollo', 'x_PorcDiferencia', 'PorcDiferencia', '`PorcDiferencia`', '`PorcDiferencia`', 16, -1, FALSE, '`PorcDiferencia`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->PorcDiferencia->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['PorcDiferencia'] = &$this->PorcDiferencia;
	}

	// Single column sort
	function UpdateSort(&$ofld) {
		if ($this->CurrentOrder == $ofld->FldName) {
			$sSortField = $ofld->FldExpression;
			$sLastSort = $ofld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$sThisSort = $this->CurrentOrderType;
			} else {
				$sThisSort = ($sLastSort == "ASC") ? "DESC" : "ASC";
			}
			$ofld->setSort($sThisSort);
			$this->setSessionOrderBy($sSortField . " " . $sThisSort); // Save to Session
		} else {
			$ofld->setSort("");
		}
	}

	// Current detail table name
	function getCurrentDetailTable() {
		return @$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_DETAIL_TABLE];
	}

	function setCurrentDetailTable($v) {
		$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_DETAIL_TABLE] = $v;
	}

	// Get detail url
	function GetDetailUrl() {

		// Detail url
		$sDetailUrl = "";
		if ($this->getCurrentDetailTable() == "pp_requeproyjefedesarrollo") {
			$sDetailUrl = $GLOBALS["pp_requeproyjefedesarrollo"]->GetListUrl() . "?showmaster=" . $this->TableVar;
			$sDetailUrl .= "&IdProyDesDepen=" . $this->IdProyDes->CurrentValue;
		}
		if ($this->getCurrentDetailTable() == "pp_view_proydes_historia") {
			$sDetailUrl = $GLOBALS["pp_view_proydes_historia"]->GetListUrl() . "?showmaster=" . $this->TableVar;
			$sDetailUrl .= "&IdProyDes=" . $this->IdProyDes->CurrentValue;
		}
		if ($sDetailUrl == "") {
			$sDetailUrl = "lmo_pp_proyectojefedesarrollolist.php";
		}
		return $sDetailUrl;
	}

	// Table level SQL
	function SqlFrom() { // From
		return "`pp_proyectojefedesarrollo`";
	}

	function SqlSelect() { // Select
		return "SELECT * FROM " . $this->SqlFrom();
	}

	function SqlWhere() { // Where
		$sWhere = "";
		$this->TableFilter = "";
		ew_AddFilter($sWhere, $this->TableFilter);
		return $sWhere;
	}

	function SqlGroupBy() { // Group By
		return "";
	}

	function SqlHaving() { // Having
		return "";
	}

	function SqlOrderBy() { // Order By
		return "";
	}

	// Check if Anonymous User is allowed
	function AllowAnonymousUser() {
		switch (@$this->PageID) {
			case "add":
			case "register":
			case "addopt":
				return FALSE;
			case "edit":
			case "update":
			case "changepwd":
			case "forgotpwd":
				return FALSE;
			case "delete":
				return FALSE;
			case "view":
				return FALSE;
			case "search":
				return FALSE;
			default:
				return FALSE;
		}
	}

	// Apply User ID filters
	function ApplyUserIDFilters($sFilter) {
		return $sFilter;
	}

	// Check if User ID security allows view all
	function UserIDAllow($id = "") {
		$allow = EW_USER_ID_ALLOW;
		switch ($id) {
			case "add":
			case "copy":
			case "gridadd":
			case "register":
			case "addopt":
				return (($allow & 1) == 1);
			case "edit":
			case "gridedit":
			case "update":
			case "changepwd":
			case "forgotpwd":
				return (($allow & 4) == 4);
			case "delete":
				return (($allow & 2) == 2);
			case "view":
				return (($allow & 8) == 8);
			case "search":
				return (($allow & 8) == 8);
			default:
				return (($allow & 8) == 8);
		}
	}

	// Get SQL
	function GetSQL($where, $orderby) {
		return ew_BuildSelectSql($this->SqlSelect(), $this->SqlWhere(),
			$this->SqlGroupBy(), $this->SqlHaving(), $this->SqlOrderBy(),
			$where, $orderby);
	}

	// Table SQL
	function SQL() {
		$sFilter = $this->CurrentFilter;
		$sFilter = $this->ApplyUserIDFilters($sFilter);
		$sSort = $this->getSessionOrderBy();
		return ew_BuildSelectSql($this->SqlSelect(), $this->SqlWhere(),
			$this->SqlGroupBy(), $this->SqlHaving(), $this->SqlOrderBy(),
			$sFilter, $sSort);
	}

	// Table SQL with List page filter
	function SelectSQL() {
		$sFilter = $this->getSessionWhere();
		ew_AddFilter($sFilter, $this->CurrentFilter);
		$sFilter = $this->ApplyUserIDFilters($sFilter);
		$sSort = $this->getSessionOrderBy();
		return ew_BuildSelectSql($this->SqlSelect(), $this->SqlWhere(), $this->SqlGroupBy(),
			$this->SqlHaving(), $this->SqlOrderBy(), $sFilter, $sSort);
	}

	// Get ORDER BY clause
	function GetOrderBy() {
		$sSort = $this->getSessionOrderBy();
		return ew_BuildSelectSql("", "", "", "", $this->SqlOrderBy(), "", $sSort);
	}

	// Try to get record count
	function TryGetRecordCount($sSql) {
		global $conn;
		$cnt = -1;
		if ($this->TableType == 'TABLE' || $this->TableType == 'VIEW') {
			$sSql = "SELECT COUNT(*) FROM" . preg_replace('/^SELECT\s([\s\S]+)?\*\sFROM/i', "", $sSql);
			$sOrderBy = $this->GetOrderBy();
			if (substr($sSql, strlen($sOrderBy) * -1) == $sOrderBy)
				$sSql = substr($sSql, 0, strlen($sSql) - strlen($sOrderBy)); // Remove ORDER BY clause
		} else {
			$sSql = "SELECT COUNT(*) FROM (" . $sSql . ") EW_COUNT_TABLE";
		}
		if ($rs = $conn->Execute($sSql)) {
			if (!$rs->EOF && $rs->FieldCount() > 0) {
				$cnt = $rs->fields[0];
				$rs->Close();
			}
		}
		return intval($cnt);
	}

	// Get record count based on filter (for detail record count in master table pages)
	function LoadRecordCount($sFilter) {
		$origFilter = $this->CurrentFilter;
		$this->CurrentFilter = $sFilter;
		$this->Recordset_Selecting($this->CurrentFilter);

		//$sSql = $this->SQL();
		$sSql = $this->GetSQL($this->CurrentFilter, "");
		$cnt = $this->TryGetRecordCount($sSql);
		if ($cnt == -1) {
			if ($rs = $this->LoadRs($this->CurrentFilter)) {
				$cnt = $rs->RecordCount();
				$rs->Close();
			}
		}
		$this->CurrentFilter = $origFilter;
		return intval($cnt);
	}

	// Get record count (for current List page)
	function SelectRecordCount() {
		global $conn;
		$origFilter = $this->CurrentFilter;
		$this->Recordset_Selecting($this->CurrentFilter);
		$sSql = $this->SelectSQL();
		$cnt = $this->TryGetRecordCount($sSql);
		if ($cnt == -1) {
			if ($rs = $conn->Execute($sSql)) {
				$cnt = $rs->RecordCount();
				$rs->Close();
			}
		}
		$this->CurrentFilter = $origFilter;
		return intval($cnt);
	}

	// Update Table
	//lmo var $UpdateTable = "`pp_proyectojefedesarrollo`";
	var $UpdateTable = "`pp_proydes`";

	// INSERT statement
	function InsertSQL(&$rs) {
		global $conn;
		$names = "";
		$values = "";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]))
				continue;
			$names .= $this->fields[$name]->FldExpression . ",";
			$values .= ew_QuotedValue($value, $this->fields[$name]->FldDataType) . ",";
		}
		while (substr($names, -1) == ",")
			$names = substr($names, 0, -1);
		while (substr($values, -1) == ",")
			$values = substr($values, 0, -1);
		return "INSERT INTO " . $this->UpdateTable . " ($names) VALUES ($values)";
	}

	// Insert
	function Insert(&$rs) {
		global $conn;
		return $conn->Execute($this->InsertSQL($rs));
	}

	// UPDATE statement
	function UpdateSQL(&$rs, $where = "") {
		$sql = "UPDATE " . $this->UpdateTable . " SET ";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]))
				continue;
			$sql .= $this->fields[$name]->FldExpression . "=";
			$sql .= ew_QuotedValue($value, $this->fields[$name]->FldDataType) . ",";
		}
		while (substr($sql, -1) == ",")
			$sql = substr($sql, 0, -1);
		$filter = $this->CurrentFilter;
		ew_AddFilter($filter, $where);
		if ($filter <> "")	$sql .= " WHERE " . $filter;
		return $sql;
	}

	// Update
	function Update(&$rs, $where = "", $rsold = NULL) {
		global $conn;
		return $conn->Execute($this->UpdateSQL($rs, $where));
	}

	// DELETE statement
	function DeleteSQL(&$rs, $where = "") {
		$sql = "DELETE FROM " . $this->UpdateTable . " WHERE ";
		if ($rs) {
			if (array_key_exists('IdProyDes', $rs))
				ew_AddFilter($where, ew_QuotedName('IdProyDes') . '=' . ew_QuotedValue($rs['IdProyDes'], $this->IdProyDes->FldDataType));
		}
		$filter = $this->CurrentFilter;
		ew_AddFilter($filter, $where);
		if ($filter <> "")
			$sql .= $filter;
		else
			$sql .= "0=1"; // Avoid delete
		return $sql;
	}

	// Delete
	function Delete(&$rs, $where = "") {
		global $conn;
		return $conn->Execute($this->DeleteSQL($rs, $where));
	}

	// Key filter WHERE clause
	function SqlKeyFilter() {
		return "`IdProyDes` = @IdProyDes@";
	}

	// Key filter
	function KeyFilter() {
		$sKeyFilter = $this->SqlKeyFilter();
		if (!is_numeric($this->IdProyDes->CurrentValue))
			$sKeyFilter = "0=1"; // Invalid key
		$sKeyFilter = str_replace("@IdProyDes@", ew_AdjustSql($this->IdProyDes->CurrentValue), $sKeyFilter); // Replace key value
		return $sKeyFilter;
	}

	// Return page URL
	function getReturnUrl() {
		$name = EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_RETURN_URL;

		// Get referer URL automatically
		if (ew_ServerVar("HTTP_REFERER") <> "" && ew_ReferPage() <> ew_CurrentPage() && ew_ReferPage() <> "lmo_login.php") // Referer not same page or login page
			$_SESSION[$name] = ew_ServerVar("HTTP_REFERER"); // Save to Session
		if (@$_SESSION[$name] <> "") {
			return $_SESSION[$name];
		} else {
			return "lmo_pp_proyectojefedesarrollolist.php";
		}
	}

	function setReturnUrl($v) {
		$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_RETURN_URL] = $v;
	}

	// List URL
	function GetListUrl() {
		return "lmo_pp_proyectojefedesarrollolist.php";
	}

	// View URL
	function GetViewUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_proyectojefedesarrolloview.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_proyectojefedesarrolloview.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Add URL
	function GetAddUrl() {
		return "lmo_pp_proyectojefedesarrolloadd.php";
	}

	// Edit URL
	function GetEditUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_proyectojefedesarrolloedit.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_proyectojefedesarrolloedit.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Inline edit URL
	function GetInlineEditUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=edit"));
	}

	// Copy URL
	function GetCopyUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_proyectojefedesarrolloadd.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_proyectojefedesarrolloadd.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Inline copy URL
	function GetInlineCopyUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=copy"));
	}

	// Delete URL
	function GetDeleteUrl() {
		return $this->KeyUrl("lmo_pp_proyectojefedesarrollodelete.php", $this->UrlParm());
	}

	// Add key value to URL
	function KeyUrl($url, $parm = "") {
		$sUrl = $url . "?";
		if ($parm <> "") $sUrl .= $parm . "&";
		if (!is_null($this->IdProyDes->CurrentValue)) {
			$sUrl .= "IdProyDes=" . urlencode($this->IdProyDes->CurrentValue);
		} else {
			return "javascript:alert(ewLanguage.Phrase('InvalidRecord'));";
		}
		return $sUrl;
	}

	// Sort URL
	function SortUrl(&$fld) {
		if ($this->CurrentAction <> "" || $this->Export <> "" ||
			in_array($fld->FldType, array(128, 204, 205))) { // Unsortable data type
				return "";
		} elseif ($fld->Sortable) {
			$sUrlParm = $this->UrlParm("order=" . urlencode($fld->FldName) . "&amp;ordertype=" . $fld->ReverseSort());
			return ew_CurrentPage() . "?" . $sUrlParm;
		} else {
			return "";
		}
	}

	// Get record keys from $_POST/$_GET/$_SESSION
	function GetRecordKeys() {
		global $EW_COMPOSITE_KEY_SEPARATOR;
		$arKeys = array();
		$arKey = array();
		if (isset($_POST["key_m"])) {
			$arKeys = ew_StripSlashes($_POST["key_m"]);
			$cnt = count($arKeys);
		} elseif (isset($_GET["key_m"])) {
			$arKeys = ew_StripSlashes($_GET["key_m"]);
			$cnt = count($arKeys);
		} elseif (isset($_GET)) {
			$arKeys[] = @$_GET["IdProyDes"]; // IdProyDes

			//return $arKeys; // Do not return yet, so the values will also be checked by the following code
		}

		// Check keys
		$ar = array();
		foreach ($arKeys as $key) {
			if (!is_numeric($key))
				continue;
			$ar[] = $key;
		}
		return $ar;
	}

	// Get key filter
	function GetKeyFilter() {
		$arKeys = $this->GetRecordKeys();
		$sKeyFilter = "";
		foreach ($arKeys as $key) {
			if ($sKeyFilter <> "") $sKeyFilter .= " OR ";
			$this->IdProyDes->CurrentValue = $key;
			$sKeyFilter .= "(" . $this->KeyFilter() . ")";
		}
		return $sKeyFilter;
	}

	// Load rows based on filter
	function &LoadRs($sFilter) {
		global $conn;

		// Set up filter (SQL WHERE clause) and get return SQL
		//$this->CurrentFilter = $sFilter;
		//$sSql = $this->SQL();

		$sSql = $this->GetSQL($sFilter, "");
		$rs = $conn->Execute($sSql);
		return $rs;
	}

	// Load row values from recordset
	function LoadListRowValues(&$rs) {
		$this->IdProyDes->setDbValue($rs->fields('IdProyDes'));
		$this->IdSolDesarrollo->setDbValue($rs->fields('IdSolDesarrollo'));
		$this->id_tipopoa->setDbValue($rs->fields('id_tipopoa'));
		$this->FechaRequerimiento_log->setDbValue($rs->fields('FechaRequerimiento_log'));
		$this->FechaSolicitud->setDbValue($rs->fields('FechaSolicitud'));
		$this->FechaRequerida->setDbValue($rs->fields('FechaRequerida'));
		$this->FechaInicio->setDbValue($rs->fields('FechaInicio'));
		$this->FechaAnalisisFin->setDbValue($rs->fields('FechaAnalisisFin'));
		$this->FechaDesarrolloInicio->setDbValue($rs->fields('FechaDesarrolloInicio'));
		$this->FechaDesarrolloFin->setDbValue($rs->fields('FechaDesarrolloFin'));
		$this->FechaPruebasInicio->setDbValue($rs->fields('FechaPruebasInicio'));
		$this->FechaTerminoPropuesto->setDbValue($rs->fields('FechaTerminoPropuesto'));
		$this->FechaQAInicio->setDbValue($rs->fields('FechaQAInicio'));
		$this->FechaTerminoQA->setDbValue($rs->fields('FechaTerminoQA'));
		$this->FechaPruebasUserInicio->setDbValue($rs->fields('FechaPruebasUserInicio'));
		$this->FechaPruebasUserFin->setDbValue($rs->fields('FechaPruebasUserFin'));
		$this->FechaTermino->setDbValue($rs->fields('FechaTermino'));
		$this->FechaProgramacion->setDbValue($rs->fields('FechaProgramacion'));
		$this->FechaUltimoPase->setDbValue($rs->fields('FechaUltimoPase'));
		$this->FechaUltimaTareaDiaria->setDbValue($rs->fields('FechaUltimaTareaDiaria'));
		$this->cant_dias_analisis->setDbValue($rs->fields('cant_dias_analisis'));
		$this->cant_dias_desarrollo->setDbValue($rs->fields('cant_dias_desarrollo'));
		$this->cant_dias_pruebas->setDbValue($rs->fields('cant_dias_pruebas'));
		$this->cant_dias_qa->setDbValue($rs->fields('cant_dias_qa'));
		$this->cant_dias_prueba_user->setDbValue($rs->fields('cant_dias_prueba_user'));
		$this->Titulo->setDbValue($rs->fields('Titulo'));
		$this->Descripcion->setDbValue($rs->fields('Descripcion'));
		$this->SolicitudDesarrollo->Upload->DbValue = $rs->fields('SolicitudDesarrollo');
		$this->ganttProyecto->Upload->DbValue = $rs->fields('ganttProyecto');
		$this->IdLiderTecnico->setDbValue($rs->fields('IdLiderTecnico'));
		$this->IdJefeProyecto->setDbValue($rs->fields('IdJefeProyecto'));
		$this->IdQA->setDbValue($rs->fields('IdQA'));
		$this->IdUsuario_log->setDbValue($rs->fields('IdUsuario_log'));
		$this->IdMotivo->setDbValue($rs->fields('IdMotivo'));
		$this->Tipo->setDbValue($rs->fields('Tipo'));
		$this->IdSistema->setDbValue($rs->fields('IdSistema'));
		$this->horasdesarrollo->setDbValue($rs->fields('horasdesarrollo'));
		$this->idcreadortarea->setDbValue($rs->fields('idcreadortarea'));
		$this->idempresa->setDbValue($rs->fields('idempresa'));
		$this->idarea->setDbValue($rs->fields('idarea'));
		$this->IdLiderUsuario->setDbValue($rs->fields('IdLiderUsuario'));
		$this->IdGerenteSolicitante->setDbValue($rs->fields('IdGerenteSolicitante'));
		$this->IdRevisaSolicitud->setDbValue($rs->fields('IdRevisaSolicitud'));
		$this->idestado->setDbValue($rs->fields('idestado'));
		$this->DesSolicitud->setDbValue($rs->fields('DesSolicitud'));
		$this->Objetivo->setDbValue($rs->fields('Objetivo'));
		$this->Beneficios->setDbValue($rs->fields('Beneficios'));
		$this->FuncOperativa->setDbValue($rs->fields('FuncOperativa'));
		$this->GestionControl->setDbValue($rs->fields('GestionControl'));
		$this->ReferLegal->setDbValue($rs->fields('ReferLegal'));
		$this->AreasRelacionadas->setDbValue($rs->fields('AreasRelacionadas'));
		$this->Observaciones->setDbValue($rs->fields('Observaciones'));
		$this->fechaRevisaJRO->setDbValue($rs->fields('fechaRevisaJRO'));
		$this->JefeRiesgoOperativo->setDbValue($rs->fields('JefeRiesgoOperativo'));
		$this->Impacto->setDbValue($rs->fields('Impacto'));
		$this->Participacion->setDbValue($rs->fields('Participacion'));
		$this->Justificativa->setDbValue($rs->fields('Justificativa'));
		$this->Recomendacion->setDbValue($rs->fields('Recomendacion'));
		$this->dias_analisis_td->setDbValue($rs->fields('dias_analisis_td'));
		$this->dias_desarrollo_td->setDbValue($rs->fields('dias_desarrollo_td'));
		$this->dias_pruebas_td->setDbValue($rs->fields('dias_pruebas_td'));
		$this->dias_qa_td->setDbValue($rs->fields('dias_qa_td'));
		$this->avance_analisis_real->setDbValue($rs->fields('avance_analisis_real'));
		$this->avance_desarrollo_real->setDbValue($rs->fields('avance_desarrollo_real'));
		$this->avance_pruebas_real->setDbValue($rs->fields('avance_pruebas_real'));
		$this->avance_qa_real->setDbValue($rs->fields('avance_qa_real'));
		$this->avance_analisis_plan->setDbValue($rs->fields('avance_analisis_plan'));
		$this->avance_desarrollo_plan->setDbValue($rs->fields('avance_desarrollo_plan'));
		$this->avance_pruebas_plan->setDbValue($rs->fields('avance_pruebas_plan'));
		$this->avance_qa_plan->setDbValue($rs->fields('avance_qa_plan'));
		$this->dias_anticipacion->setDbValue($rs->fields('dias_anticipacion'));
		$this->veces_mod_findes->setDbValue($rs->fields('veces_mod_findes'));
		$this->ObsGestion->setDbValue($rs->fields('ObsGestion'));
		$this->ObsTareasDiairias->setDbValue($rs->fields('ObsTareasDiairias'));
		$this->Duracion->setDbValue($rs->fields('Duracion'));
		$this->PorcCompletado->setDbValue($rs->fields('PorcCompletado'));
		$this->PorcProyectado->setDbValue($rs->fields('PorcProyectado'));
		$this->PorcDiferencia->setDbValue($rs->fields('PorcDiferencia'));
	}

	// Render list row values
	function RenderListRow() {
		global $conn, $Security, $gsLanguage;

		// Call Row Rendering event
		$this->Row_Rendering();

   // Common render codes
		// IdProyDes
		// IdSolDesarrollo
		// id_tipopoa
		// FechaRequerimiento_log
		// FechaSolicitud
		// FechaRequerida
		// FechaInicio
		// FechaAnalisisFin
		// FechaDesarrolloInicio
		// FechaDesarrolloFin
		// FechaPruebasInicio
		// FechaTerminoPropuesto
		// FechaQAInicio
		// FechaTerminoQA
		// FechaPruebasUserInicio
		// FechaPruebasUserFin
		// FechaTermino
		// FechaProgramacion
		// FechaUltimoPase
		// FechaUltimaTareaDiaria
		// cant_dias_analisis
		// cant_dias_desarrollo
		// cant_dias_pruebas
		// cant_dias_qa
		// cant_dias_prueba_user
		// Titulo

		$this->Titulo->CellCssStyle = "width: 400px;";

		// Descripcion
		// SolicitudDesarrollo
		// ganttProyecto
		// IdLiderTecnico
		// IdJefeProyecto
		// IdQA
		// IdUsuario_log
		// IdMotivo
		// Tipo
		// IdSistema
		// horasdesarrollo
		// idcreadortarea
		// idempresa
		// idarea
		// IdLiderUsuario
		// IdGerenteSolicitante
		// IdRevisaSolicitud
		// idestado
		// DesSolicitud
		// Objetivo
		// Beneficios
		// FuncOperativa
		// GestionControl
		// ReferLegal
		// AreasRelacionadas
		// Observaciones
		// fechaRevisaJRO
		// JefeRiesgoOperativo
		// Impacto
		// Participacion
		// Justificativa
		// Recomendacion
		// dias_analisis_td
		// dias_desarrollo_td
		// dias_pruebas_td
		// dias_qa_td
		// avance_analisis_real
		// avance_desarrollo_real
		// avance_pruebas_real
		// avance_qa_real
		// avance_analisis_plan
		// avance_desarrollo_plan
		// avance_pruebas_plan
		// avance_qa_plan
		// dias_anticipacion
		// veces_mod_findes
		// ObsGestion
		// ObsTareasDiairias
		// Duracion
		// PorcCompletado
		// PorcProyectado
		// PorcDiferencia
		// IdProyDes

		$this->IdProyDes->ViewValue = $this->IdProyDes->CurrentValue;
		$this->IdProyDes->ViewCustomAttributes = "";

		// IdSolDesarrollo
		$this->IdSolDesarrollo->ViewValue = $this->IdSolDesarrollo->CurrentValue;
		if (strval($this->IdSolDesarrollo->CurrentValue) <> "") {
			$sFilterWrk = "`IdSolDesarrollo`" . ew_SearchString("=", $this->IdSolDesarrollo->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdSolDesarrollo`, `IdSolDesarrollo` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_soldesarrollo`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdSolDesarrollo, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdSolDesarrollo->ViewValue = $rswrk->fields('DispFld');
				$rswrk->Close();
			} else {
				$this->IdSolDesarrollo->ViewValue = $this->IdSolDesarrollo->CurrentValue;
			}
		} else {
			$this->IdSolDesarrollo->ViewValue = NULL;
		}
		$this->IdSolDesarrollo->ViewValue = strtolower($this->IdSolDesarrollo->ViewValue);
		$this->IdSolDesarrollo->ViewCustomAttributes = "";

		// id_tipopoa
		if (strval($this->id_tipopoa->CurrentValue) <> "") {
			$sFilterWrk = "`iddetalle`" . ew_SearchString("=", $this->id_tipopoa->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `iddetalle`, `descripcion` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_conceptos`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idconcepto`= 23 and `iddetalle`<>0";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->id_tipopoa, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->id_tipopoa->ViewValue = $rswrk->fields('DispFld');
				$rswrk->Close();
			} else {
				$this->id_tipopoa->ViewValue = $this->id_tipopoa->CurrentValue;
			}
		} else {
			$this->id_tipopoa->ViewValue = NULL;
		}
		$this->id_tipopoa->ViewCustomAttributes = "";

		// FechaRequerimiento_log
		$this->FechaRequerimiento_log->ViewValue = $this->FechaRequerimiento_log->CurrentValue;
		$this->FechaRequerimiento_log->ViewValue = ew_FormatDateTime($this->FechaRequerimiento_log->ViewValue, 11);
		$this->FechaRequerimiento_log->ViewCustomAttributes = "";

		// FechaSolicitud
		$this->FechaSolicitud->ViewValue = $this->FechaSolicitud->CurrentValue;
		$this->FechaSolicitud->ViewValue = ew_FormatDateTime($this->FechaSolicitud->ViewValue, 11);
		$this->FechaSolicitud->ViewCustomAttributes = "";

		// FechaRequerida
		$this->FechaRequerida->ViewValue = $this->FechaRequerida->CurrentValue;
		$this->FechaRequerida->ViewValue = ew_FormatDateTime($this->FechaRequerida->ViewValue, 11);
		$this->FechaRequerida->ViewCustomAttributes = "";

		// FechaInicio
		$this->FechaInicio->ViewValue = $this->FechaInicio->CurrentValue;
		$this->FechaInicio->ViewValue = ew_FormatDateTime($this->FechaInicio->ViewValue, 7);
		$this->FechaInicio->ViewCustomAttributes = "";

		// FechaAnalisisFin
		$this->FechaAnalisisFin->ViewValue = $this->FechaAnalisisFin->CurrentValue;
		$this->FechaAnalisisFin->ViewValue = ew_FormatDateTime($this->FechaAnalisisFin->ViewValue, 7);
		$this->FechaAnalisisFin->ViewCustomAttributes = "";

		// FechaDesarrolloInicio
		$this->FechaDesarrolloInicio->ViewValue = $this->FechaDesarrolloInicio->CurrentValue;
		$this->FechaDesarrolloInicio->ViewValue = ew_FormatDateTime($this->FechaDesarrolloInicio->ViewValue, 7);
		$this->FechaDesarrolloInicio->ViewCustomAttributes = "";

		// FechaDesarrolloFin
		$this->FechaDesarrolloFin->ViewValue = $this->FechaDesarrolloFin->CurrentValue;
		$this->FechaDesarrolloFin->ViewValue = ew_FormatDateTime($this->FechaDesarrolloFin->ViewValue, 7);
		$this->FechaDesarrolloFin->ViewCustomAttributes = "";

		// FechaPruebasInicio
		$this->FechaPruebasInicio->ViewValue = $this->FechaPruebasInicio->CurrentValue;
		$this->FechaPruebasInicio->ViewValue = ew_FormatDateTime($this->FechaPruebasInicio->ViewValue, 7);
		$this->FechaPruebasInicio->ViewCustomAttributes = "";

		// FechaTerminoPropuesto
		$this->FechaTerminoPropuesto->ViewValue = $this->FechaTerminoPropuesto->CurrentValue;
		$this->FechaTerminoPropuesto->ViewValue = ew_FormatDateTime($this->FechaTerminoPropuesto->ViewValue, 7);
		$this->FechaTerminoPropuesto->ViewCustomAttributes = "";

		// FechaQAInicio
		$this->FechaQAInicio->ViewValue = $this->FechaQAInicio->CurrentValue;
		$this->FechaQAInicio->ViewValue = ew_FormatDateTime($this->FechaQAInicio->ViewValue, 7);
		$this->FechaQAInicio->ViewCustomAttributes = "";

		// FechaTerminoQA
		$this->FechaTerminoQA->ViewValue = $this->FechaTerminoQA->CurrentValue;
		$this->FechaTerminoQA->ViewValue = ew_FormatDateTime($this->FechaTerminoQA->ViewValue, 7);
		$this->FechaTerminoQA->ViewCustomAttributes = "";

		// FechaPruebasUserInicio
		$this->FechaPruebasUserInicio->ViewValue = $this->FechaPruebasUserInicio->CurrentValue;
		$this->FechaPruebasUserInicio->ViewValue = ew_FormatDateTime($this->FechaPruebasUserInicio->ViewValue, 7);
		$this->FechaPruebasUserInicio->ViewCustomAttributes = "";

		// FechaPruebasUserFin
		$this->FechaPruebasUserFin->ViewValue = $this->FechaPruebasUserFin->CurrentValue;
		$this->FechaPruebasUserFin->ViewValue = ew_FormatDateTime($this->FechaPruebasUserFin->ViewValue, 7);
		$this->FechaPruebasUserFin->ViewCustomAttributes = "";

		// FechaTermino
		$this->FechaTermino->ViewValue = $this->FechaTermino->CurrentValue;
		$this->FechaTermino->ViewValue = ew_FormatDateTime($this->FechaTermino->ViewValue, 11);
		$this->FechaTermino->ViewCustomAttributes = "";

		// FechaProgramacion
		$this->FechaProgramacion->ViewValue = $this->FechaProgramacion->CurrentValue;
		$this->FechaProgramacion->ViewValue = ew_FormatDateTime($this->FechaProgramacion->ViewValue, 7);
		$this->FechaProgramacion->ViewCustomAttributes = "";

		// FechaUltimoPase
		$this->FechaUltimoPase->ViewValue = $this->FechaUltimoPase->CurrentValue;
		$this->FechaUltimoPase->ViewValue = ew_FormatDateTime($this->FechaUltimoPase->ViewValue, 7);
		$this->FechaUltimoPase->ViewCustomAttributes = "";

		// FechaUltimaTareaDiaria
		$this->FechaUltimaTareaDiaria->ViewValue = $this->FechaUltimaTareaDiaria->CurrentValue;
		$this->FechaUltimaTareaDiaria->ViewValue = ew_FormatDateTime($this->FechaUltimaTareaDiaria->ViewValue, 7);
		$this->FechaUltimaTareaDiaria->ViewCustomAttributes = "";

		// cant_dias_analisis
		$this->cant_dias_analisis->ViewValue = $this->cant_dias_analisis->CurrentValue;
		$this->cant_dias_analisis->ViewValue = ew_FormatNumber($this->cant_dias_analisis->ViewValue, 0, -2, -2, -2);
		$this->cant_dias_analisis->ViewCustomAttributes = "";

		// cant_dias_desarrollo
		$this->cant_dias_desarrollo->ViewValue = $this->cant_dias_desarrollo->CurrentValue;
		$this->cant_dias_desarrollo->ViewValue = ew_FormatNumber($this->cant_dias_desarrollo->ViewValue, 0, -2, -2, -2);
		$this->cant_dias_desarrollo->ViewCustomAttributes = "";

		// cant_dias_pruebas
		$this->cant_dias_pruebas->ViewValue = $this->cant_dias_pruebas->CurrentValue;
		$this->cant_dias_pruebas->ViewCustomAttributes = "";

		// cant_dias_qa
		$this->cant_dias_qa->ViewValue = $this->cant_dias_qa->CurrentValue;
		$this->cant_dias_qa->ViewValue = ew_FormatNumber($this->cant_dias_qa->ViewValue, 0, -2, -2, -2);
		$this->cant_dias_qa->ViewCustomAttributes = "";

		// cant_dias_prueba_user
		$this->cant_dias_prueba_user->ViewValue = $this->cant_dias_prueba_user->CurrentValue;
		$this->cant_dias_prueba_user->ViewValue = ew_FormatNumber($this->cant_dias_prueba_user->ViewValue, 0, -2, -2, -2);
		$this->cant_dias_prueba_user->ViewCustomAttributes = "";

		// Titulo
		$this->Titulo->ViewValue = $this->Titulo->CurrentValue;
		$this->Titulo->ViewValue = strtoupper($this->Titulo->ViewValue);
		$this->Titulo->ViewCustomAttributes = "";

		// Descripcion
		$this->Descripcion->ViewValue = $this->Descripcion->CurrentValue;
		if (!is_null($this->Descripcion->ViewValue)) $this->Descripcion->ViewValue = str_replace("\n", "<br>", $this->Descripcion->ViewValue); 
		$this->Descripcion->ViewCustomAttributes = "";

		// SolicitudDesarrollo
		$this->SolicitudDesarrollo->UploadPath = "solicituddesarrollo/";
		if (!ew_Empty($this->SolicitudDesarrollo->Upload->DbValue)) {
			$this->SolicitudDesarrollo->ViewValue = $this->SolicitudDesarrollo->Upload->DbValue;
		} else {
			$this->SolicitudDesarrollo->ViewValue = "";
		}
		$this->SolicitudDesarrollo->ViewCustomAttributes = "";

		// ganttProyecto
		$this->ganttProyecto->UploadPath = "docdesarrollo/";
		if (!ew_Empty($this->ganttProyecto->Upload->DbValue)) {
			$this->ganttProyecto->ViewValue = $this->ganttProyecto->Upload->DbValue;
		} else {
			$this->ganttProyecto->ViewValue = "";
		}
		$this->ganttProyecto->ViewCustomAttributes = "";

		// IdLiderTecnico
		if (strval($this->IdLiderTecnico->CurrentValue) <> "") {
			$sFilterWrk = "`CodUsuario`" . ew_SearchString("=", $this->IdLiderTecnico->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `CodUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_analista_pases`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idempresa` in (2,5)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdLiderTecnico, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdLiderTecnico->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdLiderTecnico->ViewValue = $this->IdLiderTecnico->CurrentValue;
			}
		} else {
			$this->IdLiderTecnico->ViewValue = NULL;
		}
		$this->IdLiderTecnico->ViewValue = strtoupper($this->IdLiderTecnico->ViewValue);
		$this->IdLiderTecnico->ViewCustomAttributes = "";

		// IdJefeProyecto
		if (strval($this->IdJefeProyecto->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->IdJefeProyecto->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_jefeproy_reque`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idempresa` in (2,5)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdJefeProyecto, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdJefeProyecto->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdJefeProyecto->ViewValue = $this->IdJefeProyecto->CurrentValue;
			}
		} else {
			$this->IdJefeProyecto->ViewValue = NULL;
		}
		$this->IdJefeProyecto->ViewValue = strtoupper($this->IdJefeProyecto->ViewValue);
		$this->IdJefeProyecto->ViewCustomAttributes = "";

		// IdQA
		$this->IdQA->ViewValue = $this->IdQA->CurrentValue;
		$this->IdQA->ViewCustomAttributes = "";

		// IdUsuario_log
		if (strval($this->IdUsuario_log->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->IdUsuario_log->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdUsuario_log, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdUsuario_log->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdUsuario_log->ViewValue = $this->IdUsuario_log->CurrentValue;
			}
		} else {
			$this->IdUsuario_log->ViewValue = NULL;
		}
		$this->IdUsuario_log->ViewCustomAttributes = "";

		// IdMotivo
		if (strval($this->IdMotivo->CurrentValue) <> "") {
			$sFilterWrk = "`IdMotivo`" . ew_SearchString("=", $this->IdMotivo->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdMotivo`, `Motivo` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_motivopase`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdMotivo, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdMotivo->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdMotivo->ViewValue = $this->IdMotivo->CurrentValue;
			}
		} else {
			$this->IdMotivo->ViewValue = NULL;
		}
		$this->IdMotivo->ViewValue = strtoupper($this->IdMotivo->ViewValue);
		$this->IdMotivo->ViewCustomAttributes = "";

		// Tipo
		$this->Tipo->ViewValue = $this->Tipo->CurrentValue;
		$this->Tipo->ViewCustomAttributes = "";

		// IdSistema
		if (strval($this->IdSistema->CurrentValue) <> "") {
			$sFilterWrk = "`IdServicio`" . ew_SearchString("=", $this->IdSistema->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdServicio`, `Servicio` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_servicio`";
		$sWhereWrk = "";
		$lookuptblfilter = "`id_tipo_servicio` not in (4) and `CodAdmRes` in (1)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdSistema, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `Servicio` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdSistema->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdSistema->ViewValue = $this->IdSistema->CurrentValue;
			}
		} else {
			$this->IdSistema->ViewValue = NULL;
		}
		$this->IdSistema->ViewValue = strtoupper($this->IdSistema->ViewValue);
		$this->IdSistema->ViewCustomAttributes = "";

		// horasdesarrollo
		$this->horasdesarrollo->ViewValue = $this->horasdesarrollo->CurrentValue;
		$this->horasdesarrollo->ViewCustomAttributes = "";

		// idcreadortarea
		if (strval($this->idcreadortarea->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->idcreadortarea->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idcreadortarea, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idcreadortarea->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idcreadortarea->ViewValue = $this->idcreadortarea->CurrentValue;
			}
		} else {
			$this->idcreadortarea->ViewValue = NULL;
		}
		$this->idcreadortarea->ViewValue = strtoupper($this->idcreadortarea->ViewValue);
		$this->idcreadortarea->ViewCustomAttributes = "";

		// idempresa
		if (strval($this->idempresa->CurrentValue) <> "") {
			$sFilterWrk = "`Idempresa`" . ew_SearchString("=", $this->idempresa->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `Idempresa`, `empresa` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_empresa`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idempresa, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idempresa->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idempresa->ViewValue = $this->idempresa->CurrentValue;
			}
		} else {
			$this->idempresa->ViewValue = NULL;
		}
		$this->idempresa->ViewValue = strtoupper($this->idempresa->ViewValue);
		$this->idempresa->ViewCustomAttributes = "";

		// idarea
		if (strval($this->idarea->CurrentValue) <> "") {
			$sFilterWrk = "`Idarea`" . ew_SearchString("=", $this->idarea->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `Idarea`, `Area` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_empresaarea`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idarea, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idarea->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idarea->ViewValue = $this->idarea->CurrentValue;
			}
		} else {
			$this->idarea->ViewValue = NULL;
		}
		$this->idarea->ViewValue = strtoupper($this->idarea->ViewValue);
		$this->idarea->ViewCustomAttributes = "";

		// IdLiderUsuario
		if (strval($this->IdLiderUsuario->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->IdLiderUsuario->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `Nombre` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		$lookuptblfilter = "`IdNivel` not in (19, 20, 21, 23)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdLiderUsuario, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `Nombre` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdLiderUsuario->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdLiderUsuario->ViewValue = $this->IdLiderUsuario->CurrentValue;
			}
		} else {
			$this->IdLiderUsuario->ViewValue = NULL;
		}
		$this->IdLiderUsuario->ViewValue = strtoupper($this->IdLiderUsuario->ViewValue);
		$this->IdLiderUsuario->ViewCustomAttributes = "";

		// IdGerenteSolicitante
		if (strval($this->IdGerenteSolicitante->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->IdGerenteSolicitante->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `Nombre` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		$lookuptblfilter = "`IdNivel` not in (19, 20, 21, 23)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdGerenteSolicitante, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `Nombre` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdGerenteSolicitante->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdGerenteSolicitante->ViewValue = $this->IdGerenteSolicitante->CurrentValue;
			}
		} else {
			$this->IdGerenteSolicitante->ViewValue = NULL;
		}
		$this->IdGerenteSolicitante->ViewValue = strtoupper($this->IdGerenteSolicitante->ViewValue);
		$this->IdGerenteSolicitante->ViewCustomAttributes = "";

		// IdRevisaSolicitud
		if (strval($this->IdRevisaSolicitud->CurrentValue) <> "") {
			$sFilterWrk = "`UserLevelID`" . ew_SearchString("=", $this->IdRevisaSolicitud->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `UserLevelID`, `UserLevelName` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `userlevels`";
		$sWhereWrk = "";
		$lookuptblfilter = "`UserLevelID` in (2,17)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdRevisaSolicitud, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdRevisaSolicitud->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdRevisaSolicitud->ViewValue = $this->IdRevisaSolicitud->CurrentValue;
			}
		} else {
			$this->IdRevisaSolicitud->ViewValue = NULL;
		}
		$this->IdRevisaSolicitud->ViewCustomAttributes = "";

		// idestado
		if (strval($this->idestado->CurrentValue) <> "") {
			$sFilterWrk = "`Idestado`" . ew_SearchString("=", $this->idestado->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `Idestado`, `estado` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_estproy`";
		$sWhereWrk = "";
		$lookuptblfilter = "`pageid`='". CurrentPageID() ."' and `levelid` = '". CurrentUserLevel() ."'";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idestado, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `estado` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idestado->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idestado->ViewValue = $this->idestado->CurrentValue;
			}
		} else {
			$this->idestado->ViewValue = NULL;
		}
		$this->idestado->ViewCustomAttributes = "";

		// DesSolicitud
		$this->DesSolicitud->ViewValue = $this->DesSolicitud->CurrentValue;
		$this->DesSolicitud->ViewCustomAttributes = "";

		// Objetivo
		$this->Objetivo->ViewValue = $this->Objetivo->CurrentValue;
		if (!is_null($this->Objetivo->ViewValue)) $this->Objetivo->ViewValue = str_replace("\n", "<br>", $this->Objetivo->ViewValue); 
		$this->Objetivo->ViewCustomAttributes = "";

		// Beneficios
		$this->Beneficios->ViewValue = $this->Beneficios->CurrentValue;
		if (!is_null($this->Beneficios->ViewValue)) $this->Beneficios->ViewValue = str_replace("\n", "<br>", $this->Beneficios->ViewValue); 
		$this->Beneficios->ViewCustomAttributes = "";

		// FuncOperativa
		$this->FuncOperativa->ViewValue = $this->FuncOperativa->CurrentValue;
		if (!is_null($this->FuncOperativa->ViewValue)) $this->FuncOperativa->ViewValue = str_replace("\n", "<br>", $this->FuncOperativa->ViewValue); 
		$this->FuncOperativa->ViewCustomAttributes = "";

		// GestionControl
		$this->GestionControl->ViewValue = $this->GestionControl->CurrentValue;
		if (!is_null($this->GestionControl->ViewValue)) $this->GestionControl->ViewValue = str_replace("\n", "<br>", $this->GestionControl->ViewValue); 
		$this->GestionControl->ViewCustomAttributes = "";

		// ReferLegal
		$this->ReferLegal->ViewValue = $this->ReferLegal->CurrentValue;
		if (!is_null($this->ReferLegal->ViewValue)) $this->ReferLegal->ViewValue = str_replace("\n", "<br>", $this->ReferLegal->ViewValue); 
		$this->ReferLegal->ViewCustomAttributes = "";

		// AreasRelacionadas
		$this->AreasRelacionadas->ViewValue = $this->AreasRelacionadas->CurrentValue;
		if (!is_null($this->AreasRelacionadas->ViewValue)) $this->AreasRelacionadas->ViewValue = str_replace("\n", "<br>", $this->AreasRelacionadas->ViewValue); 
		$this->AreasRelacionadas->ViewCustomAttributes = "";

		// Observaciones
		$this->Observaciones->ViewValue = $this->Observaciones->CurrentValue;
		if (!is_null($this->Observaciones->ViewValue)) $this->Observaciones->ViewValue = str_replace("\n", "<br>", $this->Observaciones->ViewValue); 
		$this->Observaciones->ViewCustomAttributes = "";

		// fechaRevisaJRO
		$this->fechaRevisaJRO->ViewValue = $this->fechaRevisaJRO->CurrentValue;
		$this->fechaRevisaJRO->ViewValue = ew_FormatDateTime($this->fechaRevisaJRO->ViewValue, 11);
		$this->fechaRevisaJRO->ViewCustomAttributes = "";

		// JefeRiesgoOperativo
		if (strval($this->JefeRiesgoOperativo->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->JefeRiesgoOperativo->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `Nombre` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->JefeRiesgoOperativo, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->JefeRiesgoOperativo->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->JefeRiesgoOperativo->ViewValue = $this->JefeRiesgoOperativo->CurrentValue;
			}
		} else {
			$this->JefeRiesgoOperativo->ViewValue = NULL;
		}
		$this->JefeRiesgoOperativo->ViewValue = strtoupper($this->JefeRiesgoOperativo->ViewValue);
		$this->JefeRiesgoOperativo->ViewCustomAttributes = "";

		// Impacto
		if (strval($this->Impacto->CurrentValue) <> "") {
			switch ($this->Impacto->CurrentValue) {
				case $this->Impacto->FldTagValue(1):
					$this->Impacto->ViewValue = $this->Impacto->FldTagCaption(1) <> "" ? $this->Impacto->FldTagCaption(1) : $this->Impacto->CurrentValue;
					break;
				case $this->Impacto->FldTagValue(2):
					$this->Impacto->ViewValue = $this->Impacto->FldTagCaption(2) <> "" ? $this->Impacto->FldTagCaption(2) : $this->Impacto->CurrentValue;
					break;
				case $this->Impacto->FldTagValue(3):
					$this->Impacto->ViewValue = $this->Impacto->FldTagCaption(3) <> "" ? $this->Impacto->FldTagCaption(3) : $this->Impacto->CurrentValue;
					break;
				default:
					$this->Impacto->ViewValue = $this->Impacto->CurrentValue;
			}
		} else {
			$this->Impacto->ViewValue = NULL;
		}
		$this->Impacto->ViewCustomAttributes = "";

		// Participacion
		if (strval($this->Participacion->CurrentValue) <> "") {
			switch ($this->Participacion->CurrentValue) {
				case $this->Participacion->FldTagValue(1):
					$this->Participacion->ViewValue = $this->Participacion->FldTagCaption(1) <> "" ? $this->Participacion->FldTagCaption(1) : $this->Participacion->CurrentValue;
					break;
				case $this->Participacion->FldTagValue(2):
					$this->Participacion->ViewValue = $this->Participacion->FldTagCaption(2) <> "" ? $this->Participacion->FldTagCaption(2) : $this->Participacion->CurrentValue;
					break;
				default:
					$this->Participacion->ViewValue = $this->Participacion->CurrentValue;
			}
		} else {
			$this->Participacion->ViewValue = NULL;
		}
		$this->Participacion->ViewCustomAttributes = "";

		// Justificativa
		$this->Justificativa->ViewValue = $this->Justificativa->CurrentValue;
		$this->Justificativa->ViewCustomAttributes = "";

		// Recomendacion
		$this->Recomendacion->ViewValue = $this->Recomendacion->CurrentValue;
		if (!is_null($this->Recomendacion->ViewValue)) $this->Recomendacion->ViewValue = str_replace("\n", "<br>", $this->Recomendacion->ViewValue); 
		$this->Recomendacion->ViewCustomAttributes = "";

		// dias_analisis_td
		$this->dias_analisis_td->ViewValue = $this->dias_analisis_td->CurrentValue;
		$this->dias_analisis_td->ViewValue = ew_FormatNumber($this->dias_analisis_td->ViewValue, 2, -2, -2, -2);
		$this->dias_analisis_td->ViewCustomAttributes = "";

		// dias_desarrollo_td
		$this->dias_desarrollo_td->ViewValue = $this->dias_desarrollo_td->CurrentValue;
		$this->dias_desarrollo_td->ViewValue = ew_FormatNumber($this->dias_desarrollo_td->ViewValue, 2, -2, -2, -2);
		$this->dias_desarrollo_td->ViewCustomAttributes = "";

		// dias_pruebas_td
		$this->dias_pruebas_td->ViewValue = $this->dias_pruebas_td->CurrentValue;
		$this->dias_pruebas_td->ViewValue = ew_FormatNumber($this->dias_pruebas_td->ViewValue, 2, -2, -2, -2);
		$this->dias_pruebas_td->ViewCustomAttributes = "";

		// dias_qa_td
		$this->dias_qa_td->ViewValue = $this->dias_qa_td->CurrentValue;
		$this->dias_qa_td->ViewValue = ew_FormatNumber($this->dias_qa_td->ViewValue, 2, -2, -2, -2);
		$this->dias_qa_td->ViewCustomAttributes = "";

		// avance_analisis_real
		$this->avance_analisis_real->ViewValue = $this->avance_analisis_real->CurrentValue;
		$this->avance_analisis_real->ViewCustomAttributes = "";

		// avance_desarrollo_real
		$this->avance_desarrollo_real->ViewValue = $this->avance_desarrollo_real->CurrentValue;
		$this->avance_desarrollo_real->ViewCustomAttributes = "";

		// avance_pruebas_real
		$this->avance_pruebas_real->ViewValue = $this->avance_pruebas_real->CurrentValue;
		$this->avance_pruebas_real->ViewCustomAttributes = "";

		// avance_qa_real
		$this->avance_qa_real->ViewValue = $this->avance_qa_real->CurrentValue;
		$this->avance_qa_real->ViewCustomAttributes = "";

		// avance_analisis_plan
		$this->avance_analisis_plan->ViewValue = $this->avance_analisis_plan->CurrentValue;
		$this->avance_analisis_plan->ViewCustomAttributes = "";

		// avance_desarrollo_plan
		$this->avance_desarrollo_plan->ViewValue = $this->avance_desarrollo_plan->CurrentValue;
		$this->avance_desarrollo_plan->ViewCustomAttributes = "";

		// avance_pruebas_plan
		$this->avance_pruebas_plan->ViewValue = $this->avance_pruebas_plan->CurrentValue;
		$this->avance_pruebas_plan->ViewCustomAttributes = "";

		// avance_qa_plan
		$this->avance_qa_plan->ViewValue = $this->avance_qa_plan->CurrentValue;
		$this->avance_qa_plan->ViewCustomAttributes = "";

		// dias_anticipacion
		$this->dias_anticipacion->ViewValue = $this->dias_anticipacion->CurrentValue;
		$this->dias_anticipacion->ViewCustomAttributes = "";

		// veces_mod_findes
		$this->veces_mod_findes->ViewValue = $this->veces_mod_findes->CurrentValue;
		$this->veces_mod_findes->ViewCustomAttributes = "";

		// ObsGestion
		$this->ObsGestion->ViewValue = $this->ObsGestion->CurrentValue;
		$this->ObsGestion->ViewCustomAttributes = "";

		// ObsTareasDiairias
		$this->ObsTareasDiairias->ViewValue = $this->ObsTareasDiairias->CurrentValue;
		$this->ObsTareasDiairias->ViewCustomAttributes = "";

		// Duracion
		$this->Duracion->ViewValue = $this->Duracion->CurrentValue;
		$this->Duracion->ViewCustomAttributes = "";

		// PorcCompletado
		$this->PorcCompletado->ViewValue = $this->PorcCompletado->CurrentValue;
		$this->PorcCompletado->ViewCustomAttributes = "";

		// PorcProyectado
		$this->PorcProyectado->ViewValue = $this->PorcProyectado->CurrentValue;
		$this->PorcProyectado->ViewCustomAttributes = "";

		// PorcDiferencia
		$this->PorcDiferencia->ViewValue = $this->PorcDiferencia->CurrentValue;
		$this->PorcDiferencia->ViewCustomAttributes = "";

		// IdProyDes
		$this->IdProyDes->LinkCustomAttributes = "";
		$this->IdProyDes->HrefValue = "";
		$this->IdProyDes->TooltipValue = "";

		// IdSolDesarrollo
		$this->IdSolDesarrollo->LinkCustomAttributes = "";
		$this->IdSolDesarrollo->HrefValue = "";
		$this->IdSolDesarrollo->TooltipValue = "";

		// id_tipopoa
		$this->id_tipopoa->LinkCustomAttributes = "";
		$this->id_tipopoa->HrefValue = "";
		$this->id_tipopoa->TooltipValue = "";

		// FechaRequerimiento_log
		$this->FechaRequerimiento_log->LinkCustomAttributes = "";
		$this->FechaRequerimiento_log->HrefValue = "";
		$this->FechaRequerimiento_log->TooltipValue = "";

		// FechaSolicitud
		$this->FechaSolicitud->LinkCustomAttributes = "";
		$this->FechaSolicitud->HrefValue = "";
		$this->FechaSolicitud->TooltipValue = "";

		// FechaRequerida
		$this->FechaRequerida->LinkCustomAttributes = "";
		$this->FechaRequerida->HrefValue = "";
		$this->FechaRequerida->TooltipValue = "";

		// FechaInicio
		$this->FechaInicio->LinkCustomAttributes = "";
		$this->FechaInicio->HrefValue = "";
		$this->FechaInicio->TooltipValue = "";

		// FechaAnalisisFin
		$this->FechaAnalisisFin->LinkCustomAttributes = "";
		$this->FechaAnalisisFin->HrefValue = "";
		$this->FechaAnalisisFin->TooltipValue = "";

		// FechaDesarrolloInicio
		$this->FechaDesarrolloInicio->LinkCustomAttributes = "";
		$this->FechaDesarrolloInicio->HrefValue = "";
		$this->FechaDesarrolloInicio->TooltipValue = "";

		// FechaDesarrolloFin
		$this->FechaDesarrolloFin->LinkCustomAttributes = "";
		$this->FechaDesarrolloFin->HrefValue = "";
		$this->FechaDesarrolloFin->TooltipValue = "";

		// FechaPruebasInicio
		$this->FechaPruebasInicio->LinkCustomAttributes = "";
		$this->FechaPruebasInicio->HrefValue = "";
		$this->FechaPruebasInicio->TooltipValue = "";

		// FechaTerminoPropuesto
		$this->FechaTerminoPropuesto->LinkCustomAttributes = "";
		$this->FechaTerminoPropuesto->HrefValue = "";
		$this->FechaTerminoPropuesto->TooltipValue = "";

		// FechaQAInicio
		$this->FechaQAInicio->LinkCustomAttributes = "";
		$this->FechaQAInicio->HrefValue = "";
		$this->FechaQAInicio->TooltipValue = "";

		// FechaTerminoQA
		$this->FechaTerminoQA->LinkCustomAttributes = "";
		$this->FechaTerminoQA->HrefValue = "";
		$this->FechaTerminoQA->TooltipValue = "";

		// FechaPruebasUserInicio
		$this->FechaPruebasUserInicio->LinkCustomAttributes = "";
		$this->FechaPruebasUserInicio->HrefValue = "";
		$this->FechaPruebasUserInicio->TooltipValue = "";

		// FechaPruebasUserFin
		$this->FechaPruebasUserFin->LinkCustomAttributes = "";
		$this->FechaPruebasUserFin->HrefValue = "";
		$this->FechaPruebasUserFin->TooltipValue = "";

		// FechaTermino
		$this->FechaTermino->LinkCustomAttributes = "";
		$this->FechaTermino->HrefValue = "";
		$this->FechaTermino->TooltipValue = "";

		// FechaProgramacion
		$this->FechaProgramacion->LinkCustomAttributes = "";
		$this->FechaProgramacion->HrefValue = "";
		$this->FechaProgramacion->TooltipValue = "";

		// FechaUltimoPase
		$this->FechaUltimoPase->LinkCustomAttributes = "";
		$this->FechaUltimoPase->HrefValue = "";
		$this->FechaUltimoPase->TooltipValue = "";

		// FechaUltimaTareaDiaria
		$this->FechaUltimaTareaDiaria->LinkCustomAttributes = "";
		$this->FechaUltimaTareaDiaria->HrefValue = "";
		$this->FechaUltimaTareaDiaria->TooltipValue = "";

		// cant_dias_analisis
		$this->cant_dias_analisis->LinkCustomAttributes = "";
		$this->cant_dias_analisis->HrefValue = "";
		$this->cant_dias_analisis->TooltipValue = "";

		// cant_dias_desarrollo
		$this->cant_dias_desarrollo->LinkCustomAttributes = "";
		$this->cant_dias_desarrollo->HrefValue = "";
		$this->cant_dias_desarrollo->TooltipValue = "";

		// cant_dias_pruebas
		$this->cant_dias_pruebas->LinkCustomAttributes = "";
		$this->cant_dias_pruebas->HrefValue = "";
		$this->cant_dias_pruebas->TooltipValue = "";

		// cant_dias_qa
		$this->cant_dias_qa->LinkCustomAttributes = "";
		$this->cant_dias_qa->HrefValue = "";
		$this->cant_dias_qa->TooltipValue = "";

		// cant_dias_prueba_user
		$this->cant_dias_prueba_user->LinkCustomAttributes = "";
		$this->cant_dias_prueba_user->HrefValue = "";
		$this->cant_dias_prueba_user->TooltipValue = "";

		// Titulo
		$this->Titulo->LinkCustomAttributes = "";
		$this->Titulo->HrefValue = "";
		$this->Titulo->TooltipValue = strval($this->Descripcion->CurrentValue);
		$this->Titulo->TooltipValue = str_replace("\n", "<br>", $this->Titulo->TooltipValue);
		$this->Titulo->TooltipWidth = 400;
		if ($this->Titulo->HrefValue == "") $this->Titulo->HrefValue = "javascript:void(0);";
		$this->Titulo->LinkAttrs["class"] = "ewTooltipLink";
		$this->Titulo->LinkAttrs["data-tooltip-id"] = "tt_pp_proyectojefedesarrollo_x" . @$this->RowCnt . "_Titulo";
		$this->Titulo->LinkAttrs["data-tooltip-width"] = $this->Titulo->TooltipWidth;
		$this->Titulo->LinkAttrs["data-placement"] = "right";

		// Descripcion
		$this->Descripcion->LinkCustomAttributes = "";
		$this->Descripcion->HrefValue = "";
		$this->Descripcion->TooltipValue = "";

		// SolicitudDesarrollo
		$this->SolicitudDesarrollo->LinkCustomAttributes = "";
		$this->SolicitudDesarrollo->UploadPath = "solicituddesarrollo/";
		if (!ew_Empty($this->SolicitudDesarrollo->Upload->DbValue)) {
			$this->SolicitudDesarrollo->HrefValue = ew_UploadPathEx(FALSE, $this->SolicitudDesarrollo->UploadPath) . $this->SolicitudDesarrollo->Upload->DbValue; // Add prefix/suffix
			$this->SolicitudDesarrollo->LinkAttrs["target"] = ""; // Add target
			if ($this->Export <> "") $this->SolicitudDesarrollo->HrefValue = ew_ConvertFullUrl($this->SolicitudDesarrollo->HrefValue);
		} else {
			$this->SolicitudDesarrollo->HrefValue = "";
		}
		$this->SolicitudDesarrollo->HrefValue2 = $this->SolicitudDesarrollo->UploadPath . $this->SolicitudDesarrollo->Upload->DbValue;
		$this->SolicitudDesarrollo->TooltipValue = "";

		// ganttProyecto
		$this->ganttProyecto->LinkCustomAttributes = "";
		$this->ganttProyecto->UploadPath = "docdesarrollo/";
		if (!ew_Empty($this->ganttProyecto->Upload->DbValue)) {
			$this->ganttProyecto->HrefValue = ew_UploadPathEx(FALSE, $this->ganttProyecto->UploadPath) . $this->ganttProyecto->Upload->DbValue; // Add prefix/suffix
			$this->ganttProyecto->LinkAttrs["target"] = ""; // Add target
			if ($this->Export <> "") $this->ganttProyecto->HrefValue = ew_ConvertFullUrl($this->ganttProyecto->HrefValue);
		} else {
			$this->ganttProyecto->HrefValue = "";
		}
		$this->ganttProyecto->HrefValue2 = $this->ganttProyecto->UploadPath . $this->ganttProyecto->Upload->DbValue;
		$this->ganttProyecto->TooltipValue = "";

		// IdLiderTecnico
		$this->IdLiderTecnico->LinkCustomAttributes = "";
		$this->IdLiderTecnico->HrefValue = "";
		$this->IdLiderTecnico->TooltipValue = "";

		// IdJefeProyecto
		$this->IdJefeProyecto->LinkCustomAttributes = "";
		$this->IdJefeProyecto->HrefValue = "";
		$this->IdJefeProyecto->TooltipValue = "";

		// IdQA
		$this->IdQA->LinkCustomAttributes = "";
		$this->IdQA->HrefValue = "";
		$this->IdQA->TooltipValue = "";

		// IdUsuario_log
		$this->IdUsuario_log->LinkCustomAttributes = "";
		$this->IdUsuario_log->HrefValue = "";
		$this->IdUsuario_log->TooltipValue = "";

		// IdMotivo
		$this->IdMotivo->LinkCustomAttributes = "";
		$this->IdMotivo->HrefValue = "";
		$this->IdMotivo->TooltipValue = "";

		// Tipo
		$this->Tipo->LinkCustomAttributes = "";
		$this->Tipo->HrefValue = "";
		$this->Tipo->TooltipValue = "";

		// IdSistema
		$this->IdSistema->LinkCustomAttributes = "";
		$this->IdSistema->HrefValue = "";
		$this->IdSistema->TooltipValue = "";

		// horasdesarrollo
		$this->horasdesarrollo->LinkCustomAttributes = "";
		$this->horasdesarrollo->HrefValue = "";
		$this->horasdesarrollo->TooltipValue = "";

		// idcreadortarea
		$this->idcreadortarea->LinkCustomAttributes = "";
		$this->idcreadortarea->HrefValue = "";
		$this->idcreadortarea->TooltipValue = "";

		// idempresa
		$this->idempresa->LinkCustomAttributes = "";
		$this->idempresa->HrefValue = "";
		$this->idempresa->TooltipValue = "";

		// idarea
		$this->idarea->LinkCustomAttributes = "";
		$this->idarea->HrefValue = "";
		$this->idarea->TooltipValue = "";

		// IdLiderUsuario
		$this->IdLiderUsuario->LinkCustomAttributes = "";
		$this->IdLiderUsuario->HrefValue = "";
		$this->IdLiderUsuario->TooltipValue = "";

		// IdGerenteSolicitante
		$this->IdGerenteSolicitante->LinkCustomAttributes = "";
		$this->IdGerenteSolicitante->HrefValue = "";
		$this->IdGerenteSolicitante->TooltipValue = "";

		// IdRevisaSolicitud
		$this->IdRevisaSolicitud->LinkCustomAttributes = "";
		$this->IdRevisaSolicitud->HrefValue = "";
		$this->IdRevisaSolicitud->TooltipValue = "";

		// idestado
		$this->idestado->LinkCustomAttributes = "";
		$this->idestado->HrefValue = "";
		$this->idestado->TooltipValue = "";

		// DesSolicitud
		$this->DesSolicitud->LinkCustomAttributes = "";
		$this->DesSolicitud->HrefValue = "";
		$this->DesSolicitud->TooltipValue = "";

		// Objetivo
		$this->Objetivo->LinkCustomAttributes = "";
		$this->Objetivo->HrefValue = "";
		$this->Objetivo->TooltipValue = "";

		// Beneficios
		$this->Beneficios->LinkCustomAttributes = "";
		$this->Beneficios->HrefValue = "";
		$this->Beneficios->TooltipValue = "";

		// FuncOperativa
		$this->FuncOperativa->LinkCustomAttributes = "";
		$this->FuncOperativa->HrefValue = "";
		$this->FuncOperativa->TooltipValue = "";

		// GestionControl
		$this->GestionControl->LinkCustomAttributes = "";
		$this->GestionControl->HrefValue = "";
		$this->GestionControl->TooltipValue = "";

		// ReferLegal
		$this->ReferLegal->LinkCustomAttributes = "";
		$this->ReferLegal->HrefValue = "";
		$this->ReferLegal->TooltipValue = "";

		// AreasRelacionadas
		$this->AreasRelacionadas->LinkCustomAttributes = "";
		$this->AreasRelacionadas->HrefValue = "";
		$this->AreasRelacionadas->TooltipValue = "";

		// Observaciones
		$this->Observaciones->LinkCustomAttributes = "";
		$this->Observaciones->HrefValue = "";
		$this->Observaciones->TooltipValue = "";

		// fechaRevisaJRO
		$this->fechaRevisaJRO->LinkCustomAttributes = "";
		$this->fechaRevisaJRO->HrefValue = "";
		$this->fechaRevisaJRO->TooltipValue = "";

		// JefeRiesgoOperativo
		$this->JefeRiesgoOperativo->LinkCustomAttributes = "";
		$this->JefeRiesgoOperativo->HrefValue = "";
		$this->JefeRiesgoOperativo->TooltipValue = "";

		// Impacto
		$this->Impacto->LinkCustomAttributes = "";
		$this->Impacto->HrefValue = "";
		$this->Impacto->TooltipValue = "";

		// Participacion
		$this->Participacion->LinkCustomAttributes = "";
		$this->Participacion->HrefValue = "";
		$this->Participacion->TooltipValue = "";

		// Justificativa
		$this->Justificativa->LinkCustomAttributes = "";
		$this->Justificativa->HrefValue = "";
		$this->Justificativa->TooltipValue = "";

		// Recomendacion
		$this->Recomendacion->LinkCustomAttributes = "";
		$this->Recomendacion->HrefValue = "";
		$this->Recomendacion->TooltipValue = "";

		// dias_analisis_td
		$this->dias_analisis_td->LinkCustomAttributes = "";
		$this->dias_analisis_td->HrefValue = "";
		$this->dias_analisis_td->TooltipValue = "";

		// dias_desarrollo_td
		$this->dias_desarrollo_td->LinkCustomAttributes = "";
		$this->dias_desarrollo_td->HrefValue = "";
		$this->dias_desarrollo_td->TooltipValue = "";

		// dias_pruebas_td
		$this->dias_pruebas_td->LinkCustomAttributes = "";
		$this->dias_pruebas_td->HrefValue = "";
		$this->dias_pruebas_td->TooltipValue = "";

		// dias_qa_td
		$this->dias_qa_td->LinkCustomAttributes = "";
		$this->dias_qa_td->HrefValue = "";
		$this->dias_qa_td->TooltipValue = "";

		// avance_analisis_real
		$this->avance_analisis_real->LinkCustomAttributes = "";
		$this->avance_analisis_real->HrefValue = "";
		$this->avance_analisis_real->TooltipValue = "";

		// avance_desarrollo_real
		$this->avance_desarrollo_real->LinkCustomAttributes = "";
		$this->avance_desarrollo_real->HrefValue = "";
		$this->avance_desarrollo_real->TooltipValue = "";

		// avance_pruebas_real
		$this->avance_pruebas_real->LinkCustomAttributes = "";
		$this->avance_pruebas_real->HrefValue = "";
		$this->avance_pruebas_real->TooltipValue = "";

		// avance_qa_real
		$this->avance_qa_real->LinkCustomAttributes = "";
		$this->avance_qa_real->HrefValue = "";
		$this->avance_qa_real->TooltipValue = "";

		// avance_analisis_plan
		$this->avance_analisis_plan->LinkCustomAttributes = "";
		$this->avance_analisis_plan->HrefValue = "";
		$this->avance_analisis_plan->TooltipValue = "";

		// avance_desarrollo_plan
		$this->avance_desarrollo_plan->LinkCustomAttributes = "";
		$this->avance_desarrollo_plan->HrefValue = "";
		$this->avance_desarrollo_plan->TooltipValue = "";

		// avance_pruebas_plan
		$this->avance_pruebas_plan->LinkCustomAttributes = "";
		$this->avance_pruebas_plan->HrefValue = "";
		$this->avance_pruebas_plan->TooltipValue = "";

		// avance_qa_plan
		$this->avance_qa_plan->LinkCustomAttributes = "";
		$this->avance_qa_plan->HrefValue = "";
		$this->avance_qa_plan->TooltipValue = "";

		// dias_anticipacion
		$this->dias_anticipacion->LinkCustomAttributes = "";
		$this->dias_anticipacion->HrefValue = "";
		$this->dias_anticipacion->TooltipValue = "";

		// veces_mod_findes
		$this->veces_mod_findes->LinkCustomAttributes = "";
		$this->veces_mod_findes->HrefValue = "";
		$this->veces_mod_findes->TooltipValue = "";

		// ObsGestion
		$this->ObsGestion->LinkCustomAttributes = "";
		$this->ObsGestion->HrefValue = "";
		$this->ObsGestion->TooltipValue = "";

		// ObsTareasDiairias
		$this->ObsTareasDiairias->LinkCustomAttributes = "";
		$this->ObsTareasDiairias->HrefValue = "";
		$this->ObsTareasDiairias->TooltipValue = "";

		// Duracion
		$this->Duracion->LinkCustomAttributes = "";
		$this->Duracion->HrefValue = "";
		$this->Duracion->TooltipValue = "";

		// PorcCompletado
		$this->PorcCompletado->LinkCustomAttributes = "";
		$this->PorcCompletado->HrefValue = "";
		$this->PorcCompletado->TooltipValue = "";

		// PorcProyectado
		$this->PorcProyectado->LinkCustomAttributes = "";
		$this->PorcProyectado->HrefValue = "";
		$this->PorcProyectado->TooltipValue = "";

		// PorcDiferencia
		$this->PorcDiferencia->LinkCustomAttributes = "";
		$this->PorcDiferencia->HrefValue = "";
		$this->PorcDiferencia->TooltipValue = "";

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Aggregate list row values
	function AggregateListRowValues() {
	}

	// Aggregate list row (for rendering)
	function AggregateListRow() {
	}

	// Export data in HTML/CSV/Word/Excel/Email/PDF format
	function ExportDocument(&$Doc, &$Recordset, $StartRec, $StopRec, $ExportPageType = "") {
		if (!$Recordset || !$Doc)
			return;

		// Write header
		$Doc->ExportTableHeader();
		if ($Doc->Horizontal) { // Horizontal format, write header
			$Doc->BeginExportRow();
			if ($ExportPageType == "view") {
				if ($this->IdProyDes->Exportable) $Doc->ExportCaption($this->IdProyDes);
				if ($this->IdSolDesarrollo->Exportable) $Doc->ExportCaption($this->IdSolDesarrollo);
				if ($this->id_tipopoa->Exportable) $Doc->ExportCaption($this->id_tipopoa);
				if ($this->FechaRequerimiento_log->Exportable) $Doc->ExportCaption($this->FechaRequerimiento_log);
				if ($this->FechaSolicitud->Exportable) $Doc->ExportCaption($this->FechaSolicitud);
				if ($this->FechaRequerida->Exportable) $Doc->ExportCaption($this->FechaRequerida);
				if ($this->FechaInicio->Exportable) $Doc->ExportCaption($this->FechaInicio);
				if ($this->FechaAnalisisFin->Exportable) $Doc->ExportCaption($this->FechaAnalisisFin);
				if ($this->FechaDesarrolloInicio->Exportable) $Doc->ExportCaption($this->FechaDesarrolloInicio);
				if ($this->FechaDesarrolloFin->Exportable) $Doc->ExportCaption($this->FechaDesarrolloFin);
				if ($this->FechaPruebasInicio->Exportable) $Doc->ExportCaption($this->FechaPruebasInicio);
				if ($this->FechaTerminoPropuesto->Exportable) $Doc->ExportCaption($this->FechaTerminoPropuesto);
				if ($this->FechaQAInicio->Exportable) $Doc->ExportCaption($this->FechaQAInicio);
				if ($this->FechaTerminoQA->Exportable) $Doc->ExportCaption($this->FechaTerminoQA);
				if ($this->FechaPruebasUserInicio->Exportable) $Doc->ExportCaption($this->FechaPruebasUserInicio);
				if ($this->FechaPruebasUserFin->Exportable) $Doc->ExportCaption($this->FechaPruebasUserFin);
				if ($this->FechaTermino->Exportable) $Doc->ExportCaption($this->FechaTermino);
				if ($this->FechaProgramacion->Exportable) $Doc->ExportCaption($this->FechaProgramacion);
				if ($this->FechaUltimoPase->Exportable) $Doc->ExportCaption($this->FechaUltimoPase);
				if ($this->FechaUltimaTareaDiaria->Exportable) $Doc->ExportCaption($this->FechaUltimaTareaDiaria);
				if ($this->cant_dias_analisis->Exportable) $Doc->ExportCaption($this->cant_dias_analisis);
				if ($this->cant_dias_desarrollo->Exportable) $Doc->ExportCaption($this->cant_dias_desarrollo);
				if ($this->cant_dias_pruebas->Exportable) $Doc->ExportCaption($this->cant_dias_pruebas);
				if ($this->cant_dias_qa->Exportable) $Doc->ExportCaption($this->cant_dias_qa);
				if ($this->cant_dias_prueba_user->Exportable) $Doc->ExportCaption($this->cant_dias_prueba_user);
				if ($this->Titulo->Exportable) $Doc->ExportCaption($this->Titulo);
				if ($this->Descripcion->Exportable) $Doc->ExportCaption($this->Descripcion);
				if ($this->SolicitudDesarrollo->Exportable) $Doc->ExportCaption($this->SolicitudDesarrollo);
				if ($this->ganttProyecto->Exportable) $Doc->ExportCaption($this->ganttProyecto);
				if ($this->IdLiderTecnico->Exportable) $Doc->ExportCaption($this->IdLiderTecnico);
				if ($this->IdJefeProyecto->Exportable) $Doc->ExportCaption($this->IdJefeProyecto);
				if ($this->IdQA->Exportable) $Doc->ExportCaption($this->IdQA);
				if ($this->IdUsuario_log->Exportable) $Doc->ExportCaption($this->IdUsuario_log);
				if ($this->IdMotivo->Exportable) $Doc->ExportCaption($this->IdMotivo);
				if ($this->Tipo->Exportable) $Doc->ExportCaption($this->Tipo);
				if ($this->IdSistema->Exportable) $Doc->ExportCaption($this->IdSistema);
				if ($this->horasdesarrollo->Exportable) $Doc->ExportCaption($this->horasdesarrollo);
				if ($this->idcreadortarea->Exportable) $Doc->ExportCaption($this->idcreadortarea);
				if ($this->idempresa->Exportable) $Doc->ExportCaption($this->idempresa);
				if ($this->idarea->Exportable) $Doc->ExportCaption($this->idarea);
				if ($this->IdLiderUsuario->Exportable) $Doc->ExportCaption($this->IdLiderUsuario);
				if ($this->IdGerenteSolicitante->Exportable) $Doc->ExportCaption($this->IdGerenteSolicitante);
				if ($this->IdRevisaSolicitud->Exportable) $Doc->ExportCaption($this->IdRevisaSolicitud);
				if ($this->idestado->Exportable) $Doc->ExportCaption($this->idestado);
				if ($this->DesSolicitud->Exportable) $Doc->ExportCaption($this->DesSolicitud);
				if ($this->Objetivo->Exportable) $Doc->ExportCaption($this->Objetivo);
				if ($this->Beneficios->Exportable) $Doc->ExportCaption($this->Beneficios);
				if ($this->FuncOperativa->Exportable) $Doc->ExportCaption($this->FuncOperativa);
				if ($this->GestionControl->Exportable) $Doc->ExportCaption($this->GestionControl);
				if ($this->ReferLegal->Exportable) $Doc->ExportCaption($this->ReferLegal);
				if ($this->AreasRelacionadas->Exportable) $Doc->ExportCaption($this->AreasRelacionadas);
				if ($this->Observaciones->Exportable) $Doc->ExportCaption($this->Observaciones);
				if ($this->fechaRevisaJRO->Exportable) $Doc->ExportCaption($this->fechaRevisaJRO);
				if ($this->JefeRiesgoOperativo->Exportable) $Doc->ExportCaption($this->JefeRiesgoOperativo);
				if ($this->Impacto->Exportable) $Doc->ExportCaption($this->Impacto);
				if ($this->Participacion->Exportable) $Doc->ExportCaption($this->Participacion);
				if ($this->Justificativa->Exportable) $Doc->ExportCaption($this->Justificativa);
				if ($this->Recomendacion->Exportable) $Doc->ExportCaption($this->Recomendacion);
				if ($this->dias_analisis_td->Exportable) $Doc->ExportCaption($this->dias_analisis_td);
				if ($this->dias_desarrollo_td->Exportable) $Doc->ExportCaption($this->dias_desarrollo_td);
				if ($this->dias_pruebas_td->Exportable) $Doc->ExportCaption($this->dias_pruebas_td);
				if ($this->dias_qa_td->Exportable) $Doc->ExportCaption($this->dias_qa_td);
				if ($this->avance_analisis_real->Exportable) $Doc->ExportCaption($this->avance_analisis_real);
				if ($this->avance_desarrollo_real->Exportable) $Doc->ExportCaption($this->avance_desarrollo_real);
				if ($this->avance_pruebas_real->Exportable) $Doc->ExportCaption($this->avance_pruebas_real);
				if ($this->avance_qa_real->Exportable) $Doc->ExportCaption($this->avance_qa_real);
				if ($this->avance_analisis_plan->Exportable) $Doc->ExportCaption($this->avance_analisis_plan);
				if ($this->avance_desarrollo_plan->Exportable) $Doc->ExportCaption($this->avance_desarrollo_plan);
				if ($this->avance_pruebas_plan->Exportable) $Doc->ExportCaption($this->avance_pruebas_plan);
				if ($this->avance_qa_plan->Exportable) $Doc->ExportCaption($this->avance_qa_plan);
				if ($this->dias_anticipacion->Exportable) $Doc->ExportCaption($this->dias_anticipacion);
				if ($this->veces_mod_findes->Exportable) $Doc->ExportCaption($this->veces_mod_findes);
				if ($this->ObsGestion->Exportable) $Doc->ExportCaption($this->ObsGestion);
				if ($this->ObsTareasDiairias->Exportable) $Doc->ExportCaption($this->ObsTareasDiairias);
				if ($this->Duracion->Exportable) $Doc->ExportCaption($this->Duracion);
				if ($this->PorcCompletado->Exportable) $Doc->ExportCaption($this->PorcCompletado);
				if ($this->PorcProyectado->Exportable) $Doc->ExportCaption($this->PorcProyectado);
				if ($this->PorcDiferencia->Exportable) $Doc->ExportCaption($this->PorcDiferencia);
			} else {
				if ($this->IdProyDes->Exportable) $Doc->ExportCaption($this->IdProyDes);
				if ($this->IdSolDesarrollo->Exportable) $Doc->ExportCaption($this->IdSolDesarrollo);
				if ($this->id_tipopoa->Exportable) $Doc->ExportCaption($this->id_tipopoa);
				if ($this->FechaInicio->Exportable) $Doc->ExportCaption($this->FechaInicio);
				if ($this->FechaAnalisisFin->Exportable) $Doc->ExportCaption($this->FechaAnalisisFin);
				if ($this->FechaDesarrolloInicio->Exportable) $Doc->ExportCaption($this->FechaDesarrolloInicio);
				if ($this->FechaDesarrolloFin->Exportable) $Doc->ExportCaption($this->FechaDesarrolloFin);
				if ($this->FechaPruebasInicio->Exportable) $Doc->ExportCaption($this->FechaPruebasInicio);
				if ($this->FechaTerminoPropuesto->Exportable) $Doc->ExportCaption($this->FechaTerminoPropuesto);
				if ($this->FechaQAInicio->Exportable) $Doc->ExportCaption($this->FechaQAInicio);
				if ($this->FechaTerminoQA->Exportable) $Doc->ExportCaption($this->FechaTerminoQA);
				if ($this->FechaPruebasUserInicio->Exportable) $Doc->ExportCaption($this->FechaPruebasUserInicio);
				if ($this->FechaPruebasUserFin->Exportable) $Doc->ExportCaption($this->FechaPruebasUserFin);
				if ($this->FechaTermino->Exportable) $Doc->ExportCaption($this->FechaTermino);
				if ($this->FechaProgramacion->Exportable) $Doc->ExportCaption($this->FechaProgramacion);
				if ($this->FechaUltimoPase->Exportable) $Doc->ExportCaption($this->FechaUltimoPase);
				if ($this->FechaUltimaTareaDiaria->Exportable) $Doc->ExportCaption($this->FechaUltimaTareaDiaria);
				if ($this->cant_dias_analisis->Exportable) $Doc->ExportCaption($this->cant_dias_analisis);
				if ($this->cant_dias_desarrollo->Exportable) $Doc->ExportCaption($this->cant_dias_desarrollo);
				if ($this->cant_dias_pruebas->Exportable) $Doc->ExportCaption($this->cant_dias_pruebas);
				if ($this->cant_dias_qa->Exportable) $Doc->ExportCaption($this->cant_dias_qa);
				if ($this->cant_dias_prueba_user->Exportable) $Doc->ExportCaption($this->cant_dias_prueba_user);
				if ($this->Titulo->Exportable) $Doc->ExportCaption($this->Titulo);
				if ($this->IdLiderTecnico->Exportable) $Doc->ExportCaption($this->IdLiderTecnico);
				if ($this->IdJefeProyecto->Exportable) $Doc->ExportCaption($this->IdJefeProyecto);
				if ($this->IdQA->Exportable) $Doc->ExportCaption($this->IdQA);
				if ($this->IdMotivo->Exportable) $Doc->ExportCaption($this->IdMotivo);
				if ($this->IdSistema->Exportable) $Doc->ExportCaption($this->IdSistema);
				if ($this->horasdesarrollo->Exportable) $Doc->ExportCaption($this->horasdesarrollo);
				if ($this->idarea->Exportable) $Doc->ExportCaption($this->idarea);
				if ($this->IdLiderUsuario->Exportable) $Doc->ExportCaption($this->IdLiderUsuario);
				if ($this->IdGerenteSolicitante->Exportable) $Doc->ExportCaption($this->IdGerenteSolicitante);
				if ($this->IdRevisaSolicitud->Exportable) $Doc->ExportCaption($this->IdRevisaSolicitud);
				if ($this->idestado->Exportable) $Doc->ExportCaption($this->idestado);
				if ($this->dias_analisis_td->Exportable) $Doc->ExportCaption($this->dias_analisis_td);
				if ($this->dias_desarrollo_td->Exportable) $Doc->ExportCaption($this->dias_desarrollo_td);
				if ($this->dias_pruebas_td->Exportable) $Doc->ExportCaption($this->dias_pruebas_td);
				if ($this->dias_qa_td->Exportable) $Doc->ExportCaption($this->dias_qa_td);
				if ($this->avance_analisis_real->Exportable) $Doc->ExportCaption($this->avance_analisis_real);
				if ($this->avance_desarrollo_real->Exportable) $Doc->ExportCaption($this->avance_desarrollo_real);
				if ($this->avance_qa_real->Exportable) $Doc->ExportCaption($this->avance_qa_real);
				if ($this->avance_analisis_plan->Exportable) $Doc->ExportCaption($this->avance_analisis_plan);
				if ($this->avance_desarrollo_plan->Exportable) $Doc->ExportCaption($this->avance_desarrollo_plan);
				if ($this->avance_qa_plan->Exportable) $Doc->ExportCaption($this->avance_qa_plan);
				if ($this->dias_anticipacion->Exportable) $Doc->ExportCaption($this->dias_anticipacion);
				if ($this->veces_mod_findes->Exportable) $Doc->ExportCaption($this->veces_mod_findes);
			}
			$Doc->EndExportRow();
		}

		// Move to first record
		$RecCnt = $StartRec - 1;
		if (!$Recordset->EOF) {
			$Recordset->MoveFirst();
			if ($StartRec > 1)
				$Recordset->Move($StartRec - 1);
		}
		while (!$Recordset->EOF && $RecCnt < $StopRec) {
			$RecCnt++;
			if (intval($RecCnt) >= intval($StartRec)) {
				$RowCnt = intval($RecCnt) - intval($StartRec) + 1;

				// Page break
				if ($this->ExportPageBreakCount > 0) {
					if ($RowCnt > 1 && ($RowCnt - 1) % $this->ExportPageBreakCount == 0)
						$Doc->ExportPageBreak();
				}
				$this->LoadListRowValues($Recordset);

				// Render row
				$this->RowType = EW_ROWTYPE_VIEW; // Render view
				$this->ResetAttrs();
				$this->RenderListRow();
				$Doc->BeginExportRow($RowCnt); // Allow CSS styles if enabled
				if ($ExportPageType == "view") {
					if ($this->IdProyDes->Exportable) $Doc->ExportField($this->IdProyDes);
					if ($this->IdSolDesarrollo->Exportable) $Doc->ExportField($this->IdSolDesarrollo);
					if ($this->id_tipopoa->Exportable) $Doc->ExportField($this->id_tipopoa);
					if ($this->FechaRequerimiento_log->Exportable) $Doc->ExportField($this->FechaRequerimiento_log);
					if ($this->FechaSolicitud->Exportable) $Doc->ExportField($this->FechaSolicitud);
					if ($this->FechaRequerida->Exportable) $Doc->ExportField($this->FechaRequerida);
					if ($this->FechaInicio->Exportable) $Doc->ExportField($this->FechaInicio);
					if ($this->FechaAnalisisFin->Exportable) $Doc->ExportField($this->FechaAnalisisFin);
					if ($this->FechaDesarrolloInicio->Exportable) $Doc->ExportField($this->FechaDesarrolloInicio);
					if ($this->FechaDesarrolloFin->Exportable) $Doc->ExportField($this->FechaDesarrolloFin);
					if ($this->FechaPruebasInicio->Exportable) $Doc->ExportField($this->FechaPruebasInicio);
					if ($this->FechaTerminoPropuesto->Exportable) $Doc->ExportField($this->FechaTerminoPropuesto);
					if ($this->FechaQAInicio->Exportable) $Doc->ExportField($this->FechaQAInicio);
					if ($this->FechaTerminoQA->Exportable) $Doc->ExportField($this->FechaTerminoQA);
					if ($this->FechaPruebasUserInicio->Exportable) $Doc->ExportField($this->FechaPruebasUserInicio);
					if ($this->FechaPruebasUserFin->Exportable) $Doc->ExportField($this->FechaPruebasUserFin);
					if ($this->FechaTermino->Exportable) $Doc->ExportField($this->FechaTermino);
					if ($this->FechaProgramacion->Exportable) $Doc->ExportField($this->FechaProgramacion);
					if ($this->FechaUltimoPase->Exportable) $Doc->ExportField($this->FechaUltimoPase);
					if ($this->FechaUltimaTareaDiaria->Exportable) $Doc->ExportField($this->FechaUltimaTareaDiaria);
					if ($this->cant_dias_analisis->Exportable) $Doc->ExportField($this->cant_dias_analisis);
					if ($this->cant_dias_desarrollo->Exportable) $Doc->ExportField($this->cant_dias_desarrollo);
					if ($this->cant_dias_pruebas->Exportable) $Doc->ExportField($this->cant_dias_pruebas);
					if ($this->cant_dias_qa->Exportable) $Doc->ExportField($this->cant_dias_qa);
					if ($this->cant_dias_prueba_user->Exportable) $Doc->ExportField($this->cant_dias_prueba_user);
					if ($this->Titulo->Exportable) $Doc->ExportField($this->Titulo);
					if ($this->Descripcion->Exportable) $Doc->ExportField($this->Descripcion);
					if ($this->SolicitudDesarrollo->Exportable) $Doc->ExportField($this->SolicitudDesarrollo);
					if ($this->ganttProyecto->Exportable) $Doc->ExportField($this->ganttProyecto);
					if ($this->IdLiderTecnico->Exportable) $Doc->ExportField($this->IdLiderTecnico);
					if ($this->IdJefeProyecto->Exportable) $Doc->ExportField($this->IdJefeProyecto);
					if ($this->IdQA->Exportable) $Doc->ExportField($this->IdQA);
					if ($this->IdUsuario_log->Exportable) $Doc->ExportField($this->IdUsuario_log);
					if ($this->IdMotivo->Exportable) $Doc->ExportField($this->IdMotivo);
					if ($this->Tipo->Exportable) $Doc->ExportField($this->Tipo);
					if ($this->IdSistema->Exportable) $Doc->ExportField($this->IdSistema);
					if ($this->horasdesarrollo->Exportable) $Doc->ExportField($this->horasdesarrollo);
					if ($this->idcreadortarea->Exportable) $Doc->ExportField($this->idcreadortarea);
					if ($this->idempresa->Exportable) $Doc->ExportField($this->idempresa);
					if ($this->idarea->Exportable) $Doc->ExportField($this->idarea);
					if ($this->IdLiderUsuario->Exportable) $Doc->ExportField($this->IdLiderUsuario);
					if ($this->IdGerenteSolicitante->Exportable) $Doc->ExportField($this->IdGerenteSolicitante);
					if ($this->IdRevisaSolicitud->Exportable) $Doc->ExportField($this->IdRevisaSolicitud);
					if ($this->idestado->Exportable) $Doc->ExportField($this->idestado);
					if ($this->DesSolicitud->Exportable) $Doc->ExportField($this->DesSolicitud);
					if ($this->Objetivo->Exportable) $Doc->ExportField($this->Objetivo);
					if ($this->Beneficios->Exportable) $Doc->ExportField($this->Beneficios);
					if ($this->FuncOperativa->Exportable) $Doc->ExportField($this->FuncOperativa);
					if ($this->GestionControl->Exportable) $Doc->ExportField($this->GestionControl);
					if ($this->ReferLegal->Exportable) $Doc->ExportField($this->ReferLegal);
					if ($this->AreasRelacionadas->Exportable) $Doc->ExportField($this->AreasRelacionadas);
					if ($this->Observaciones->Exportable) $Doc->ExportField($this->Observaciones);
					if ($this->fechaRevisaJRO->Exportable) $Doc->ExportField($this->fechaRevisaJRO);
					if ($this->JefeRiesgoOperativo->Exportable) $Doc->ExportField($this->JefeRiesgoOperativo);
					if ($this->Impacto->Exportable) $Doc->ExportField($this->Impacto);
					if ($this->Participacion->Exportable) $Doc->ExportField($this->Participacion);
					if ($this->Justificativa->Exportable) $Doc->ExportField($this->Justificativa);
					if ($this->Recomendacion->Exportable) $Doc->ExportField($this->Recomendacion);
					if ($this->dias_analisis_td->Exportable) $Doc->ExportField($this->dias_analisis_td);
					if ($this->dias_desarrollo_td->Exportable) $Doc->ExportField($this->dias_desarrollo_td);
					if ($this->dias_pruebas_td->Exportable) $Doc->ExportField($this->dias_pruebas_td);
					if ($this->dias_qa_td->Exportable) $Doc->ExportField($this->dias_qa_td);
					if ($this->avance_analisis_real->Exportable) $Doc->ExportField($this->avance_analisis_real);
					if ($this->avance_desarrollo_real->Exportable) $Doc->ExportField($this->avance_desarrollo_real);
					if ($this->avance_pruebas_real->Exportable) $Doc->ExportField($this->avance_pruebas_real);
					if ($this->avance_qa_real->Exportable) $Doc->ExportField($this->avance_qa_real);
					if ($this->avance_analisis_plan->Exportable) $Doc->ExportField($this->avance_analisis_plan);
					if ($this->avance_desarrollo_plan->Exportable) $Doc->ExportField($this->avance_desarrollo_plan);
					if ($this->avance_pruebas_plan->Exportable) $Doc->ExportField($this->avance_pruebas_plan);
					if ($this->avance_qa_plan->Exportable) $Doc->ExportField($this->avance_qa_plan);
					if ($this->dias_anticipacion->Exportable) $Doc->ExportField($this->dias_anticipacion);
					if ($this->veces_mod_findes->Exportable) $Doc->ExportField($this->veces_mod_findes);
					if ($this->ObsGestion->Exportable) $Doc->ExportField($this->ObsGestion);
					if ($this->ObsTareasDiairias->Exportable) $Doc->ExportField($this->ObsTareasDiairias);
					if ($this->Duracion->Exportable) $Doc->ExportField($this->Duracion);
					if ($this->PorcCompletado->Exportable) $Doc->ExportField($this->PorcCompletado);
					if ($this->PorcProyectado->Exportable) $Doc->ExportField($this->PorcProyectado);
					if ($this->PorcDiferencia->Exportable) $Doc->ExportField($this->PorcDiferencia);
				} else {
					if ($this->IdProyDes->Exportable) $Doc->ExportField($this->IdProyDes);
					if ($this->IdSolDesarrollo->Exportable) $Doc->ExportField($this->IdSolDesarrollo);
					if ($this->id_tipopoa->Exportable) $Doc->ExportField($this->id_tipopoa);
					if ($this->FechaInicio->Exportable) $Doc->ExportField($this->FechaInicio);
					if ($this->FechaAnalisisFin->Exportable) $Doc->ExportField($this->FechaAnalisisFin);
					if ($this->FechaDesarrolloInicio->Exportable) $Doc->ExportField($this->FechaDesarrolloInicio);
					if ($this->FechaDesarrolloFin->Exportable) $Doc->ExportField($this->FechaDesarrolloFin);
					if ($this->FechaPruebasInicio->Exportable) $Doc->ExportField($this->FechaPruebasInicio);
					if ($this->FechaTerminoPropuesto->Exportable) $Doc->ExportField($this->FechaTerminoPropuesto);
					if ($this->FechaQAInicio->Exportable) $Doc->ExportField($this->FechaQAInicio);
					if ($this->FechaTerminoQA->Exportable) $Doc->ExportField($this->FechaTerminoQA);
					if ($this->FechaPruebasUserInicio->Exportable) $Doc->ExportField($this->FechaPruebasUserInicio);
					if ($this->FechaPruebasUserFin->Exportable) $Doc->ExportField($this->FechaPruebasUserFin);
					if ($this->FechaTermino->Exportable) $Doc->ExportField($this->FechaTermino);
					if ($this->FechaProgramacion->Exportable) $Doc->ExportField($this->FechaProgramacion);
					if ($this->FechaUltimoPase->Exportable) $Doc->ExportField($this->FechaUltimoPase);
					if ($this->FechaUltimaTareaDiaria->Exportable) $Doc->ExportField($this->FechaUltimaTareaDiaria);
					if ($this->cant_dias_analisis->Exportable) $Doc->ExportField($this->cant_dias_analisis);
					if ($this->cant_dias_desarrollo->Exportable) $Doc->ExportField($this->cant_dias_desarrollo);
					if ($this->cant_dias_pruebas->Exportable) $Doc->ExportField($this->cant_dias_pruebas);
					if ($this->cant_dias_qa->Exportable) $Doc->ExportField($this->cant_dias_qa);
					if ($this->cant_dias_prueba_user->Exportable) $Doc->ExportField($this->cant_dias_prueba_user);
					if ($this->Titulo->Exportable) $Doc->ExportField($this->Titulo);
					if ($this->IdLiderTecnico->Exportable) $Doc->ExportField($this->IdLiderTecnico);
					if ($this->IdJefeProyecto->Exportable) $Doc->ExportField($this->IdJefeProyecto);
					if ($this->IdQA->Exportable) $Doc->ExportField($this->IdQA);
					if ($this->IdMotivo->Exportable) $Doc->ExportField($this->IdMotivo);
					if ($this->IdSistema->Exportable) $Doc->ExportField($this->IdSistema);
					if ($this->horasdesarrollo->Exportable) $Doc->ExportField($this->horasdesarrollo);
					if ($this->idarea->Exportable) $Doc->ExportField($this->idarea);
					if ($this->IdLiderUsuario->Exportable) $Doc->ExportField($this->IdLiderUsuario);
					if ($this->IdGerenteSolicitante->Exportable) $Doc->ExportField($this->IdGerenteSolicitante);
					if ($this->IdRevisaSolicitud->Exportable) $Doc->ExportField($this->IdRevisaSolicitud);
					if ($this->idestado->Exportable) $Doc->ExportField($this->idestado);
					if ($this->dias_analisis_td->Exportable) $Doc->ExportField($this->dias_analisis_td);
					if ($this->dias_desarrollo_td->Exportable) $Doc->ExportField($this->dias_desarrollo_td);
					if ($this->dias_pruebas_td->Exportable) $Doc->ExportField($this->dias_pruebas_td);
					if ($this->dias_qa_td->Exportable) $Doc->ExportField($this->dias_qa_td);
					if ($this->avance_analisis_real->Exportable) $Doc->ExportField($this->avance_analisis_real);
					if ($this->avance_desarrollo_real->Exportable) $Doc->ExportField($this->avance_desarrollo_real);
					if ($this->avance_qa_real->Exportable) $Doc->ExportField($this->avance_qa_real);
					if ($this->avance_analisis_plan->Exportable) $Doc->ExportField($this->avance_analisis_plan);
					if ($this->avance_desarrollo_plan->Exportable) $Doc->ExportField($this->avance_desarrollo_plan);
					if ($this->avance_qa_plan->Exportable) $Doc->ExportField($this->avance_qa_plan);
					if ($this->dias_anticipacion->Exportable) $Doc->ExportField($this->dias_anticipacion);
					if ($this->veces_mod_findes->Exportable) $Doc->ExportField($this->veces_mod_findes);
				}
				$Doc->EndExportRow();
			}
			$Recordset->MoveNext();
		}
		$Doc->ExportTableFooter();
	}

	// Table level events
	// Recordset Selecting event
	function Recordset_Selecting(&$filter) {

		// Enter your code here	
	}

	// Recordset Selected event
	function Recordset_Selected(&$rs) {

		//echo "Recordset Selected";
	}

	// Recordset Search Validated event
	function Recordset_SearchValidated() {

		// Example:
		//$this->MyField1->AdvancedSearch->SearchValue = "your search criteria"; // Search value

	}

	// Recordset Searching event
	function Recordset_Searching(&$filter) {

		// Enter your code here	
	}

	// Row_Selecting event
	function Row_Selecting(&$filter) {

		// Enter your code here	
	}

	// Row Selected event
	function Row_Selected(&$rs) {

		//echo "Row Selected";
	}

	// Row Inserting event
	function Row_Inserting($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

		return TRUE;
	}

	// Row Inserted event
	function Row_Inserted($rsold, &$rsnew) {

		//echo "Row Inserted"
	}

	// Row Updating event
	function Row_Updating($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

		return TRUE;
	}

	// Row Updated event
	function Row_Updated($rsold, &$rsnew) {

		//echo "Row Updated"; 
	global $conn;            
	$cadenasql="call pp_pa_proydes('". $rsold['IdProyDes'] ."', 'updated')";
	$rslmo2 = $conn->Execute($cadenasql);   
	}    

	// Row Update Conflict event
	function Row_UpdateConflict($rsold, &$rsnew) {

		// Enter your code here
		// To ignore conflict, set return value to FALSE

		return TRUE;
	}

	// Row Deleting event
	function Row_Deleting(&$rs) {

		// Enter your code here
		// To cancel, set return value to False

		return TRUE;
	}

	// Row Deleted event
	function Row_Deleted(&$rs) {

		//echo "Row Deleted";
	}

	// Email Sending event
	function Email_Sending(&$Email, &$Args) {

		//var_dump($Email); var_dump($Args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		// Enter your code here
	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here	
	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>); 

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}
}
?>
