<?php

// Global variable for table object
$pp_progaltapaseexiste = NULL;

//
// Table class for pp_progaltapaseexiste
//
class cpp_progaltapaseexiste extends cTable {
	var $Idreqprograma;
	var $fechasepara;
	var $fechalibre;
	var $fechapuesta;
	var $idreq;
	var $idpase;
	var $idSistema;
	var $idModulo;
	var $codmenu;
	var $codsubmenu;
	var $opcion;
	var $idprog;
	var $revision;
	var $desmodifi;
	var $pasarproduccion;
	var $nuevaRevision;
	var $idanalista;
	var $estado;

	//
	// Table class constructor
	//
	function __construct() {
		global $Language;

		// Language object
		if (!isset($Language)) $Language = new cLanguage();
		$this->TableVar = 'pp_progaltapaseexiste';
		$this->TableName = 'pp_progaltapaseexiste';
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

		// Idreqprograma
		$this->Idreqprograma = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_Idreqprograma', 'Idreqprograma', '`Idreqprograma`', '`Idreqprograma`', 19, -1, FALSE, '`Idreqprograma`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->Idreqprograma->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['Idreqprograma'] = &$this->Idreqprograma;

		// fechasepara
		$this->fechasepara = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_fechasepara', 'fechasepara', '`fechasepara`', 'DATE_FORMAT(`fechasepara`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fechasepara`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fechasepara->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fechasepara'] = &$this->fechasepara;

		// fechalibre
		$this->fechalibre = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_fechalibre', 'fechalibre', '`fechalibre`', 'DATE_FORMAT(`fechalibre`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fechalibre`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fechalibre->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fechalibre'] = &$this->fechalibre;

		// fechapuesta
		$this->fechapuesta = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_fechapuesta', 'fechapuesta', '`fechapuesta`', 'DATE_FORMAT(`fechapuesta`, \'%d/%m/%Y\')', 135, 11, FALSE, '`fechapuesta`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fechapuesta->FldDefaultErrMsg = str_replace("%s", "/", $Language->Phrase("IncorrectDateDMY"));
		$this->fields['fechapuesta'] = &$this->fechapuesta;

		// idreq
		$this->idreq = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_idreq', 'idreq', '`idreq`', '`idreq`', 19, -1, FALSE, '`idreq`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idreq->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idreq'] = &$this->idreq;

		// idpase
		$this->idpase = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_idpase', 'idpase', '`idpase`', '`idpase`', 19, -1, FALSE, '`idpase`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idpase->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idpase'] = &$this->idpase;

		// idSistema
		$this->idSistema = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_idSistema', 'idSistema', '`idSistema`', '`idSistema`', 18, -1, FALSE, '`idSistema`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idSistema->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idSistema'] = &$this->idSistema;

		// idModulo
		$this->idModulo = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_idModulo', 'idModulo', '`idModulo`', '`idModulo`', 17, -1, FALSE, '`idModulo`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idModulo->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idModulo'] = &$this->idModulo;

		// codmenu
		$this->codmenu = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_codmenu', 'codmenu', '`codmenu`', '`codmenu`', 18, -1, FALSE, '`codmenu`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->codmenu->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['codmenu'] = &$this->codmenu;

		// codsubmenu
		$this->codsubmenu = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_codsubmenu', 'codsubmenu', '`codsubmenu`', '`codsubmenu`', 18, -1, FALSE, '`codsubmenu`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->codsubmenu->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['codsubmenu'] = &$this->codsubmenu;

		// opcion
		$this->opcion = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_opcion', 'opcion', '`opcion`', '`opcion`', 200, -1, FALSE, '`opcion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['opcion'] = &$this->opcion;

		// idprog
		$this->idprog = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_idprog', 'idprog', '`idprog`', '`idprog`', 19, -1, FALSE, '`idprog`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idprog->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idprog'] = &$this->idprog;

		// revision
		$this->revision = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_revision', 'revision', '`revision`', '`revision`', 18, -1, FALSE, '`revision`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->revision->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['revision'] = &$this->revision;

		// desmodifi
		$this->desmodifi = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_desmodifi', 'desmodifi', '`desmodifi`', '`desmodifi`', 201, -1, FALSE, '`desmodifi`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->fields['desmodifi'] = &$this->desmodifi;

		// pasarproduccion
		$this->pasarproduccion = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_pasarproduccion', 'pasarproduccion', '`pasarproduccion`', '`pasarproduccion`', 202, -1, FALSE, '`pasarproduccion`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->pasarproduccion->FldDataType = EW_DATATYPE_BOOLEAN;
		$this->fields['pasarproduccion'] = &$this->pasarproduccion;

		// nuevaRevision
		$this->nuevaRevision = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_nuevaRevision', 'nuevaRevision', '`nuevaRevision`', '`nuevaRevision`', 18, -1, FALSE, '`nuevaRevision`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->nuevaRevision->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['nuevaRevision'] = &$this->nuevaRevision;

		// idanalista
		$this->idanalista = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_idanalista', 'idanalista', '`idanalista`', '`idanalista`', 2, -1, FALSE, '`idanalista`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->idanalista->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['idanalista'] = &$this->idanalista;

		// estado
		$this->estado = new cField('pp_progaltapaseexiste', 'pp_progaltapaseexiste', 'x_estado', 'estado', '`estado`', '`estado`', 17, -1, FALSE, '`estado`', FALSE, FALSE, FALSE, 'FORMATTED TEXT');
		$this->estado->FldDefaultErrMsg = $Language->Phrase("IncorrectInteger");
		$this->fields['estado'] = &$this->estado;
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

	// Table level SQL
	function SqlFrom() { // From
		return "`pp_progaltapaseexiste`";
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
	//lmo var $UpdateTable = "`pp_progaltapaseexiste`";
	var $UpdateTable = "`pp_reqprog`";

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
			if (array_key_exists('Idreqprograma', $rs))
				ew_AddFilter($where, ew_QuotedName('Idreqprograma') . '=' . ew_QuotedValue($rs['Idreqprograma'], $this->Idreqprograma->FldDataType));
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
		return "`Idreqprograma` = @Idreqprograma@";
	}

	// Key filter
	function KeyFilter() {
		$sKeyFilter = $this->SqlKeyFilter();
		if (!is_numeric($this->Idreqprograma->CurrentValue))
			$sKeyFilter = "0=1"; // Invalid key
		$sKeyFilter = str_replace("@Idreqprograma@", ew_AdjustSql($this->Idreqprograma->CurrentValue), $sKeyFilter); // Replace key value
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
			return "lmo_pp_progaltapaseexistelist.php";
		}
	}

	function setReturnUrl($v) {
		$_SESSION[EW_PROJECT_NAME . "_" . $this->TableVar . "_" . EW_TABLE_RETURN_URL] = $v;
	}

	// List URL
	function GetListUrl() {
		return "lmo_pp_progaltapaseexistelist.php";
	}

	// View URL
	function GetViewUrl($parm = "") {
		if ($parm <> "")
			return $this->KeyUrl("lmo_pp_progaltapaseexisteview.php", $this->UrlParm($parm));
		else
			return $this->KeyUrl("lmo_pp_progaltapaseexisteview.php", $this->UrlParm(EW_TABLE_SHOW_DETAIL . "="));
	}

	// Add URL
	function GetAddUrl() {
		return "lmo_pp_progaltapaseexisteadd.php";
	}

	// Edit URL
	function GetEditUrl($parm = "") {
		return $this->KeyUrl("lmo_pp_progaltapaseexisteedit.php", $this->UrlParm($parm));
	}

	// Inline edit URL
	function GetInlineEditUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=edit"));
	}

	// Copy URL
	function GetCopyUrl($parm = "") {
		return $this->KeyUrl("lmo_pp_progaltapaseexisteadd.php", $this->UrlParm($parm));
	}

	// Inline copy URL
	function GetInlineCopyUrl() {
		return $this->KeyUrl(ew_CurrentPage(), $this->UrlParm("a=copy"));
	}

	// Delete URL
	function GetDeleteUrl() {
		return $this->KeyUrl("lmo_pp_progaltapaseexistedelete.php", $this->UrlParm());
	}

	// Add key value to URL
	function KeyUrl($url, $parm = "") {
		$sUrl = $url . "?";
		if ($parm <> "") $sUrl .= $parm . "&";
		if (!is_null($this->Idreqprograma->CurrentValue)) {
			$sUrl .= "Idreqprograma=" . urlencode($this->Idreqprograma->CurrentValue);
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
			$arKeys[] = @$_GET["Idreqprograma"]; // Idreqprograma

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
			$this->Idreqprograma->CurrentValue = $key;
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
		$this->Idreqprograma->setDbValue($rs->fields('Idreqprograma'));
		$this->fechasepara->setDbValue($rs->fields('fechasepara'));
		$this->fechalibre->setDbValue($rs->fields('fechalibre'));
		$this->fechapuesta->setDbValue($rs->fields('fechapuesta'));
		$this->idreq->setDbValue($rs->fields('idreq'));
		$this->idpase->setDbValue($rs->fields('idpase'));
		$this->idSistema->setDbValue($rs->fields('idSistema'));
		$this->idModulo->setDbValue($rs->fields('idModulo'));
		$this->codmenu->setDbValue($rs->fields('codmenu'));
		$this->codsubmenu->setDbValue($rs->fields('codsubmenu'));
		$this->opcion->setDbValue($rs->fields('opcion'));
		$this->idprog->setDbValue($rs->fields('idprog'));
		$this->revision->setDbValue($rs->fields('revision'));
		$this->desmodifi->setDbValue($rs->fields('desmodifi'));
		$this->pasarproduccion->setDbValue($rs->fields('pasarproduccion'));
		$this->nuevaRevision->setDbValue($rs->fields('nuevaRevision'));
		$this->idanalista->setDbValue($rs->fields('idanalista'));
		$this->estado->setDbValue($rs->fields('estado'));
	}

	// Render list row values
	function RenderListRow() {
		global $conn, $Security, $gsLanguage;

		// Call Row Rendering event
		$this->Row_Rendering();

   // Common render codes
		// Idreqprograma
		// fechasepara
		// fechalibre
		// fechapuesta
		// idreq
		// idpase
		// idSistema
		// idModulo
		// codmenu
		// codsubmenu
		// opcion
		// idprog
		// revision
		// desmodifi
		// pasarproduccion
		// nuevaRevision
		// idanalista
		// estado
		// Idreqprograma

		$this->Idreqprograma->ViewValue = $this->Idreqprograma->CurrentValue;
		$this->Idreqprograma->ViewCustomAttributes = "";

		// fechasepara
		$this->fechasepara->ViewValue = $this->fechasepara->CurrentValue;
		$this->fechasepara->ViewValue = ew_FormatDateTime($this->fechasepara->ViewValue, 11);
		$this->fechasepara->ViewCustomAttributes = "";

		// fechalibre
		$this->fechalibre->ViewValue = $this->fechalibre->CurrentValue;
		$this->fechalibre->ViewValue = ew_FormatDateTime($this->fechalibre->ViewValue, 11);
		$this->fechalibre->ViewCustomAttributes = "";

		// fechapuesta
		$this->fechapuesta->ViewValue = $this->fechapuesta->CurrentValue;
		$this->fechapuesta->ViewValue = ew_FormatDateTime($this->fechapuesta->ViewValue, 11);
		$this->fechapuesta->ViewCustomAttributes = "";

		// idreq
		$this->idreq->ViewValue = $this->idreq->CurrentValue;
		if (strval($this->idreq->CurrentValue) <> "") {
			$sFilterWrk = "`IdProyDes`" . ew_SearchString("=", $this->idreq->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdProyDes`, `IdProyDes` AS `DispFld`, `Titulo` AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_proydes`";
		$sWhereWrk = "";
		$lookuptblfilter = "`Tipo`<>'PROYECTO'";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idreq, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `IdProyDes` Desc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idreq->ViewValue = $rswrk->fields('DispFld');
				$this->idreq->ViewValue .= ew_ValueSeparator(1,$this->idreq) . $rswrk->fields('Disp2Fld');
				$rswrk->Close();
			} else {
				$this->idreq->ViewValue = $this->idreq->CurrentValue;
			}
		} else {
			$this->idreq->ViewValue = NULL;
		}
		$this->idreq->ViewValue = strtolower($this->idreq->ViewValue);
		$this->idreq->ViewCustomAttributes = "";

		// idpase
		if (strval($this->idpase->CurrentValue) <> "") {
			$sFilterWrk = "`IdPase`" . ew_SearchString("=", $this->idpase->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdPase`, `IdPase` AS `DispFld`, `Titulo` AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_soli_pase_prod`";
		$sWhereWrk = "";
		$lookuptblfilter = "`IdEstadoSoliPuestaProd` in (1,11,14,15)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idpase, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `IdPase` Desc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idpase->ViewValue = $rswrk->fields('DispFld');
				$this->idpase->ViewValue .= ew_ValueSeparator(1,$this->idpase) . $rswrk->fields('Disp2Fld');
				$rswrk->Close();
			} else {
				$this->idpase->ViewValue = $this->idpase->CurrentValue;
			}
		} else {
			$this->idpase->ViewValue = NULL;
		}
		$this->idpase->ViewValue = strtolower($this->idpase->ViewValue);
		$this->idpase->CellCssStyle .= "text-align: center;";
		$this->idpase->ViewCustomAttributes = "";

		// idSistema
		if (strval($this->idSistema->CurrentValue) <> "") {
			$sFilterWrk = "`IdServicio`" . ew_SearchString("=", $this->idSistema->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `IdServicio`, `Servicio` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_aplicaciones`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idSistema, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idSistema->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idSistema->ViewValue = $this->idSistema->CurrentValue;
			}
		} else {
			$this->idSistema->ViewValue = NULL;
		}
		$this->idSistema->ViewValue = strtoupper($this->idSistema->ViewValue);
		$this->idSistema->ViewCustomAttributes = "";

		// idModulo
		if (strval($this->idModulo->CurrentValue) <> "") {
			$sFilterWrk = "`Idmodulo`" . ew_SearchString("=", $this->idModulo->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `Idmodulo`, `modulo` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_modulo`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idModulo, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `modulo` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idModulo->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idModulo->ViewValue = $this->idModulo->CurrentValue;
			}
		} else {
			$this->idModulo->ViewValue = NULL;
		}
		$this->idModulo->ViewValue = strtoupper($this->idModulo->ViewValue);
		$this->idModulo->ViewCustomAttributes = "";

		// codmenu
		if (strval($this->codmenu->CurrentValue) <> "") {
			$sFilterWrk = "`codmenu`" . ew_SearchString("=", $this->codmenu->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `codmenu`, `menu` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_menu`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->codmenu, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->codmenu->ViewValue = strtoupper($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->codmenu->ViewValue = $this->codmenu->CurrentValue;
			}
		} else {
			$this->codmenu->ViewValue = NULL;
		}
		$this->codmenu->ViewCustomAttributes = "";

		// codsubmenu
		if (strval($this->codsubmenu->CurrentValue) <> "") {
			$sFilterWrk = "`codsubmenu`" . ew_SearchString("=", $this->codsubmenu->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `codsubmenu`, `submenu` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_submenu`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->codsubmenu, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->codsubmenu->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->codsubmenu->ViewValue = $this->codsubmenu->CurrentValue;
			}
		} else {
			$this->codsubmenu->ViewValue = NULL;
		}
		$this->codsubmenu->ViewCustomAttributes = "";

		// opcion
		$this->opcion->ViewValue = $this->opcion->CurrentValue;
		$this->opcion->ViewCustomAttributes = "";

		// idprog
		if (strval($this->idprog->CurrentValue) <> "") {
			$sFilterWrk = "`idPrograma`" . ew_SearchString("=", $this->idprog->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `idPrograma`, `numero` AS `DispFld`, `idestprog` AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_programas`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idestprog` in (1,4)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idprog, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `numero` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idprog->ViewValue = strtolower($rswrk->fields('DispFld'));
				$this->idprog->ViewValue .= ew_ValueSeparator(1,$this->idprog) . $rswrk->fields('Disp2Fld');
				$rswrk->Close();
			} else {
				$this->idprog->ViewValue = $this->idprog->CurrentValue;
			}
		} else {
			$this->idprog->ViewValue = NULL;
		}
		$this->idprog->ViewValue = strtolower($this->idprog->ViewValue);
		$this->idprog->ViewCustomAttributes = "";

		// revision
		$this->revision->ViewValue = $this->revision->CurrentValue;
		$this->revision->ViewCustomAttributes = "";

		// desmodifi
		$this->desmodifi->ViewValue = $this->desmodifi->CurrentValue;
		$this->desmodifi->ViewValue = strtolower($this->desmodifi->ViewValue);
		$this->desmodifi->ViewCustomAttributes = "";

		// pasarproduccion
		if (ew_ConvertToBool($this->pasarproduccion->CurrentValue)) {
			$this->pasarproduccion->ViewValue = $this->pasarproduccion->FldTagCaption(1) <> "" ? $this->pasarproduccion->FldTagCaption(1) : "1";
		} else {
			$this->pasarproduccion->ViewValue = $this->pasarproduccion->FldTagCaption(2) <> "" ? $this->pasarproduccion->FldTagCaption(2) : "0";
		}
		$this->pasarproduccion->CellCssStyle .= "text-align: center;";
		$this->pasarproduccion->ViewCustomAttributes = "";

		// nuevaRevision
		$this->nuevaRevision->ViewValue = $this->nuevaRevision->CurrentValue;
		$this->nuevaRevision->ViewCustomAttributes = "";

		// idanalista
		if (strval($this->idanalista->CurrentValue) <> "") {
			$sFilterWrk = "`CodUsuario`" . ew_SearchString("=", $this->idanalista->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `CodUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_analista_pases`";
		$sWhereWrk = "";
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->idanalista, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
		$sSqlWrk .= " ORDER BY `login` Asc";
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->idanalista->ViewValue = strtolower($rswrk->fields('DispFld'));
				$rswrk->Close();
			} else {
				$this->idanalista->ViewValue = $this->idanalista->CurrentValue;
			}
		} else {
			$this->idanalista->ViewValue = NULL;
		}
		$this->idanalista->ViewValue = strtoupper($this->idanalista->ViewValue);
		$this->idanalista->ViewCustomAttributes = "";

		// estado
		if (strval($this->estado->CurrentValue) <> "") {
			$sFilterWrk = "`iddetalle`" . ew_SearchString("=", $this->estado->CurrentValue, EW_DATATYPE_NUMBER);
		$sSqlWrk = "SELECT `iddetalle`, `descripcion` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_conceptos`";
		$sWhereWrk = "";
		$lookuptblfilter = "`idconcepto`=5 and `pageid`='". CurrentPageID() ."' and `iddetalle` in (1,2,4)";
		if (strval($lookuptblfilter) <> "") {
			ew_AddFilter($sWhereWrk, $lookuptblfilter);
		}
		if ($sFilterWrk <> "") {
			ew_AddFilter($sWhereWrk, $sFilterWrk);
		}

		// Call Lookup selecting
		$this->Lookup_Selecting($this->estado, $sWhereWrk);
		if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$rswrk = $conn->Execute($sSqlWrk);
			if ($rswrk && !$rswrk->EOF) { // Lookup values found
				$this->estado->ViewValue = $rswrk->fields('DispFld');
				$rswrk->Close();
			} else {
				$this->estado->ViewValue = $this->estado->CurrentValue;
			}
		} else {
			$this->estado->ViewValue = NULL;
		}
		$this->estado->ViewCustomAttributes = "";

		// Idreqprograma
		$this->Idreqprograma->LinkCustomAttributes = "";
		$this->Idreqprograma->HrefValue = "";
		$this->Idreqprograma->TooltipValue = "";

		// fechasepara
		$this->fechasepara->LinkCustomAttributes = "";
		$this->fechasepara->HrefValue = "";
		$this->fechasepara->TooltipValue = "";

		// fechalibre
		$this->fechalibre->LinkCustomAttributes = "";
		$this->fechalibre->HrefValue = "";
		$this->fechalibre->TooltipValue = "";

		// fechapuesta
		$this->fechapuesta->LinkCustomAttributes = "";
		$this->fechapuesta->HrefValue = "";
		$this->fechapuesta->TooltipValue = "";

		// idreq
		$this->idreq->LinkCustomAttributes = "";
		$this->idreq->HrefValue = "";
		$this->idreq->TooltipValue = "";

		// idpase
		$this->idpase->LinkCustomAttributes = "";
		$this->idpase->HrefValue = "";
		$this->idpase->TooltipValue = "";

		// idSistema
		$this->idSistema->LinkCustomAttributes = "";
		$this->idSistema->HrefValue = "";
		$this->idSistema->TooltipValue = "";

		// idModulo
		$this->idModulo->LinkCustomAttributes = "";
		$this->idModulo->HrefValue = "";
		$this->idModulo->TooltipValue = "";

		// codmenu
		$this->codmenu->LinkCustomAttributes = "";
		$this->codmenu->HrefValue = "";
		$this->codmenu->TooltipValue = "";

		// codsubmenu
		$this->codsubmenu->LinkCustomAttributes = "";
		$this->codsubmenu->HrefValue = "";
		$this->codsubmenu->TooltipValue = "";

		// opcion
		$this->opcion->LinkCustomAttributes = "";
		$this->opcion->HrefValue = "";
		$this->opcion->TooltipValue = "";

		// idprog
		$this->idprog->LinkCustomAttributes = "";
		$this->idprog->HrefValue = "";
		$this->idprog->TooltipValue = "";

		// revision
		$this->revision->LinkCustomAttributes = "";
		$this->revision->HrefValue = "";
		$this->revision->TooltipValue = "";

		// desmodifi
		$this->desmodifi->LinkCustomAttributes = "";
		$this->desmodifi->HrefValue = "";
		$this->desmodifi->TooltipValue = "";

		// pasarproduccion
		$this->pasarproduccion->LinkCustomAttributes = "";
		$this->pasarproduccion->HrefValue = "";
		$this->pasarproduccion->TooltipValue = "";

		// nuevaRevision
		$this->nuevaRevision->LinkCustomAttributes = "";
		$this->nuevaRevision->HrefValue = "";
		$this->nuevaRevision->TooltipValue = "";

		// idanalista
		$this->idanalista->LinkCustomAttributes = "";
		$this->idanalista->HrefValue = "";
		$this->idanalista->TooltipValue = "";

		// estado
		$this->estado->LinkCustomAttributes = "";
		$this->estado->HrefValue = "";
		$this->estado->TooltipValue = "";

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
				if ($this->Idreqprograma->Exportable) $Doc->ExportCaption($this->Idreqprograma);
				if ($this->fechasepara->Exportable) $Doc->ExportCaption($this->fechasepara);
				if ($this->fechalibre->Exportable) $Doc->ExportCaption($this->fechalibre);
				if ($this->fechapuesta->Exportable) $Doc->ExportCaption($this->fechapuesta);
				if ($this->idreq->Exportable) $Doc->ExportCaption($this->idreq);
				if ($this->idpase->Exportable) $Doc->ExportCaption($this->idpase);
				if ($this->idSistema->Exportable) $Doc->ExportCaption($this->idSistema);
				if ($this->idModulo->Exportable) $Doc->ExportCaption($this->idModulo);
				if ($this->codmenu->Exportable) $Doc->ExportCaption($this->codmenu);
				if ($this->codsubmenu->Exportable) $Doc->ExportCaption($this->codsubmenu);
				if ($this->opcion->Exportable) $Doc->ExportCaption($this->opcion);
				if ($this->idprog->Exportable) $Doc->ExportCaption($this->idprog);
				if ($this->revision->Exportable) $Doc->ExportCaption($this->revision);
				if ($this->desmodifi->Exportable) $Doc->ExportCaption($this->desmodifi);
				if ($this->pasarproduccion->Exportable) $Doc->ExportCaption($this->pasarproduccion);
				if ($this->nuevaRevision->Exportable) $Doc->ExportCaption($this->nuevaRevision);
				if ($this->idanalista->Exportable) $Doc->ExportCaption($this->idanalista);
				if ($this->estado->Exportable) $Doc->ExportCaption($this->estado);
			} else {
				if ($this->Idreqprograma->Exportable) $Doc->ExportCaption($this->Idreqprograma);
				if ($this->fechasepara->Exportable) $Doc->ExportCaption($this->fechasepara);
				if ($this->fechalibre->Exportable) $Doc->ExportCaption($this->fechalibre);
				if ($this->fechapuesta->Exportable) $Doc->ExportCaption($this->fechapuesta);
				if ($this->idreq->Exportable) $Doc->ExportCaption($this->idreq);
				if ($this->idpase->Exportable) $Doc->ExportCaption($this->idpase);
				if ($this->idSistema->Exportable) $Doc->ExportCaption($this->idSistema);
				if ($this->idModulo->Exportable) $Doc->ExportCaption($this->idModulo);
				if ($this->codmenu->Exportable) $Doc->ExportCaption($this->codmenu);
				if ($this->codsubmenu->Exportable) $Doc->ExportCaption($this->codsubmenu);
				if ($this->opcion->Exportable) $Doc->ExportCaption($this->opcion);
				if ($this->idprog->Exportable) $Doc->ExportCaption($this->idprog);
				if ($this->revision->Exportable) $Doc->ExportCaption($this->revision);
				if ($this->pasarproduccion->Exportable) $Doc->ExportCaption($this->pasarproduccion);
				if ($this->idanalista->Exportable) $Doc->ExportCaption($this->idanalista);
				if ($this->estado->Exportable) $Doc->ExportCaption($this->estado);
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
					if ($this->Idreqprograma->Exportable) $Doc->ExportField($this->Idreqprograma);
					if ($this->fechasepara->Exportable) $Doc->ExportField($this->fechasepara);
					if ($this->fechalibre->Exportable) $Doc->ExportField($this->fechalibre);
					if ($this->fechapuesta->Exportable) $Doc->ExportField($this->fechapuesta);
					if ($this->idreq->Exportable) $Doc->ExportField($this->idreq);
					if ($this->idpase->Exportable) $Doc->ExportField($this->idpase);
					if ($this->idSistema->Exportable) $Doc->ExportField($this->idSistema);
					if ($this->idModulo->Exportable) $Doc->ExportField($this->idModulo);
					if ($this->codmenu->Exportable) $Doc->ExportField($this->codmenu);
					if ($this->codsubmenu->Exportable) $Doc->ExportField($this->codsubmenu);
					if ($this->opcion->Exportable) $Doc->ExportField($this->opcion);
					if ($this->idprog->Exportable) $Doc->ExportField($this->idprog);
					if ($this->revision->Exportable) $Doc->ExportField($this->revision);
					if ($this->desmodifi->Exportable) $Doc->ExportField($this->desmodifi);
					if ($this->pasarproduccion->Exportable) $Doc->ExportField($this->pasarproduccion);
					if ($this->nuevaRevision->Exportable) $Doc->ExportField($this->nuevaRevision);
					if ($this->idanalista->Exportable) $Doc->ExportField($this->idanalista);
					if ($this->estado->Exportable) $Doc->ExportField($this->estado);
				} else {
					if ($this->Idreqprograma->Exportable) $Doc->ExportField($this->Idreqprograma);
					if ($this->fechasepara->Exportable) $Doc->ExportField($this->fechasepara);
					if ($this->fechalibre->Exportable) $Doc->ExportField($this->fechalibre);
					if ($this->fechapuesta->Exportable) $Doc->ExportField($this->fechapuesta);
					if ($this->idreq->Exportable) $Doc->ExportField($this->idreq);
					if ($this->idpase->Exportable) $Doc->ExportField($this->idpase);
					if ($this->idSistema->Exportable) $Doc->ExportField($this->idSistema);
					if ($this->idModulo->Exportable) $Doc->ExportField($this->idModulo);
					if ($this->codmenu->Exportable) $Doc->ExportField($this->codmenu);
					if ($this->codsubmenu->Exportable) $Doc->ExportField($this->codsubmenu);
					if ($this->opcion->Exportable) $Doc->ExportField($this->opcion);
					if ($this->idprog->Exportable) $Doc->ExportField($this->idprog);
					if ($this->revision->Exportable) $Doc->ExportField($this->revision);
					if ($this->pasarproduccion->Exportable) $Doc->ExportField($this->pasarproduccion);
					if ($this->idanalista->Exportable) $Doc->ExportField($this->idanalista);
					if ($this->estado->Exportable) $Doc->ExportField($this->estado);
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
	$rs =& $rsnew;

		// Enter your code here
		// To cancel, set return value to FALSE     

		global $conn;

		//verificar antes de insertar de que el programa no haya sido separado antes
		$cadena="select count(*) as cantx 
			from pp_reqprog 
			where pp_reqprog.estado= 1 
			and pp_reqprog.idprog = '". $rsnew['idprog'] ."'";
		$rslmo3 = $conn->Execute($cadena);
		$cant= $rslmo3->fields('cantx');
		$rslmo3->Close();
		if ($cant>0)
		{        
			$this->CancelMessage  = "El programa ya fue separado por otro analista";
			$this->CancelMessage .= "<br> tabla pp_reqprog";
			return FALSE;   
		}        
		$cadena="select count(*) as cantx 
				from pp_programas
				where pp_programas.idestprog = 1 
				and pp_programas.idprograma = '". $rsnew['idprog'] ."' ";
		$rslmo3 = $conn->Execute($cadena);
		$cant= $rslmo3->fields('cantx');
		$rslmo3->Close();
		if ($cant>0)
		{        
			$this->CancelMessage  = "El programa ya fue separado por otro analista";
			$this->CancelMessage .= "<br> tabla pp_programas";
			return FALSE;   
		}                                    
		return TRUE;  
	}

	// Row Inserted event
	function Row_Inserted($rsold, &$rsnew) {
	$rs =& $rsnew;

		//echo "Row Inserted"    
	global $conn; 
	$viene= "inserted";
	$Idreqprograma= $rsnew['Idreqprograma']; 
	$strSql="call pp_pa_progaltapaseexiste('". $viene ."', '". $Idreqprograma ."')";
	$AddRow = $conn->Execute($strSql);
	}        

	// Row Updating event
	function Row_Updating($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE
	//and pp_soli_pase_prod.idestadosolipuestaprod not in (1,9,11,14,15)";
	//bandeja = 1
	//devuelto = 11
	//desestimado = 9
	//bandeja fabrica=14
	//qa fabrica= 15
	//2 admservicio
	// 3 qa          
	//  4  jefeprod
	//   5 operador       
	//    13 dba     

	global $conn;
	$cadena="select count(*) as cantx       
			from pp_soli_pase_prod 
			where pp_soli_pase_prod.idpase= '". $rsold['idpase'] ."' 
			and pp_soli_pase_prod.idestadosolipuestaprod in (2,3,4,5,13)";                                         
	$rslmo3 = $conn->Execute($cadena);
	$cantx= $rslmo3->fields('cantx');
	$rslmo3->Close();       
	$cadena="SELECT pp_soli_pase_prod.CodUsuario,
			  pp_proydes.IdJefeProyecto 
			FROM pp_soli_pase_prod
			  INNER JOIN pp_proydes ON pp_proydes.IdProyDes = pp_soli_pase_prod.idProydes
			WHERE pp_soli_pase_prod.IdPase = '". $rsold['idpase'] ."'"; 
		$rslmo3 = $conn->Execute($cadena);
		$CodUsuario= $rslmo3->fields('CodUsuario');
		$IdJefeProyecto= $rslmo3->fields('IdJefeProyecto');        
		$rslmo3->Close();                                                          

	//lmo
	//no debe permitir editar si la solicitud no esta bloqueada o si no esta 
	// en bandeja o devuelta o  si no pertenece al analista que lo separo y si no esta en el proceso de producción

	if ( ($rsold['estado']<>1 
			or ($rsold['idanalista']<>CurrentUserID() and CurrentUserID()<> $CodUsuario and CurrentUserID()<> $IdJefeProyecto) 
			or $cantx==1) 
		and (CurrentUserLevel()<>-1))
	{
		$this->CancelMessage  = "No puedes actualizar el registro";

		//$this->CancelMessage .= "<br> porque ";
		return FALSE;
	}
		return TRUE;
	}

	// Row Updated event
	function Row_Updated($rsold, &$rsnew) {

		//echo "Row Updated";
	global $conn;
	$viene= "updated";
	$Idreqprograma= $rsold['Idreqprograma']; 
	$strSql="call pp_pa_progaltapaseexiste('". $viene ."', '". $Idreqprograma ."')";
	$AddRow = $conn->Execute($strSql);
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

	global $conn;
	$viene= "deleting";
	$Idreqprograma= $rs['Idreqprograma']; 
	$strSql="call pp_pa_progaltapaseexiste('". $viene ."', '". $Idreqprograma ."')";
	$AddRow = $conn->Execute($strSql);
		return TRUE;
	}  

	// Row Deleted event
	function Row_Deleted(&$rs) {

		//echo "Row Deleted";
	}

	// Email Sending event
	function Email_Sending(&$Email, &$Args) {

		//var_dump($Email); var_dump($Args); exit();  
		global $Page;
		global $conn;  

	/*
	  if ($Page->PageID == "add")// if Add page
	  {     
	  }   //fin de   if ($Page->PageID == "add") 
	  if ($Page->PageID == "edit") 
	  { 
	  }   //fin de   if ($Page->PageID == "edit") 
	*/
	  if ($Page->PageID == "add")// if Add page
	  {     
			$sFn = "txt/fuentesepara.txt";
			$sTable = 'Nueva Fuente Separada';
			$sSubject = "Nueva Fuente Separada";

			// Get key value   
			$sKey = "";        
			if ($sKey <> "") $sKey .= EW_COMPOSITE_KEY_SEPARATOR;
			$sKey .= $Args['rsnew']['Idreqprograma'];

	////halla los analistas desarrolladores, para comunicarles las fuentes que se separa
	//$cadena="SELECT Correo FROM pp_usuarios WHERE IdNivel IN (1,8,15) and pp_usuarios.activado='Y'";
	//$rslmo = $conn->Execute($cadena);
	//$destinatario= $rslmo->fields('Correo');
	//$rslmo->MoveNext();
	//while (!$rslmo->EOF) {
	//    $destinatario= $destinatario . ";" . $rslmo->fields('Correo');
	//    $rslmo->MoveNext();
	//}                  
	//$rslmo->Close();

	$cadena="SELECT GROUP_CONCAT(DISTINCT pp_usuarios.Correo SEPARATOR ';') as Correo FROM pp_usuarios WHERE pp_usuarios.IdNivel IN (1,8,15) and activado='Y'";
	$rslmo = $conn->Execute($cadena);  
	$destinatario = $rslmo->fields('Correo');         
	$rslmo->Close();     
	$cadena="SELECT pp_servicio.Servicio, pp_modulo.modulo, pp_programas.numero, pp_usuarios.login FROM pp_reqprog INNER JOIN pp_servicio ON IdServicio = pp_reqprog.idSistema INNER JOIN  pp_modulo ON pp_modulo.Idmodulo = pp_reqprog.idModulo INNER JOIN pp_programas ON pp_programas.idPrograma = pp_reqprog.idprog INNER JOIN pp_usuarios ON pp_usuarios.idUsuario = pp_reqprog.idanalista WHERE pp_reqprog.Idreqprograma = '". $sKey ."'";
	$rslmo = $conn->Execute($cadena);
		$sistema=  $rslmo->fields('Servicio');
		$modulo=  $rslmo->fields('modulo');
		$fuente=  $rslmo->fields('numero');
		$analista=  $rslmo->fields('login');
	$sSubject= $sSubject . " :  " . $sistema . "/" . $fuente ;
			$Email2 = new cEmail();
			$Email2->Load($sFn);
			$Email2->ReplaceSender(EW_SENDER_EMAIL); // Replace Sender
			$Email2->ReplaceRecipient($destinatario); // Replace Recipient
			$Email2->ReplaceSubject($sSubject); // Replace Subject
			$Email2->ReplaceContent("<!--sistema-->", $sistema);
			$Email2->ReplaceContent("<!--modulo-->", $modulo);
			$Email2->ReplaceContent("<!--fuente-->", $fuente);
			$Email2->ReplaceContent("<!--analista-->", $analista);
			$Email2->Charset = EW_EMAIL_CHARSET;
			$bEmailSent = $Email2->Send();
	  }   //fin de   if ($Page->PageID == "add")
	  if ($Page->PageID == "edit") 
	  { 
	  }   //fin de   if ($Page->PageID == "edit")
		return FALSE;
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
