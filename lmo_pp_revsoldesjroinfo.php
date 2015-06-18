<?php

// Global variable for table object
$pp_revsoldesjro = NULL;

//
// Table class for pp_revsoldesjro
//
class cpp_revsoldesjro extends cTable {
	var $IdRevSoliServicio;
	var $idSoliServicio;
	var $fecha;
	var $NivelEvaluador;
	var $Evaluador;
	var $obligaro;
	var $Resultado;
	var $idMotResul;
	var $Observaciones;
	var $Impacto;
	var $Participacion;
	var $Justificativa;
	var $Recomendacion;
	var $fechaRevisaJRO;
	var $JefeRiesgoOperativo;

	//
	// Table class constructor
	//
	function __construct() {
		global $Language;

		// Language object
		if (!isset($Language)) $Language = new cLanguage();
		$this->TableVar = 'pp_revsoldesjro';
		$this->TableName = 'pp_revsoldesjro';
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

		// IdRevSoliServicio
		$this->IdRevSoliServicio = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_IdRevSoliServicio', 'IdRevSoliServicio', '`IdRevSoliServicio`', '`IdRevSoliServicio`', 19, -1, FALSE, '`IdRevSoliServicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdRevSoliServicio->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdRevSoliServicio'] = &$this->IdRevSoliServicio;

		// idSoliServicio
		$this->idSoliServicio = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_idSoliServicio', 'idSoliServicio', '`idSoliServicio`', '`idSoliServicio`', 19, -1, FALSE, '`idSoliServicio`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idSoliServicio->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idSoliServicio'] = &$this->idSoliServicio;

		// fecha
		$this->fecha = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_fecha', 'fecha', '`fecha`', 'DATE_FORMAT(`fecha`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fecha`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fecha->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fecha'] = &$this->fecha;

		// NivelEvaluador
		$this->NivelEvaluador = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_NivelEvaluador', 'NivelEvaluador', '`NivelEvaluador`', '`NivelEvaluador`', 16, -1, FALSE, '`NivelEvaluador`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->NivelEvaluador->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['NivelEvaluador'] = &$this->NivelEvaluador;

		// Evaluador
		$this->Evaluador = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_Evaluador', 'Evaluador', '`Evaluador`', '`Evaluador`', 2, -1, FALSE, '`Evaluador`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->Evaluador->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['Evaluador'] = &$this->Evaluador;

		// obligaro
		$this->obligaro = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_obligaro', 'obligaro', '`obligaro`', '`obligaro`', 202, -1, FALSE, '`obligaro`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->obligaro->FldDataType = EW_DATATYPE_BOOLEAN;
		$this->obligaro->TrueValue = 'Y';
		$this->obligaro->FalseValue = 'N';
		$this->fields['obligaro'] = &$this->obligaro;

		// Resultado
		$this->Resultado = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_Resultado', 'Resultado', '`Resultado`', '`Resultado`', 17, -1, FALSE, '`Resultado`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->Resultado->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['Resultado'] = &$this->Resultado;

		// idMotResul
		$this->idMotResul = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_idMotResul', 'idMotResul', '`idMotResul`', '`idMotResul`', 18, -1, FALSE, '`idMotResul`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idMotResul->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idMotResul'] = &$this->idMotResul;

		// Observaciones
		$this->Observaciones = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_Observaciones', 'Observaciones', '`Observaciones`', '`Observaciones`', 201, -1, FALSE, '`Observaciones`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Observaciones'] = &$this->Observaciones;

		// Impacto
		$this->Impacto = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_Impacto', 'Impacto', '`Impacto`', '`Impacto`', 202, -1, FALSE, '`Impacto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Impacto'] = &$this->Impacto;

		// Participacion
		$this->Participacion = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_Participacion', 'Participacion', '`Participacion`', '`Participacion`', 202, -1, FALSE, '`Participacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Participacion'] = &$this->Participacion;

		// Justificativa
		$this->Justificativa = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_Justificativa', 'Justificativa', '`Justificativa`', '`Justificativa`', 201, -1, FALSE, '`Justificativa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Justificativa'] = &$this->Justificativa;

		// Recomendacion
		$this->Recomendacion = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_Recomendacion', 'Recomendacion', '`Recomendacion`', '`Recomendacion`', 201, -1, FALSE, '`Recomendacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['Recomendacion'] = &$this->Recomendacion;

		// fechaRevisaJRO
		$this->fechaRevisaJRO = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_fechaRevisaJRO', 'fechaRevisaJRO', '`fechaRevisaJRO`', 'DATE_FORMAT(`fechaRevisaJRO`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fechaRevisaJRO`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fechaRevisaJRO->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fechaRevisaJRO'] = &$this->fechaRevisaJRO;

		// JefeRiesgoOperativo
		$this->JefeRiesgoOperativo = new cField('pp_revsoldesjro', 'pp_revsoldesjro', 'x_JefeRiesgoOperativo', 'JefeRiesgoOperativo', '`JefeRiesgoOperativo`', '`JefeRiesgoOperativo`', 2, -1, FALSE, '`JefeRiesgoOperativo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->JefeRiesgoOperativo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['JefeRiesgoOperativo'] = &$this->JefeRiesgoOperativo;
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
		if ($this->getCurrentMasterTable() == "pp_view_soldesarrollo") {
			if ($this->idSoliServicio->getSessionValue() <> "")
				$sMasterFilter .= "`IdSolDesarrollo`=" . ew_QuotedValue($this->idSoliServicio->getSessionValue(), EW_DATATYPE_NUMBER);
			else
				return "";
		}
		return $sMasterFilter;
	}

	// Session detail WHERE clause
	function GetDetailFilter() {

		// Detail filter
		$sDetailFilter = "";
		if ($this->getCurrentMasterTable() == "pp_view_soldesarrollo") {
			if ($this->idSoliServicio->getSessionValue() <> "")
				$sDetailFilter .= "`idSoliServicio`=" . ew_QuotedValue($this->idSoliServicio->getSessionValue(), EW_DATATYPE_NUMBER);
			else
				return "";
		}
		return $sDetailFilter;
	}

	// Master filter
	function SqlMasterFilter_pp_view_soldesarrollo() {
		return "`IdSolDesarrollo`=@IdSolDesarrollo@";
	}

	// Detail filter
	function SqlDetailFilter_pp_view_soldesarrollo() {
		return "`idSoliServicio`=@idSoliServicio@";
	}

	// Table level SQL
	function SqlFrom() { // From
		return "`pp_revsoldesjro`";
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
	//lmo var $UpdateTable = "`pp_revsoldesjro`";
	var $UpdateTable = "`pp_revisionsoliservicio`";

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
			if (array_key_exists('IdRevSoliServicio', $rs))
				ew_AddFilter($where, ew_QuotedName('IdRevSoliServicio') . '=' . ew_QuotedValue($rs['IdRevSoliServicio'], $this->IdRevSoliServicio->FldDataType));
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
		return "`IdRevSoliServicio` = @IdRevSoliServicio@";
	}

	// Key filter
	function KeyFilter() {
		$sKeyFilter = $this->SqlKeyFilter();
		if (!is_numeric($this->IdRevSoliServicio->CurrentValue))
			$sKeyFilter = "0=1"; // Invalid key
		$sKeyFilter = str_replace("@IdRevSoliServicio@", ew_AdjustSql($this->IdRevSoliServicio->CurrentValue), $sKeyFilter); // Replace key value
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
			return "lmo_pp_revsoldesjrolist.php";
		}
	}

	function setReturnUrl($v) {
		$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_RETURN_URL] = $v;
	}

	// List URL
	function GetListUrl() {
		return "lmo_pp_revsoldesjrolist.php";
	}

	// View URL
	function GetViewUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_revsoldesjroview.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_revsoldesjroview.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Add URL
	function GetAddUrl() {
		return "lmo_pp_revsoldesjroadd.php";
	}

	// Edit URL
	function GetEditUrl($parm = "") {
		return $this->KeyUrl("lmo_pp_revsoldesjroedit.php", $this->UrlParm($parm));
	}

	// Inline edit URL
	function GetInlineEditUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=edit"));
	}

	// Copy URL
	function GetCopyUrl($parm = "") {
		return $this->KeyUrl("lmo_pp_revsoldesjroadd.php", $this->UrlParm($parm));
	}

	// Inline copy URL
	function GetInlineCopyUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=copy"));
	}

	// Delete URL
	function GetDeleteUrl() {
		return $this->KeyUrl("lmo_pp_revsoldesjrodelete.php", $this->UrlParm());
	}

	// Add key value to URL
	function KeyUrl($url, $parm = "") {
		$sUrl = $url . "?";
		if ($parm <> "") $sUrl .= $parm . "&";
		if (!is_null($this->IdRevSoliServicio->CurrentValue)) {
			$sUrl .= "IdRevSoliServicio=" . urlencode($this->IdRevSoliServicio->CurrentValue);
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
			$arKeys[] = @$_GET["IdRevSoliServicio"]; // IdRevSoliServicio

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
			$this->IdRevSoliServicio->CurrentValue = $key;
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
		$this->IdRevSoliServicio->setDbValue($rs->fields('IdRevSoliServicio'));
		$this->idSoliServicio->setDbValue($rs->fields('idSoliServicio'));
		$this->fecha->setDbValue($rs->fields('fecha'));
		$this->NivelEvaluador->setDbValue($rs->fields('NivelEvaluador'));
		$this->Evaluador->setDbValue($rs->fields('Evaluador'));
		$this->obligaro->setDbValue($rs->fields('obligaro'));
		$this->Resultado->setDbValue($rs->fields('Resultado'));
		$this->idMotResul->setDbValue($rs->fields('idMotResul'));
		$this->Observaciones->setDbValue($rs->fields('Observaciones'));
		$this->Impacto->setDbValue($rs->fields('Impacto'));
		$this->Participacion->setDbValue($rs->fields('Participacion'));
		$this->Justificativa->setDbValue($rs->fields('Justificativa'));
		$this->Recomendacion->setDbValue($rs->fields('Recomendacion'));
		$this->fechaRevisaJRO->setDbValue($rs->fields('fechaRevisaJRO'));
		$this->JefeRiesgoOperativo->setDbValue($rs->fields('JefeRiesgoOperativo'));
	}

	// Render list row values
	function RenderListRow() {
		global $conn, $Security, $gsLanguage;

		// Call Row Rendering event
		$this->Row_Rendering();

   // Common render codes
		// IdRevSoliServicio
		// idSoliServicio
		// fecha
		// NivelEvaluador
		// Evaluador
		// obligaro
		// Resultado
		// idMotResul
		// Observaciones
		// Impacto
		// Participacion
		// Justificativa
		// Recomendacion
		// fechaRevisaJRO
		// JefeRiesgoOperativo
		// IdRevSoliServicio

		$this->IdRevSoliServicio->ViewValue = $this->IdRevSoliServicio->CurrentValue;
		$this->IdRevSoliServicio->ViewCustomAttributes = "";

		// idSoliServicio
		$this->idSoliServicio->ViewValue = $this->idSoliServicio->CurrentValue;
		$this->idSoliServicio->ViewValue = strtolower($this->idSoliServicio->ViewValue);
		$this->idSoliServicio->ViewCustomAttributes = "";

		// fecha
		$this->fecha->ViewValue = $this->fecha->CurrentValue;
		$this->fecha->ViewValue = ew_FormatDateTime($this->fecha->ViewValue, 11);
		$this->fecha->ViewCustomAttributes = "";

		// NivelEvaluador
		if (strval($this->NivelEvaluador->CurrentValue) <> "") {
			$sFilterWrk = "`UserLevelID`" . ew_SearchString("=", $this->NivelEvaluador->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `UserLevelID`, `UserLevelName` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `userlevels`";
		$sWhereWrk = "";
		$lookuptblfilter = "`UserLevelID` in (-1, 2, 8, 9, 15,17)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->NivelEvaluador, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->NivelEvaluador->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->NivelEvaluador->ViewValue = $this->NivelEvaluador->CurrentValue;
			}
		} else {
			$this->NivelEvaluador->ViewValue = NULL;
		}
		$this->NivelEvaluador->ViewValue = strtoupper($this->NivelEvaluador->ViewValue);
		$this->NivelEvaluador->ViewCustomAttributes = "";

		// Evaluador
		if (strval($this->Evaluador->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->Evaluador->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `Nombre` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->Evaluador, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->Evaluador->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->Evaluador->ViewValue = $this->Evaluador->CurrentValue;
			}
		} else {
			$this->Evaluador->ViewValue = NULL;
		}
		$this->Evaluador->ViewValue = strtoupper($this->Evaluador->ViewValue);
		$this->Evaluador->ViewCustomAttributes = "";

		// obligaro
		if (ew_ConvertToBool($this->obligaro->CurrentValue)) {
			$this->obligaro->ViewValue = $this->obligaro->FldTagCaption(1) <> "" ? $this->obligaro->FldTagCaption(1) : "Y";
		} else {
			$this->obligaro->ViewValue = $this->obligaro->FldTagCaption(2) <> "" ? $this->obligaro->FldTagCaption(2) : "N";
		}
		$this->obligaro->ViewCustomAttributes = "";

		// Resultado
		if (strval($this->Resultado->CurrentValue) <> "") {
			$sFilterWrk = "`IdestSoliDesarrollo`" . ew_SearchString("=", $this->Resultado->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT DISTINCT `IdestSoliDesarrollo`, `estado` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_estsolidesarrollo`";
		$sWhereWrk = "";
		$lookuptblfilter = "`IdestSoliDesarrollo` in (3,4,5,6)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->Resultado, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->Resultado->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->Resultado->ViewValue = $this->Resultado->CurrentValue;
			}
		} else {
			$this->Resultado->ViewValue = NULL;
		}
		$this->Resultado->ViewValue = strtoupper($this->Resultado->ViewValue);
		$this->Resultado->ViewCustomAttributes = "";

		// idMotResul
		if (strval($this->idMotResul->CurrentValue) <> "") {
			$sFilterWrk = "`Idmotivoevaluasol`" . ew_SearchString("=", $this->idMotResul->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `Idmotivoevaluasol`, `motivo` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_motivoevaluasolicitud`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idNivel`=9";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idMotResul, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `motivo` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idMotResul->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idMotResul->ViewValue = $this->idMotResul->CurrentValue;
			}
		} else {
			$this->idMotResul->ViewValue = NULL;
		}
		$this->idMotResul->ViewValue = strtolower($this->idMotResul->ViewValue);
		$this->idMotResul->ViewCustomAttributes = "";

		// Observaciones
		$this->Observaciones->ViewValue = $this->Observaciones->CurrentValue;
		$this->Observaciones->ViewCustomAttributes = "";

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
		$this->Impacto->ViewValue = strtoupper($this->Impacto->ViewValue);
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
		$this->Participacion->ViewValue = strtoupper($this->Participacion->ViewValue);
		$this->Participacion->ViewCustomAttributes = "";

		// Justificativa
		$this->Justificativa->ViewValue = $this->Justificativa->CurrentValue;
		$this->Justificativa->ViewCustomAttributes = "";

		// Recomendacion
		$this->Recomendacion->ViewValue = $this->Recomendacion->CurrentValue;
		$this->Recomendacion->ViewCustomAttributes = "";

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

		// IdRevSoliServicio
		$this->IdRevSoliServicio->LinkCustomAttributes = "";
		$this->IdRevSoliServicio->HrefValue = "";
		$this->IdRevSoliServicio->TooltipValue = "";

		// idSoliServicio
		$this->idSoliServicio->LinkCustomAttributes = "";
		$this->idSoliServicio->HrefValue = "";
		$this->idSoliServicio->TooltipValue = "";

		// fecha
		$this->fecha->LinkCustomAttributes = "";
		$this->fecha->HrefValue = "";
		$this->fecha->TooltipValue = "";

		// NivelEvaluador
		$this->NivelEvaluador->LinkCustomAttributes = "";
		$this->NivelEvaluador->HrefValue = "";
		$this->NivelEvaluador->TooltipValue = "";

		// Evaluador
		$this->Evaluador->LinkCustomAttributes = "";
		$this->Evaluador->HrefValue = "";
		$this->Evaluador->TooltipValue = "";

		// obligaro
		$this->obligaro->LinkCustomAttributes = "";
		$this->obligaro->HrefValue = "";
		$this->obligaro->TooltipValue = "";

		// Resultado
		$this->Resultado->LinkCustomAttributes = "";
		$this->Resultado->HrefValue = "";
		$this->Resultado->TooltipValue = "";

		// idMotResul
		$this->idMotResul->LinkCustomAttributes = "";
		$this->idMotResul->HrefValue = "";
		$this->idMotResul->TooltipValue = "";

		// Observaciones
		$this->Observaciones->LinkCustomAttributes = "";
		$this->Observaciones->HrefValue = "";
		$this->Observaciones->TooltipValue = "";

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

		// fechaRevisaJRO
		$this->fechaRevisaJRO->LinkCustomAttributes = "";
		$this->fechaRevisaJRO->HrefValue = "";
		$this->fechaRevisaJRO->TooltipValue = "";

		// JefeRiesgoOperativo
		$this->JefeRiesgoOperativo->LinkCustomAttributes = "";
		$this->JefeRiesgoOperativo->HrefValue = "";
		$this->JefeRiesgoOperativo->TooltipValue = "";

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
				if ($this->IdRevSoliServicio->Exportable) $Doc->ExportCaption($this->IdRevSoliServicio);
				if ($this->idSoliServicio->Exportable) $Doc->ExportCaption($this->idSoliServicio);
				if ($this->fecha->Exportable) $Doc->ExportCaption($this->fecha);
				if ($this->NivelEvaluador->Exportable) $Doc->ExportCaption($this->NivelEvaluador);
				if ($this->Evaluador->Exportable) $Doc->ExportCaption($this->Evaluador);
				if ($this->obligaro->Exportable) $Doc->ExportCaption($this->obligaro);
				if ($this->Resultado->Exportable) $Doc->ExportCaption($this->Resultado);
				if ($this->idMotResul->Exportable) $Doc->ExportCaption($this->idMotResul);
				if ($this->Observaciones->Exportable) $Doc->ExportCaption($this->Observaciones);
				if ($this->Impacto->Exportable) $Doc->ExportCaption($this->Impacto);
				if ($this->Participacion->Exportable) $Doc->ExportCaption($this->Participacion);
				if ($this->Justificativa->Exportable) $Doc->ExportCaption($this->Justificativa);
				if ($this->Recomendacion->Exportable) $Doc->ExportCaption($this->Recomendacion);
				if ($this->fechaRevisaJRO->Exportable) $Doc->ExportCaption($this->fechaRevisaJRO);
				if ($this->JefeRiesgoOperativo->Exportable) $Doc->ExportCaption($this->JefeRiesgoOperativo);
			} else {
				if ($this->IdRevSoliServicio->Exportable) $Doc->ExportCaption($this->IdRevSoliServicio);
				if ($this->idSoliServicio->Exportable) $Doc->ExportCaption($this->idSoliServicio);
				if ($this->fecha->Exportable) $Doc->ExportCaption($this->fecha);
				if ($this->NivelEvaluador->Exportable) $Doc->ExportCaption($this->NivelEvaluador);
				if ($this->Evaluador->Exportable) $Doc->ExportCaption($this->Evaluador);
				if ($this->obligaro->Exportable) $Doc->ExportCaption($this->obligaro);
				if ($this->Resultado->Exportable) $Doc->ExportCaption($this->Resultado);
				if ($this->idMotResul->Exportable) $Doc->ExportCaption($this->idMotResul);
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
					if ($this->IdRevSoliServicio->Exportable) $Doc->ExportField($this->IdRevSoliServicio);
					if ($this->idSoliServicio->Exportable) $Doc->ExportField($this->idSoliServicio);
					if ($this->fecha->Exportable) $Doc->ExportField($this->fecha);
					if ($this->NivelEvaluador->Exportable) $Doc->ExportField($this->NivelEvaluador);
					if ($this->Evaluador->Exportable) $Doc->ExportField($this->Evaluador);
					if ($this->obligaro->Exportable) $Doc->ExportField($this->obligaro);
					if ($this->Resultado->Exportable) $Doc->ExportField($this->Resultado);
					if ($this->idMotResul->Exportable) $Doc->ExportField($this->idMotResul);
					if ($this->Observaciones->Exportable) $Doc->ExportField($this->Observaciones);
					if ($this->Impacto->Exportable) $Doc->ExportField($this->Impacto);
					if ($this->Participacion->Exportable) $Doc->ExportField($this->Participacion);
					if ($this->Justificativa->Exportable) $Doc->ExportField($this->Justificativa);
					if ($this->Recomendacion->Exportable) $Doc->ExportField($this->Recomendacion);
					if ($this->fechaRevisaJRO->Exportable) $Doc->ExportField($this->fechaRevisaJRO);
					if ($this->JefeRiesgoOperativo->Exportable) $Doc->ExportField($this->JefeRiesgoOperativo);
				} else {
					if ($this->IdRevSoliServicio->Exportable) $Doc->ExportField($this->IdRevSoliServicio);
					if ($this->idSoliServicio->Exportable) $Doc->ExportField($this->idSoliServicio);
					if ($this->fecha->Exportable) $Doc->ExportField($this->fecha);
					if ($this->NivelEvaluador->Exportable) $Doc->ExportField($this->NivelEvaluador);
					if ($this->Evaluador->Exportable) $Doc->ExportField($this->Evaluador);
					if ($this->obligaro->Exportable) $Doc->ExportField($this->obligaro);
					if ($this->Resultado->Exportable) $Doc->ExportField($this->Resultado);
					if ($this->idMotResul->Exportable) $Doc->ExportField($this->idMotResul);
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
	//actualizando el estado de la solicitud de servicio de desarrollo

	global $conn;

	//global $pp_revsoldesjro;
	$conn->raiseErrorFn = 'ew_ErrorFn';
	$cadena = "call pp_pa_revsoldesjro('". $rsnew['IdRevSoliServicio'] ."')";
	$AddRow = $conn->Execute($cadena);
	$conn->raiseErrorFn = '';          
	if ($AddRow) {  

		//$this->setSuccessMessage("Record Inserted. The ID of the new record is " . $rsnew["idRevision"]);    
	}
	else       
	{
		$this->setFailureMessage("No se inserto correctamente la revision." . $rsnew['IdRevSoliServicio']);
		$this->setFailureMessage("<br> Informar a QA.");            
	}          
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
	//actualizando el estado de la solicitud de servicio de desarrollo

	global $conn;

	//global $pp_revsoldesjro;
	$idrevsoliservicio = & $rsold['IdRevSoliServicio'];  

	//$Impacto = & $pp_revsoldesjro->Impacto->CurrentValue; 
	//$Justificativa = & mysql_real_escape_string($pp_revsoldesjro->Justificativa->CurrentValue); 
	//$Recomendacion = & mysql_real_escape_string($pp_revsoldesjro->Recomendacion->CurrentValue); 
	//$Participacion = & $pp_revsoldesjro->Participacion->CurrentValue;

	$cadena = "call pp_pa_revsoldesjro('". $idrevsoliservicio ."')";
	$AddRow = $conn->Execute($cadena);
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

		//var_dump($Email); 
		//var_dump($Args); 
		//exit();

		global $Page;
		global $conn;    
		if ($Page->PageID == "add") { // if Add page
		  if ($Args['rsnew']['Resultado']<>3) // si la solicitud no es aprobada
				{      
					$cadena="SELECT  pp_soldesarrollo.IdSolDesarrollo, liderusuario.Nombre AS usuariolider, liderusuario.Correo AS mailusuariolider, gerente.Nombre AS gerente, gerente.Correo AS mailgerente, pp_soldesarrollo.Titulo, evaluador.Nombre AS evalua, evaluador.Correo AS mailevalua, pp_estsolidesarrollo.estado, pp_motivoevaluasolicitud.motivo, pp_revisionsoliservicio.Observaciones FROM pp_soldesarrollo INNER JOIN pp_usuarios liderusuario ON liderusuario.idUsuario = pp_soldesarrollo.IdLiderUsuario INNER JOIN pp_usuarios gerente ON pp_soldesarrollo.IdGerenteSolicitante = gerente.idUsuario INNER JOIN pp_revisionsoliservicio ON pp_revisionsoliservicio.idSoliServicio = pp_soldesarrollo.IdSolDesarrollo INNER JOIN pp_usuarios evaluador ON evaluador.idUsuario = pp_revisionsoliservicio.Evaluador INNER JOIN pp_estsolidesarrollo ON pp_estsolidesarrollo.IdestSoliDesarrollo = pp_revisionsoliservicio.Resultado INNER JOIN pp_motivoevaluasolicitud ON pp_motivoevaluasolicitud.Idmotivoevaluasol = pp_revisionsoliservicio.idMotResul WHERE pp_revisionsoliservicio.IdRevSoliServicio = '". $Args['rsnew']['IdRevSoliServicio'] ."'";
					$rslmo2 = $conn->Execute($cadena);
					$codsoldes=$rslmo2->fields('IdSolDesarrollo');
					$usuariolider=$rslmo2->fields('usuariolider');
					$mailusuariolider=$rslmo2->fields('mailusuariolider');
					$gerente=$rslmo2->fields('gerente');
					$mailgerente=$rslmo2->fields('mailgerente');
					$Titulo=$rslmo2->fields('Titulo');
					$evalua=$rslmo2->fields('evalua');
					$mailevalua=$rslmo2->fields('mailevalua');
					$resulx= $rslmo2->fields('estado');
					$motivo=$rslmo2->fields('motivo');
					$Observaciones=$rslmo2->fields('Observaciones');
					$rslmo2->Close();
					$destinatario= $mailusuariolider . ";" . $mailgerente; 
					$cadena="SELECT Correo FROM pp_usuarios WHERE IdNivel IN (2, 8)";
					$rslmo2 = $conn->Execute($cadena);
					while (!$rslmo2->EOF) {
						$destinatario =  $destinatario . ";" . $rslmo2->fields('Correo');
						$rslmo2->MoveNext();
					}
					$rslmo2->Close();

						// Get key value
						$sFn = "txt/revsolriesgos.txt";
						$sSubject = "La Solicitud de desarrollo n° " . $Args['rsnew']['idSoliServicio'] . ", ha sido " . $resulx . " por Riesgos"; 
						$Email2 = new cEmail();
						$Email2->Load($sFn);
					$Email2->ReplaceSender(EW_SENDER_EMAIL); // Replace Sender
					$Email2->ReplaceRecipient($destinatario); // Replace Recipient
					$Email2->ReplaceSubject($sSubject); // Replace Subject
					$Email2->ReplaceContent("<!--Subject-->", $sSubject );
					$Email2->ReplaceContent("<!--key-->", $codsoldes);
					$Email2->ReplaceContent("<!--titulo-->", $Titulo);
					$Email2->ReplaceContent("<!--resultado-->", $resulx);
					$Email2->ReplaceContent("<!--motivo-->", $motivo);
					$Email2->ReplaceContent("<!--observa-->", $Observaciones);
							 $Email2->ReplaceContent("<!--usuario-->", $usuariolider);
					$Email2->ReplaceContent("<!--gerente-->", $gerente);
					$Email2->ReplaceContent("<!--evalua-->", $evalua);
								$Email2->Charset = EW_EMAIL_CHARSET;
								$bEmailSent = $Email2->Send();
		   } // FIN si la solicitud no es aprobada
				elseif ($Args['rsnew']['Resultado']==3)
				{

						//una vez dado el v°b° del jro enviar correo de nuevo requerimiento.
						$cadena="SELECT pp_proydes.IdProyDes, pp_proydes.Tipo, pp_servicio.Servicio, pp_proydes.Titulo, pp_usuarios.Nombre AS usuario, analista.Nombre AS analista, analista.Correo AS manalista, jefeproy.Nombre as jefeproy, jefeproy.Correo as mjefeproy, pp_proydes.FechaInicio, pp_proydes.FechaTerminoPropuesto FROM pp_proydes INNER JOIN pp_servicio ON pp_servicio.IdServicio = pp_proydes.IdSistema INNER JOIN pp_usuarios ON pp_usuarios.idUsuario = pp_proydes.IdLiderUsuario INNER JOIN pp_usuarios analista ON analista.idUsuario = pp_proydes.IdLiderTecnico INNER JOIN pp_usuarios jefeproy ON jefeproy.idUsuario = pp_proydes.IdJefeProyecto WHERE pp_proydes.IdSoliDesarrollo = '". $Args['rsnew']['idSoliServicio'] ."'";
						$rslmo2 = $conn->Execute($cadena);
						$sKey = $rslmo2->fields('IdProyDes');
						$tipo = $rslmo2->fields('Tipo');
						$servicio= $rslmo2->fields('Servicio');
						$titulox= $rslmo2->fields('Titulo');
						$solicitante= $rslmo2->fields('usuario');
						$nomAnalista= $rslmo2->fields('analista');
						$nomJefeProy= $rslmo2->fields('jefeproy');
						$finicio= $rslmo2->fields('FechaInicio');
						$fterpropu= $rslmo2->fields('FechaTerminoPropuesto');
						$destinatario= $rslmo2->fields('mjefeproy') . ";" . $rslmo2->fields('manalista');
						$sTable = 'Nuevo Requerimiento: ' . $titulox;
						$sKey =$Args['rsnew']['IdSolDesarrollo'];
						$sFn = "txt/requerimiento.txt";
						$sSubject = 'Nuevo Requerimiento: ' . $titulox;
						$Email2 = new cEmail();
						$Email2->Load($sFn);
						$Email2->ReplaceSender(EW_SENDER_EMAIL); // Replace Sender
						$Email2->ReplaceRecipient($destinatario); // Replace Recipient
						$Email2->ReplaceSubject($sSubject); // Replace Subject
						$Email2->ReplaceContent("<!--key-->", $sKey);
						$Email2->ReplaceContent("<!--Tipo-->", $tipo);            
						$Email2->ReplaceContent("<!--servicio-->", $servicio);    
						$Email2->ReplaceContent("<!--titulo-->", $titulox);    
						$Email2->ReplaceContent("<!--action-->", $sAction);    
						$Email2->ReplaceContent("<!--Usuario-->", $solicitante);    
						$Email2->ReplaceContent("<!--Analista-->", $nomAnalista);    
						$Email2->ReplaceContent("<!--JefeProyecto-->", $nomJefeProy);    
						$Email2->ReplaceContent("<!--finicio-->", $finicio);    
						$Email2->ReplaceContent("<!--fterpropu-->", $fterpropu);    
						$Email2->ReplaceContent("<!--impacto-->", $Args['rsnew']['Impacto']);    
						$Email2->ReplaceContent("<!--participa-->", $Args['rsnew']['Participacion']);    
						$Email2->ReplaceContent("<!--justifica-->", nl2br($Args['rsnew']['Justificativa']));    
						$Email2->ReplaceContent("<!--recomenda-->", nl2br($Args['rsnew']['Recomendacion']));    
						$Email2->Charset = EW_EMAIL_CHARSET;
						$bEmailSent = $Email2->Send();
					}
	   }// FIN if Add page
		return False;       
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
