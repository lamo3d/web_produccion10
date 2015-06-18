<?php

// Global variable for table object
$pp_view_factura_fabrica_detalle = NULL;

//
// Table class for pp_view_factura_fabrica_detalle
//
class cpp_view_factura_fabrica_detalle extends cTable {
	var $id_detalle;
	var $id_factura;
	var $id_cotizacion;
	var $IdProyDesDepen;
	var $idempresa;
	var $idarea;
	var $IdJefeProyecto;
	var $tipo_desarrollo;
	var $monto;
	var $porcentaje;
	var $usuario;
	var $fechaproceso;

	//
	// Table class constructor
	//
	function __construct() {
		global $Language;

		// Language object
		if (!isset($Language)) $Language = new cLanguage();
		$this->TableVar = 'pp_view_factura_fabrica_detalle';
		$this->TableName = 'pp_view_factura_fabrica_detalle';
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

		// id_detalle
		$this->id_detalle = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_id_detalle', 'id_detalle', '`id_detalle`', '`id_detalle`', 18, -1, FALSE, '`id_detalle`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->id_detalle->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['id_detalle'] = &$this->id_detalle;

		// id_factura
		$this->id_factura = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_id_factura', 'id_factura', '`id_factura`', '`id_factura`', 18, -1, FALSE, '`id_factura`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->id_factura->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['id_factura'] = &$this->id_factura;

		// id_cotizacion
		$this->id_cotizacion = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_id_cotizacion', 'id_cotizacion', '`id_cotizacion`', '`id_cotizacion`', 19, -1, FALSE, '`id_cotizacion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->id_cotizacion->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['id_cotizacion'] = &$this->id_cotizacion;

		// IdProyDesDepen
		$this->IdProyDesDepen = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_IdProyDesDepen', 'IdProyDesDepen', '`IdProyDesDepen`', '`IdProyDesDepen`', 19, -1, FALSE, '`IdProyDesDepen`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdProyDesDepen->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdProyDesDepen'] = &$this->IdProyDesDepen;

		// idempresa
		$this->idempresa = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_idempresa', 'idempresa', '`idempresa`', '`idempresa`', 17, -1, FALSE, '`idempresa`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idempresa->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idempresa'] = &$this->idempresa;

		// idarea
		$this->idarea = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_idarea', 'idarea', '`idarea`', '`idarea`', 18, -1, FALSE, '`idarea`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idarea->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idarea'] = &$this->idarea;

		// IdJefeProyecto
		$this->IdJefeProyecto = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_IdJefeProyecto', 'IdJefeProyecto', '`IdJefeProyecto`', '`IdJefeProyecto`', 2, -1, FALSE, '`IdJefeProyecto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->IdJefeProyecto->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['IdJefeProyecto'] = &$this->IdJefeProyecto;

		// tipo_desarrollo
		$this->tipo_desarrollo = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_tipo_desarrollo', 'tipo_desarrollo', '`tipo_desarrollo`', '`tipo_desarrollo`', 17, -1, FALSE, '`tipo_desarrollo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->tipo_desarrollo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['tipo_desarrollo'] = &$this->tipo_desarrollo;

		// monto
		$this->monto = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_monto', 'monto', '`monto`', '`monto`', 131, -1, FALSE, '`monto`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->monto->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['monto'] = &$this->monto;

		// porcentaje
		$this->porcentaje = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_porcentaje', 'porcentaje', '`porcentaje`', '`porcentaje`', 131, -1, FALSE, '`porcentaje`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->porcentaje->FldDefaultErrMsg = $Language->Phrase("IncorrectFloat");
		$this->fields['porcentaje'] = &$this->porcentaje;

		// usuario
		$this->usuario = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_usuario', 'usuario', '`usuario`', '`usuario`', 2, -1, FALSE, '`usuario`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->usuario->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['usuario'] = &$this->usuario;

		// fechaproceso
		$this->fechaproceso = new cField('pp_view_factura_fabrica_detalle', 'pp_view_factura_fabrica_detalle', 'x_fechaproceso', 'fechaproceso', '`fechaproceso`', 'DATE_FORMAT(`fechaproceso`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fechaproceso`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fechaproceso->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fechaproceso'] = &$this->fechaproceso;
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
		if ($this->getCurrentMasterTable() == "pp_view_cotizacion_fabricajd") {
			if ($this->id_cotizacion->getSessionValue() <> "")
				$sMasterFilter .= "`id_cotizacion`=" . ew_QuotedValue($this->id_cotizacion->getSessionValue(), EW_DATATYPE_NUMBER);
			else
				return "";
		}
		if ($this->getCurrentMasterTable() == "pp_view_factura_fabrica") {
			if ($this->id_factura->getSessionValue() <> "")
				$sMasterFilter .= "`id_factura`=" . ew_QuotedValue($this->id_factura->getSessionValue(), EW_DATATYPE_NUMBER);
			else
				return "";
		}
		return $sMasterFilter;
	}

	// Session detail WHERE clause
	function GetDetailFilter() {

		// Detail filter
		$sDetailFilter = "";
		if ($this->getCurrentMasterTable() == "pp_view_cotizacion_fabricajd") {
			if ($this->id_cotizacion->getSessionValue() <> "")
				$sDetailFilter .= "`id_cotizacion`=" . ew_QuotedValue($this->id_cotizacion->getSessionValue(), EW_DATATYPE_NUMBER);
			else
				return "";
		}
		if ($this->getCurrentMasterTable() == "pp_view_factura_fabrica") {
			if ($this->id_factura->getSessionValue() <> "")
				$sDetailFilter .= "`id_factura`=" . ew_QuotedValue($this->id_factura->getSessionValue(), EW_DATATYPE_NUMBER);
			else
				return "";
		}
		return $sDetailFilter;
	}

	// Master filter
	function SqlMasterFilter_pp_view_cotizacion_fabricajd() {
		return "`id_cotizacion`=@id_cotizacion@";
	}

	// Detail filter
	function SqlDetailFilter_pp_view_cotizacion_fabricajd() {
		return "`id_cotizacion`=@id_cotizacion@";
	}

	// Master filter
	function SqlMasterFilter_pp_view_factura_fabrica() {
		return "`id_factura`=@id_factura@";
	}

	// Detail filter
	function SqlDetailFilter_pp_view_factura_fabrica() {
		return "`id_factura`=@id_factura@";
	}

	// Table level SQL
	function SqlFrom() { // From
		return "`pp_view_factura_fabrica_detalle`";
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
	//lmo var $UpdateTable = "`pp_view_factura_fabrica_detalle`";
	var $UpdateTable = "`pp_factura_fabrica_detalle`";

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
			if (array_key_exists('id_detalle', $rs))
				ew_AddFilter($where, ew_QuotedName('id_detalle') . '=' . ew_QuotedValue($rs['id_detalle'], $this->id_detalle->FldDataType));
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
		return "`id_detalle` = @id_detalle@";
	}

	// Key filter
	function KeyFilter() {
		$sKeyFilter = $this->SqlKeyFilter();
		if (!is_numeric($this->id_detalle->CurrentValue))
			$sKeyFilter = "0=1"; // Invalid key
		$sKeyFilter = str_replace("@id_detalle@", ew_AdjustSql($this->id_detalle->CurrentValue), $sKeyFilter); // Replace key value
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
			return "lmo_pp_view_factura_fabrica_detallelist.php";
		}
	}

	function setReturnUrl($v) {
		$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_RETURN_URL] = $v;
	}

	// List URL
	function GetListUrl() {
		return "lmo_pp_view_factura_fabrica_detallelist.php";
	}

	// View URL
	function GetViewUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_view_factura_fabrica_detalleview.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_view_factura_fabrica_detalleview.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Add URL
	function GetAddUrl() {
		return "lmo_pp_view_factura_fabrica_detalleadd.php";
	}

	// Edit URL
	function GetEditUrl($parm = "") {
		return $this->KeyUrl("lmo_pp_view_factura_fabrica_detalleedit.php", $this->UrlParm($parm));
	}

	// Inline edit URL
	function GetInlineEditUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=edit"));
	}

	// Copy URL
	function GetCopyUrl($parm = "") {
		return $this->KeyUrl("lmo_pp_view_factura_fabrica_detalleadd.php", $this->UrlParm($parm));
	}

	// Inline copy URL
	function GetInlineCopyUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=copy"));
	}

	// Delete URL
	function GetDeleteUrl() {
		return $this->KeyUrl("lmo_pp_view_factura_fabrica_detalledelete.php", $this->UrlParm());
	}

	// Add key value to URL
	function KeyUrl($url, $parm = "") {
		$sUrl = $url . "?";
		if ($parm <> "") $sUrl .= $parm . "&";
		if (!is_null($this->id_detalle->CurrentValue)) {
			$sUrl .= "id_detalle=" . urlencode($this->id_detalle->CurrentValue);
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
			$arKeys[] = @$_GET["id_detalle"]; // id_detalle

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
			$this->id_detalle->CurrentValue = $key;
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
		$this->id_detalle->setDbValue($rs->fields('id_detalle'));
		$this->id_factura->setDbValue($rs->fields('id_factura'));
		$this->id_cotizacion->setDbValue($rs->fields('id_cotizacion'));
		$this->IdProyDesDepen->setDbValue($rs->fields('IdProyDesDepen'));
		$this->idempresa->setDbValue($rs->fields('idempresa'));
		$this->idarea->setDbValue($rs->fields('idarea'));
		$this->IdJefeProyecto->setDbValue($rs->fields('IdJefeProyecto'));
		$this->tipo_desarrollo->setDbValue($rs->fields('tipo_desarrollo'));
		$this->monto->setDbValue($rs->fields('monto'));
		$this->porcentaje->setDbValue($rs->fields('porcentaje'));
		$this->usuario->setDbValue($rs->fields('usuario'));
		$this->fechaproceso->setDbValue($rs->fields('fechaproceso'));
	}

	// Render list row values
	function RenderListRow() {
		global $conn, $Security, $gsLanguage;

		// Call Row Rendering event
		$this->Row_Rendering();

   // Common render codes
		// id_detalle
		// id_factura
		// id_cotizacion
		// IdProyDesDepen
		// idempresa
		// idarea
		// IdJefeProyecto
		// tipo_desarrollo
		// monto

		$this->monto->CellCssStyle = "width: 85px;";

		// porcentaje
		$this->porcentaje->CellCssStyle = "width: 85px;";

		// usuario
		// fechaproceso
		// id_detalle

		$this->id_detalle->ViewValue = $this->id_detalle->CurrentValue;
		$this->id_detalle->ViewCustomAttributes = "";

		// id_factura
		if (strval($this->id_factura->CurrentValue) <> "") {
			$sFilterWrk = "`id_factura`" . ew_SearchString("=", $this->id_factura->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `id_factura`, `id_factura` AS `DispFld`, `serie` AS `Disp2Fld`, `numero` AS `Disp3Fld`, `descripcion` AS `Disp4Fld` FROM `pp_factura_fabrica`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->id_factura, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->id_factura->ViewValue = $rswrk->fields('DispFld');
				$this->id_factura->ViewValue .= ew_ValueSeparator(1,$this->id_factura) . $rswrk->fields('Disp2Fld');
				$this->id_factura->ViewValue .= ew_ValueSeparator(2,$this->id_factura) . $rswrk->fields('Disp3Fld');
				$this->id_factura->ViewValue .= ew_ValueSeparator(3,$this->id_factura) . $rswrk->fields('Disp4Fld');
				$rswrk->Close();
			} else {
				$this->id_factura->ViewValue = $this->id_factura->CurrentValue;
			}
		} else {
			$this->id_factura->ViewValue = NULL;
		}
		$this->id_factura->ViewCustomAttributes = "";

		// id_cotizacion
		$this->id_cotizacion->ViewValue = $this->id_cotizacion->CurrentValue;
		if (strval($this->id_cotizacion->CurrentValue) <> "") {
			$sFilterWrk = "`id_cotizacion`" . ew_SearchString("=", $this->id_cotizacion->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `id_cotizacion`, `id_cotizacion` AS `DispFld`, `descripcion` AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_cotiza_desc`";
		$sWhereWrk = "";
		$lookuptblfilter = "`id_proveedor`= '". $_SESSION['Usuario_idempresa'] ."'";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->id_cotizacion, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->id_cotizacion->ViewValue = $rswrk->fields('DispFld');
				$this->id_cotizacion->ViewValue .= ew_ValueSeparator(1,$this->id_cotizacion) . $rswrk->fields('Disp2Fld');
				$rswrk->Close();
			} else {
				$this->id_cotizacion->ViewValue = $this->id_cotizacion->CurrentValue;
			}
		} else {
			$this->id_cotizacion->ViewValue = NULL;
		}
		$this->id_cotizacion->ViewCustomAttributes = "";

		// IdProyDesDepen
		$this->IdProyDesDepen->ViewValue = $this->IdProyDesDepen->CurrentValue;
		if (strval($this->IdProyDesDepen->CurrentValue) <> "") {
			$sFilterWrk = "`IdProyDes`" . ew_SearchString("=", $this->IdProyDesDepen->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdProyDes`, `IdProyDes` AS `DispFld`, `Titulo` AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_proydes`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdProyDesDepen, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->IdProyDesDepen->ViewValue = $rswrk->fields('DispFld');
				$this->IdProyDesDepen->ViewValue .= ew_ValueSeparator(1,$this->IdProyDesDepen) . $rswrk->fields('Disp2Fld');
				$rswrk->Close();
			} else {
				$this->IdProyDesDepen->ViewValue = $this->IdProyDesDepen->CurrentValue;
			}
		} else {
			$this->IdProyDesDepen->ViewValue = NULL;
		}
		$this->IdProyDesDepen->ViewCustomAttributes = "";

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
		$sSqlWrk .= " ORDER BY `empresa`";
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
		$this->idarea->ViewCustomAttributes = "";

		// IdJefeProyecto
		if (strval($this->IdJefeProyecto->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->IdJefeProyecto->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->IdJefeProyecto, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
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
		$this->IdJefeProyecto->ViewCustomAttributes = "";

		// tipo_desarrollo
		$this->tipo_desarrollo->ViewValue = $this->tipo_desarrollo->CurrentValue;
		if (strval($this->tipo_desarrollo->CurrentValue) <> "") {
			$sFilterWrk = "`iddetalle`" . ew_SearchString("=", $this->tipo_desarrollo->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `iddetalle`, `descripcion` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_conceptos`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idconcepto`= 25 and `iddetalle`<>0";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->tipo_desarrollo, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->tipo_desarrollo->ViewValue = $rswrk->fields('DispFld');
				$rswrk->Close();
			} else {
				$this->tipo_desarrollo->ViewValue = $this->tipo_desarrollo->CurrentValue;
			}
		} else {
			$this->tipo_desarrollo->ViewValue = NULL;
		}
		$this->tipo_desarrollo->ViewCustomAttributes = "";

		// monto
		$this->monto->ViewValue = $this->monto->CurrentValue;
		$this->monto->ViewValue = ew_FormatNumber($this->monto->ViewValue, 2, -2, -2, -2);
		$this->monto->CellCssStyle .= "text-align: right;";
		$this->monto->ViewCustomAttributes = "";

		// porcentaje
		$this->porcentaje->ViewValue = $this->porcentaje->CurrentValue;
		$this->porcentaje->ViewValue = ew_FormatNumber($this->porcentaje->ViewValue, 2, -2, -2, -2);
		$this->porcentaje->ViewCustomAttributes = "";

		// usuario
		$this->usuario->ViewValue = $this->usuario->CurrentValue;
		if (strval($this->usuario->CurrentValue) <> "") {
			$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->usuario->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarios`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->usuario, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->usuario->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->usuario->ViewValue = $this->usuario->CurrentValue;
			}
		} else {
			$this->usuario->ViewValue = NULL;
		}
		$this->usuario->ViewCustomAttributes = "";

		// fechaproceso
		$this->fechaproceso->ViewValue = $this->fechaproceso->CurrentValue;
		$this->fechaproceso->ViewValue = ew_FormatDateTime($this->fechaproceso->ViewValue, 11);
		$this->fechaproceso->ViewCustomAttributes = "";

		// id_detalle
		$this->id_detalle->LinkCustomAttributes = "";
		$this->id_detalle->HrefValue = "";
		$this->id_detalle->TooltipValue = "";

		// id_factura
		$this->id_factura->LinkCustomAttributes = "";
		$this->id_factura->HrefValue = "";
		$this->id_factura->TooltipValue = "";

		// id_cotizacion
		$this->id_cotizacion->LinkCustomAttributes = "";
		$this->id_cotizacion->HrefValue = "";
		$this->id_cotizacion->TooltipValue = "";

		// IdProyDesDepen
		$this->IdProyDesDepen->LinkCustomAttributes = "";
		$this->IdProyDesDepen->HrefValue = "";
		$this->IdProyDesDepen->TooltipValue = "";

		// idempresa
		$this->idempresa->LinkCustomAttributes = "";
		$this->idempresa->HrefValue = "";
		$this->idempresa->TooltipValue = "";

		// idarea
		$this->idarea->LinkCustomAttributes = "";
		$this->idarea->HrefValue = "";
		$this->idarea->TooltipValue = "";

		// IdJefeProyecto
		$this->IdJefeProyecto->LinkCustomAttributes = "";
		$this->IdJefeProyecto->HrefValue = "";
		$this->IdJefeProyecto->TooltipValue = "";

		// tipo_desarrollo
		$this->tipo_desarrollo->LinkCustomAttributes = "";
		$this->tipo_desarrollo->HrefValue = "";
		$this->tipo_desarrollo->TooltipValue = "";

		// monto
		$this->monto->LinkCustomAttributes = "";
		$this->monto->HrefValue = "";
		$this->monto->TooltipValue = "";

		// porcentaje
		$this->porcentaje->LinkCustomAttributes = "";
		$this->porcentaje->HrefValue = "";
		$this->porcentaje->TooltipValue = "";

		// usuario
		$this->usuario->LinkCustomAttributes = "";
		$this->usuario->HrefValue = "";
		$this->usuario->TooltipValue = "";

		// fechaproceso
		$this->fechaproceso->LinkCustomAttributes = "";
		$this->fechaproceso->HrefValue = "";
		$this->fechaproceso->TooltipValue = "";

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
				if ($this->id_detalle->Exportable) $Doc->ExportCaption($this->id_detalle);
				if ($this->id_factura->Exportable) $Doc->ExportCaption($this->id_factura);
				if ($this->id_cotizacion->Exportable) $Doc->ExportCaption($this->id_cotizacion);
				if ($this->IdProyDesDepen->Exportable) $Doc->ExportCaption($this->IdProyDesDepen);
				if ($this->idempresa->Exportable) $Doc->ExportCaption($this->idempresa);
				if ($this->idarea->Exportable) $Doc->ExportCaption($this->idarea);
				if ($this->IdJefeProyecto->Exportable) $Doc->ExportCaption($this->IdJefeProyecto);
				if ($this->tipo_desarrollo->Exportable) $Doc->ExportCaption($this->tipo_desarrollo);
				if ($this->monto->Exportable) $Doc->ExportCaption($this->monto);
				if ($this->porcentaje->Exportable) $Doc->ExportCaption($this->porcentaje);
				if ($this->usuario->Exportable) $Doc->ExportCaption($this->usuario);
				if ($this->fechaproceso->Exportable) $Doc->ExportCaption($this->fechaproceso);
			} else {
				if ($this->id_detalle->Exportable) $Doc->ExportCaption($this->id_detalle);
				if ($this->id_factura->Exportable) $Doc->ExportCaption($this->id_factura);
				if ($this->id_cotizacion->Exportable) $Doc->ExportCaption($this->id_cotizacion);
				if ($this->IdProyDesDepen->Exportable) $Doc->ExportCaption($this->IdProyDesDepen);
				if ($this->idempresa->Exportable) $Doc->ExportCaption($this->idempresa);
				if ($this->idarea->Exportable) $Doc->ExportCaption($this->idarea);
				if ($this->IdJefeProyecto->Exportable) $Doc->ExportCaption($this->IdJefeProyecto);
				if ($this->tipo_desarrollo->Exportable) $Doc->ExportCaption($this->tipo_desarrollo);
				if ($this->monto->Exportable) $Doc->ExportCaption($this->monto);
				if ($this->porcentaje->Exportable) $Doc->ExportCaption($this->porcentaje);
				if ($this->usuario->Exportable) $Doc->ExportCaption($this->usuario);
				if ($this->fechaproceso->Exportable) $Doc->ExportCaption($this->fechaproceso);
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
					if ($this->id_detalle->Exportable) $Doc->ExportField($this->id_detalle);
					if ($this->id_factura->Exportable) $Doc->ExportField($this->id_factura);
					if ($this->id_cotizacion->Exportable) $Doc->ExportField($this->id_cotizacion);
					if ($this->IdProyDesDepen->Exportable) $Doc->ExportField($this->IdProyDesDepen);
					if ($this->idempresa->Exportable) $Doc->ExportField($this->idempresa);
					if ($this->idarea->Exportable) $Doc->ExportField($this->idarea);
					if ($this->IdJefeProyecto->Exportable) $Doc->ExportField($this->IdJefeProyecto);
					if ($this->tipo_desarrollo->Exportable) $Doc->ExportField($this->tipo_desarrollo);
					if ($this->monto->Exportable) $Doc->ExportField($this->monto);
					if ($this->porcentaje->Exportable) $Doc->ExportField($this->porcentaje);
					if ($this->usuario->Exportable) $Doc->ExportField($this->usuario);
					if ($this->fechaproceso->Exportable) $Doc->ExportField($this->fechaproceso);
				} else {
					if ($this->id_detalle->Exportable) $Doc->ExportField($this->id_detalle);
					if ($this->id_factura->Exportable) $Doc->ExportField($this->id_factura);
					if ($this->id_cotizacion->Exportable) $Doc->ExportField($this->id_cotizacion);
					if ($this->IdProyDesDepen->Exportable) $Doc->ExportField($this->IdProyDesDepen);
					if ($this->idempresa->Exportable) $Doc->ExportField($this->idempresa);
					if ($this->idarea->Exportable) $Doc->ExportField($this->idarea);
					if ($this->IdJefeProyecto->Exportable) $Doc->ExportField($this->IdJefeProyecto);
					if ($this->tipo_desarrollo->Exportable) $Doc->ExportField($this->tipo_desarrollo);
					if ($this->monto->Exportable) $Doc->ExportField($this->monto);
					if ($this->porcentaje->Exportable) $Doc->ExportField($this->porcentaje);
					if ($this->usuario->Exportable) $Doc->ExportField($this->usuario);
					if ($this->fechaproceso->Exportable) $Doc->ExportField($this->fechaproceso);
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

	global $conn;     
	$cadenasql="select count(*) as cantx
				from pp_factura_fabrica_detalle
				where pp_factura_fabrica_detalle.id_cotizacion= '". $rsnew['id_cotizacion'] ."'
				and pp_factura_fabrica_detalle.id_factura='". $rsnew['id_factura'] ."'
				and pp_factura_fabrica_detalle.idestado<> 2";   
	$rslmo3 = $conn->Execute($cadenasql);                       
	$cantx = $rslmo3->fields('cantx');
	$rslmo3->Close();       
	if ($cantx>0)
	{                        
		$this->CancelMessage  = "La cotizacion que desea agregar";     
		$this->CancelMessage .= "<br> ya está registrada en esta factura";          
		return FALSE;             
	}
	if ($rsnew['monto']<=0)
	{                                                                   
		$this->CancelMessage  = "El monto a facturar debe ser mayor que 0";     

		//$this->CancelMessage .= "<br> ";          
		return FALSE;     
	}
	$cadena="select idempresa, idarea 
			from pp_usuarios 
			where idusuario= '". CurrentUserID() ."'";
	$rslmo3 = $conn->Execute($cadena);    
	$cod_empresa= $rslmo3->fields('idempresa');

	//$cod_area= $rslmo3->fields('idarea');    
	$cadenasql= "select pp_cotizacion_fabrica.monto_saldo_facturado, pp_cotizacion_fabrica.idestado, 
				   pp_cotizacion_fabrica.id_proveedor, pp_cotizacion_fabrica.monto_facturado
		from pp_cotizacion_fabrica
		where pp_cotizacion_fabrica.id_cotizacion='". $rsnew['id_cotizacion'] ."'";
	$rslmo3 = $conn->Execute($cadenasql);   
	$monto_saldo_facturado = $rslmo3->fields('monto_saldo_facturado');
	$monto_facturado = $rslmo3->fields('monto_facturado');
	$idestado = $rslmo3->fields('idestado'); 
	$id_proveedor = $rslmo3->fields('id_proveedor'); 
	$rslmo3->Close();       

	//Valida de que las cotizaciones que desea facturar le pertenescan
	if ($id_proveedor <> $cod_empresa)       
	{
		$this->CancelMessage  .= "La cotizacion que desea facturar le pertenece a otro Proveedor";                  
		return FALSE;     
	}

	//Si la cotizacion no esta aprobada por gerencia o por el Jefe Desarrollo no se debe facturar
	if ($idestado <> 4 and $idestado <> 5 and $idestado <> 6 and $idestado <> 8 and $idestado <> 9 and $idestado <> 10)
	{
		$this->CancelMessage  = "La cotizacion no se puede facturar, ";     
		$this->CancelMessage .= "<br> porque no esta aprobada por Jefe Desarrollo";                           
		return FALSE;     
	}

	//si el monto a facturar es mayor que el saldo y ya existe algun monto facturado, no debe dejar registrar                       
	if ($rsnew['monto'] > $monto_saldo_facturado and $monto_facturado>0)   
	{
		$this->CancelMessage  = "El monto a facturar de la cotizacion supera al Saldo por Facturar";     
		$this->CancelMessage .= "<br> el saldo pendiente de facturar es : " . $monto_saldo_facturado;          
		return FALSE;     
	}
	return TRUE;  
	}

	// Row Inserted event
	function Row_Inserted($rsold, &$rsnew) {

		//echo "Row Inserted"
	global $conn;
	$conn->raiseErrorFn = 'ew_ErrorFn';
		$cadenasql="call pp_pa_factura_fabrica_detalle('". $rsnew['id_detalle'] ."')";
		$rslmo = $conn->Execute($cadenasql);  
	$conn->raiseErrorFn = ''; 
	}

	// Row Updating event
	function Row_Updating($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

	global $conn;     
	if ($rsnew['id_cotizacion'] <> $rsold['id_cotizacion'])
	{
		$cadenasql="select count(*) as cantx  
					from pp_factura_fabrica_detalle
					where pp_factura_fabrica_detalle.id_cotizacion= '". $rsnew['id_cotizacion'] ."'
					and pp_factura_fabrica_detalle.id_factura='". $rsnew['id_factura'] ."'
					and pp_factura_fabrica_detalle.idestado<> 2";  
		$rslmo3 = $conn->Execute($cadenasql);   
		$cantx = $rslmo3->fields('cantx');
		$rslmo3->Close();       
		if ($cantx>0)
		{
			$this->CancelMessage  = "La cotizacion que desea agregar";     
			$this->CancelMessage .= "<br> ya esta registrado en esta factura ";          
			return FALSE;             
		}
	}
	$cadena="select idempresa, idarea 
			from pp_usuarios 
			where idusuario= '". CurrentUserID() ."'";
	$rslmo3 = $conn->Execute($cadena);      
	$cod_empresa= $rslmo3->fields('idempresa');

	//$cod_area= $rslmo3->fields('idarea');    
	$cadenasql= "select pp_cotizacion_fabrica.monto_saldo_facturado, 
					pp_cotizacion_fabrica.idestado, pp_cotizacion_fabrica.id_proveedor, 
					pp_cotizacion_fabrica.monto_facturado
		from pp_cotizacion_fabrica 
		where pp_cotizacion_fabrica.id_cotizacion='". $rsnew['id_cotizacion'] ."'";
	$rslmo3 = $conn->Execute($cadenasql);   
	$monto_saldo_facturado = $rslmo3->fields('monto_saldo_facturado');
	$monto_facturado = $rslmo3->fields('monto_facturado'); 
	$idestado_cotizacion = $rslmo3->fields('idestado');
	$id_proveedor = $rslmo3->fields('id_proveedor'); 
	$rslmo3->Close();       

	//Valida de que las cotizaciones que desea facturar le pertenescan
	if ($id_proveedor <> $cod_empresa)       
	{
		$this->CancelMessage  .= "La cotizacion que desea facturar le pertenece a otro Proveedor";                  
		return FALSE;     
	}

	//Si la cotizacion no esta aprobada por gerencia no se debe facturar
	if ($idestado_cotizacion <> 5 and $idestado_cotizacion <> 6 and $idestado_cotizacion <> 8 and $idestado_cotizacion <> 9 and $idestado_cotizacion <> 10)
	{
		$this->CancelMessage  = "La cotizacion no se puede facturar, ";     
		$this->CancelMessage .= "<br> porque no esta aprobada por el Jefe Desarrollo";                           
		return FALSE;     
	}                                                                    

	//verifica si el detallefactura no es desestimado                       
	if ($rsnew['idestado']<>2)                               
	{                 
		if ($rsnew['monto']<=0 )      
		{                                                                   
			$this->CancelMessage  = "El monto a facturar debe ser mayor que 0";     
			return FALSE;     
		}
		$monto_saldo_facturado_new= $monto_saldo_facturado + $rsold['monto'];
		if ($rsnew['monto'] > $monto_saldo_facturado_new)
		{
			$this->CancelMessage  = "El monto a facturar de la cotizacion supera al Saldo por Facturar";     
			$this->CancelMessage .= "<br> el saldo pendiente de facturar es : " . $monto_saldo_facturado_new;          
			return FALSE;         
		}
	}   
		return TRUE;
	}

	// Row Updated event
	function Row_Updated($rsold, &$rsnew) {

		//echo "Row Updated";
	global $conn; 
	$conn->raiseErrorFn = 'ew_ErrorFn';
	$cadenasql="call pp_pa_factura_fabrica_detalle('". $rsold['id_detalle'] ."')";
	$rslmo = $conn->Execute($cadenasql);   
	$conn->raiseErrorFn = ''; 
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
