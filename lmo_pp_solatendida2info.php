<?php

// Global variable for table object
$pp_solatendida2 = NULL;

//
// Table class for pp_solatendida2
//
class cpp_solatendida2 extends cTable {
	var $IdPase;
	var $Proyecto;
	var $idProydes;
	var $IdSoliDesarrollo;
	var $CodHelpDesk;
	var $IdRevisaSolicitud;
	var $id_tipopoa;
	var $Tipo;
	var $idTipo2;
	var $Fecha;
	var $fechapase_ss;
	var $FechaSolicitud;
	var $FechaRequerida;
	var $FechaRequerimiento_log;
	var $FechaProgramacion;
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
	var $FechaPuesta;
	var $FechaTermino;
	var $FechaUltimoPase;
	var $FechaUltimaTareaDiaria;
	var $Titulo;
	var $idempresa;
	var $IdArea;
	var $CodServicio;
	var $idProceso;
	var $idSubProceso;
	var $IdMotivo;
	var $Prioridad;
	var $TipoSolicitud;
	var $CerrarRequerimiento;
	var $empresa_costo;
	var $horasdesarrollo;
	var $horasdesarrollo_ss;
	var $CodUsuarioLider;
	var $IdGerenteSolicitante;
	var $CodUsuario;
	var $IdJefeProyecto;
	var $idproveedor;
	var $idanalista_ss;
	var $idjefeproy_ss;
	var $Descripcion;
	var $Instrucciones;
	var $ArchAdjuntos;
	var $querys;
	var $Adjuntos;
	var $stores;
	var $ejecutables;
	var $SolicitudDesarrollo;
	var $doc_especifuncionales;
	var $PlanPruebas;
	var $DiagramaER;
	var $ManualUsuario;
	var $DiagramaProcesos;
	var $DiccionarioDatos;
	var $tittuReque;
	var $desreque;
	var $Beneficios;
	var $Objetivo;
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
	var $Roles;
	var $fecha_asigna_qa;
	var $id_qa;
	var $observaciones_qa;
	var $IdEstadoSoliPuestaProd;
	var $cant_dias_analisis;
	var $cant_dias_desarrollo;
	var $cant_dias_pruebas;
	var $cant_dias_qa;
	var $cant_dias_prueba_user;
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
	var $dias_analisis_td;
	var $dias_desarrollo_td;
	var $dias_pruebas_td;
	var $dias_qa_td;
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
		$this->TableVar = 'pp_solatendida2';
		$this->TableName = 'pp_solatendida2';
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

		// IdPase
		$this->IdPase = new cField('pp_solatendida2', 'pp_solatendida2', 'x_IdPase', 'IdPase', '`IdPase`', '`IdPase`', 19, -1, FALSE, '`IdPase`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdPase->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdPase'] = &$this->IdPase;

		// Proyecto
		$this->Proyecto = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Proyecto', 'Proyecto', '`Proyecto`', '`Proyecto`', 19, -1, FALSE, '`Proyecto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->Proyecto->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['Proyecto'] = &$this->Proyecto;

		// idProydes
		$this->idProydes = new cField('pp_solatendida2', 'pp_solatendida2', 'x_idProydes', 'idProydes', '`idProydes`', '`idProydes`', 19, -1, FALSE, '`idProydes`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idProydes->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idProydes'] = &$this->idProydes;

		// IdSoliDesarrollo
		$this->IdSoliDesarrollo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_IdSoliDesarrollo', 'IdSoliDesarrollo', '`IdSoliDesarrollo`', '`IdSoliDesarrollo`', 19, -1, FALSE, '`IdSoliDesarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdSoliDesarrollo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdSoliDesarrollo'] = &$this->IdSoliDesarrollo;

		// CodHelpDesk
		$this->CodHelpDesk = new cField('pp_solatendida2', 'pp_solatendida2', 'x_CodHelpDesk', 'CodHelpDesk', '`CodHelpDesk`', '`CodHelpDesk`', 19, -1, FALSE, '`CodHelpDesk`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->CodHelpDesk->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['CodHelpDesk'] = &$this->CodHelpDesk;

		// IdRevisaSolicitud
		$this->IdRevisaSolicitud = new cField('pp_solatendida2', 'pp_solatendida2', 'x_IdRevisaSolicitud', 'IdRevisaSolicitud', '`IdRevisaSolicitud`', '`IdRevisaSolicitud`', 2, -1, FALSE, '`IdRevisaSolicitud`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdRevisaSolicitud->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdRevisaSolicitud'] = &$this->IdRevisaSolicitud;

		// id_tipopoa
		$this->id_tipopoa = new cField('pp_solatendida2', 'pp_solatendida2', 'x_id_tipopoa', 'id_tipopoa', '`id_tipopoa`', '`id_tipopoa`', 17, -1, FALSE, '`id_tipopoa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->id_tipopoa->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['id_tipopoa'] = &$this->id_tipopoa;

		// Tipo
		$this->Tipo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Tipo', 'Tipo', '`Tipo`', '`Tipo`', 200, -1, FALSE, '`Tipo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Tipo'] = &$this->Tipo;

		// idTipo2
		$this->idTipo2 = new cField('pp_solatendida2', 'pp_solatendida2', 'x_idTipo2', 'idTipo2', '`idTipo2`', '`idTipo2`', 17, -1, FALSE, '`idTipo2`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idTipo2->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idTipo2'] = &$this->idTipo2;

		// Fecha
		$this->Fecha = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Fecha', 'Fecha', '`Fecha`', 'DATE_FORMAT(`Fecha`, \'%d/%m/%Y\')', 135, 11, FALSE, '`Fecha`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->Fecha->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['Fecha'] = &$this->Fecha;

		// fechapase_ss
		$this->fechapase_ss = new cField('pp_solatendida2', 'pp_solatendida2', 'x_fechapase_ss', 'fechapase_ss', '`fechapase_ss`', 'DATE_FORMAT(`fechapase_ss`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fechapase_ss`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fechapase_ss->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fechapase_ss'] = &$this->fechapase_ss;

		// FechaSolicitud
		$this->FechaSolicitud = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaSolicitud', 'FechaSolicitud', '`FechaSolicitud`', 'DATE_FORMAT(`FechaSolicitud`, \'%d/%m/%Y\')', 135, 7, FALSE, '`FechaSolicitud`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaSolicitud->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaSolicitud'] = &$this->FechaSolicitud;

		// FechaRequerida
		$this->FechaRequerida = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaRequerida', 'FechaRequerida', '`FechaRequerida`', 'DATE_FORMAT(`FechaRequerida`, \'%d/%m/%Y\')', 135, 7, FALSE, '`FechaRequerida`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaRequerida->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaRequerida'] = &$this->FechaRequerida;

		// FechaRequerimiento_log
		$this->FechaRequerimiento_log = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaRequerimiento_log', 'FechaRequerimiento_log', '`FechaRequerimiento_log`', 'DATE_FORMAT(`FechaRequerimiento_log`, \'%d/%m/%Y\')', 135, 7, FALSE, '`FechaRequerimiento_log`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaRequerimiento_log->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaRequerimiento_log'] = &$this->FechaRequerimiento_log;

		// FechaProgramacion
		$this->FechaProgramacion = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaProgramacion', 'FechaProgramacion', '`FechaProgramacion`', 'DATE_FORMAT(`FechaProgramacion`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaProgramacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaProgramacion->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaProgramacion'] = &$this->FechaProgramacion;

		// FechaInicio
		$this->FechaInicio = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaInicio', 'FechaInicio', '`FechaInicio`', 'DATE_FORMAT(`FechaInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaInicio'] = &$this->FechaInicio;

		// FechaAnalisisFin
		$this->FechaAnalisisFin = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaAnalisisFin', 'FechaAnalisisFin', '`FechaAnalisisFin`', 'DATE_FORMAT(`FechaAnalisisFin`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaAnalisisFin`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaAnalisisFin->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaAnalisisFin'] = &$this->FechaAnalisisFin;

		// FechaDesarrolloInicio
		$this->FechaDesarrolloInicio = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaDesarrolloInicio', 'FechaDesarrolloInicio', '`FechaDesarrolloInicio`', 'DATE_FORMAT(`FechaDesarrolloInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaDesarrolloInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaDesarrolloInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaDesarrolloInicio'] = &$this->FechaDesarrolloInicio;

		// FechaDesarrolloFin
		$this->FechaDesarrolloFin = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaDesarrolloFin', 'FechaDesarrolloFin', '`FechaDesarrolloFin`', 'DATE_FORMAT(`FechaDesarrolloFin`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaDesarrolloFin`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaDesarrolloFin->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaDesarrolloFin'] = &$this->FechaDesarrolloFin;

		// FechaPruebasInicio
		$this->FechaPruebasInicio = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaPruebasInicio', 'FechaPruebasInicio', '`FechaPruebasInicio`', 'DATE_FORMAT(`FechaPruebasInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaPruebasInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaPruebasInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaPruebasInicio'] = &$this->FechaPruebasInicio;

		// FechaTerminoPropuesto
		$this->FechaTerminoPropuesto = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaTerminoPropuesto', 'FechaTerminoPropuesto', '`FechaTerminoPropuesto`', 'DATE_FORMAT(`FechaTerminoPropuesto`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaTerminoPropuesto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaTerminoPropuesto->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaTerminoPropuesto'] = &$this->FechaTerminoPropuesto;

		// FechaQAInicio
		$this->FechaQAInicio = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaQAInicio', 'FechaQAInicio', '`FechaQAInicio`', 'DATE_FORMAT(`FechaQAInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaQAInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaQAInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaQAInicio'] = &$this->FechaQAInicio;

		// FechaTerminoQA
		$this->FechaTerminoQA = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaTerminoQA', 'FechaTerminoQA', '`FechaTerminoQA`', 'DATE_FORMAT(`FechaTerminoQA`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaTerminoQA`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaTerminoQA->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaTerminoQA'] = &$this->FechaTerminoQA;

		// FechaPruebasUserInicio
		$this->FechaPruebasUserInicio = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaPruebasUserInicio', 'FechaPruebasUserInicio', '`FechaPruebasUserInicio`', 'DATE_FORMAT(`FechaPruebasUserInicio`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaPruebasUserInicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaPruebasUserInicio->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaPruebasUserInicio'] = &$this->FechaPruebasUserInicio;

		// FechaPruebasUserFin
		$this->FechaPruebasUserFin = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaPruebasUserFin', 'FechaPruebasUserFin', '`FechaPruebasUserFin`', 'DATE_FORMAT(`FechaPruebasUserFin`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaPruebasUserFin`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaPruebasUserFin->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaPruebasUserFin'] = &$this->FechaPruebasUserFin;

		// FechaPuesta
		$this->FechaPuesta = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaPuesta', 'FechaPuesta', '`FechaPuesta`', 'DATE_FORMAT(`FechaPuesta`, \'%d/%m/%Y\')', 135, 11, FALSE, '`FechaPuesta`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaPuesta->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaPuesta'] = &$this->FechaPuesta;

		// FechaTermino
		$this->FechaTermino = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaTermino', 'FechaTermino', '`FechaTermino`', 'DATE_FORMAT(`FechaTermino`, \'%d/%m/%Y\')', 135, 11, FALSE, '`FechaTermino`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaTermino->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaTermino'] = &$this->FechaTermino;

		// FechaUltimoPase
		$this->FechaUltimoPase = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaUltimoPase', 'FechaUltimoPase', '`FechaUltimoPase`', 'DATE_FORMAT(`FechaUltimoPase`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaUltimoPase`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaUltimoPase->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaUltimoPase'] = &$this->FechaUltimoPase;

		// FechaUltimaTareaDiaria
		$this->FechaUltimaTareaDiaria = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FechaUltimaTareaDiaria', 'FechaUltimaTareaDiaria', '`FechaUltimaTareaDiaria`', 'DATE_FORMAT(`FechaUltimaTareaDiaria`, \'%d/%m/%Y\')', 133, 7, FALSE, '`FechaUltimaTareaDiaria`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->FechaUltimaTareaDiaria->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['FechaUltimaTareaDiaria'] = &$this->FechaUltimaTareaDiaria;

		// Titulo
		$this->Titulo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Titulo', 'Titulo', '`Titulo`', '`Titulo`', 200, -1, FALSE, '`Titulo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Titulo'] = &$this->Titulo;

		// idempresa
		$this->idempresa = new cField('pp_solatendida2', 'pp_solatendida2', 'x_idempresa', 'idempresa', '`idempresa`', '`idempresa`', 18, -1, FALSE, '`idempresa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idempresa->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idempresa'] = &$this->idempresa;

		// IdArea
		$this->IdArea = new cField('pp_solatendida2', 'pp_solatendida2', 'x_IdArea', 'IdArea', '`IdArea`', '`IdArea`', 18, -1, FALSE, '`IdArea`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdArea->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdArea'] = &$this->IdArea;

		// CodServicio
		$this->CodServicio = new cField('pp_solatendida2', 'pp_solatendida2', 'x_CodServicio', 'CodServicio', '`CodServicio`', '`CodServicio`', 18, -1, FALSE, '`CodServicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->CodServicio->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['CodServicio'] = &$this->CodServicio;

		// idProceso
		$this->idProceso = new cField('pp_solatendida2', 'pp_solatendida2', 'x_idProceso', 'idProceso', '`idProceso`', '`idProceso`', 18, -1, FALSE, '`idProceso`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idProceso->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idProceso'] = &$this->idProceso;

		// idSubProceso
		$this->idSubProceso = new cField('pp_solatendida2', 'pp_solatendida2', 'x_idSubProceso', 'idSubProceso', '`idSubProceso`', '`idSubProceso`', 18, -1, FALSE, '`idSubProceso`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idSubProceso->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idSubProceso'] = &$this->idSubProceso;

		// IdMotivo
		$this->IdMotivo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_IdMotivo', 'IdMotivo', '`IdMotivo`', '`IdMotivo`', 17, -1, FALSE, '`IdMotivo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdMotivo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdMotivo'] = &$this->IdMotivo;

		// Prioridad
		$this->Prioridad = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Prioridad', 'Prioridad', '`Prioridad`', '`Prioridad`', 200, -1, FALSE, '`Prioridad`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Prioridad'] = &$this->Prioridad;

		// TipoSolicitud
		$this->TipoSolicitud = new cField('pp_solatendida2', 'pp_solatendida2', 'x_TipoSolicitud', 'TipoSolicitud', '`TipoSolicitud`', '`TipoSolicitud`', 201, -1, FALSE, '`TipoSolicitud`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['TipoSolicitud'] = &$this->TipoSolicitud;

		// CerrarRequerimiento
		$this->CerrarRequerimiento = new cField('pp_solatendida2', 'pp_solatendida2', 'x_CerrarRequerimiento', 'CerrarRequerimiento', '`CerrarRequerimiento`', '`CerrarRequerimiento`', 202, -1, FALSE, '`CerrarRequerimiento`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['CerrarRequerimiento'] = &$this->CerrarRequerimiento;

		// empresa_costo
		$this->empresa_costo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_empresa_costo', 'empresa_costo', '`empresa_costo`', '`empresa_costo`', 200, -1, FALSE, '`empresa_costo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['empresa_costo'] = &$this->empresa_costo;

		// horasdesarrollo
		$this->horasdesarrollo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_horasdesarrollo', 'horasdesarrollo', '`horasdesarrollo`', '`horasdesarrollo`', 18, -1, FALSE, '`horasdesarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->horasdesarrollo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['horasdesarrollo'] = &$this->horasdesarrollo;

		// horasdesarrollo_ss
		$this->horasdesarrollo_ss = new cField('pp_solatendida2', 'pp_solatendida2', 'x_horasdesarrollo_ss', 'horasdesarrollo_ss', '`horasdesarrollo_ss`', '`horasdesarrollo_ss`', 18, -1, FALSE, '`horasdesarrollo_ss`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->horasdesarrollo_ss->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['horasdesarrollo_ss'] = &$this->horasdesarrollo_ss;

		// CodUsuarioLider
		$this->CodUsuarioLider = new cField('pp_solatendida2', 'pp_solatendida2', 'x_CodUsuarioLider', 'CodUsuarioLider', '`CodUsuarioLider`', '`CodUsuarioLider`', 18, -1, FALSE, '`CodUsuarioLider`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->CodUsuarioLider->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['CodUsuarioLider'] = &$this->CodUsuarioLider;

		// IdGerenteSolicitante
		$this->IdGerenteSolicitante = new cField('pp_solatendida2', 'pp_solatendida2', 'x_IdGerenteSolicitante', 'IdGerenteSolicitante', '`IdGerenteSolicitante`', '`IdGerenteSolicitante`', 2, -1, FALSE, '`IdGerenteSolicitante`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdGerenteSolicitante->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdGerenteSolicitante'] = &$this->IdGerenteSolicitante;

		// CodUsuario
		$this->CodUsuario = new cField('pp_solatendida2', 'pp_solatendida2', 'x_CodUsuario', 'CodUsuario', '`CodUsuario`', '`CodUsuario`', 18, -1, FALSE, '`CodUsuario`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->CodUsuario->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['CodUsuario'] = &$this->CodUsuario;

		// IdJefeProyecto
		$this->IdJefeProyecto = new cField('pp_solatendida2', 'pp_solatendida2', 'x_IdJefeProyecto', 'IdJefeProyecto', '`IdJefeProyecto`', '`IdJefeProyecto`', 2, -1, FALSE, '`IdJefeProyecto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdJefeProyecto->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdJefeProyecto'] = &$this->IdJefeProyecto;

		// idproveedor
		$this->idproveedor = new cField('pp_solatendida2', 'pp_solatendida2', 'x_idproveedor', 'idproveedor', '`idproveedor`', '`idproveedor`', 17, -1, FALSE, '`idproveedor`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idproveedor->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idproveedor'] = &$this->idproveedor;

		// idanalista_ss
		$this->idanalista_ss = new cField('pp_solatendida2', 'pp_solatendida2', 'x_idanalista_ss', 'idanalista_ss', '`idanalista_ss`', '`idanalista_ss`', 18, -1, FALSE, '`idanalista_ss`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idanalista_ss->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idanalista_ss'] = &$this->idanalista_ss;

		// idjefeproy_ss
		$this->idjefeproy_ss = new cField('pp_solatendida2', 'pp_solatendida2', 'x_idjefeproy_ss', 'idjefeproy_ss', '`idjefeproy_ss`', '`idjefeproy_ss`', 18, -1, FALSE, '`idjefeproy_ss`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idjefeproy_ss->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idjefeproy_ss'] = &$this->idjefeproy_ss;

		// Descripcion
		$this->Descripcion = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Descripcion', 'Descripcion', '`Descripcion`', '`Descripcion`', 201, -1, FALSE, '`Descripcion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Descripcion'] = &$this->Descripcion;

		// Instrucciones
		$this->Instrucciones = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Instrucciones', 'Instrucciones', '`Instrucciones`', '`Instrucciones`', 201, -1, FALSE, '`Instrucciones`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Instrucciones'] = &$this->Instrucciones;

		// ArchAdjuntos
		$this->ArchAdjuntos = new cField('pp_solatendida2', 'pp_solatendida2', 'x_ArchAdjuntos', 'ArchAdjuntos', '`ArchAdjuntos`', '`ArchAdjuntos`', 201, -1, FALSE, '`ArchAdjuntos`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ArchAdjuntos'] = &$this->ArchAdjuntos;

		// querys
		$this->querys = new cField('pp_solatendida2', 'pp_solatendida2', 'x_querys', 'querys', '`querys`', '`querys`', 201, -1, FALSE, '`querys`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['querys'] = &$this->querys;

		// Adjuntos
		$this->Adjuntos = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Adjuntos', 'Adjuntos', '`Adjuntos`', '`Adjuntos`', 200, -1, TRUE, '`Adjuntos`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Adjuntos'] = &$this->Adjuntos;

		// stores
		$this->stores = new cField('pp_solatendida2', 'pp_solatendida2', 'x_stores', 'stores', '`stores`', '`stores`', 200, -1, TRUE, '`stores`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['stores'] = &$this->stores;

		// ejecutables
		$this->ejecutables = new cField('pp_solatendida2', 'pp_solatendida2', 'x_ejecutables', 'ejecutables', '`ejecutables`', '`ejecutables`', 200, -1, TRUE, '`ejecutables`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ejecutables'] = &$this->ejecutables;

		// SolicitudDesarrollo
		$this->SolicitudDesarrollo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_SolicitudDesarrollo', 'SolicitudDesarrollo', '`SolicitudDesarrollo`', '`SolicitudDesarrollo`', 200, -1, TRUE, '`SolicitudDesarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['SolicitudDesarrollo'] = &$this->SolicitudDesarrollo;

		// doc_especifuncionales
		$this->doc_especifuncionales = new cField('pp_solatendida2', 'pp_solatendida2', 'x_doc_especifuncionales', 'doc_especifuncionales', '`doc_especifuncionales`', '`doc_especifuncionales`', 200, -1, TRUE, '`doc_especifuncionales`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['doc_especifuncionales'] = &$this->doc_especifuncionales;

		// PlanPruebas
		$this->PlanPruebas = new cField('pp_solatendida2', 'pp_solatendida2', 'x_PlanPruebas', 'PlanPruebas', '`PlanPruebas`', '`PlanPruebas`', 201, -1, TRUE, '`PlanPruebas`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['PlanPruebas'] = &$this->PlanPruebas;

		// DiagramaER
		$this->DiagramaER = new cField('pp_solatendida2', 'pp_solatendida2', 'x_DiagramaER', 'DiagramaER', '`DiagramaER`', '`DiagramaER`', 200, -1, TRUE, '`DiagramaER`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['DiagramaER'] = &$this->DiagramaER;

		// ManualUsuario
		$this->ManualUsuario = new cField('pp_solatendida2', 'pp_solatendida2', 'x_ManualUsuario', 'ManualUsuario', '`ManualUsuario`', '`ManualUsuario`', 200, -1, TRUE, '`ManualUsuario`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ManualUsuario'] = &$this->ManualUsuario;

		// DiagramaProcesos
		$this->DiagramaProcesos = new cField('pp_solatendida2', 'pp_solatendida2', 'x_DiagramaProcesos', 'DiagramaProcesos', '`DiagramaProcesos`', '`DiagramaProcesos`', 200, -1, TRUE, '`DiagramaProcesos`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['DiagramaProcesos'] = &$this->DiagramaProcesos;

		// DiccionarioDatos
		$this->DiccionarioDatos = new cField('pp_solatendida2', 'pp_solatendida2', 'x_DiccionarioDatos', 'DiccionarioDatos', '`DiccionarioDatos`', '`DiccionarioDatos`', 200, -1, TRUE, '`DiccionarioDatos`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['DiccionarioDatos'] = &$this->DiccionarioDatos;

		// tittuReque
		$this->tittuReque = new cField('pp_solatendida2', 'pp_solatendida2', 'x_tittuReque', 'tittuReque', '`tittuReque`', '`tittuReque`', 200, -1, FALSE, '`tittuReque`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['tittuReque'] = &$this->tittuReque;

		// desreque
		$this->desreque = new cField('pp_solatendida2', 'pp_solatendida2', 'x_desreque', 'desreque', '`desreque`', '`desreque`', 201, -1, FALSE, '`desreque`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['desreque'] = &$this->desreque;

		// Beneficios
		$this->Beneficios = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Beneficios', 'Beneficios', '`Beneficios`', '`Beneficios`', 201, -1, FALSE, '`Beneficios`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Beneficios'] = &$this->Beneficios;

		// Objetivo
		$this->Objetivo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Objetivo', 'Objetivo', '`Objetivo`', '`Objetivo`', 201, -1, FALSE, '`Objetivo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Objetivo'] = &$this->Objetivo;

		// FuncOperativa
		$this->FuncOperativa = new cField('pp_solatendida2', 'pp_solatendida2', 'x_FuncOperativa', 'FuncOperativa', '`FuncOperativa`', '`FuncOperativa`', 201, -1, FALSE, '`FuncOperativa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['FuncOperativa'] = &$this->FuncOperativa;

		// GestionControl
		$this->GestionControl = new cField('pp_solatendida2', 'pp_solatendida2', 'x_GestionControl', 'GestionControl', '`GestionControl`', '`GestionControl`', 201, -1, FALSE, '`GestionControl`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['GestionControl'] = &$this->GestionControl;

		// ReferLegal
		$this->ReferLegal = new cField('pp_solatendida2', 'pp_solatendida2', 'x_ReferLegal', 'ReferLegal', '`ReferLegal`', '`ReferLegal`', 201, -1, FALSE, '`ReferLegal`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ReferLegal'] = &$this->ReferLegal;

		// AreasRelacionadas
		$this->AreasRelacionadas = new cField('pp_solatendida2', 'pp_solatendida2', 'x_AreasRelacionadas', 'AreasRelacionadas', '`AreasRelacionadas`', '`AreasRelacionadas`', 201, -1, FALSE, '`AreasRelacionadas`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['AreasRelacionadas'] = &$this->AreasRelacionadas;

		// Observaciones
		$this->Observaciones = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Observaciones', 'Observaciones', '`Observaciones`', '`Observaciones`', 201, -1, FALSE, '`Observaciones`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Observaciones'] = &$this->Observaciones;

		// fechaRevisaJRO
		$this->fechaRevisaJRO = new cField('pp_solatendida2', 'pp_solatendida2', 'x_fechaRevisaJRO', 'fechaRevisaJRO', '`fechaRevisaJRO`', 'DATE_FORMAT(`fechaRevisaJRO`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fechaRevisaJRO`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fechaRevisaJRO->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fechaRevisaJRO'] = &$this->fechaRevisaJRO;

		// JefeRiesgoOperativo
		$this->JefeRiesgoOperativo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_JefeRiesgoOperativo', 'JefeRiesgoOperativo', '`JefeRiesgoOperativo`', '`JefeRiesgoOperativo`', 2, -1, FALSE, '`JefeRiesgoOperativo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->JefeRiesgoOperativo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['JefeRiesgoOperativo'] = &$this->JefeRiesgoOperativo;

		// Impacto
		$this->Impacto = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Impacto', 'Impacto', '`Impacto`', '`Impacto`', 202, -1, FALSE, '`Impacto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Impacto'] = &$this->Impacto;

		// Participacion
		$this->Participacion = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Participacion', 'Participacion', '`Participacion`', '`Participacion`', 202, -1, FALSE, '`Participacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Participacion'] = &$this->Participacion;

		// Justificativa
		$this->Justificativa = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Justificativa', 'Justificativa', '`Justificativa`', '`Justificativa`', 201, -1, FALSE, '`Justificativa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Justificativa'] = &$this->Justificativa;

		// Recomendacion
		$this->Recomendacion = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Recomendacion', 'Recomendacion', '`Recomendacion`', '`Recomendacion`', 201, -1, FALSE, '`Recomendacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Recomendacion'] = &$this->Recomendacion;

		// Roles
		$this->Roles = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Roles', 'Roles', '`Roles`', '`Roles`', 201, -1, FALSE, '`Roles`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Roles'] = &$this->Roles;

		// fecha_asigna_qa
		$this->fecha_asigna_qa = new cField('pp_solatendida2', 'pp_solatendida2', 'x_fecha_asigna_qa', 'fecha_asigna_qa', '`fecha_asigna_qa`', 'DATE_FORMAT(`fecha_asigna_qa`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fecha_asigna_qa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fecha_asigna_qa->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fecha_asigna_qa'] = &$this->fecha_asigna_qa;

		// id_qa
		$this->id_qa = new cField('pp_solatendida2', 'pp_solatendida2', 'x_id_qa', 'id_qa', '`id_qa`', '`id_qa`', 2, -1, FALSE, '`id_qa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->id_qa->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['id_qa'] = &$this->id_qa;

		// observaciones_qa
		$this->observaciones_qa = new cField('pp_solatendida2', 'pp_solatendida2', 'x_observaciones_qa', 'observaciones_qa', '`observaciones_qa`', '`observaciones_qa`', 201, -1, FALSE, '`observaciones_qa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['observaciones_qa'] = &$this->observaciones_qa;

		// IdEstadoSoliPuestaProd
		$this->IdEstadoSoliPuestaProd = new cField('pp_solatendida2', 'pp_solatendida2', 'x_IdEstadoSoliPuestaProd', 'IdEstadoSoliPuestaProd', '`IdEstadoSoliPuestaProd`', '`IdEstadoSoliPuestaProd`', 17, -1, FALSE, '`IdEstadoSoliPuestaProd`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdEstadoSoliPuestaProd->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdEstadoSoliPuestaProd'] = &$this->IdEstadoSoliPuestaProd;

		// cant_dias_analisis
		$this->cant_dias_analisis = new cField('pp_solatendida2', 'pp_solatendida2', 'x_cant_dias_analisis', 'cant_dias_analisis', '`cant_dias_analisis`', '`cant_dias_analisis`', 17, -1, FALSE, '`cant_dias_analisis`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_analisis->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_analisis'] = &$this->cant_dias_analisis;

		// cant_dias_desarrollo
		$this->cant_dias_desarrollo = new cField('pp_solatendida2', 'pp_solatendida2', 'x_cant_dias_desarrollo', 'cant_dias_desarrollo', '`cant_dias_desarrollo`', '`cant_dias_desarrollo`', 17, -1, FALSE, '`cant_dias_desarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_desarrollo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_desarrollo'] = &$this->cant_dias_desarrollo;

		// cant_dias_pruebas
		$this->cant_dias_pruebas = new cField('pp_solatendida2', 'pp_solatendida2', 'x_cant_dias_pruebas', 'cant_dias_pruebas', '`cant_dias_pruebas`', '`cant_dias_pruebas`', 17, -1, FALSE, '`cant_dias_pruebas`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_pruebas->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_pruebas'] = &$this->cant_dias_pruebas;

		// cant_dias_qa
		$this->cant_dias_qa = new cField('pp_solatendida2', 'pp_solatendida2', 'x_cant_dias_qa', 'cant_dias_qa', '`cant_dias_qa`', '`cant_dias_qa`', 17, -1, FALSE, '`cant_dias_qa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_qa->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_qa'] = &$this->cant_dias_qa;

		// cant_dias_prueba_user
		$this->cant_dias_prueba_user = new cField('pp_solatendida2', 'pp_solatendida2', 'x_cant_dias_prueba_user', 'cant_dias_prueba_user', '`cant_dias_prueba_user`', '`cant_dias_prueba_user`', 17, -1, FALSE, '`cant_dias_prueba_user`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->cant_dias_prueba_user->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['cant_dias_prueba_user'] = &$this->cant_dias_prueba_user;

		// avance_analisis_real
		$this->avance_analisis_real = new cField('pp_solatendida2', 'pp_solatendida2', 'x_avance_analisis_real', 'avance_analisis_real', '`avance_analisis_real`', '`avance_analisis_real`', 17, -1, FALSE, '`avance_analisis_real`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_analisis_real->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_analisis_real'] = &$this->avance_analisis_real;

		// avance_desarrollo_real
		$this->avance_desarrollo_real = new cField('pp_solatendida2', 'pp_solatendida2', 'x_avance_desarrollo_real', 'avance_desarrollo_real', '`avance_desarrollo_real`', '`avance_desarrollo_real`', 17, -1, FALSE, '`avance_desarrollo_real`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_desarrollo_real->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_desarrollo_real'] = &$this->avance_desarrollo_real;

		// avance_pruebas_real
		$this->avance_pruebas_real = new cField('pp_solatendida2', 'pp_solatendida2', 'x_avance_pruebas_real', 'avance_pruebas_real', '`avance_pruebas_real`', '`avance_pruebas_real`', 17, -1, FALSE, '`avance_pruebas_real`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_pruebas_real->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_pruebas_real'] = &$this->avance_pruebas_real;

		// avance_qa_real
		$this->avance_qa_real = new cField('pp_solatendida2', 'pp_solatendida2', 'x_avance_qa_real', 'avance_qa_real', '`avance_qa_real`', '`avance_qa_real`', 17, -1, FALSE, '`avance_qa_real`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_qa_real->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_qa_real'] = &$this->avance_qa_real;

		// avance_analisis_plan
		$this->avance_analisis_plan = new cField('pp_solatendida2', 'pp_solatendida2', 'x_avance_analisis_plan', 'avance_analisis_plan', '`avance_analisis_plan`', '`avance_analisis_plan`', 17, -1, FALSE, '`avance_analisis_plan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_analisis_plan->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_analisis_plan'] = &$this->avance_analisis_plan;

		// avance_desarrollo_plan
		$this->avance_desarrollo_plan = new cField('pp_solatendida2', 'pp_solatendida2', 'x_avance_desarrollo_plan', 'avance_desarrollo_plan', '`avance_desarrollo_plan`', '`avance_desarrollo_plan`', 17, -1, FALSE, '`avance_desarrollo_plan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_desarrollo_plan->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_desarrollo_plan'] = &$this->avance_desarrollo_plan;

		// avance_pruebas_plan
		$this->avance_pruebas_plan = new cField('pp_solatendida2', 'pp_solatendida2', 'x_avance_pruebas_plan', 'avance_pruebas_plan', '`avance_pruebas_plan`', '`avance_pruebas_plan`', 17, -1, FALSE, '`avance_pruebas_plan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_pruebas_plan->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_pruebas_plan'] = &$this->avance_pruebas_plan;

		// avance_qa_plan
		$this->avance_qa_plan = new cField('pp_solatendida2', 'pp_solatendida2', 'x_avance_qa_plan', 'avance_qa_plan', '`avance_qa_plan`', '`avance_qa_plan`', 17, -1, FALSE, '`avance_qa_plan`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->avance_qa_plan->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['avance_qa_plan'] = &$this->avance_qa_plan;

		// dias_anticipacion
		$this->dias_anticipacion = new cField('pp_solatendida2', 'pp_solatendida2', 'x_dias_anticipacion', 'dias_anticipacion', '`dias_anticipacion`', '`dias_anticipacion`', 2, -1, FALSE, '`dias_anticipacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_anticipacion->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['dias_anticipacion'] = &$this->dias_anticipacion;

		// veces_mod_findes
		$this->veces_mod_findes = new cField('pp_solatendida2', 'pp_solatendida2', 'x_veces_mod_findes', 'veces_mod_findes', '`veces_mod_findes`', '`veces_mod_findes`', 18, -1, FALSE, '`veces_mod_findes`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->veces_mod_findes->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['veces_mod_findes'] = &$this->veces_mod_findes;

		// dias_analisis_td
		$this->dias_analisis_td = new cField('pp_solatendida2', 'pp_solatendida2', 'x_dias_analisis_td', 'dias_analisis_td', '`dias_analisis_td`', '`dias_analisis_td`', 131, -1, FALSE, '`dias_analisis_td`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_analisis_td->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['dias_analisis_td'] = &$this->dias_analisis_td;

		// dias_desarrollo_td
		$this->dias_desarrollo_td = new cField('pp_solatendida2', 'pp_solatendida2', 'x_dias_desarrollo_td', 'dias_desarrollo_td', '`dias_desarrollo_td`', '`dias_desarrollo_td`', 131, -1, FALSE, '`dias_desarrollo_td`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_desarrollo_td->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['dias_desarrollo_td'] = &$this->dias_desarrollo_td;

		// dias_pruebas_td
		$this->dias_pruebas_td = new cField('pp_solatendida2', 'pp_solatendida2', 'x_dias_pruebas_td', 'dias_pruebas_td', '`dias_pruebas_td`', '`dias_pruebas_td`', 131, -1, FALSE, '`dias_pruebas_td`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_pruebas_td->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['dias_pruebas_td'] = &$this->dias_pruebas_td;

		// dias_qa_td
		$this->dias_qa_td = new cField('pp_solatendida2', 'pp_solatendida2', 'x_dias_qa_td', 'dias_qa_td', '`dias_qa_td`', '`dias_qa_td`', 131, -1, FALSE, '`dias_qa_td`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->dias_qa_td->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['dias_qa_td'] = &$this->dias_qa_td;

		// ObsGestion
		$this->ObsGestion = new cField('pp_solatendida2', 'pp_solatendida2', 'x_ObsGestion', 'ObsGestion', '`ObsGestion`', '`ObsGestion`', 201, -1, FALSE, '`ObsGestion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ObsGestion'] = &$this->ObsGestion;

		// ObsTareasDiairias
		$this->ObsTareasDiairias = new cField('pp_solatendida2', 'pp_solatendida2', 'x_ObsTareasDiairias', 'ObsTareasDiairias', '`ObsTareasDiairias`', '`ObsTareasDiairias`', 201, -1, FALSE, '`ObsTareasDiairias`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['ObsTareasDiairias'] = &$this->ObsTareasDiairias;

		// Duracion
		$this->Duracion = new cField('pp_solatendida2', 'pp_solatendida2', 'x_Duracion', 'Duracion', '`Duracion`', '`Duracion`', 18, -1, FALSE, '`Duracion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->Duracion->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['Duracion'] = &$this->Duracion;

		// PorcCompletado
		$this->PorcCompletado = new cField('pp_solatendida2', 'pp_solatendida2', 'x_PorcCompletado', 'PorcCompletado', '`PorcCompletado`', '`PorcCompletado`', 16, -1, FALSE, '`PorcCompletado`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->PorcCompletado->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['PorcCompletado'] = &$this->PorcCompletado;

		// PorcProyectado
		$this->PorcProyectado = new cField('pp_solatendida2', 'pp_solatendida2', 'x_PorcProyectado', 'PorcProyectado', '`PorcProyectado`', '`PorcProyectado`', 16, -1, FALSE, '`PorcProyectado`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->PorcProyectado->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['PorcProyectado'] = &$this->PorcProyectado;

		// PorcDiferencia
		$this->PorcDiferencia = new cField('pp_solatendida2', 'pp_solatendida2', 'x_PorcDiferencia', 'PorcDiferencia', '`PorcDiferencia`', '`PorcDiferencia`', 16, -1, FALSE, '`PorcDiferencia`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
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

	// Current master table name
	function getCurrentMasterTable() {
		return @$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_MASTER_TABLE];
	}

	function setCurrentMasterTable($v) {
		$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_MASTER_TABLE] = $v;
	}

	// Session master WHERE clause
	function GetMasterFilter() {

		// Master filter
		$sMasterFilter = "";
		if ($this->getCurrentMasterTable() == "pp_view_proy_fechas") {
			if ($this->idProydes->getSessionValue() <> "")
				$sMasterFilter .= "`IdProyDes`=" . ew_QuotedValue($this->idProydes->getSessionValue(), EW_DATATYPE_NUMBER);
			else
				return "";
		}
		return $sMasterFilter;
	}

	// Session detail WHERE clause
	function GetDetailFilter() {

		// Detail filter
		$sDetailFilter = "";
		if ($this->getCurrentMasterTable() == "pp_view_proy_fechas") {
			if ($this->idProydes->getSessionValue() <> "")
				$sDetailFilter .= "`idProydes`=" . ew_QuotedValue($this->idProydes->getSessionValue(), EW_DATATYPE_NUMBER);
			else
				return "";
		}
		return $sDetailFilter;
	}

	// Master filter
	function SqlMasterFilter_pp_view_proy_fechas() {
		return "`IdProyDes`=@IdProyDes@";
	}

	// Detail filter
	function SqlDetailFilter_pp_view_proy_fechas() {
		return "`idProydes`=@idProydes@";
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
		if ($this->getCurrentDetailTable() == "pp_view_revision") {
			$sDetailUrl = $GLOBALS["pp_view_revision"]->GetListUrl() . "?showmaster=" . $this->TableVar;
			$sDetailUrl .= "&IdPase=" . $this->IdPase->CurrentValue;
		}
		if ($this->getCurrentDetailTable() == "pp_view_tareasdiarias_sistemas") {
			$sDetailUrl = $GLOBALS["pp_view_tareasdiarias_sistemas"]->GetListUrl() . "?showmaster=" . $this->TableVar;
			$sDetailUrl .= "&idpase=" . $this->IdPase->CurrentValue;
		}
		if ($sDetailUrl == "") {
			$sDetailUrl = "lmo_pp_solatendida2list.php";
		}
		return $sDetailUrl;
	}

	// Table level SQL
	function SqlFrom() { // From
		return "`pp_solatendida2`";
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
	//lmo var $UpdateTable = "`pp_solatendida2`";
	var $UpdateTable = "`pp_soli_pase_prod`";

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
			if (array_key_exists('IdPase', $rs))
				ew_AddFilter($where, ew_QuotedName('IdPase') . '=' . ew_QuotedValue($rs['IdPase'], $this->IdPase->FldDataType));
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
		return "`IdPase` = @IdPase@";
	}

	// Key filter
	function KeyFilter() {
		$sKeyFilter = $this->SqlKeyFilter();
		if (!is_numeric($this->IdPase->CurrentValue))
			$sKeyFilter = "0=1"; // Invalid key
		$sKeyFilter = str_replace("@IdPase@", ew_AdjustSql($this->IdPase->CurrentValue), $sKeyFilter); // Replace key value
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
			return "lmo_pp_solatendida2list.php";
		}
	}

	function setReturnUrl($v) {
		$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_RETURN_URL] = $v;
	}

	// List URL
	function GetListUrl() {
		return "lmo_pp_solatendida2list.php";
	}

	// View URL
	function GetViewUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_solatendida2view.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_solatendida2view.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Add URL
	function GetAddUrl() {
		return "lmo_pp_solatendida2add.php";
	}

	// Edit URL
	function GetEditUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_solatendida2edit.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_solatendida2edit.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Inline edit URL
	function GetInlineEditUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=edit"));
	}

	// Copy URL
	function GetCopyUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_solatendida2add.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_solatendida2add.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Inline copy URL
	function GetInlineCopyUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=copy"));
	}

	// Delete URL
	function GetDeleteUrl() {
		return $this->KeyUrl("lmo_pp_solatendida2delete.php", $this->UrlParm());
	}

	// Add key value to URL
	function KeyUrl($url, $parm = "") {
		$sUrl = $url . "?";
		if ($parm <> "") $sUrl .= $parm . "&";
		if (!is_null($this->IdPase->CurrentValue)) {
			$sUrl .= "IdPase=" . urlencode($this->IdPase->CurrentValue);
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
			$arKeys[] = @$_GET["IdPase"]; // IdPase

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
			$this->IdPase->CurrentValue = $key;
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
		$this->IdPase->setDbValue($rs->fields('IdPase'));
		$this->Proyecto->setDbValue($rs->fields('Proyecto'));
		$this->idProydes->setDbValue($rs->fields('idProydes'));
		$this->IdSoliDesarrollo->setDbValue($rs->fields('IdSoliDesarrollo'));
		$this->CodHelpDesk->setDbValue($rs->fields('CodHelpDesk'));
		$this->IdRevisaSolicitud->setDbValue($rs->fields('IdRevisaSolicitud'));
		$this->id_tipopoa->setDbValue($rs->fields('id_tipopoa'));
		$this->Tipo->setDbValue($rs->fields('Tipo'));
		$this->idTipo2->setDbValue($rs->fields('idTipo2'));
		$this->Fecha->setDbValue($rs->fields('Fecha'));
		$this->fechapase_ss->setDbValue($rs->fields('fechapase_ss'));
		$this->FechaSolicitud->setDbValue($rs->fields('FechaSolicitud'));
		$this->FechaRequerida->setDbValue($rs->fields('FechaRequerida'));
		$this->FechaRequerimiento_log->setDbValue($rs->fields('FechaRequerimiento_log'));
		$this->FechaProgramacion->setDbValue($rs->fields('FechaProgramacion'));
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
		$this->FechaPuesta->setDbValue($rs->fields('FechaPuesta'));
		$this->FechaTermino->setDbValue($rs->fields('FechaTermino'));
		$this->FechaUltimoPase->setDbValue($rs->fields('FechaUltimoPase'));
		$this->FechaUltimaTareaDiaria->setDbValue($rs->fields('FechaUltimaTareaDiaria'));
		$this->Titulo->setDbValue($rs->fields('Titulo'));
		$this->idempresa->setDbValue($rs->fields('idempresa'));
		$this->IdArea->setDbValue($rs->fields('IdArea'));
		$this->CodServicio->setDbValue($rs->fields('CodServicio'));
		$this->idProceso->setDbValue($rs->fields('idProceso'));
		$this->idSubProceso->setDbValue($rs->fields('idSubProceso'));
		$this->IdMotivo->setDbValue($rs->fields('IdMotivo'));
		$this->Prioridad->setDbValue($rs->fields('Prioridad'));
		$this->TipoSolicitud->setDbValue($rs->fields('TipoSolicitud'));
		$this->CerrarRequerimiento->setDbValue($rs->fields('CerrarRequerimiento'));
		$this->empresa_costo->setDbValue($rs->fields('empresa_costo'));
		$this->horasdesarrollo->setDbValue($rs->fields('horasdesarrollo'));
		$this->horasdesarrollo_ss->setDbValue($rs->fields('horasdesarrollo_ss'));
		$this->CodUsuarioLider->setDbValue($rs->fields('CodUsuarioLider'));
		$this->IdGerenteSolicitante->setDbValue($rs->fields('IdGerenteSolicitante'));
		$this->CodUsuario->setDbValue($rs->fields('CodUsuario'));
		$this->IdJefeProyecto->setDbValue($rs->fields('IdJefeProyecto'));
		$this->idproveedor->setDbValue($rs->fields('idproveedor'));
		$this->idanalista_ss->setDbValue($rs->fields('idanalista_ss'));
		$this->idjefeproy_ss->setDbValue($rs->fields('idjefeproy_ss'));
		$this->Descripcion->setDbValue($rs->fields('Descripcion'));
		$this->Instrucciones->setDbValue($rs->fields('Instrucciones'));
		$this->ArchAdjuntos->setDbValue($rs->fields('ArchAdjuntos'));
		$this->querys->setDbValue($rs->fields('querys'));
		$this->Adjuntos->Upload->DbValue = $rs->fields('Adjuntos');
		$this->stores->Upload->DbValue = $rs->fields('stores');
		$this->ejecutables->Upload->DbValue = $rs->fields('ejecutables');
		$this->SolicitudDesarrollo->Upload->DbValue = $rs->fields('SolicitudDesarrollo');
		$this->doc_especifuncionales->Upload->DbValue = $rs->fields('doc_especifuncionales');
		$this->PlanPruebas->Upload->DbValue = $rs->fields('PlanPruebas');
		$this->DiagramaER->Upload->DbValue = $rs->fields('DiagramaER');
		$this->ManualUsuario->Upload->DbValue = $rs->fields('ManualUsuario');
		$this->DiagramaProcesos->Upload->DbValue = $rs->fields('DiagramaProcesos');
		$this->DiccionarioDatos->Upload->DbValue = $rs->fields('DiccionarioDatos');
		$this->tittuReque->setDbValue($rs->fields('tittuReque'));
		$this->desreque->setDbValue($rs->fields('desreque'));
		$this->Beneficios->setDbValue($rs->fields('Beneficios'));
		$this->Objetivo->setDbValue($rs->fields('Objetivo'));
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
		$this->Roles->setDbValue($rs->fields('Roles'));
		$this->fecha_asigna_qa->setDbValue($rs->fields('fecha_asigna_qa'));
		$this->id_qa->setDbValue($rs->fields('id_qa'));
		$this->observaciones_qa->setDbValue($rs->fields('observaciones_qa'));
		$this->IdEstadoSoliPuestaProd->setDbValue($rs->fields('IdEstadoSoliPuestaProd'));
		$this->cant_dias_analisis->setDbValue($rs->fields('cant_dias_analisis'));
		$this->cant_dias_desarrollo->setDbValue($rs->fields('cant_dias_desarrollo'));
		$this->cant_dias_pruebas->setDbValue($rs->fields('cant_dias_pruebas'));
		$this->cant_dias_qa->setDbValue($rs->fields('cant_dias_qa'));
		$this->cant_dias_prueba_user->setDbValue($rs->fields('cant_dias_prueba_user'));
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
		$this->dias_analisis_td->setDbValue($rs->fields('dias_analisis_td'));
		$this->dias_desarrollo_td->setDbValue($rs->fields('dias_desarrollo_td'));
		$this->dias_pruebas_td->setDbValue($rs->fields('dias_pruebas_td'));
		$this->dias_qa_td->setDbValue($rs->fields('dias_qa_td'));
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
		// IdPase
		// Proyecto
		// idProydes
		// IdSoliDesarrollo
		// CodHelpDesk
		// IdRevisaSolicitud
		// id_tipopoa
		// Tipo
		// idTipo2
		// Fecha
		// fechapase_ss
		// FechaSolicitud
		// FechaRequerida
		// FechaRequerimiento_log
		// FechaProgramacion
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
		// FechaPuesta
		// FechaTermino
		// FechaUltimoPase
		// FechaUltimaTareaDiaria
		// Titulo

		$this->Titulo->CellCssStyle = "width: 400px;";

		// idempresa
		// IdArea
		// CodServicio
		// idProceso
		// idSubProceso
		// IdMotivo
		// Prioridad
		// TipoSolicitud
		// CerrarRequerimiento
		// empresa_costo
		// horasdesarrollo
		// horasdesarrollo_ss
		// CodUsuarioLider
		// IdGerenteSolicitante
		// CodUsuario
		// IdJefeProyecto
		// idproveedor
		// idanalista_ss
		// idjefeproy_ss
		// Descripcion
		// Instrucciones
		// ArchAdjuntos
		// querys
		// Adjuntos
		// stores
		// ejecutables
		// SolicitudDesarrollo
		// doc_especifuncionales
		// PlanPruebas
		// DiagramaER
		// ManualUsuario
		// DiagramaProcesos
		// DiccionarioDatos
		// tittuReque
		// desreque
		// Beneficios
		// Objetivo
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
		// Roles
		// fecha_asigna_qa
		// id_qa
		// observaciones_qa
		// IdEstadoSoliPuestaProd
		// cant_dias_analisis
		// cant_dias_desarrollo
		// cant_dias_pruebas
		// cant_dias_qa
		// cant_dias_prueba_user
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
		// dias_analisis_td
		// dias_desarrollo_td
		// dias_pruebas_td
		// dias_qa_td
		// ObsGestion
		// ObsTareasDiairias
		// Duracion
		// PorcCompletado
		// PorcProyectado
		// PorcDiferencia
		// IdPase

		$this->IdPase->ViewValue = $this->IdPase->CurrentValue;
		$this->IdPase->ViewCustomAttributes = "";

		// Proyecto
		$this->Proyecto->ViewValue = $this->Proyecto->CurrentValue;
		if (strval($this->Proyecto->CurrentValue) <> "") {
			$sFilterWrk = "`IdProyDes`" . ew_SearchString("=", $this->Proyecto->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdProyDes`, `IdProyDes` AS `DispFld`, `Titulo` AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_proydes`";
		$sWhereWrk = "";
		$lookuptblfilter = "`Tipo`='PROYECTO'";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->Proyecto, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->Proyecto->ViewValue = $rswrk->fields('DispFld');
				$this->Proyecto->ViewValue .= ew_ValueSeparator(1,$this->Proyecto) . $rswrk->fields('Disp2Fld');
				$rswrk->Close();
			} else {
				$this->Proyecto->ViewValue = $this->Proyecto->CurrentValue;
			}
		} else {
			$this->Proyecto->ViewValue = NULL;
		}
		$this->Proyecto->ViewValue = strtolower($this->Proyecto->ViewValue);
		$this->Proyecto->ViewCustomAttributes = "";

		// idProydes
		$this->idProydes->ViewValue = $this->idProydes->CurrentValue;
		$this->idProydes->ViewValue = strtolower($this->idProydes->ViewValue);
		$this->idProydes->ViewCustomAttributes = "";

		// IdSoliDesarrollo
		$this->IdSoliDesarrollo->ViewValue = $this->IdSoliDesarrollo->CurrentValue;
		$this->IdSoliDesarrollo->ViewValue = strtolower($this->IdSoliDesarrollo->ViewValue);
		$this->IdSoliDesarrollo->ViewCustomAttributes = "";

		// CodHelpDesk
		$this->CodHelpDesk->ViewValue = $this->CodHelpDesk->CurrentValue;
		$this->CodHelpDesk->ViewCustomAttributes = "";

		// IdRevisaSolicitud
		if (strval($this->IdRevisaSolicitud->CurrentValue) <> "") {
			$sFilterWrk = "`UserLevelID`" . ew_SearchString("=", $this->IdRevisaSolicitud->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT DISTINCT `UserLevelID`, `Abreviatura` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `userlevels`";
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
				$this->IdRevisaSolicitud->ViewValue = $rswrk->fields('DispFld');
				$rswrk->Close();
			} else {
				$this->IdRevisaSolicitud->ViewValue = $this->IdRevisaSolicitud->CurrentValue;
			}
		} else {
			$this->IdRevisaSolicitud->ViewValue = NULL;
		}
		$this->IdRevisaSolicitud->ViewValue = strtolower($this->IdRevisaSolicitud->ViewValue);
		$this->IdRevisaSolicitud->ViewCustomAttributes = "";

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

		// Tipo
		if (strval($this->Tipo->CurrentValue) <> "") {
			switch ($this->Tipo->CurrentValue) {
				case $this->Tipo->FldTagValue(1):
					$this->Tipo->ViewValue = $this->Tipo->FldTagCaption(1) <> "" ? $this->Tipo->FldTagCaption(1) : $this->Tipo->CurrentValue;
					break;
				case $this->Tipo->FldTagValue(2):
					$this->Tipo->ViewValue = $this->Tipo->FldTagCaption(2) <> "" ? $this->Tipo->FldTagCaption(2) : $this->Tipo->CurrentValue;
					break;
				case $this->Tipo->FldTagValue(3):
					$this->Tipo->ViewValue = $this->Tipo->FldTagCaption(3) <> "" ? $this->Tipo->FldTagCaption(3) : $this->Tipo->CurrentValue;
					break;
				default:
					$this->Tipo->ViewValue = $this->Tipo->CurrentValue;
			}
		} else {
			$this->Tipo->ViewValue = NULL;
		}
		$this->Tipo->ViewValue = strtolower($this->Tipo->ViewValue);
		$this->Tipo->ViewCustomAttributes = "";

		// idTipo2
		if (strval($this->idTipo2->CurrentValue) <> "") {
			$sFilterWrk = "`idtipo`" . ew_SearchString("=", $this->idTipo2->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idtipo`, `tipodesarrollo` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_parametros_tiposdesarrollos`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idTipo2, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idTipo2->ViewValue = $rswrk->fields('DispFld');
				$rswrk->Close();
			} else {
				$this->idTipo2->ViewValue = $this->idTipo2->CurrentValue;
			}
		} else {
			$this->idTipo2->ViewValue = NULL;
		}
		$this->idTipo2->ViewCustomAttributes = "";

		// Fecha
		$this->Fecha->ViewValue = $this->Fecha->CurrentValue;
		$this->Fecha->ViewValue = ew_FormatDateTime($this->Fecha->ViewValue, 11);
		$this->Fecha->ViewCustomAttributes = "";

		// fechapase_ss
		$this->fechapase_ss->ViewValue = $this->fechapase_ss->CurrentValue;
		$this->fechapase_ss->ViewValue = ew_FormatDateTime($this->fechapase_ss->ViewValue, 11);
		$this->fechapase_ss->ViewCustomAttributes = "";

		// FechaSolicitud
		$this->FechaSolicitud->ViewValue = $this->FechaSolicitud->CurrentValue;
		$this->FechaSolicitud->ViewValue = ew_FormatDateTime($this->FechaSolicitud->ViewValue, 7);
		$this->FechaSolicitud->ViewCustomAttributes = "";

		// FechaRequerida
		$this->FechaRequerida->ViewValue = $this->FechaRequerida->CurrentValue;
		$this->FechaRequerida->ViewValue = ew_FormatDateTime($this->FechaRequerida->ViewValue, 7);
		$this->FechaRequerida->ViewCustomAttributes = "";

		// FechaRequerimiento_log
		$this->FechaRequerimiento_log->ViewValue = $this->FechaRequerimiento_log->CurrentValue;
		$this->FechaRequerimiento_log->ViewValue = ew_FormatDateTime($this->FechaRequerimiento_log->ViewValue, 7);
		$this->FechaRequerimiento_log->ViewCustomAttributes = "";

		// FechaProgramacion
		$this->FechaProgramacion->ViewValue = $this->FechaProgramacion->CurrentValue;
		$this->FechaProgramacion->ViewValue = ew_FormatDateTime($this->FechaProgramacion->ViewValue, 7);
		$this->FechaProgramacion->ViewCustomAttributes = "";

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

		// FechaPuesta
		$this->FechaPuesta->ViewValue = $this->FechaPuesta->CurrentValue;
		$this->FechaPuesta->ViewValue = ew_FormatDateTime($this->FechaPuesta->ViewValue, 11);
		$this->FechaPuesta->ViewCustomAttributes = "";

		// FechaTermino
		$this->FechaTermino->ViewValue = $this->FechaTermino->CurrentValue;
		$this->FechaTermino->ViewValue = ew_FormatDateTime($this->FechaTermino->ViewValue, 11);
		$this->FechaTermino->ViewCustomAttributes = "";

		// FechaUltimoPase
		$this->FechaUltimoPase->ViewValue = $this->FechaUltimoPase->CurrentValue;
		$this->FechaUltimoPase->ViewValue = ew_FormatDateTime($this->FechaUltimoPase->ViewValue, 7);
		$this->FechaUltimoPase->ViewCustomAttributes = "";

		// FechaUltimaTareaDiaria
		$this->FechaUltimaTareaDiaria->ViewValue = $this->FechaUltimaTareaDiaria->CurrentValue;
		$this->FechaUltimaTareaDiaria->ViewValue = ew_FormatDateTime($this->FechaUltimaTareaDiaria->ViewValue, 7);
		$this->FechaUltimaTareaDiaria->ViewCustomAttributes = "";

		// Titulo
		$this->Titulo->ViewValue = $this->Titulo->CurrentValue;
		$this->Titulo->ViewValue = strtolower($this->Titulo->ViewValue);
		$this->Titulo->ViewCustomAttributes = "";

		// idempresa
		if (strval($this->idempresa->CurrentValue) <> "") {
			$sFilterWrk = "`Idempresa`" . ew_SearchString("=", $this->idempresa->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `Idempresa`, `empresa` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_empresa`";
		$sWhereWrk = "";
		$lookuptblfilter = "`es_retail`= 'Y'";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
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

		// IdArea
		if (strval($this->IdArea->CurrentValue) <> "") {
			$sFilterWrk = "`Idarea`" . ew_SearchString("=", $this->IdArea->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `Idarea`, `Area` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_empresaarea`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdArea, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdArea->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdArea->ViewValue = $this->IdArea->CurrentValue;
			}
		} else {
			$this->IdArea->ViewValue = NULL;
		}
		$this->IdArea->ViewValue = strtolower($this->IdArea->ViewValue);
		$this->IdArea->ViewCustomAttributes = "";

		// CodServicio
		if (strval($this->CodServicio->CurrentValue) <> "") {
			$sFilterWrk = "`IdServicio`" . ew_SearchString("=", $this->CodServicio->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdServicio`, `IdServicio` AS `DispFld`, `Servicio` AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_servicio`";
		$sWhereWrk = "";
		$lookuptblfilter = "`id_tipo_servicio` not in (4) and `CodAdmRes` in (1)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->CodServicio, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `Servicio` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->CodServicio->ViewValue = $rswrk->fields('DispFld');
				$this->CodServicio->ViewValue .= ew_ValueSeparator(1,$this->CodServicio) . strtoupper($rswrk->fields('Disp2Fld'));
				$rswrk->Close();
			} else {
				$this->CodServicio->ViewValue = $this->CodServicio->CurrentValue;
			}
		} else {
			$this->CodServicio->ViewValue = NULL;
		}
		$this->CodServicio->ViewValue = strtolower($this->CodServicio->ViewValue);
		$this->CodServicio->ViewCustomAttributes = "";

		// idProceso
		$this->idProceso->ViewValue = $this->idProceso->CurrentValue;
		if (strval($this->idProceso->CurrentValue) <> "") {
			$sFilterWrk = "`IdProceso`" . ew_SearchString("=", $this->idProceso->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdProceso`, `Proceso` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_proceso`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idProceso, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `Proceso` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idProceso->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idProceso->ViewValue = $this->idProceso->CurrentValue;
			}
		} else {
			$this->idProceso->ViewValue = NULL;
		}
		$this->idProceso->ViewValue = strtolower($this->idProceso->ViewValue);
		$this->idProceso->ViewCustomAttributes = "";

		// idSubProceso
		$this->idSubProceso->ViewValue = $this->idSubProceso->CurrentValue;
		if (strval($this->idSubProceso->CurrentValue) <> "") {
			$sFilterWrk = "`IdSubProceso`" . ew_SearchString("=", $this->idSubProceso->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdSubProceso`, `SubProceso1` AS `DispFld`, `SubProceso2` AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_subproceso`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idSubProceso, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `SubProceso1` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idSubProceso->ViewValue = strtolower($rswrk->fields('DispFld'));
				$this->idSubProceso->ViewValue .= ew_ValueSeparator(1,$this->idSubProceso) . strtolower($rswrk->fields('Disp2Fld'));
				$rswrk->Close();
			} else {
				$this->idSubProceso->ViewValue = $this->idSubProceso->CurrentValue;
			}
		} else {
			$this->idSubProceso->ViewValue = NULL;
		}
		$this->idSubProceso->ViewValue = strtolower($this->idSubProceso->ViewValue);
		$this->idSubProceso->ViewCustomAttributes = "";

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
		$sSqlWrk .= " ORDER BY `Motivo` Asc";
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
		$this->IdMotivo->ViewCustomAttributes = "";

		// Prioridad
		if (strval($this->Prioridad->CurrentValue) <> "") {
			switch ($this->Prioridad->CurrentValue) {
				case $this->Prioridad->FldTagValue(1):
					$this->Prioridad->ViewValue = $this->Prioridad->FldTagCaption(1) <> "" ? $this->Prioridad->FldTagCaption(1) : $this->Prioridad->CurrentValue;
					break;
				case $this->Prioridad->FldTagValue(2):
					$this->Prioridad->ViewValue = $this->Prioridad->FldTagCaption(2) <> "" ? $this->Prioridad->FldTagCaption(2) : $this->Prioridad->CurrentValue;
					break;
				case $this->Prioridad->FldTagValue(3):
					$this->Prioridad->ViewValue = $this->Prioridad->FldTagCaption(3) <> "" ? $this->Prioridad->FldTagCaption(3) : $this->Prioridad->CurrentValue;
					break;
				case $this->Prioridad->FldTagValue(4):
					$this->Prioridad->ViewValue = $this->Prioridad->FldTagCaption(4) <> "" ? $this->Prioridad->FldTagCaption(4) : $this->Prioridad->CurrentValue;
					break;
				default:
					$this->Prioridad->ViewValue = $this->Prioridad->CurrentValue;
			}
		} else {
			$this->Prioridad->ViewValue = NULL;
		}
		$this->Prioridad->ViewValue = strtoupper($this->Prioridad->ViewValue);
		$this->Prioridad->ViewCustomAttributes = "";

		// TipoSolicitud
		if (strval($this->TipoSolicitud->CurrentValue) <> "") {
			$arwrk = explode(",", $this->TipoSolicitud->CurrentValue);
			$sFilterWrk = "";
			foreach ($arwrk as $wrk) {
				if ($sFilterWrk <> "") $sFilterWrk .= " OR ";
				$sFilterWrk .= "`TipoSolicitud`" . ew_SearchString("=", trim($wrk), EW_DATATYPE_STRING);
			}	
		$sSqlWrk = "SELECT `TipoSolicitud`, `TipoSolicitud` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_tiposolicitud`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->TipoSolicitud, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->TipoSolicitud->ViewValue = "";
				$ari = 0;
				while (!$rswrk->EOF) {
					$this->TipoSolicitud->ViewValue .= strtoupper($rswrk->fields('DispFld'));
					$rswrk->MoveNext();
					if (!$rswrk->EOF) $this->TipoSolicitud->ViewValue .= ew_ViewOptionSeparator($ari); // Separate Options
					$ari++;
				}
				$rswrk->Close();
			} else {
				$this->TipoSolicitud->ViewValue = $this->TipoSolicitud->CurrentValue;
			}
		} else {
			$this->TipoSolicitud->ViewValue = NULL;
		}
		$this->TipoSolicitud->ViewCustomAttributes = "";

		// CerrarRequerimiento
		if (strval($this->CerrarRequerimiento->CurrentValue) <> "") {
			switch ($this->CerrarRequerimiento->CurrentValue) {
				case $this->CerrarRequerimiento->FldTagValue(1):
					$this->CerrarRequerimiento->ViewValue = $this->CerrarRequerimiento->FldTagCaption(1) <> "" ? $this->CerrarRequerimiento->FldTagCaption(1) : $this->CerrarRequerimiento->CurrentValue;
					break;
				case $this->CerrarRequerimiento->FldTagValue(2):
					$this->CerrarRequerimiento->ViewValue = $this->CerrarRequerimiento->FldTagCaption(2) <> "" ? $this->CerrarRequerimiento->FldTagCaption(2) : $this->CerrarRequerimiento->CurrentValue;
					break;
				default:
					$this->CerrarRequerimiento->ViewValue = $this->CerrarRequerimiento->CurrentValue;
			}
		} else {
			$this->CerrarRequerimiento->ViewValue = NULL;
		}
		$this->CerrarRequerimiento->ViewCustomAttributes = "";

		// empresa_costo
		if (strval($this->empresa_costo->CurrentValue) <> "") {
			$arwrk = explode(",", $this->empresa_costo->CurrentValue);
			$sFilterWrk = "";
			foreach ($arwrk as $wrk) {
				if ($sFilterWrk <> "") $sFilterWrk .= " OR ";
				$sFilterWrk .= "`Idempresa`" . ew_SearchString("=", trim($wrk), EW_DATATYPE_NUMBER);
			}	
		$sSqlWrk = "SELECT `Idempresa`, `empresa` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_empresa`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idtipo`=1";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->empresa_costo, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->empresa_costo->ViewValue = "";
				$ari = 0;
				while (!$rswrk->EOF) {
					$this->empresa_costo->ViewValue .= strtoupper($rswrk->fields('DispFld'));
					$rswrk->MoveNext();
					if (!$rswrk->EOF) $this->empresa_costo->ViewValue .= ew_ViewOptionSeparator($ari); // Separate Options
					$ari++;
				}
				$rswrk->Close();
			} else {
				$this->empresa_costo->ViewValue = $this->empresa_costo->CurrentValue;
			}
		} else {
			$this->empresa_costo->ViewValue = NULL;
		}
		$this->empresa_costo->ViewCustomAttributes = "";

		// horasdesarrollo
		$this->horasdesarrollo->ViewValue = $this->horasdesarrollo->CurrentValue;
		$this->horasdesarrollo->ViewCustomAttributes = "";

		// horasdesarrollo_ss
		$this->horasdesarrollo_ss->ViewValue = $this->horasdesarrollo_ss->CurrentValue;
		$this->horasdesarrollo_ss->ViewCustomAttributes = "";

		// CodUsuarioLider
		if (strval($this->CodUsuarioLider->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->CodUsuarioLider->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarioslider`";
		$sWhereWrk = "";
		$lookuptblfilter = "`IdNivel` not in (19, 20, 21, 23)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->CodUsuarioLider, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->CodUsuarioLider->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->CodUsuarioLider->ViewValue = $this->CodUsuarioLider->CurrentValue;
			}
		} else {
			$this->CodUsuarioLider->ViewValue = NULL;
		}
		$this->CodUsuarioLider->ViewValue = strtolower($this->CodUsuarioLider->ViewValue);
		$this->CodUsuarioLider->ViewCustomAttributes = "";

		// IdGerenteSolicitante
		if (strval($this->IdGerenteSolicitante->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->IdGerenteSolicitante->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarioslider`";
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
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdGerenteSolicitante->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->IdGerenteSolicitante->ViewValue = $this->IdGerenteSolicitante->CurrentValue;
			}
		} else {
			$this->IdGerenteSolicitante->ViewValue = NULL;
		}
		$this->IdGerenteSolicitante->ViewValue = strtolower($this->IdGerenteSolicitante->ViewValue);
		$this->IdGerenteSolicitante->ViewCustomAttributes = "";

		// CodUsuario
		if (strval($this->CodUsuario->CurrentValue) <> "") {
			$sFilterWrk = "`CodUsuario`" . ew_SearchString("=", $this->CodUsuario->CurrentValue, EW_DATATYPE_NUMBER);
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
		$this->Lookup_Selecting($this->CodUsuario, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->CodUsuario->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->CodUsuario->ViewValue = $this->CodUsuario->CurrentValue;
			}
		} else {
			$this->CodUsuario->ViewValue = NULL;
		}
		$this->CodUsuario->ViewValue = strtolower($this->CodUsuario->ViewValue);
		$this->CodUsuario->ViewCustomAttributes = "";

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
		$this->IdJefeProyecto->ViewValue = strtolower($this->IdJefeProyecto->ViewValue);
		$this->IdJefeProyecto->ViewCustomAttributes = "";

		// idproveedor
		if (strval($this->idproveedor->CurrentValue) <> "") {
			$sFilterWrk = "`Idempresa`" . ew_SearchString("=", $this->idproveedor->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `Idempresa`, `empresa` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_empresa`";
		$sWhereWrk = "";
		$lookuptblfilter = "`es_proveedor`= 'Y'";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idproveedor, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `empresa` ASC";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idproveedor->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idproveedor->ViewValue = $this->idproveedor->CurrentValue;
			}
		} else {
			$this->idproveedor->ViewValue = NULL;
		}
		$this->idproveedor->ViewValue = strtolower($this->idproveedor->ViewValue);
		$this->idproveedor->ViewCustomAttributes = "";

		// idanalista_ss
		if (strval($this->idanalista_ss->CurrentValue) <> "") {
			$sFilterWrk = "`CodUsuario`" . ew_SearchString("=", $this->idanalista_ss->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `CodUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_analista_pases`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idempresa` in (11,14)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idanalista_ss, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idanalista_ss->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idanalista_ss->ViewValue = $this->idanalista_ss->CurrentValue;
			}
		} else {
			$this->idanalista_ss->ViewValue = NULL;
		}
		$this->idanalista_ss->ViewValue = strtolower($this->idanalista_ss->ViewValue);
		$this->idanalista_ss->ViewCustomAttributes = "";

		// idjefeproy_ss
		if (strval($this->idjefeproy_ss->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->idjefeproy_ss->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_jefeproy_reque`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idempresa` in (11,14)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idjefeproy_ss, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idjefeproy_ss->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idjefeproy_ss->ViewValue = $this->idjefeproy_ss->CurrentValue;
			}
		} else {
			$this->idjefeproy_ss->ViewValue = NULL;
		}
		$this->idjefeproy_ss->ViewValue = strtolower($this->idjefeproy_ss->ViewValue);
		$this->idjefeproy_ss->ViewCustomAttributes = "";

		// Descripcion
		$this->Descripcion->ViewValue = $this->Descripcion->CurrentValue;
		if (!is_null($this->Descripcion->ViewValue)) $this->Descripcion->ViewValue = str_replace("\n", "<br>", $this->Descripcion->ViewValue); 
		$this->Descripcion->ViewCustomAttributes = "";

		// Instrucciones
		$this->Instrucciones->ViewValue = $this->Instrucciones->CurrentValue;
		if (!is_null($this->Instrucciones->ViewValue)) $this->Instrucciones->ViewValue = str_replace("\n", "<br>", $this->Instrucciones->ViewValue); 
		$this->Instrucciones->ViewCustomAttributes = "";

		// ArchAdjuntos
		$this->ArchAdjuntos->ViewValue = $this->ArchAdjuntos->CurrentValue;
		if (!is_null($this->ArchAdjuntos->ViewValue)) $this->ArchAdjuntos->ViewValue = str_replace("\n", "<br>", $this->ArchAdjuntos->ViewValue); 
		$this->ArchAdjuntos->ViewCustomAttributes = "";

		// querys
		$this->querys->ViewValue = $this->querys->CurrentValue;
		if (!is_null($this->querys->ViewValue)) $this->querys->ViewValue = str_replace("\n", "<br>", $this->querys->ViewValue); 
		$this->querys->ViewCustomAttributes = "";

		// Adjuntos
		$this->Adjuntos->UploadPath = "adjuntos/";
		if (!ew_Empty($this->Adjuntos->Upload->DbValue)) {
			$this->Adjuntos->ViewValue = $this->Adjuntos->Upload->DbValue;
		} else {
			$this->Adjuntos->ViewValue = "";
		}
		$this->Adjuntos->ViewCustomAttributes = "";

		// stores
		$this->stores->UploadPath = "stores/";
		if (!ew_Empty($this->stores->Upload->DbValue)) {
			$this->stores->ViewValue = $this->stores->Upload->DbValue;
		} else {
			$this->stores->ViewValue = "";
		}
		$this->stores->ViewCustomAttributes = "";

		// ejecutables
		$this->ejecutables->UploadPath = "ejecutables/";
		if (!ew_Empty($this->ejecutables->Upload->DbValue)) {
			$this->ejecutables->ViewValue = $this->ejecutables->Upload->DbValue;
		} else {
			$this->ejecutables->ViewValue = "";
		}
		$this->ejecutables->ViewCustomAttributes = "";

		// SolicitudDesarrollo
		$this->SolicitudDesarrollo->UploadPath = "solicituddesarrollo/";
		if (!ew_Empty($this->SolicitudDesarrollo->Upload->DbValue)) {
			$this->SolicitudDesarrollo->ViewValue = $this->SolicitudDesarrollo->Upload->DbValue;
		} else {
			$this->SolicitudDesarrollo->ViewValue = "";
		}
		$this->SolicitudDesarrollo->ViewCustomAttributes = "";

		// doc_especifuncionales
		$this->doc_especifuncionales->UploadPath = "especificaciones/";
		if (!ew_Empty($this->doc_especifuncionales->Upload->DbValue)) {
			$this->doc_especifuncionales->ViewValue = $this->doc_especifuncionales->Upload->DbValue;
		} else {
			$this->doc_especifuncionales->ViewValue = "";
		}
		$this->doc_especifuncionales->ViewCustomAttributes = "";

		// PlanPruebas
		$this->PlanPruebas->UploadPath = "planpruebas/";
		if (!ew_Empty($this->PlanPruebas->Upload->DbValue)) {
			$this->PlanPruebas->ViewValue = $this->PlanPruebas->Upload->DbValue;
		} else {
			$this->PlanPruebas->ViewValue = "";
		}
		$this->PlanPruebas->ViewCustomAttributes = "";

		// DiagramaER
		$this->DiagramaER->UploadPath = "diagramaer/";
		if (!ew_Empty($this->DiagramaER->Upload->DbValue)) {
			$this->DiagramaER->ViewValue = $this->DiagramaER->Upload->DbValue;
		} else {
			$this->DiagramaER->ViewValue = "";
		}
		$this->DiagramaER->ViewCustomAttributes = "";

		// ManualUsuario
		$this->ManualUsuario->UploadPath = "docdesarrollo/";
		if (!ew_Empty($this->ManualUsuario->Upload->DbValue)) {
			$this->ManualUsuario->ViewValue = $this->ManualUsuario->Upload->DbValue;
		} else {
			$this->ManualUsuario->ViewValue = "";
		}
		$this->ManualUsuario->ViewCustomAttributes = "";

		// DiagramaProcesos
		$this->DiagramaProcesos->UploadPath = "diagramaprocesos/";
		if (!ew_Empty($this->DiagramaProcesos->Upload->DbValue)) {
			$this->DiagramaProcesos->ViewValue = $this->DiagramaProcesos->Upload->DbValue;
		} else {
			$this->DiagramaProcesos->ViewValue = "";
		}
		$this->DiagramaProcesos->ViewCustomAttributes = "";

		// DiccionarioDatos
		$this->DiccionarioDatos->UploadPath = "diccionariodatos/";
		if (!ew_Empty($this->DiccionarioDatos->Upload->DbValue)) {
			$this->DiccionarioDatos->ViewValue = $this->DiccionarioDatos->Upload->DbValue;
		} else {
			$this->DiccionarioDatos->ViewValue = "";
		}
		$this->DiccionarioDatos->ViewCustomAttributes = "";

		// tittuReque
		$this->tittuReque->ViewValue = $this->tittuReque->CurrentValue;
		$this->tittuReque->ViewCustomAttributes = "";

		// desreque
		$this->desreque->ViewValue = $this->desreque->CurrentValue;
		if (!is_null($this->desreque->ViewValue)) $this->desreque->ViewValue = str_replace("\n", "<br>", $this->desreque->ViewValue); 
		$this->desreque->ViewCustomAttributes = "";

		// Beneficios
		$this->Beneficios->ViewValue = $this->Beneficios->CurrentValue;
		if (!is_null($this->Beneficios->ViewValue)) $this->Beneficios->ViewValue = str_replace("\n", "<br>", $this->Beneficios->ViewValue); 
		$this->Beneficios->ViewCustomAttributes = "";

		// Objetivo
		$this->Objetivo->ViewValue = $this->Objetivo->CurrentValue;
		if (!is_null($this->Objetivo->ViewValue)) $this->Objetivo->ViewValue = str_replace("\n", "<br>", $this->Objetivo->ViewValue); 
		$this->Objetivo->ViewCustomAttributes = "";

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
		$this->Impacto->CssStyle = "font-weight: bold;";
		$this->Impacto->CellCssStyle .= "text-align: center;";
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
		$this->Participacion->CssStyle = "font-weight: bold;";
		$this->Participacion->CellCssStyle .= "text-align: center;";
		$this->Participacion->ViewCustomAttributes = "";

		// Justificativa
		$this->Justificativa->ViewValue = $this->Justificativa->CurrentValue;
		if (!is_null($this->Justificativa->ViewValue)) $this->Justificativa->ViewValue = str_replace("\n", "<br>", $this->Justificativa->ViewValue); 
		$this->Justificativa->ViewCustomAttributes = "";

		// Recomendacion
		$this->Recomendacion->ViewValue = $this->Recomendacion->CurrentValue;
		if (!is_null($this->Recomendacion->ViewValue)) $this->Recomendacion->ViewValue = str_replace("\n", "<br>", $this->Recomendacion->ViewValue); 
		$this->Recomendacion->ViewCustomAttributes = "";

		// Roles
		$this->Roles->ViewValue = $this->Roles->CurrentValue;
		if (!is_null($this->Roles->ViewValue)) $this->Roles->ViewValue = str_replace("\n", "<br>", $this->Roles->ViewValue); 
		$this->Roles->ViewCustomAttributes = "";

		// fecha_asigna_qa
		$this->fecha_asigna_qa->ViewValue = $this->fecha_asigna_qa->CurrentValue;
		$this->fecha_asigna_qa->ViewValue = ew_FormatDateTime($this->fecha_asigna_qa->ViewValue, 11);
		$this->fecha_asigna_qa->ViewCustomAttributes = "";

		// id_qa
		if (strval($this->id_qa->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->id_qa->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		$lookuptblfilter = "`IdNivel`= 4 and `activado`= 'Y'";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->id_qa, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->id_qa->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->id_qa->ViewValue = $this->id_qa->CurrentValue;
			}
		} else {
			$this->id_qa->ViewValue = NULL;
		}
		$this->id_qa->ViewCustomAttributes = "";

		// observaciones_qa
		$this->observaciones_qa->ViewValue = $this->observaciones_qa->CurrentValue;
		if (!is_null($this->observaciones_qa->ViewValue)) $this->observaciones_qa->ViewValue = str_replace("\n", "<br>", $this->observaciones_qa->ViewValue); 
		$this->observaciones_qa->ViewCustomAttributes = "";

		// IdEstadoSoliPuestaProd
		if (strval($this->IdEstadoSoliPuestaProd->CurrentValue) <> "") {
			$sFilterWrk = "`IdEstadoSoliPuestaProd`" . ew_SearchString("=", $this->IdEstadoSoliPuestaProd->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdEstadoSoliPuestaProd`, `estado` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_estsolipuestaprod`";
		$sWhereWrk = "";
		$lookuptblfilter = "`pageid`='". CurrentPageID() ."' and `levelid` = '". CurrentUserLevel() ."'";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdEstadoSoliPuestaProd, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `estado` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdEstadoSoliPuestaProd->ViewValue = $rswrk->fields('DispFld');
				$rswrk->Close();
			} else {
				$this->IdEstadoSoliPuestaProd->ViewValue = $this->IdEstadoSoliPuestaProd->CurrentValue;
			}
		} else {
			$this->IdEstadoSoliPuestaProd->ViewValue = NULL;
		}
		$this->IdEstadoSoliPuestaProd->ViewCustomAttributes = "";

		// cant_dias_analisis
		$this->cant_dias_analisis->ViewValue = $this->cant_dias_analisis->CurrentValue;
		$this->cant_dias_analisis->ViewCustomAttributes = "";

		// cant_dias_desarrollo
		$this->cant_dias_desarrollo->ViewValue = $this->cant_dias_desarrollo->CurrentValue;
		$this->cant_dias_desarrollo->ViewCustomAttributes = "";

		// cant_dias_pruebas
		$this->cant_dias_pruebas->ViewValue = $this->cant_dias_pruebas->CurrentValue;
		$this->cant_dias_pruebas->ViewCustomAttributes = "";

		// cant_dias_qa
		$this->cant_dias_qa->ViewValue = $this->cant_dias_qa->CurrentValue;
		$this->cant_dias_qa->ViewCustomAttributes = "";

		// cant_dias_prueba_user
		$this->cant_dias_prueba_user->ViewValue = $this->cant_dias_prueba_user->CurrentValue;
		$this->cant_dias_prueba_user->ViewCustomAttributes = "";

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

		// dias_analisis_td
		$this->dias_analisis_td->ViewValue = $this->dias_analisis_td->CurrentValue;
		$this->dias_analisis_td->ViewCustomAttributes = "";

		// dias_desarrollo_td
		$this->dias_desarrollo_td->ViewValue = $this->dias_desarrollo_td->CurrentValue;
		$this->dias_desarrollo_td->ViewCustomAttributes = "";

		// dias_pruebas_td
		$this->dias_pruebas_td->ViewValue = $this->dias_pruebas_td->CurrentValue;
		$this->dias_pruebas_td->ViewCustomAttributes = "";

		// dias_qa_td
		$this->dias_qa_td->ViewValue = $this->dias_qa_td->CurrentValue;
		$this->dias_qa_td->ViewCustomAttributes = "";

		// ObsGestion
		$this->ObsGestion->ViewValue = $this->ObsGestion->CurrentValue;
		if (!is_null($this->ObsGestion->ViewValue)) $this->ObsGestion->ViewValue = str_replace("\n", "<br>", $this->ObsGestion->ViewValue); 
		$this->ObsGestion->ViewCustomAttributes = "";

		// ObsTareasDiairias
		$this->ObsTareasDiairias->ViewValue = $this->ObsTareasDiairias->CurrentValue;
		if (!is_null($this->ObsTareasDiairias->ViewValue)) $this->ObsTareasDiairias->ViewValue = str_replace("\n", "<br>", $this->ObsTareasDiairias->ViewValue); 
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

		// IdPase
		$this->IdPase->LinkCustomAttributes = "";
		$this->IdPase->HrefValue = "";
		$this->IdPase->TooltipValue = "";

		// Proyecto
		$this->Proyecto->LinkCustomAttributes = "";
		$this->Proyecto->HrefValue = "";
		$this->Proyecto->TooltipValue = "";

		// idProydes
		$this->idProydes->LinkCustomAttributes = "";
		$this->idProydes->HrefValue = "";
		$this->idProydes->TooltipValue = "";

		// IdSoliDesarrollo
		$this->IdSoliDesarrollo->LinkCustomAttributes = "";
		$this->IdSoliDesarrollo->HrefValue = "";
		$this->IdSoliDesarrollo->TooltipValue = "";

		// CodHelpDesk
		$this->CodHelpDesk->LinkCustomAttributes = "";
		$this->CodHelpDesk->HrefValue = "";
		$this->CodHelpDesk->TooltipValue = "";

		// IdRevisaSolicitud
		$this->IdRevisaSolicitud->LinkCustomAttributes = "";
		$this->IdRevisaSolicitud->HrefValue = "";
		$this->IdRevisaSolicitud->TooltipValue = "";

		// id_tipopoa
		$this->id_tipopoa->LinkCustomAttributes = "";
		$this->id_tipopoa->HrefValue = "";
		$this->id_tipopoa->TooltipValue = "";

		// Tipo
		$this->Tipo->LinkCustomAttributes = "";
		$this->Tipo->HrefValue = "";
		$this->Tipo->TooltipValue = "";

		// idTipo2
		$this->idTipo2->LinkCustomAttributes = "";
		$this->idTipo2->HrefValue = "";
		$this->idTipo2->TooltipValue = "";

		// Fecha
		$this->Fecha->LinkCustomAttributes = "";
		$this->Fecha->HrefValue = "";
		$this->Fecha->TooltipValue = "";

		// fechapase_ss
		$this->fechapase_ss->LinkCustomAttributes = "";
		$this->fechapase_ss->HrefValue = "";
		$this->fechapase_ss->TooltipValue = "";

		// FechaSolicitud
		$this->FechaSolicitud->LinkCustomAttributes = "";
		$this->FechaSolicitud->HrefValue = "";
		$this->FechaSolicitud->TooltipValue = "";

		// FechaRequerida
		$this->FechaRequerida->LinkCustomAttributes = "";
		$this->FechaRequerida->HrefValue = "";
		$this->FechaRequerida->TooltipValue = "";

		// FechaRequerimiento_log
		$this->FechaRequerimiento_log->LinkCustomAttributes = "";
		$this->FechaRequerimiento_log->HrefValue = "";
		$this->FechaRequerimiento_log->TooltipValue = "";

		// FechaProgramacion
		$this->FechaProgramacion->LinkCustomAttributes = "";
		$this->FechaProgramacion->HrefValue = "";
		$this->FechaProgramacion->TooltipValue = "";

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

		// FechaPuesta
		$this->FechaPuesta->LinkCustomAttributes = "";
		$this->FechaPuesta->HrefValue = "";
		$this->FechaPuesta->TooltipValue = "";

		// FechaTermino
		$this->FechaTermino->LinkCustomAttributes = "";
		$this->FechaTermino->HrefValue = "";
		$this->FechaTermino->TooltipValue = "";

		// FechaUltimoPase
		$this->FechaUltimoPase->LinkCustomAttributes = "";
		$this->FechaUltimoPase->HrefValue = "";
		$this->FechaUltimoPase->TooltipValue = "";

		// FechaUltimaTareaDiaria
		$this->FechaUltimaTareaDiaria->LinkCustomAttributes = "";
		$this->FechaUltimaTareaDiaria->HrefValue = "";
		$this->FechaUltimaTareaDiaria->TooltipValue = "";

		// Titulo
		$this->Titulo->LinkCustomAttributes = "";
		$this->Titulo->HrefValue = "";
		$this->Titulo->TooltipValue = strval($this->Descripcion->CurrentValue);
		$this->Titulo->TooltipValue = str_replace("\n", "<br>", $this->Titulo->TooltipValue);
		$this->Titulo->TooltipWidth = 400;
		if ($this->Titulo->HrefValue == "") $this->Titulo->HrefValue = "javascript:void(0);";
		$this->Titulo->LinkAttrs["class"] = "ewTooltipLink";
		$this->Titulo->LinkAttrs["data-tooltip-id"] = "tt_pp_solatendida2_x" . @$this->RowCnt . "_Titulo";
		$this->Titulo->LinkAttrs["data-tooltip-width"] = $this->Titulo->TooltipWidth;
		$this->Titulo->LinkAttrs["data-placement"] = "right";

		// idempresa
		$this->idempresa->LinkCustomAttributes = "";
		$this->idempresa->HrefValue = "";
		$this->idempresa->TooltipValue = "";

		// IdArea
		$this->IdArea->LinkCustomAttributes = "";
		$this->IdArea->HrefValue = "";
		$this->IdArea->TooltipValue = "";

		// CodServicio
		$this->CodServicio->LinkCustomAttributes = "";
		$this->CodServicio->HrefValue = "";
		$this->CodServicio->TooltipValue = "";

		// idProceso
		$this->idProceso->LinkCustomAttributes = "";
		$this->idProceso->HrefValue = "";
		$this->idProceso->TooltipValue = "";

		// idSubProceso
		$this->idSubProceso->LinkCustomAttributes = "";
		$this->idSubProceso->HrefValue = "";
		$this->idSubProceso->TooltipValue = "";

		// IdMotivo
		$this->IdMotivo->LinkCustomAttributes = "";
		$this->IdMotivo->HrefValue = "";
		$this->IdMotivo->TooltipValue = "";

		// Prioridad
		$this->Prioridad->LinkCustomAttributes = "";
		$this->Prioridad->HrefValue = "";
		$this->Prioridad->TooltipValue = "";

		// TipoSolicitud
		$this->TipoSolicitud->LinkCustomAttributes = "";
		$this->TipoSolicitud->HrefValue = "";
		$this->TipoSolicitud->TooltipValue = "";

		// CerrarRequerimiento
		$this->CerrarRequerimiento->LinkCustomAttributes = "";
		$this->CerrarRequerimiento->HrefValue = "";
		$this->CerrarRequerimiento->TooltipValue = "";

		// empresa_costo
		$this->empresa_costo->LinkCustomAttributes = "";
		$this->empresa_costo->HrefValue = "";
		$this->empresa_costo->TooltipValue = "";

		// horasdesarrollo
		$this->horasdesarrollo->LinkCustomAttributes = "";
		$this->horasdesarrollo->HrefValue = "";
		$this->horasdesarrollo->TooltipValue = "";

		// horasdesarrollo_ss
		$this->horasdesarrollo_ss->LinkCustomAttributes = "";
		$this->horasdesarrollo_ss->HrefValue = "";
		$this->horasdesarrollo_ss->TooltipValue = "";

		// CodUsuarioLider
		$this->CodUsuarioLider->LinkCustomAttributes = "";
		$this->CodUsuarioLider->HrefValue = "";
		$this->CodUsuarioLider->TooltipValue = "";

		// IdGerenteSolicitante
		$this->IdGerenteSolicitante->LinkCustomAttributes = "";
		$this->IdGerenteSolicitante->HrefValue = "";
		$this->IdGerenteSolicitante->TooltipValue = "";

		// CodUsuario
		$this->CodUsuario->LinkCustomAttributes = "";
		$this->CodUsuario->HrefValue = "";
		$this->CodUsuario->TooltipValue = "";

		// IdJefeProyecto
		$this->IdJefeProyecto->LinkCustomAttributes = "";
		$this->IdJefeProyecto->HrefValue = "";
		$this->IdJefeProyecto->TooltipValue = "";

		// idproveedor
		$this->idproveedor->LinkCustomAttributes = "";
		$this->idproveedor->HrefValue = "";
		$this->idproveedor->TooltipValue = "";

		// idanalista_ss
		$this->idanalista_ss->LinkCustomAttributes = "";
		$this->idanalista_ss->HrefValue = "";
		$this->idanalista_ss->TooltipValue = "";

		// idjefeproy_ss
		$this->idjefeproy_ss->LinkCustomAttributes = "";
		$this->idjefeproy_ss->HrefValue = "";
		$this->idjefeproy_ss->TooltipValue = "";

		// Descripcion
		$this->Descripcion->LinkCustomAttributes = "";
		$this->Descripcion->HrefValue = "";
		$this->Descripcion->TooltipValue = "";

		// Instrucciones
		$this->Instrucciones->LinkCustomAttributes = "";
		$this->Instrucciones->HrefValue = "";
		$this->Instrucciones->TooltipValue = "";

		// ArchAdjuntos
		$this->ArchAdjuntos->LinkCustomAttributes = "";
		$this->ArchAdjuntos->HrefValue = "";
		$this->ArchAdjuntos->TooltipValue = "";

		// querys
		$this->querys->LinkCustomAttributes = "";
		$this->querys->HrefValue = "";
		$this->querys->TooltipValue = "";

		// Adjuntos
		$this->Adjuntos->LinkCustomAttributes = "";
		$this->Adjuntos->UploadPath = "adjuntos/";
		if (!ew_Empty($this->Adjuntos->Upload->DbValue)) {
			$this->Adjuntos->HrefValue = ew_UploadPathEx(FALSE, $this->Adjuntos->UploadPath) . $this->Adjuntos->Upload->DbValue; // Add prefix/suffix
			$this->Adjuntos->LinkAttrs["target"] = "_blank"; // Add target
			if ($this->Export <> "") $this->Adjuntos->HrefValue = ew_ConvertFullUrl($this->Adjuntos->HrefValue);
		} else {
			$this->Adjuntos->HrefValue = "";
		}
		$this->Adjuntos->HrefValue2 = $this->Adjuntos->UploadPath . $this->Adjuntos->Upload->DbValue;
		$this->Adjuntos->TooltipValue = "";

		// stores
		$this->stores->LinkCustomAttributes = "";
		$this->stores->UploadPath = "stores/";
		if (!ew_Empty($this->stores->Upload->DbValue)) {
			$this->stores->HrefValue = ew_UploadPathEx(FALSE, $this->stores->UploadPath) . $this->stores->Upload->DbValue; // Add prefix/suffix
			$this->stores->LinkAttrs["target"] = ""; // Add target
			if ($this->Export <> "") $this->stores->HrefValue = ew_ConvertFullUrl($this->stores->HrefValue);
		} else {
			$this->stores->HrefValue = "";
		}
		$this->stores->HrefValue2 = $this->stores->UploadPath . $this->stores->Upload->DbValue;
		$this->stores->TooltipValue = "";

		// ejecutables
		$this->ejecutables->LinkCustomAttributes = "";
		$this->ejecutables->UploadPath = "ejecutables/";
		if (!ew_Empty($this->ejecutables->Upload->DbValue)) {
			$this->ejecutables->HrefValue = ew_UploadPathEx(FALSE, $this->ejecutables->UploadPath) . $this->ejecutables->Upload->DbValue; // Add prefix/suffix
			$this->ejecutables->LinkAttrs["target"] = ""; // Add target
			if ($this->Export <> "") $this->ejecutables->HrefValue = ew_ConvertFullUrl($this->ejecutables->HrefValue);
		} else {
			$this->ejecutables->HrefValue = "";
		}
		$this->ejecutables->HrefValue2 = $this->ejecutables->UploadPath . $this->ejecutables->Upload->DbValue;
		$this->ejecutables->TooltipValue = "";

		// SolicitudDesarrollo
		$this->SolicitudDesarrollo->LinkCustomAttributes = "";
		$this->SolicitudDesarrollo->UploadPath = "solicituddesarrollo/";
		if (!ew_Empty($this->SolicitudDesarrollo->Upload->DbValue)) {
			$this->SolicitudDesarrollo->HrefValue = ew_UploadPathEx(FALSE, $this->SolicitudDesarrollo->UploadPath) . $this->SolicitudDesarrollo->Upload->DbValue; // Add prefix/suffix
			$this->SolicitudDesarrollo->LinkAttrs["target"] = "_blank"; // Add target
			if ($this->Export <> "") $this->SolicitudDesarrollo->HrefValue = ew_ConvertFullUrl($this->SolicitudDesarrollo->HrefValue);
		} else {
			$this->SolicitudDesarrollo->HrefValue = "";
		}
		$this->SolicitudDesarrollo->HrefValue2 = $this->SolicitudDesarrollo->UploadPath . $this->SolicitudDesarrollo->Upload->DbValue;
		$this->SolicitudDesarrollo->TooltipValue = "";

		// doc_especifuncionales
		$this->doc_especifuncionales->LinkCustomAttributes = "";
		$this->doc_especifuncionales->UploadPath = "especificaciones/";
		if (!ew_Empty($this->doc_especifuncionales->Upload->DbValue)) {
			$this->doc_especifuncionales->HrefValue = ew_UploadPathEx(FALSE, $this->doc_especifuncionales->UploadPath) . $this->doc_especifuncionales->Upload->DbValue; // Add prefix/suffix
			$this->doc_especifuncionales->LinkAttrs["target"] = ""; // Add target
			if ($this->Export <> "") $this->doc_especifuncionales->HrefValue = ew_ConvertFullUrl($this->doc_especifuncionales->HrefValue);
		} else {
			$this->doc_especifuncionales->HrefValue = "";
		}
		$this->doc_especifuncionales->HrefValue2 = $this->doc_especifuncionales->UploadPath . $this->doc_especifuncionales->Upload->DbValue;
		$this->doc_especifuncionales->TooltipValue = "";

		// PlanPruebas
		$this->PlanPruebas->LinkCustomAttributes = "";
		$this->PlanPruebas->UploadPath = "planpruebas/";
		if (!ew_Empty($this->PlanPruebas->Upload->DbValue)) {
			$this->PlanPruebas->HrefValue = ew_UploadPathEx(FALSE, $this->PlanPruebas->UploadPath) . $this->PlanPruebas->Upload->DbValue; // Add prefix/suffix
			$this->PlanPruebas->LinkAttrs["target"] = ""; // Add target
			if ($this->Export <> "") $this->PlanPruebas->HrefValue = ew_ConvertFullUrl($this->PlanPruebas->HrefValue);
		} else {
			$this->PlanPruebas->HrefValue = "";
		}
		$this->PlanPruebas->HrefValue2 = $this->PlanPruebas->UploadPath . $this->PlanPruebas->Upload->DbValue;
		$this->PlanPruebas->TooltipValue = "";

		// DiagramaER
		$this->DiagramaER->LinkCustomAttributes = "";
		$this->DiagramaER->UploadPath = "diagramaer/";
		if (!ew_Empty($this->DiagramaER->Upload->DbValue)) {
			$this->DiagramaER->HrefValue = ew_UploadPathEx(FALSE, $this->DiagramaER->UploadPath) . $this->DiagramaER->Upload->DbValue; // Add prefix/suffix
			$this->DiagramaER->LinkAttrs["target"] = "_blank"; // Add target
			if ($this->Export <> "") $this->DiagramaER->HrefValue = ew_ConvertFullUrl($this->DiagramaER->HrefValue);
		} else {
			$this->DiagramaER->HrefValue = "";
		}
		$this->DiagramaER->HrefValue2 = $this->DiagramaER->UploadPath . $this->DiagramaER->Upload->DbValue;
		$this->DiagramaER->TooltipValue = "";

		// ManualUsuario
		$this->ManualUsuario->LinkCustomAttributes = "";
		$this->ManualUsuario->UploadPath = "docdesarrollo/";
		if (!ew_Empty($this->ManualUsuario->Upload->DbValue)) {
			$this->ManualUsuario->HrefValue = ew_UploadPathEx(FALSE, $this->ManualUsuario->UploadPath) . $this->ManualUsuario->Upload->DbValue; // Add prefix/suffix
			$this->ManualUsuario->LinkAttrs["target"] = "_blank"; // Add target
			if ($this->Export <> "") $this->ManualUsuario->HrefValue = ew_ConvertFullUrl($this->ManualUsuario->HrefValue);
		} else {
			$this->ManualUsuario->HrefValue = "";
		}
		$this->ManualUsuario->HrefValue2 = $this->ManualUsuario->UploadPath . $this->ManualUsuario->Upload->DbValue;
		$this->ManualUsuario->TooltipValue = "";

		// DiagramaProcesos
		$this->DiagramaProcesos->LinkCustomAttributes = "";
		$this->DiagramaProcesos->UploadPath = "diagramaprocesos/";
		if (!ew_Empty($this->DiagramaProcesos->Upload->DbValue)) {
			$this->DiagramaProcesos->HrefValue = ew_UploadPathEx(FALSE, $this->DiagramaProcesos->UploadPath) . $this->DiagramaProcesos->Upload->DbValue; // Add prefix/suffix
			$this->DiagramaProcesos->LinkAttrs["target"] = "_blank"; // Add target
			if ($this->Export <> "") $this->DiagramaProcesos->HrefValue = ew_ConvertFullUrl($this->DiagramaProcesos->HrefValue);
		} else {
			$this->DiagramaProcesos->HrefValue = "";
		}
		$this->DiagramaProcesos->HrefValue2 = $this->DiagramaProcesos->UploadPath . $this->DiagramaProcesos->Upload->DbValue;
		$this->DiagramaProcesos->TooltipValue = "";

		// DiccionarioDatos
		$this->DiccionarioDatos->LinkCustomAttributes = "";
		$this->DiccionarioDatos->UploadPath = "diccionariodatos/";
		if (!ew_Empty($this->DiccionarioDatos->Upload->DbValue)) {
			$this->DiccionarioDatos->HrefValue = ew_UploadPathEx(FALSE, $this->DiccionarioDatos->UploadPath) . $this->DiccionarioDatos->Upload->DbValue; // Add prefix/suffix
			$this->DiccionarioDatos->LinkAttrs["target"] = "_blank"; // Add target
			if ($this->Export <> "") $this->DiccionarioDatos->HrefValue = ew_ConvertFullUrl($this->DiccionarioDatos->HrefValue);
		} else {
			$this->DiccionarioDatos->HrefValue = "";
		}
		$this->DiccionarioDatos->HrefValue2 = $this->DiccionarioDatos->UploadPath . $this->DiccionarioDatos->Upload->DbValue;
		$this->DiccionarioDatos->TooltipValue = "";

		// tittuReque
		$this->tittuReque->LinkCustomAttributes = "";
		$this->tittuReque->HrefValue = "";
		$this->tittuReque->TooltipValue = "";

		// desreque
		$this->desreque->LinkCustomAttributes = "";
		$this->desreque->HrefValue = "";
		$this->desreque->TooltipValue = "";

		// Beneficios
		$this->Beneficios->LinkCustomAttributes = "";
		$this->Beneficios->HrefValue = "";
		$this->Beneficios->TooltipValue = "";

		// Objetivo
		$this->Objetivo->LinkCustomAttributes = "";
		$this->Objetivo->HrefValue = "";
		$this->Objetivo->TooltipValue = "";

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

		// Roles
		$this->Roles->LinkCustomAttributes = "";
		$this->Roles->HrefValue = "";
		$this->Roles->TooltipValue = "";

		// fecha_asigna_qa
		$this->fecha_asigna_qa->LinkCustomAttributes = "";
		$this->fecha_asigna_qa->HrefValue = "";
		$this->fecha_asigna_qa->TooltipValue = "";

		// id_qa
		$this->id_qa->LinkCustomAttributes = "";
		$this->id_qa->HrefValue = "";
		$this->id_qa->TooltipValue = strval($this->observaciones_qa->CurrentValue);
		$this->id_qa->TooltipValue = str_replace("\n", "<br>", $this->id_qa->TooltipValue);
		$this->id_qa->TooltipWidth = 400;
		if ($this->id_qa->HrefValue == "") $this->id_qa->HrefValue = "javascript:void(0);";
		$this->id_qa->LinkAttrs["class"] = "ewTooltipLink";
		$this->id_qa->LinkAttrs["data-tooltip-id"] = "tt_pp_solatendida2_x" . @$this->RowCnt . "_id_qa";
		$this->id_qa->LinkAttrs["data-tooltip-width"] = $this->id_qa->TooltipWidth;
		$this->id_qa->LinkAttrs["data-placement"] = "right";

		// observaciones_qa
		$this->observaciones_qa->LinkCustomAttributes = "";
		$this->observaciones_qa->HrefValue = "";
		$this->observaciones_qa->TooltipValue = "";

		// IdEstadoSoliPuestaProd
		$this->IdEstadoSoliPuestaProd->LinkCustomAttributes = "";
		$this->IdEstadoSoliPuestaProd->HrefValue = "";
		$this->IdEstadoSoliPuestaProd->TooltipValue = "";

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
				if ($this->IdPase->Exportable) $Doc->ExportCaption($this->IdPase);
				if ($this->Proyecto->Exportable) $Doc->ExportCaption($this->Proyecto);
				if ($this->idProydes->Exportable) $Doc->ExportCaption($this->idProydes);
				if ($this->IdSoliDesarrollo->Exportable) $Doc->ExportCaption($this->IdSoliDesarrollo);
				if ($this->CodHelpDesk->Exportable) $Doc->ExportCaption($this->CodHelpDesk);
				if ($this->IdRevisaSolicitud->Exportable) $Doc->ExportCaption($this->IdRevisaSolicitud);
				if ($this->id_tipopoa->Exportable) $Doc->ExportCaption($this->id_tipopoa);
				if ($this->Tipo->Exportable) $Doc->ExportCaption($this->Tipo);
				if ($this->idTipo2->Exportable) $Doc->ExportCaption($this->idTipo2);
				if ($this->Fecha->Exportable) $Doc->ExportCaption($this->Fecha);
				if ($this->fechapase_ss->Exportable) $Doc->ExportCaption($this->fechapase_ss);
				if ($this->FechaSolicitud->Exportable) $Doc->ExportCaption($this->FechaSolicitud);
				if ($this->FechaRequerida->Exportable) $Doc->ExportCaption($this->FechaRequerida);
				if ($this->FechaRequerimiento_log->Exportable) $Doc->ExportCaption($this->FechaRequerimiento_log);
				if ($this->FechaProgramacion->Exportable) $Doc->ExportCaption($this->FechaProgramacion);
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
				if ($this->FechaPuesta->Exportable) $Doc->ExportCaption($this->FechaPuesta);
				if ($this->FechaTermino->Exportable) $Doc->ExportCaption($this->FechaTermino);
				if ($this->FechaUltimoPase->Exportable) $Doc->ExportCaption($this->FechaUltimoPase);
				if ($this->FechaUltimaTareaDiaria->Exportable) $Doc->ExportCaption($this->FechaUltimaTareaDiaria);
				if ($this->Titulo->Exportable) $Doc->ExportCaption($this->Titulo);
				if ($this->idempresa->Exportable) $Doc->ExportCaption($this->idempresa);
				if ($this->IdArea->Exportable) $Doc->ExportCaption($this->IdArea);
				if ($this->CodServicio->Exportable) $Doc->ExportCaption($this->CodServicio);
				if ($this->idProceso->Exportable) $Doc->ExportCaption($this->idProceso);
				if ($this->idSubProceso->Exportable) $Doc->ExportCaption($this->idSubProceso);
				if ($this->IdMotivo->Exportable) $Doc->ExportCaption($this->IdMotivo);
				if ($this->Prioridad->Exportable) $Doc->ExportCaption($this->Prioridad);
				if ($this->TipoSolicitud->Exportable) $Doc->ExportCaption($this->TipoSolicitud);
				if ($this->CerrarRequerimiento->Exportable) $Doc->ExportCaption($this->CerrarRequerimiento);
				if ($this->empresa_costo->Exportable) $Doc->ExportCaption($this->empresa_costo);
				if ($this->horasdesarrollo->Exportable) $Doc->ExportCaption($this->horasdesarrollo);
				if ($this->horasdesarrollo_ss->Exportable) $Doc->ExportCaption($this->horasdesarrollo_ss);
				if ($this->CodUsuarioLider->Exportable) $Doc->ExportCaption($this->CodUsuarioLider);
				if ($this->IdGerenteSolicitante->Exportable) $Doc->ExportCaption($this->IdGerenteSolicitante);
				if ($this->CodUsuario->Exportable) $Doc->ExportCaption($this->CodUsuario);
				if ($this->IdJefeProyecto->Exportable) $Doc->ExportCaption($this->IdJefeProyecto);
				if ($this->idproveedor->Exportable) $Doc->ExportCaption($this->idproveedor);
				if ($this->idanalista_ss->Exportable) $Doc->ExportCaption($this->idanalista_ss);
				if ($this->idjefeproy_ss->Exportable) $Doc->ExportCaption($this->idjefeproy_ss);
				if ($this->Descripcion->Exportable) $Doc->ExportCaption($this->Descripcion);
				if ($this->Instrucciones->Exportable) $Doc->ExportCaption($this->Instrucciones);
				if ($this->ArchAdjuntos->Exportable) $Doc->ExportCaption($this->ArchAdjuntos);
				if ($this->querys->Exportable) $Doc->ExportCaption($this->querys);
				if ($this->Adjuntos->Exportable) $Doc->ExportCaption($this->Adjuntos);
				if ($this->stores->Exportable) $Doc->ExportCaption($this->stores);
				if ($this->ejecutables->Exportable) $Doc->ExportCaption($this->ejecutables);
				if ($this->SolicitudDesarrollo->Exportable) $Doc->ExportCaption($this->SolicitudDesarrollo);
				if ($this->doc_especifuncionales->Exportable) $Doc->ExportCaption($this->doc_especifuncionales);
				if ($this->PlanPruebas->Exportable) $Doc->ExportCaption($this->PlanPruebas);
				if ($this->DiagramaER->Exportable) $Doc->ExportCaption($this->DiagramaER);
				if ($this->ManualUsuario->Exportable) $Doc->ExportCaption($this->ManualUsuario);
				if ($this->DiagramaProcesos->Exportable) $Doc->ExportCaption($this->DiagramaProcesos);
				if ($this->DiccionarioDatos->Exportable) $Doc->ExportCaption($this->DiccionarioDatos);
				if ($this->tittuReque->Exportable) $Doc->ExportCaption($this->tittuReque);
				if ($this->desreque->Exportable) $Doc->ExportCaption($this->desreque);
				if ($this->Beneficios->Exportable) $Doc->ExportCaption($this->Beneficios);
				if ($this->Objetivo->Exportable) $Doc->ExportCaption($this->Objetivo);
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
				if ($this->Roles->Exportable) $Doc->ExportCaption($this->Roles);
				if ($this->fecha_asigna_qa->Exportable) $Doc->ExportCaption($this->fecha_asigna_qa);
				if ($this->id_qa->Exportable) $Doc->ExportCaption($this->id_qa);
				if ($this->observaciones_qa->Exportable) $Doc->ExportCaption($this->observaciones_qa);
				if ($this->IdEstadoSoliPuestaProd->Exportable) $Doc->ExportCaption($this->IdEstadoSoliPuestaProd);
				if ($this->cant_dias_analisis->Exportable) $Doc->ExportCaption($this->cant_dias_analisis);
				if ($this->cant_dias_desarrollo->Exportable) $Doc->ExportCaption($this->cant_dias_desarrollo);
				if ($this->cant_dias_pruebas->Exportable) $Doc->ExportCaption($this->cant_dias_pruebas);
				if ($this->cant_dias_qa->Exportable) $Doc->ExportCaption($this->cant_dias_qa);
				if ($this->cant_dias_prueba_user->Exportable) $Doc->ExportCaption($this->cant_dias_prueba_user);
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
				if ($this->dias_analisis_td->Exportable) $Doc->ExportCaption($this->dias_analisis_td);
				if ($this->dias_desarrollo_td->Exportable) $Doc->ExportCaption($this->dias_desarrollo_td);
				if ($this->dias_pruebas_td->Exportable) $Doc->ExportCaption($this->dias_pruebas_td);
				if ($this->dias_qa_td->Exportable) $Doc->ExportCaption($this->dias_qa_td);
				if ($this->ObsGestion->Exportable) $Doc->ExportCaption($this->ObsGestion);
				if ($this->ObsTareasDiairias->Exportable) $Doc->ExportCaption($this->ObsTareasDiairias);
				if ($this->Duracion->Exportable) $Doc->ExportCaption($this->Duracion);
				if ($this->PorcCompletado->Exportable) $Doc->ExportCaption($this->PorcCompletado);
				if ($this->PorcProyectado->Exportable) $Doc->ExportCaption($this->PorcProyectado);
				if ($this->PorcDiferencia->Exportable) $Doc->ExportCaption($this->PorcDiferencia);
			} else {
				if ($this->IdPase->Exportable) $Doc->ExportCaption($this->IdPase);
				if ($this->Proyecto->Exportable) $Doc->ExportCaption($this->Proyecto);
				if ($this->idProydes->Exportable) $Doc->ExportCaption($this->idProydes);
				if ($this->IdSoliDesarrollo->Exportable) $Doc->ExportCaption($this->IdSoliDesarrollo);
				if ($this->CodHelpDesk->Exportable) $Doc->ExportCaption($this->CodHelpDesk);
				if ($this->IdRevisaSolicitud->Exportable) $Doc->ExportCaption($this->IdRevisaSolicitud);
				if ($this->id_tipopoa->Exportable) $Doc->ExportCaption($this->id_tipopoa);
				if ($this->Tipo->Exportable) $Doc->ExportCaption($this->Tipo);
				if ($this->idTipo2->Exportable) $Doc->ExportCaption($this->idTipo2);
				if ($this->Fecha->Exportable) $Doc->ExportCaption($this->Fecha);
				if ($this->fechapase_ss->Exportable) $Doc->ExportCaption($this->fechapase_ss);
				if ($this->FechaSolicitud->Exportable) $Doc->ExportCaption($this->FechaSolicitud);
				if ($this->FechaRequerida->Exportable) $Doc->ExportCaption($this->FechaRequerida);
				if ($this->FechaRequerimiento_log->Exportable) $Doc->ExportCaption($this->FechaRequerimiento_log);
				if ($this->FechaProgramacion->Exportable) $Doc->ExportCaption($this->FechaProgramacion);
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
				if ($this->FechaPuesta->Exportable) $Doc->ExportCaption($this->FechaPuesta);
				if ($this->FechaTermino->Exportable) $Doc->ExportCaption($this->FechaTermino);
				if ($this->FechaUltimoPase->Exportable) $Doc->ExportCaption($this->FechaUltimoPase);
				if ($this->FechaUltimaTareaDiaria->Exportable) $Doc->ExportCaption($this->FechaUltimaTareaDiaria);
				if ($this->Titulo->Exportable) $Doc->ExportCaption($this->Titulo);
				if ($this->idempresa->Exportable) $Doc->ExportCaption($this->idempresa);
				if ($this->IdArea->Exportable) $Doc->ExportCaption($this->IdArea);
				if ($this->CodServicio->Exportable) $Doc->ExportCaption($this->CodServicio);
				if ($this->idProceso->Exportable) $Doc->ExportCaption($this->idProceso);
				if ($this->IdMotivo->Exportable) $Doc->ExportCaption($this->IdMotivo);
				if ($this->CerrarRequerimiento->Exportable) $Doc->ExportCaption($this->CerrarRequerimiento);
				if ($this->empresa_costo->Exportable) $Doc->ExportCaption($this->empresa_costo);
				if ($this->horasdesarrollo->Exportable) $Doc->ExportCaption($this->horasdesarrollo);
				if ($this->horasdesarrollo_ss->Exportable) $Doc->ExportCaption($this->horasdesarrollo_ss);
				if ($this->CodUsuarioLider->Exportable) $Doc->ExportCaption($this->CodUsuarioLider);
				if ($this->CodUsuario->Exportable) $Doc->ExportCaption($this->CodUsuario);
				if ($this->IdJefeProyecto->Exportable) $Doc->ExportCaption($this->IdJefeProyecto);
				if ($this->idproveedor->Exportable) $Doc->ExportCaption($this->idproveedor);
				if ($this->idanalista_ss->Exportable) $Doc->ExportCaption($this->idanalista_ss);
				if ($this->idjefeproy_ss->Exportable) $Doc->ExportCaption($this->idjefeproy_ss);
				if ($this->Impacto->Exportable) $Doc->ExportCaption($this->Impacto);
				if ($this->Participacion->Exportable) $Doc->ExportCaption($this->Participacion);
				if ($this->fecha_asigna_qa->Exportable) $Doc->ExportCaption($this->fecha_asigna_qa);
				if ($this->id_qa->Exportable) $Doc->ExportCaption($this->id_qa);
				if ($this->IdEstadoSoliPuestaProd->Exportable) $Doc->ExportCaption($this->IdEstadoSoliPuestaProd);
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
					if ($this->IdPase->Exportable) $Doc->ExportField($this->IdPase);
					if ($this->Proyecto->Exportable) $Doc->ExportField($this->Proyecto);
					if ($this->idProydes->Exportable) $Doc->ExportField($this->idProydes);
					if ($this->IdSoliDesarrollo->Exportable) $Doc->ExportField($this->IdSoliDesarrollo);
					if ($this->CodHelpDesk->Exportable) $Doc->ExportField($this->CodHelpDesk);
					if ($this->IdRevisaSolicitud->Exportable) $Doc->ExportField($this->IdRevisaSolicitud);
					if ($this->id_tipopoa->Exportable) $Doc->ExportField($this->id_tipopoa);
					if ($this->Tipo->Exportable) $Doc->ExportField($this->Tipo);
					if ($this->idTipo2->Exportable) $Doc->ExportField($this->idTipo2);
					if ($this->Fecha->Exportable) $Doc->ExportField($this->Fecha);
					if ($this->fechapase_ss->Exportable) $Doc->ExportField($this->fechapase_ss);
					if ($this->FechaSolicitud->Exportable) $Doc->ExportField($this->FechaSolicitud);
					if ($this->FechaRequerida->Exportable) $Doc->ExportField($this->FechaRequerida);
					if ($this->FechaRequerimiento_log->Exportable) $Doc->ExportField($this->FechaRequerimiento_log);
					if ($this->FechaProgramacion->Exportable) $Doc->ExportField($this->FechaProgramacion);
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
					if ($this->FechaPuesta->Exportable) $Doc->ExportField($this->FechaPuesta);
					if ($this->FechaTermino->Exportable) $Doc->ExportField($this->FechaTermino);
					if ($this->FechaUltimoPase->Exportable) $Doc->ExportField($this->FechaUltimoPase);
					if ($this->FechaUltimaTareaDiaria->Exportable) $Doc->ExportField($this->FechaUltimaTareaDiaria);
					if ($this->Titulo->Exportable) $Doc->ExportField($this->Titulo);
					if ($this->idempresa->Exportable) $Doc->ExportField($this->idempresa);
					if ($this->IdArea->Exportable) $Doc->ExportField($this->IdArea);
					if ($this->CodServicio->Exportable) $Doc->ExportField($this->CodServicio);
					if ($this->idProceso->Exportable) $Doc->ExportField($this->idProceso);
					if ($this->idSubProceso->Exportable) $Doc->ExportField($this->idSubProceso);
					if ($this->IdMotivo->Exportable) $Doc->ExportField($this->IdMotivo);
					if ($this->Prioridad->Exportable) $Doc->ExportField($this->Prioridad);
					if ($this->TipoSolicitud->Exportable) $Doc->ExportField($this->TipoSolicitud);
					if ($this->CerrarRequerimiento->Exportable) $Doc->ExportField($this->CerrarRequerimiento);
					if ($this->empresa_costo->Exportable) $Doc->ExportField($this->empresa_costo);
					if ($this->horasdesarrollo->Exportable) $Doc->ExportField($this->horasdesarrollo);
					if ($this->horasdesarrollo_ss->Exportable) $Doc->ExportField($this->horasdesarrollo_ss);
					if ($this->CodUsuarioLider->Exportable) $Doc->ExportField($this->CodUsuarioLider);
					if ($this->IdGerenteSolicitante->Exportable) $Doc->ExportField($this->IdGerenteSolicitante);
					if ($this->CodUsuario->Exportable) $Doc->ExportField($this->CodUsuario);
					if ($this->IdJefeProyecto->Exportable) $Doc->ExportField($this->IdJefeProyecto);
					if ($this->idproveedor->Exportable) $Doc->ExportField($this->idproveedor);
					if ($this->idanalista_ss->Exportable) $Doc->ExportField($this->idanalista_ss);
					if ($this->idjefeproy_ss->Exportable) $Doc->ExportField($this->idjefeproy_ss);
					if ($this->Descripcion->Exportable) $Doc->ExportField($this->Descripcion);
					if ($this->Instrucciones->Exportable) $Doc->ExportField($this->Instrucciones);
					if ($this->ArchAdjuntos->Exportable) $Doc->ExportField($this->ArchAdjuntos);
					if ($this->querys->Exportable) $Doc->ExportField($this->querys);
					if ($this->Adjuntos->Exportable) $Doc->ExportField($this->Adjuntos);
					if ($this->stores->Exportable) $Doc->ExportField($this->stores);
					if ($this->ejecutables->Exportable) $Doc->ExportField($this->ejecutables);
					if ($this->SolicitudDesarrollo->Exportable) $Doc->ExportField($this->SolicitudDesarrollo);
					if ($this->doc_especifuncionales->Exportable) $Doc->ExportField($this->doc_especifuncionales);
					if ($this->PlanPruebas->Exportable) $Doc->ExportField($this->PlanPruebas);
					if ($this->DiagramaER->Exportable) $Doc->ExportField($this->DiagramaER);
					if ($this->ManualUsuario->Exportable) $Doc->ExportField($this->ManualUsuario);
					if ($this->DiagramaProcesos->Exportable) $Doc->ExportField($this->DiagramaProcesos);
					if ($this->DiccionarioDatos->Exportable) $Doc->ExportField($this->DiccionarioDatos);
					if ($this->tittuReque->Exportable) $Doc->ExportField($this->tittuReque);
					if ($this->desreque->Exportable) $Doc->ExportField($this->desreque);
					if ($this->Beneficios->Exportable) $Doc->ExportField($this->Beneficios);
					if ($this->Objetivo->Exportable) $Doc->ExportField($this->Objetivo);
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
					if ($this->Roles->Exportable) $Doc->ExportField($this->Roles);
					if ($this->fecha_asigna_qa->Exportable) $Doc->ExportField($this->fecha_asigna_qa);
					if ($this->id_qa->Exportable) $Doc->ExportField($this->id_qa);
					if ($this->observaciones_qa->Exportable) $Doc->ExportField($this->observaciones_qa);
					if ($this->IdEstadoSoliPuestaProd->Exportable) $Doc->ExportField($this->IdEstadoSoliPuestaProd);
					if ($this->cant_dias_analisis->Exportable) $Doc->ExportField($this->cant_dias_analisis);
					if ($this->cant_dias_desarrollo->Exportable) $Doc->ExportField($this->cant_dias_desarrollo);
					if ($this->cant_dias_pruebas->Exportable) $Doc->ExportField($this->cant_dias_pruebas);
					if ($this->cant_dias_qa->Exportable) $Doc->ExportField($this->cant_dias_qa);
					if ($this->cant_dias_prueba_user->Exportable) $Doc->ExportField($this->cant_dias_prueba_user);
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
					if ($this->dias_analisis_td->Exportable) $Doc->ExportField($this->dias_analisis_td);
					if ($this->dias_desarrollo_td->Exportable) $Doc->ExportField($this->dias_desarrollo_td);
					if ($this->dias_pruebas_td->Exportable) $Doc->ExportField($this->dias_pruebas_td);
					if ($this->dias_qa_td->Exportable) $Doc->ExportField($this->dias_qa_td);
					if ($this->ObsGestion->Exportable) $Doc->ExportField($this->ObsGestion);
					if ($this->ObsTareasDiairias->Exportable) $Doc->ExportField($this->ObsTareasDiairias);
					if ($this->Duracion->Exportable) $Doc->ExportField($this->Duracion);
					if ($this->PorcCompletado->Exportable) $Doc->ExportField($this->PorcCompletado);
					if ($this->PorcProyectado->Exportable) $Doc->ExportField($this->PorcProyectado);
					if ($this->PorcDiferencia->Exportable) $Doc->ExportField($this->PorcDiferencia);
				} else {
					if ($this->IdPase->Exportable) $Doc->ExportField($this->IdPase);
					if ($this->Proyecto->Exportable) $Doc->ExportField($this->Proyecto);
					if ($this->idProydes->Exportable) $Doc->ExportField($this->idProydes);
					if ($this->IdSoliDesarrollo->Exportable) $Doc->ExportField($this->IdSoliDesarrollo);
					if ($this->CodHelpDesk->Exportable) $Doc->ExportField($this->CodHelpDesk);
					if ($this->IdRevisaSolicitud->Exportable) $Doc->ExportField($this->IdRevisaSolicitud);
					if ($this->id_tipopoa->Exportable) $Doc->ExportField($this->id_tipopoa);
					if ($this->Tipo->Exportable) $Doc->ExportField($this->Tipo);
					if ($this->idTipo2->Exportable) $Doc->ExportField($this->idTipo2);
					if ($this->Fecha->Exportable) $Doc->ExportField($this->Fecha);
					if ($this->fechapase_ss->Exportable) $Doc->ExportField($this->fechapase_ss);
					if ($this->FechaSolicitud->Exportable) $Doc->ExportField($this->FechaSolicitud);
					if ($this->FechaRequerida->Exportable) $Doc->ExportField($this->FechaRequerida);
					if ($this->FechaRequerimiento_log->Exportable) $Doc->ExportField($this->FechaRequerimiento_log);
					if ($this->FechaProgramacion->Exportable) $Doc->ExportField($this->FechaProgramacion);
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
					if ($this->FechaPuesta->Exportable) $Doc->ExportField($this->FechaPuesta);
					if ($this->FechaTermino->Exportable) $Doc->ExportField($this->FechaTermino);
					if ($this->FechaUltimoPase->Exportable) $Doc->ExportField($this->FechaUltimoPase);
					if ($this->FechaUltimaTareaDiaria->Exportable) $Doc->ExportField($this->FechaUltimaTareaDiaria);
					if ($this->Titulo->Exportable) $Doc->ExportField($this->Titulo);
					if ($this->idempresa->Exportable) $Doc->ExportField($this->idempresa);
					if ($this->IdArea->Exportable) $Doc->ExportField($this->IdArea);
					if ($this->CodServicio->Exportable) $Doc->ExportField($this->CodServicio);
					if ($this->idProceso->Exportable) $Doc->ExportField($this->idProceso);
					if ($this->IdMotivo->Exportable) $Doc->ExportField($this->IdMotivo);
					if ($this->CerrarRequerimiento->Exportable) $Doc->ExportField($this->CerrarRequerimiento);
					if ($this->empresa_costo->Exportable) $Doc->ExportField($this->empresa_costo);
					if ($this->horasdesarrollo->Exportable) $Doc->ExportField($this->horasdesarrollo);
					if ($this->horasdesarrollo_ss->Exportable) $Doc->ExportField($this->horasdesarrollo_ss);
					if ($this->CodUsuarioLider->Exportable) $Doc->ExportField($this->CodUsuarioLider);
					if ($this->CodUsuario->Exportable) $Doc->ExportField($this->CodUsuario);
					if ($this->IdJefeProyecto->Exportable) $Doc->ExportField($this->IdJefeProyecto);
					if ($this->idproveedor->Exportable) $Doc->ExportField($this->idproveedor);
					if ($this->idanalista_ss->Exportable) $Doc->ExportField($this->idanalista_ss);
					if ($this->idjefeproy_ss->Exportable) $Doc->ExportField($this->idjefeproy_ss);
					if ($this->Impacto->Exportable) $Doc->ExportField($this->Impacto);
					if ($this->Participacion->Exportable) $Doc->ExportField($this->Participacion);
					if ($this->fecha_asigna_qa->Exportable) $Doc->ExportField($this->fecha_asigna_qa);
					if ($this->id_qa->Exportable) $Doc->ExportField($this->id_qa);
					if ($this->IdEstadoSoliPuestaProd->Exportable) $Doc->ExportField($this->IdEstadoSoliPuestaProd);
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
		global $conn;  
		$cadena="select idempresa from pp_usuarios where idusuario= '". CurrentUserID() ."'";
		$rslmo = $conn->Execute($cadena);
		$cod_empresa= $rslmo->fields('idempresa');            

		//si el usuario no pertenece a la financiera entonces 
		//no se debe mostrar datos de la financiera

		if($cod_empresa<>2 and CurrentUserLevel()<>-1 and CurrentUserLevel() <>20)          
		{       
		   ew_AddFilter($filter, "(idempresa <>2)"); // Add your own filter expression        
		}
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
	global $conn;            
	$cadenasql="call pp_pa_soli_pase_prod('". $rsnew['IdPase'] ."')";
	$rslmo2 = $conn->Execute($cadenasql);
	}                 

	// Row Updating event
	function Row_Updating($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

	if ( (CurrentUserLevel()==1 or CurrentUserLevel()==2 or CurrentUserLevel()==8 or CurrentUserLevel()==15) 
			and ($rsold['IdEstadoSoliPuestaProd'] <> 1 and $rsold['IdEstadoSoliPuestaProd'] <> 8 and $rsold['IdEstadoSoliPuestaProd'] <> 11 ) )
	{    
		$this->CancelMessage  = "No puedes actualizar el pase ";
		$this->CancelMessage .= "<br> porque no esta en estado BANDEJA o DEVUELTO";
		return FALSE;
	}
		return TRUE;
	}          

	// Row Updated event
	function Row_Updated($rsold, &$rsnew) {

		//echo "Row Updated";   
	global $conn;            
	$cadenasql="call pp_pa_soli_pase_prod('". $rsold['IdPase'] ."')";
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
