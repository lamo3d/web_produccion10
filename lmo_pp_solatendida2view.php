<?php
if (session_id() == "") session_start(); // Initialize Session data
ob_start(); // Turn on output buffering
?>
<?php include_once "lmo_ewcfg10.php" ?>
<?php include_once "lmo_ewmysql10.php" ?>
<?php include_once "lmo_phpfn10.php" ?>
<?php include_once "lmo_pp_solatendida2info.php" ?>
<?php include_once "lmo_pp_usuariosinfo.php" ?>
<?php include_once "lmo_pp_view_proy_fechasinfo.php" ?>
<?php include_once "lmo_pp_view_revisiongridcls.php" ?>
<?php include_once "lmo_pp_view_tareasdiarias_sistemasgridcls.php" ?>
<?php include_once "lmo_userfn10.php" ?>
<?php

//
// Page class
//

$pp_solatendida2_view = NULL; // Initialize page object first

class cpp_solatendida2_view extends cpp_solatendida2 {

	// Page ID
	var $PageID = 'view';

	// Project ID
	var $ProjectID = "{0D972618-8D91-4265-B82F-423F1736064F}";

	// Table name
	var $TableName = 'pp_solatendida2';

	// Page object name
	var $PageObjName = 'pp_solatendida2_view';

	// Page name
	function PageName() {
		return ew_CurrentPage();
	}

	// Page URL
	function PageUrl() {
		$PageUrl = ew_CurrentPage() . "?";
		if ($this->UseTokenInUrl) $PageUrl .= "t=" . $this->TableVar . "&"; // Add page token
		return $PageUrl;
	}

	// Page URLs
	var $AddUrl;
	var $EditUrl;
	var $CopyUrl;
	var $DeleteUrl;
	var $ViewUrl;
	var $ListUrl;

	// Export URLs
	var $ExportPrintUrl;
	var $ExportHtmlUrl;
	var $ExportExcelUrl;
	var $ExportWordUrl;
	var $ExportXmlUrl;
	var $ExportCsvUrl;
	var $ExportPdfUrl;

	// Update URLs
	var $InlineAddUrl;
	var $InlineCopyUrl;
	var $InlineEditUrl;
	var $GridAddUrl;
	var $GridEditUrl;
	var $MultiDeleteUrl;
	var $MultiUpdateUrl;

	// Message
	function getMessage() {
		return @$_SESSION[EW_SESSION_MESSAGE];
	}

	function setMessage($v) {
		ew_AddMessage($_SESSION[EW_SESSION_MESSAGE], $v);
	}

	function getFailureMessage() {
		return @$_SESSION[EW_SESSION_FAILURE_MESSAGE];
	}

	function setFailureMessage($v) {
		ew_AddMessage($_SESSION[EW_SESSION_FAILURE_MESSAGE], $v);
	}

	function getSuccessMessage() {
		return @$_SESSION[EW_SESSION_SUCCESS_MESSAGE];
	}

	function setSuccessMessage($v) {
		ew_AddMessage($_SESSION[EW_SESSION_SUCCESS_MESSAGE], $v);
	}

	function getWarningMessage() {
		return @$_SESSION[EW_SESSION_WARNING_MESSAGE];
	}

	function setWarningMessage($v) {
		ew_AddMessage($_SESSION[EW_SESSION_WARNING_MESSAGE], $v);
	}

	// Show message
	function ShowMessage() {
		$hidden = FALSE;
		$html = "";

		// Message
		$sMessage = $this->getMessage();
		$this->Message_Showing($sMessage, "");
		if ($sMessage <> "") { // Message in Session, display
			if (!$hidden)
				$sMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sMessage;
			$html .= "<div class=\"alert alert-success ewSuccess\">" . $sMessage . "</div>";
			$_SESSION[EW_SESSION_MESSAGE] = ""; // Clear message in Session
		}

		// Warning message
		$sWarningMessage = $this->getWarningMessage();
		$this->Message_Showing($sWarningMessage, "warning");
		if ($sWarningMessage <> "") { // Message in Session, display
			if (!$hidden)
				$sWarningMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sWarningMessage;
			$html .= "<div class=\"alert alert-warning ewWarning\">" . $sWarningMessage . "</div>";
			$_SESSION[EW_SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
		}

		// Success message
		$sSuccessMessage = $this->getSuccessMessage();
		$this->Message_Showing($sSuccessMessage, "success");
		if ($sSuccessMessage <> "") { // Message in Session, display
			if (!$hidden)
				$sSuccessMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sSuccessMessage;
			$html .= "<div class=\"alert alert-success ewSuccess\">" . $sSuccessMessage . "</div>";
			$_SESSION[EW_SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
		}

		// Failure message
		$sErrorMessage = $this->getFailureMessage();
		$this->Message_Showing($sErrorMessage, "failure");
		if ($sErrorMessage <> "") { // Message in Session, display
			if (!$hidden)
				$sErrorMessage = "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $sErrorMessage;
			$html .= "<div class=\"alert alert-error ewError\">" . $sErrorMessage . "</div>";
			$_SESSION[EW_SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
		}
		echo "<table class=\"ewStdTable\"><tr><td><div class=\"ewMessageDialog\"" . (($hidden) ? " style=\"display: none;\"" : "") . ">" . $html . "</div></td></tr></table>";
	}
	var $PageHeader;
	var $PageFooter;

	// Show Page Header
	function ShowPageHeader() {
		$sHeader = $this->PageHeader;
		$this->Page_DataRendering($sHeader);
		if ($sHeader <> "") { // Header exists, display
			echo "<p>" . $sHeader . "</p>";
		}
	}

	// Show Page Footer
	function ShowPageFooter() {
		$sFooter = $this->PageFooter;
		$this->Page_DataRendered($sFooter);
		if ($sFooter <> "") { // Footer exists, display
			echo "<p>" . $sFooter . "</p>";
		}
	}

	// Validate page request
	function IsPageRequest() {
		global $objForm;
		if ($this->UseTokenInUrl) {
			if ($objForm)
				return ($this->TableVar == $objForm->GetValue("t"));
			if (@$_GET["t"] <> "")
				return ($this->TableVar == $_GET["t"]);
		} else {
			return TRUE;
		}
	}

	//
	// Page class constructor
	//
	function __construct() {
		global $conn, $Language;
		$GLOBALS["Page"] = &$this;

		// Language object
		if (!isset($Language)) $Language = new cLanguage();

		// Parent constuctor
		parent::__construct();

		// Table object (pp_solatendida2)
		if (!isset($GLOBALS["pp_solatendida2"]) || get_class($GLOBALS["pp_solatendida2"]) == "cpp_solatendida2") {
			$GLOBALS["pp_solatendida2"] = &$this;
			$GLOBALS["Table"] = &$GLOBALS["pp_solatendida2"];
		}
		$KeyUrl = "";
		if (@$_GET["IdPase"] <> "") {
			$this->RecKey["IdPase"] = $_GET["IdPase"];
			$KeyUrl .= "&amp;IdPase=" . urlencode($this->RecKey["IdPase"]);
		}
		$this->ExportPrintUrl = $this->PageUrl() . "export=print" . $KeyUrl;
		$this->ExportHtmlUrl = $this->PageUrl() . "export=html" . $KeyUrl;
		$this->ExportExcelUrl = $this->PageUrl() . "export=excel" . $KeyUrl;
		$this->ExportWordUrl = $this->PageUrl() . "export=word" . $KeyUrl;
		$this->ExportXmlUrl = $this->PageUrl() . "export=xml" . $KeyUrl;
		$this->ExportCsvUrl = $this->PageUrl() . "export=csv" . $KeyUrl;
		$this->ExportPdfUrl = $this->PageUrl() . "export=pdf" . $KeyUrl;

		// Table object (pp_usuarios)
		if (!isset($GLOBALS['pp_usuarios'])) $GLOBALS['pp_usuarios'] = new cpp_usuarios();

		// Table object (pp_view_proy_fechas)
		if (!isset($GLOBALS['pp_view_proy_fechas'])) $GLOBALS['pp_view_proy_fechas'] = new cpp_view_proy_fechas();

		// Page ID
		if (!defined("EW_PAGE_ID"))
			define("EW_PAGE_ID", 'view', TRUE);

		// Table name (for backward compatibility)
		if (!defined("EW_TABLE_NAME"))
			define("EW_TABLE_NAME", 'pp_solatendida2', TRUE);

		// Start timer
		if (!isset($GLOBALS["gTimer"])) $GLOBALS["gTimer"] = new cTimer();

		// Open connection
		if (!isset($conn)) $conn = ew_Connect();

		// Export options
		$this->ExportOptions = new cListOptions();
		$this->ExportOptions->Tag = "div";
		$this->ExportOptions->TagClassName = "ewExportOption";

		// Other options
		$this->OtherOptions['action'] = new cListOptions();
		$this->OtherOptions['action']->Tag = "div";
		$this->OtherOptions['action']->TagClassName = "ewActionOption";
		$this->OtherOptions['detail'] = new cListOptions();
		$this->OtherOptions['detail']->Tag = "div";
		$this->OtherOptions['detail']->TagClassName = "ewDetailOption";
	}

	// 
	//  Page_Init
	//
	function Page_Init() {
		global $gsExport, $gsExportFile, $UserProfile, $Language, $Security, $objForm;

		// User profile
		$UserProfile = new cUserProfile();
		$UserProfile->LoadProfile(@$_SESSION[EW_SESSION_USER_PROFILE]);

		// Security
		$Security = new cAdvancedSecurity();
		if (IsPasswordExpired())
			$this->Page_Terminate("lmo_changepwd.php");
		if (!$Security->IsLoggedIn()) $Security->AutoLogin();
		if (!$Security->IsLoggedIn()) {
			$Security->SaveLastUrl();
			$this->Page_Terminate("lmo_login.php");
		}
		$Security->TablePermission_Loading();
		$Security->LoadCurrentUserLevel($this->ProjectID . $this->TableName);
		$Security->TablePermission_Loaded();
		if (!$Security->IsLoggedIn()) {
			$Security->SaveLastUrl();
			$this->Page_Terminate("lmo_login.php");
		}
		if (!$Security->CanView()) {
			$Security->SaveLastUrl();
			$this->setFailureMessage($Language->Phrase("NoPermission")); // Set no permission
			$this->Page_Terminate("lmo_pp_solatendida2list.php");
		}
		$Security->UserID_Loading();
		if ($Security->IsLoggedIn()) $Security->LoadUserID();
		$Security->UserID_Loaded();

		// Get export parameters
		if (@$_GET["export"] <> "") {
			$this->Export = $_GET["export"];
		} elseif (ew_IsHttpPost()) {
			if (@$_POST["exporttype"] <> "")
				$this->Export = $_POST["exporttype"];
		} else {
			$this->setExportReturnUrl(ew_CurrentUrl());
		}
		$gsExport = $this->Export; // Get export parameter, used in header
		$gsExportFile = $this->TableVar; // Get export file, used in header
		if (@$_GET["IdPase"] <> "") {
			if ($gsExportFile <> "") $gsExportFile .= "_";
			$gsExportFile .= ew_StripSlashes($_GET["IdPase"]);
		}
		$this->CurrentAction = (@$_GET["a"] <> "") ? $_GET["a"] : @$_POST["a_list"]; // Set up current action

		// Setup export options
		$this->SetupExportOptions();
		$this->IdPase->Visible = !$this->IsAdd() && !$this->IsCopy() && !$this->IsGridAdd();

		// Global Page Loading event (in userfn*.php)
		Page_Loading();

		// Page Load event
		$this->Page_Load();

		// Update url if printer friendly for Pdf
		if ($this->PrinterFriendlyForPdf)
			$this->ExportOptions->Items["pdf"]->Body = str_replace($this->ExportPdfUrl, $this->ExportPrintUrl . "&pdf=1", $this->ExportOptions->Items["pdf"]->Body);
	}

	//
	// Page_Terminate
	//
	function Page_Terminate($url = "") {
		global $conn;

		// Page Unload event
		$this->Page_Unload();
		if ($this->Export == "print" && @$_GET["pdf"] == "1") { // Printer friendly version and with pdf=1 in URL parameters
			$pdf = new cExportPdf($GLOBALS["Table"]);
			$pdf->Text = ob_get_contents(); // Set the content as the HTML of current page (printer friendly version)
			ob_end_clean();
			$pdf->Export();
		}

		// Global Page Unloaded event (in userfn*.php)
		Page_Unloaded();
		$this->Page_Redirecting($url);

		 // Close connection
		$conn->Close();

		// Go to URL if specified
		if ($url <> "") {
			if (!EW_DEBUG_ENABLED && ob_get_length())
				ob_end_clean();
			header("Location: " . $url);
		}
		exit();
	}
	var $ExportOptions; // Export options
	var $OtherOptions = array(); // Other options
	var $DisplayRecs = 1;
	var $StartRec;
	var $StopRec;
	var $TotalRecs = 0;
	var $RecRange = 10;
	var $Pager;
	var $RecCnt;
	var $RecKey = array();
	var $pp_view_revision_Count;
	var $pp_view_tareasdiarias_sistemas_Count;
	var $Recordset;

	//
	// Page main
	//
	function Page_Main() {
		global $Language;

		// Load current record
		$bLoadCurrentRecord = FALSE;
		$sReturnUrl = "";
		$bMatchRecord = FALSE;

		// Set up Breadcrumb
		if ($this->Export == "")
			$this->SetupBreadcrumb();
		if ($this->IsPageRequest()) { // Validate request
			if (@$_GET["IdPase"] <> "") {
				$this->IdPase->setQueryStringValue($_GET["IdPase"]);
				$this->RecKey["IdPase"] = $this->IdPase->QueryStringValue;
			} else {
				$bLoadCurrentRecord = TRUE;
			}

			// Get action
			$this->CurrentAction = "I"; // Display form
			switch ($this->CurrentAction) {
				case "I": // Get a record to display
					$this->StartRec = 1; // Initialize start position
					if ($this->Recordset = $this->LoadRecordset()) // Load records
						$this->TotalRecs = $this->Recordset->RecordCount(); // Get record count
					if ($this->TotalRecs <= 0) { // No record found
						if ($this->getSuccessMessage() == "" && $this->getFailureMessage() == "")
							$this->setFailureMessage($Language->Phrase("NoRecord")); // Set no record message
						$this->Page_Terminate("lmo_pp_solatendida2list.php"); // Return to list page
					} elseif ($bLoadCurrentRecord) { // Load current record position
						$this->SetUpStartRec(); // Set up start record position

						// Point to current record
						if (intval($this->StartRec) <= intval($this->TotalRecs)) {
							$bMatchRecord = TRUE;
							$this->Recordset->Move($this->StartRec-1);
						}
					} else { // Match key values
						while (!$this->Recordset->EOF) {
							if (strval($this->IdPase->CurrentValue) == strval($this->Recordset->fields('IdPase'))) {
								$this->setStartRecordNumber($this->StartRec); // Save record position
								$bMatchRecord = TRUE;
								break;
							} else {
								$this->StartRec++;
								$this->Recordset->MoveNext();
							}
						}
					}
					if (!$bMatchRecord) {
						if ($this->getSuccessMessage() == "" && $this->getFailureMessage() == "")
							$this->setFailureMessage($Language->Phrase("NoRecord")); // Set no record message
						$sReturnUrl = "lmo_pp_solatendida2list.php"; // No matching record, return to list
					} else {
						$this->LoadRowValues($this->Recordset); // Load row values
					}
			}

			// Export data only
			if (in_array($this->Export, array("html","word","excel","xml","csv","email","pdf"))) {
				$this->ExportData();
				$this->Page_Terminate(); // Terminate response
				exit();
			}
		} else {
			$sReturnUrl = "lmo_pp_solatendida2list.php"; // Not page request, return to list
		}
		if ($sReturnUrl <> "")
			$this->Page_Terminate($sReturnUrl);

		// Render row
		$this->RowType = EW_ROWTYPE_VIEW;
		$this->ResetAttrs();
		$this->RenderRow();

		// Set up detail parameters
		$this->SetUpDetailParms();
	}

	// Set up other options
	function SetupOtherOptions() {
		global $Language, $Security;
		$options = &$this->OtherOptions;
		$option = &$options["action"];

		// Edit
		$item = &$option->Add("edit");
		$item->Body = "<a class=\"ewAction ewEdit\" href=\"" . ew_HtmlEncode($this->EditUrl) . "\">" . $Language->Phrase("ViewPageEditLink") . "</a>";

		//lmo $item->Visible = ($this->EditUrl <> "" && $Security->CanEdit());
		$item->Visible = False;		
		$DetailTableLink = "";
		$option = &$options["detail"];

		// Detail table 'pp_view_revision'
		$body = $Language->TablePhrase("pp_view_revision", "TblCaption");
		$body .= str_replace("%c", $this->pp_view_revision_Count, $Language->Phrase("DetailCount"));
		$body = "<a class=\"ewAction ewDetailList\" href=\"" . ew_HtmlEncode("lmo_pp_view_revisionlist.php?" . EW_TABLE_SHOW_MASTER . "=pp_solatendida2&IdPase=" . strval($this->IdPase->CurrentValue) . "") . "\">" . $body . "</a>";
		$item = &$option->Add("detail_pp_view_revision");
		$item->Body = $body;
		$item->Visible = $Security->AllowList(CurrentProjectID() . 'pp_view_revision');
		if ($item->Visible) {
			if ($DetailTableLink <> "") $DetailTableLink .= ",";
			$DetailTableLink .= "pp_view_revision";
		}

		// Detail table 'pp_view_tareasdiarias_sistemas'
		$body = $Language->TablePhrase("pp_view_tareasdiarias_sistemas", "TblCaption");
		$body .= str_replace("%c", $this->pp_view_tareasdiarias_sistemas_Count, $Language->Phrase("DetailCount"));
		$body = "<a class=\"ewAction ewDetailList\" href=\"" . ew_HtmlEncode("lmo_pp_view_tareasdiarias_sistemaslist.php?" . EW_TABLE_SHOW_MASTER . "=pp_solatendida2&IdPase=" . strval($this->IdPase->CurrentValue) . "") . "\">" . $body . "</a>";
		$item = &$option->Add("detail_pp_view_tareasdiarias_sistemas");
		$item->Body = $body;
		$item->Visible = $Security->AllowList(CurrentProjectID() . 'pp_view_tareasdiarias_sistemas');
		if ($item->Visible) {
			if ($DetailTableLink <> "") $DetailTableLink .= ",";
			$DetailTableLink .= "pp_view_tareasdiarias_sistemas";
		}

		// Multiple details
		if ($this->ShowMultipleDetails) {
			$body = $Language->Phrase("MultipleMasterDetails");
			$body = "<a class=\"ewAction ewDetailView\" data-action=\"view\" href=\"" . ew_HtmlEncode($this->GetViewUrl(EW_TABLE_SHOW_DETAIL . "=" . $DetailTableLink)) . "\">" . $body . "</a>";
			$item = &$option->Add("details");
			$item->Body = $body;
			$item->Visible = ($DetailTableLink <> "");

			// Hide single master/detail items
			$ar = explode(",", $DetailTableLink);
			$cnt = count($ar);
			for ($i = 0; $i < $cnt; $i++) {
				if ($item = &$option->GetItem("detail_" . $ar[$i]))
					$item->Visible = FALSE;
			}
		}

		// Set up options default
		foreach ($options as &$option) {
			$option->UseDropDownButton = FALSE;
			$option->UseButtonGroup = TRUE;
			$item = &$option->Add($option->GroupOptionName);
			$item->Body = "";
			$item->Visible = FALSE;
		}
		$options["detail"]->DropDownButtonPhrase = $Language->Phrase("ButtonDetails");
		$options["action"]->DropDownButtonPhrase = $Language->Phrase("ButtonActions");
	}

	// Set up starting record parameters
	function SetUpStartRec() {
		if ($this->DisplayRecs == 0)
			return;
		if ($this->IsPageRequest()) { // Validate request
			if (@$_GET[EW_TABLE_START_REC] <> "") { // Check for "start" parameter
				$this->StartRec = $_GET[EW_TABLE_START_REC];
				$this->setStartRecordNumber($this->StartRec);
			} elseif (@$_GET[EW_TABLE_PAGE_NO] <> "") {
				$PageNo = $_GET[EW_TABLE_PAGE_NO];
				if (is_numeric($PageNo)) {
					$this->StartRec = ($PageNo-1)*$this->DisplayRecs+1;
					if ($this->StartRec <= 0) {
						$this->StartRec = 1;
					} elseif ($this->StartRec >= intval(($this->TotalRecs-1)/$this->DisplayRecs)*$this->DisplayRecs+1) {
						$this->StartRec = intval(($this->TotalRecs-1)/$this->DisplayRecs)*$this->DisplayRecs+1;
					}
					$this->setStartRecordNumber($this->StartRec);
				}
			}
		}
		$this->StartRec = $this->getStartRecordNumber();

		// Check if correct start record counter
		if (!is_numeric($this->StartRec) || $this->StartRec == "") { // Avoid invalid start record counter
			$this->StartRec = 1; // Reset start record counter
			$this->setStartRecordNumber($this->StartRec);
		} elseif (intval($this->StartRec) > intval($this->TotalRecs)) { // Avoid starting record > total records
			$this->StartRec = intval(($this->TotalRecs-1)/$this->DisplayRecs)*$this->DisplayRecs+1; // Point to last page first record
			$this->setStartRecordNumber($this->StartRec);
		} elseif (($this->StartRec-1) % $this->DisplayRecs <> 0) {
			$this->StartRec = intval(($this->StartRec-1)/$this->DisplayRecs)*$this->DisplayRecs+1; // Point to page boundary
			$this->setStartRecordNumber($this->StartRec);
		}
	}

	// Load recordset
	function LoadRecordset($offset = -1, $rowcnt = -1) {
		global $conn;

		// Call Recordset Selecting event
		$this->Recordset_Selecting($this->CurrentFilter);

		// Load List page SQL
		$sSql = $this->SelectSQL();
		if ($offset > -1 && $rowcnt > -1)
			$sSql .= " LIMIT $rowcnt OFFSET $offset";

		// Load recordset
		$rs = ew_LoadRecordset($sSql);

		// Call Recordset Selected event
		$this->Recordset_Selected($rs);
		return $rs;
	}

	// Load row based on key values
	function LoadRow() {
		global $conn, $Security, $Language;
		$sFilter = $this->KeyFilter();

		// Call Row Selecting event
		$this->Row_Selecting($sFilter);

		// Load SQL based on filter
		$this->CurrentFilter = $sFilter;
		$sSql = $this->SQL();
		$res = FALSE;
		$rs = ew_LoadRecordset($sSql);
		if ($rs && !$rs->EOF) {
			$res = TRUE;
			$this->LoadRowValues($rs); // Load row values
			$rs->Close();
		}
		return $res;
	}

	// Load row values from recordset
	function LoadRowValues(&$rs) {
		global $conn;
		if (!$rs || $rs->EOF) return;

		// Call Row Selected event
		$row = &$rs->fields;
		$this->Row_Selected($row);
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
		$this->Adjuntos->CurrentValue = $this->Adjuntos->Upload->DbValue;
		$this->stores->Upload->DbValue = $rs->fields('stores');
		$this->stores->CurrentValue = $this->stores->Upload->DbValue;
		$this->ejecutables->Upload->DbValue = $rs->fields('ejecutables');
		$this->ejecutables->CurrentValue = $this->ejecutables->Upload->DbValue;
		$this->SolicitudDesarrollo->Upload->DbValue = $rs->fields('SolicitudDesarrollo');
		$this->SolicitudDesarrollo->CurrentValue = $this->SolicitudDesarrollo->Upload->DbValue;
		$this->doc_especifuncionales->Upload->DbValue = $rs->fields('doc_especifuncionales');
		$this->doc_especifuncionales->CurrentValue = $this->doc_especifuncionales->Upload->DbValue;
		$this->PlanPruebas->Upload->DbValue = $rs->fields('PlanPruebas');
		$this->PlanPruebas->CurrentValue = $this->PlanPruebas->Upload->DbValue;
		$this->DiagramaER->Upload->DbValue = $rs->fields('DiagramaER');
		$this->DiagramaER->CurrentValue = $this->DiagramaER->Upload->DbValue;
		$this->ManualUsuario->Upload->DbValue = $rs->fields('ManualUsuario');
		$this->ManualUsuario->CurrentValue = $this->ManualUsuario->Upload->DbValue;
		$this->DiagramaProcesos->Upload->DbValue = $rs->fields('DiagramaProcesos');
		$this->DiagramaProcesos->CurrentValue = $this->DiagramaProcesos->Upload->DbValue;
		$this->DiccionarioDatos->Upload->DbValue = $rs->fields('DiccionarioDatos');
		$this->DiccionarioDatos->CurrentValue = $this->DiccionarioDatos->Upload->DbValue;
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
		if (!isset($GLOBALS["pp_view_revision_grid"])) $GLOBALS["pp_view_revision_grid"] = new cpp_view_revision_grid;
		$sDetailFilter = $GLOBALS["pp_view_revision"]->SqlDetailFilter_pp_solatendida2();
		$sDetailFilter = str_replace("@IdPase@", ew_AdjustSql($this->IdPase->DbValue), $sDetailFilter);
		$GLOBALS["pp_view_revision"]->setCurrentMasterTable("pp_solatendida2");
		$sDetailFilter = $GLOBALS["pp_view_revision"]->ApplyUserIDFilters($sDetailFilter);
		$this->pp_view_revision_Count = $GLOBALS["pp_view_revision"]->LoadRecordCount($sDetailFilter);
		if (!isset($GLOBALS["pp_view_tareasdiarias_sistemas_grid"])) $GLOBALS["pp_view_tareasdiarias_sistemas_grid"] = new cpp_view_tareasdiarias_sistemas_grid;
		$sDetailFilter = $GLOBALS["pp_view_tareasdiarias_sistemas"]->SqlDetailFilter_pp_solatendida2();
		$sDetailFilter = str_replace("@idpase@", ew_AdjustSql($this->IdPase->DbValue), $sDetailFilter);
		$GLOBALS["pp_view_tareasdiarias_sistemas"]->setCurrentMasterTable("pp_solatendida2");
		$sDetailFilter = $GLOBALS["pp_view_tareasdiarias_sistemas"]->ApplyUserIDFilters($sDetailFilter);
		$this->pp_view_tareasdiarias_sistemas_Count = $GLOBALS["pp_view_tareasdiarias_sistemas"]->LoadRecordCount($sDetailFilter);
	}

	// Load DbValue from recordset
	function LoadDbValues(&$rs) {
		if (!$rs || !is_array($rs) && $rs->EOF) return;
		$row = is_array($rs) ? $rs : $rs->fields;
		$this->IdPase->DbValue = $row['IdPase'];
		$this->Proyecto->DbValue = $row['Proyecto'];
		$this->idProydes->DbValue = $row['idProydes'];
		$this->IdSoliDesarrollo->DbValue = $row['IdSoliDesarrollo'];
		$this->CodHelpDesk->DbValue = $row['CodHelpDesk'];
		$this->IdRevisaSolicitud->DbValue = $row['IdRevisaSolicitud'];
		$this->id_tipopoa->DbValue = $row['id_tipopoa'];
		$this->Tipo->DbValue = $row['Tipo'];
		$this->idTipo2->DbValue = $row['idTipo2'];
		$this->Fecha->DbValue = $row['Fecha'];
		$this->fechapase_ss->DbValue = $row['fechapase_ss'];
		$this->FechaSolicitud->DbValue = $row['FechaSolicitud'];
		$this->FechaRequerida->DbValue = $row['FechaRequerida'];
		$this->FechaRequerimiento_log->DbValue = $row['FechaRequerimiento_log'];
		$this->FechaProgramacion->DbValue = $row['FechaProgramacion'];
		$this->FechaInicio->DbValue = $row['FechaInicio'];
		$this->FechaAnalisisFin->DbValue = $row['FechaAnalisisFin'];
		$this->FechaDesarrolloInicio->DbValue = $row['FechaDesarrolloInicio'];
		$this->FechaDesarrolloFin->DbValue = $row['FechaDesarrolloFin'];
		$this->FechaPruebasInicio->DbValue = $row['FechaPruebasInicio'];
		$this->FechaTerminoPropuesto->DbValue = $row['FechaTerminoPropuesto'];
		$this->FechaQAInicio->DbValue = $row['FechaQAInicio'];
		$this->FechaTerminoQA->DbValue = $row['FechaTerminoQA'];
		$this->FechaPruebasUserInicio->DbValue = $row['FechaPruebasUserInicio'];
		$this->FechaPruebasUserFin->DbValue = $row['FechaPruebasUserFin'];
		$this->FechaPuesta->DbValue = $row['FechaPuesta'];
		$this->FechaTermino->DbValue = $row['FechaTermino'];
		$this->FechaUltimoPase->DbValue = $row['FechaUltimoPase'];
		$this->FechaUltimaTareaDiaria->DbValue = $row['FechaUltimaTareaDiaria'];
		$this->Titulo->DbValue = $row['Titulo'];
		$this->idempresa->DbValue = $row['idempresa'];
		$this->IdArea->DbValue = $row['IdArea'];
		$this->CodServicio->DbValue = $row['CodServicio'];
		$this->idProceso->DbValue = $row['idProceso'];
		$this->idSubProceso->DbValue = $row['idSubProceso'];
		$this->IdMotivo->DbValue = $row['IdMotivo'];
		$this->Prioridad->DbValue = $row['Prioridad'];
		$this->TipoSolicitud->DbValue = $row['TipoSolicitud'];
		$this->CerrarRequerimiento->DbValue = $row['CerrarRequerimiento'];
		$this->empresa_costo->DbValue = $row['empresa_costo'];
		$this->horasdesarrollo->DbValue = $row['horasdesarrollo'];
		$this->horasdesarrollo_ss->DbValue = $row['horasdesarrollo_ss'];
		$this->CodUsuarioLider->DbValue = $row['CodUsuarioLider'];
		$this->IdGerenteSolicitante->DbValue = $row['IdGerenteSolicitante'];
		$this->CodUsuario->DbValue = $row['CodUsuario'];
		$this->IdJefeProyecto->DbValue = $row['IdJefeProyecto'];
		$this->idproveedor->DbValue = $row['idproveedor'];
		$this->idanalista_ss->DbValue = $row['idanalista_ss'];
		$this->idjefeproy_ss->DbValue = $row['idjefeproy_ss'];
		$this->Descripcion->DbValue = $row['Descripcion'];
		$this->Instrucciones->DbValue = $row['Instrucciones'];
		$this->ArchAdjuntos->DbValue = $row['ArchAdjuntos'];
		$this->querys->DbValue = $row['querys'];
		$this->Adjuntos->Upload->DbValue = $row['Adjuntos'];
		$this->stores->Upload->DbValue = $row['stores'];
		$this->ejecutables->Upload->DbValue = $row['ejecutables'];
		$this->SolicitudDesarrollo->Upload->DbValue = $row['SolicitudDesarrollo'];
		$this->doc_especifuncionales->Upload->DbValue = $row['doc_especifuncionales'];
		$this->PlanPruebas->Upload->DbValue = $row['PlanPruebas'];
		$this->DiagramaER->Upload->DbValue = $row['DiagramaER'];
		$this->ManualUsuario->Upload->DbValue = $row['ManualUsuario'];
		$this->DiagramaProcesos->Upload->DbValue = $row['DiagramaProcesos'];
		$this->DiccionarioDatos->Upload->DbValue = $row['DiccionarioDatos'];
		$this->tittuReque->DbValue = $row['tittuReque'];
		$this->desreque->DbValue = $row['desreque'];
		$this->Beneficios->DbValue = $row['Beneficios'];
		$this->Objetivo->DbValue = $row['Objetivo'];
		$this->FuncOperativa->DbValue = $row['FuncOperativa'];
		$this->GestionControl->DbValue = $row['GestionControl'];
		$this->ReferLegal->DbValue = $row['ReferLegal'];
		$this->AreasRelacionadas->DbValue = $row['AreasRelacionadas'];
		$this->Observaciones->DbValue = $row['Observaciones'];
		$this->fechaRevisaJRO->DbValue = $row['fechaRevisaJRO'];
		$this->JefeRiesgoOperativo->DbValue = $row['JefeRiesgoOperativo'];
		$this->Impacto->DbValue = $row['Impacto'];
		$this->Participacion->DbValue = $row['Participacion'];
		$this->Justificativa->DbValue = $row['Justificativa'];
		$this->Recomendacion->DbValue = $row['Recomendacion'];
		$this->Roles->DbValue = $row['Roles'];
		$this->fecha_asigna_qa->DbValue = $row['fecha_asigna_qa'];
		$this->id_qa->DbValue = $row['id_qa'];
		$this->observaciones_qa->DbValue = $row['observaciones_qa'];
		$this->IdEstadoSoliPuestaProd->DbValue = $row['IdEstadoSoliPuestaProd'];
		$this->cant_dias_analisis->DbValue = $row['cant_dias_analisis'];
		$this->cant_dias_desarrollo->DbValue = $row['cant_dias_desarrollo'];
		$this->cant_dias_pruebas->DbValue = $row['cant_dias_pruebas'];
		$this->cant_dias_qa->DbValue = $row['cant_dias_qa'];
		$this->cant_dias_prueba_user->DbValue = $row['cant_dias_prueba_user'];
		$this->avance_analisis_real->DbValue = $row['avance_analisis_real'];
		$this->avance_desarrollo_real->DbValue = $row['avance_desarrollo_real'];
		$this->avance_pruebas_real->DbValue = $row['avance_pruebas_real'];
		$this->avance_qa_real->DbValue = $row['avance_qa_real'];
		$this->avance_analisis_plan->DbValue = $row['avance_analisis_plan'];
		$this->avance_desarrollo_plan->DbValue = $row['avance_desarrollo_plan'];
		$this->avance_pruebas_plan->DbValue = $row['avance_pruebas_plan'];
		$this->avance_qa_plan->DbValue = $row['avance_qa_plan'];
		$this->dias_anticipacion->DbValue = $row['dias_anticipacion'];
		$this->veces_mod_findes->DbValue = $row['veces_mod_findes'];
		$this->dias_analisis_td->DbValue = $row['dias_analisis_td'];
		$this->dias_desarrollo_td->DbValue = $row['dias_desarrollo_td'];
		$this->dias_pruebas_td->DbValue = $row['dias_pruebas_td'];
		$this->dias_qa_td->DbValue = $row['dias_qa_td'];
		$this->ObsGestion->DbValue = $row['ObsGestion'];
		$this->ObsTareasDiairias->DbValue = $row['ObsTareasDiairias'];
		$this->Duracion->DbValue = $row['Duracion'];
		$this->PorcCompletado->DbValue = $row['PorcCompletado'];
		$this->PorcProyectado->DbValue = $row['PorcProyectado'];
		$this->PorcDiferencia->DbValue = $row['PorcDiferencia'];
	}

	// Render row values based on field settings
	function RenderRow() {
		global $conn, $Security, $Language;
		global $gsLanguage;

		// Initialize URLs
		$this->AddUrl = $this->GetAddUrl();
		$this->EditUrl = $this->GetEditUrl();
		$this->CopyUrl = $this->GetCopyUrl();
		$this->DeleteUrl = $this->GetDeleteUrl();
		$this->ListUrl = $this->GetListUrl();
		$this->SetupOtherOptions();

		// Convert decimal values if posted back
		if ($this->dias_analisis_td->FormValue == $this->dias_analisis_td->CurrentValue && is_numeric(ew_StrToFloat($this->dias_analisis_td->CurrentValue)))
			$this->dias_analisis_td->CurrentValue = ew_StrToFloat($this->dias_analisis_td->CurrentValue);

		// Convert decimal values if posted back
		if ($this->dias_desarrollo_td->FormValue == $this->dias_desarrollo_td->CurrentValue && is_numeric(ew_StrToFloat($this->dias_desarrollo_td->CurrentValue)))
			$this->dias_desarrollo_td->CurrentValue = ew_StrToFloat($this->dias_desarrollo_td->CurrentValue);

		// Convert decimal values if posted back
		if ($this->dias_pruebas_td->FormValue == $this->dias_pruebas_td->CurrentValue && is_numeric(ew_StrToFloat($this->dias_pruebas_td->CurrentValue)))
			$this->dias_pruebas_td->CurrentValue = ew_StrToFloat($this->dias_pruebas_td->CurrentValue);

		// Convert decimal values if posted back
		if ($this->dias_qa_td->FormValue == $this->dias_qa_td->CurrentValue && is_numeric(ew_StrToFloat($this->dias_qa_td->CurrentValue)))
			$this->dias_qa_td->CurrentValue = ew_StrToFloat($this->dias_qa_td->CurrentValue);

		// Call Row_Rendering event
		$this->Row_Rendering();

		// Common render codes for all row types
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

		if ($this->RowType == EW_ROWTYPE_VIEW) { // View row

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
			$this->Titulo->LinkAttrs["data-tooltip-id"] = "tt_pp_solatendida2_x_Titulo";
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
			$this->id_qa->LinkAttrs["data-tooltip-id"] = "tt_pp_solatendida2_x_id_qa";
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
		}

		// Call Row Rendered event
		if ($this->RowType <> EW_ROWTYPE_AGGREGATEINIT)
			$this->Row_Rendered();
	}

	// Set up export options
	function SetupExportOptions() {
		global $Language;

		// Printer friendly
		$item = &$this->ExportOptions->Add("print");
		$item->Body = "<a href=\"" . $this->ExportPrintUrl . "\" class=\"ewExportLink ewPrint\" data-caption=\"" . ew_HtmlEncode($Language->Phrase("PrinterFriendlyText")) . "\">" . $Language->Phrase("PrinterFriendly") . "</a>";
		$item->Visible = TRUE;

		// Export to Excel
		$item = &$this->ExportOptions->Add("excel");
		$item->Body = "<a href=\"" . $this->ExportExcelUrl . "\" class=\"ewExportLink ewExcel\" data-caption=\"" . ew_HtmlEncode($Language->Phrase("ExportToExcelText")) . "\">" . $Language->Phrase("ExportToExcel") . "</a>";
		$item->Visible = TRUE;

		// Export to Word
		$item = &$this->ExportOptions->Add("word");
		$item->Body = "<a href=\"" . $this->ExportWordUrl . "\" class=\"ewExportLink ewWord\" data-caption=\"" . ew_HtmlEncode($Language->Phrase("ExportToWordText")) . "\">" . $Language->Phrase("ExportToWord") . "</a>";
		$item->Visible = TRUE;

		// Export to Html
		$item = &$this->ExportOptions->Add("html");
		$item->Body = "<a href=\"" . $this->ExportHtmlUrl . "\" class=\"ewExportLink ewHtml\" data-caption=\"" . ew_HtmlEncode($Language->Phrase("ExportToHtmlText")) . "\">" . $Language->Phrase("ExportToHtml") . "</a>";
		$item->Visible = TRUE;

		// Export to Xml
		$item = &$this->ExportOptions->Add("xml");
		$item->Body = "<a href=\"" . $this->ExportXmlUrl . "\" class=\"ewExportLink ewXml\" data-caption=\"" . ew_HtmlEncode($Language->Phrase("ExportToXmlText")) . "\">" . $Language->Phrase("ExportToXml") . "</a>";
		$item->Visible = TRUE;

		// Export to Csv
		$item = &$this->ExportOptions->Add("csv");
		$item->Body = "<a href=\"" . $this->ExportCsvUrl . "\" class=\"ewExportLink ewCsv\" data-caption=\"" . ew_HtmlEncode($Language->Phrase("ExportToCsvText")) . "\">" . $Language->Phrase("ExportToCsv") . "</a>";
		$item->Visible = TRUE;

		// Export to Pdf
		$item = &$this->ExportOptions->Add("pdf");
		$item->Body = "<a href=\"" . $this->ExportPdfUrl . "\" class=\"ewExportLink ewPdf\" data-caption=\"" . ew_HtmlEncode($Language->Phrase("ExportToPDFText")) . "\">" . $Language->Phrase("ExportToPDF") . "</a>";
		$item->Visible = TRUE;

		// Export to Email
		$item = &$this->ExportOptions->Add("email");
		$item->Body = "<a id=\"emf_pp_solatendida2\" href=\"javascript:void(0);\" class=\"ewExportLink ewEmail\" data-caption=\"" . $Language->Phrase("ExportToEmailText") . "\" onclick=\"ew_EmailDialogShow({lnk:'emf_pp_solatendida2',hdr:ewLanguage.Phrase('ExportToEmail'),f:document.fpp_solatendida2view,key:" . ew_ArrayToJsonAttr($this->RecKey) . ",sel:false});\">" . $Language->Phrase("ExportToEmail") . "</a>";
		$item->Visible = TRUE;

		// Drop down button for export
		$this->ExportOptions->UseDropDownButton = FALSE;
		$this->ExportOptions->DropDownButtonPhrase = $Language->Phrase("ButtonExport");

		// Add group option item
		$item = &$this->ExportOptions->Add($this->ExportOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Hide options for export
		if ($this->Export <> "")
			$this->ExportOptions->HideAllOptions();
	}

	// Export data in HTML/CSV/Word/Excel/XML/Email/PDF format
	function ExportData() {
		$utf8 = (strtolower(EW_CHARSET) == "utf-8");
		$bSelectLimit = FALSE;

		// Load recordset
		if ($bSelectLimit) {
			$this->TotalRecs = $this->SelectRecordCount();
		} else {
			if ($rs = $this->LoadRecordset())
				$this->TotalRecs = $rs->RecordCount();
		}
		$this->StartRec = 1;
		$this->SetUpStartRec(); // Set up start record position

		// Set the last record to display
		if ($this->DisplayRecs <= 0) {
			$this->StopRec = $this->TotalRecs;
		} else {
			$this->StopRec = $this->StartRec + $this->DisplayRecs - 1;
		}
		if (!$rs) {
			header("Content-Type:"); // Remove header
			header("Content-Disposition:");
			$this->ShowMessage();
			return;
		}
		$ExportDoc = ew_ExportDocument($this, "v");
		$ParentTable = "";
		if ($bSelectLimit) {
			$StartRec = 1;
			$StopRec = $this->DisplayRecs <= 0 ? $this->TotalRecs : $this->DisplayRecs;
		} else {
			$StartRec = $this->StartRec;
			$StopRec = $this->StopRec;
		}
		$sHeader = $this->PageHeader;
		$this->Page_DataRendering($sHeader);
		$ExportDoc->Text .= $sHeader;
		$this->ExportDocument($ExportDoc, $rs, $StartRec, $StopRec, "view");
		$sFooter = $this->PageFooter;
		$this->Page_DataRendered($sFooter);
		$ExportDoc->Text .= $sFooter;

		// Close recordset
		$rs->Close();

		// Export header and footer
		$ExportDoc->ExportHeaderAndFooter();

		// Clean output buffer
		if (!EW_DEBUG_ENABLED && ob_get_length())
			ob_end_clean();

		// Write debug message if enabled
		if (EW_DEBUG_ENABLED)
			echo ew_DebugMsg();

		// Output data
		if ($this->Export == "email") {
			echo $this->ExportEmail($ExportDoc->Text);
		} else {
			$ExportDoc->Export();
		}
	}

	// Export email
	function ExportEmail($EmailContent) {
		global $gTmpImages, $Language;
		$sSender = @$_GET["sender"];
		$sRecipient = @$_GET["recipient"];
		$sCc = @$_GET["cc"];
		$sBcc = @$_GET["bcc"];
		$sContentType = @$_GET["contenttype"];

		// Subject
		$sSubject = ew_StripSlashes(@$_GET["subject"]);
		$sEmailSubject = $sSubject;

		// Message
		$sContent = ew_StripSlashes(@$_GET["message"]);
		$sEmailMessage = $sContent;

		// Check sender
		if ($sSender == "") {
			return "<p class=\"text-error\">" . $Language->Phrase("EnterSenderEmail") . "</p>";
		}
		if (!ew_CheckEmail($sSender)) {
			return "<p class=\"text-error\">" . $Language->Phrase("EnterProperSenderEmail") . "</p>";
		}

		// Check recipient
		if (!ew_CheckEmailList($sRecipient, EW_MAX_EMAIL_RECIPIENT)) {
			return "<p class=\"text-error\">" . $Language->Phrase("EnterProperRecipientEmail") . "</p>";
		}

		// Check cc
		if (!ew_CheckEmailList($sCc, EW_MAX_EMAIL_RECIPIENT)) {
			return "<p class=\"text-error\">" . $Language->Phrase("EnterProperCcEmail") . "</p>";
		}

		// Check bcc
		if (!ew_CheckEmailList($sBcc, EW_MAX_EMAIL_RECIPIENT)) {
			return "<p class=\"text-error\">" . $Language->Phrase("EnterProperBccEmail") . "</p>";
		}

		// Check email sent count
		if (!isset($_SESSION[EW_EXPORT_EMAIL_COUNTER]))
			$_SESSION[EW_EXPORT_EMAIL_COUNTER] = 0;
		if (intval($_SESSION[EW_EXPORT_EMAIL_COUNTER]) > EW_MAX_EMAIL_SENT_COUNT) {
			return "<p class=\"text-error\">" . $Language->Phrase("ExceedMaxEmailExport") . "</p>";
		}

		// Send email
		$Email = new cEmail();
		$Email->Sender = $sSender; // Sender
		$Email->Recipient = $sRecipient; // Recipient
		$Email->Cc = $sCc; // Cc
		$Email->Bcc = $sBcc; // Bcc
		$Email->Subject = $sEmailSubject; // Subject
		$Email->Format = ($sContentType == "url") ? "text" : "html";
		$Email->Charset = EW_EMAIL_CHARSET;
		if ($sEmailMessage <> "") {
			$sEmailMessage = ew_RemoveXSS($sEmailMessage);
			$sEmailMessage .= ($sContentType == "url") ? "\r\n\r\n" : "<br><br>";
		}
		if ($sContentType == "url") {
			$sUrl = ew_ConvertFullUrl(ew_CurrentPage() . "?" . $this->ExportQueryString());
			$sEmailMessage .= $sUrl; // Send URL only
		} else {
			foreach ($gTmpImages as $tmpimage)
				$Email->AddEmbeddedImage($tmpimage);
			$sEmailMessage .= $EmailContent; // Send HTML
		}
		$Email->Content = $sEmailMessage; // Content
		$EventArgs = array();
		$bEmailSent = FALSE;
		if ($this->Email_Sending($Email, $EventArgs))
			$bEmailSent = $Email->Send();

		// Check email sent status
		if ($bEmailSent) {

			// Update email sent count
			$_SESSION[EW_EXPORT_EMAIL_COUNTER]++;

			// Sent email success
			return "<p class=\"text-success\">" . $Language->Phrase("SendEmailSuccess") . "</p>"; // Set up success message
		} else {

			// Sent email failure
			return "<p class=\"text-error\">" . $Email->SendErrDescription . "</p>";
		}
	}

	// Export QueryString
	function ExportQueryString() {

		// Initialize
		$sQry = "export=html";

		// Add record key QueryString
		$sQry .= "&" . substr($this->KeyUrl("", ""), 1);
		return $sQry;
	}

	// Set up detail parms based on QueryString
	function SetUpDetailParms() {

		// Get the keys for master table
		if (isset($_GET[EW_TABLE_SHOW_DETAIL])) {
			$sDetailTblVar = $_GET[EW_TABLE_SHOW_DETAIL];
			$this->setCurrentDetailTable($sDetailTblVar);
		} else {
			$sDetailTblVar = $this->getCurrentDetailTable();
		}
		if ($sDetailTblVar <> "") {
			$DetailTblVar = explode(",", $sDetailTblVar);
			if (in_array("pp_view_revision", $DetailTblVar)) {
				if (!isset($GLOBALS["pp_view_revision_grid"]))
					$GLOBALS["pp_view_revision_grid"] = new cpp_view_revision_grid;
				if ($GLOBALS["pp_view_revision_grid"]->DetailView) {
					$GLOBALS["pp_view_revision_grid"]->CurrentMode = "view";

					// Save current master table to detail table
					$GLOBALS["pp_view_revision_grid"]->setCurrentMasterTable($this->TableVar);
					$GLOBALS["pp_view_revision_grid"]->setStartRecordNumber(1);
					$GLOBALS["pp_view_revision_grid"]->IdPase->FldIsDetailKey = TRUE;
					$GLOBALS["pp_view_revision_grid"]->IdPase->CurrentValue = $this->IdPase->CurrentValue;
					$GLOBALS["pp_view_revision_grid"]->IdPase->setSessionValue($GLOBALS["pp_view_revision_grid"]->IdPase->CurrentValue);
				}
			}
			if (in_array("pp_view_tareasdiarias_sistemas", $DetailTblVar)) {
				if (!isset($GLOBALS["pp_view_tareasdiarias_sistemas_grid"]))
					$GLOBALS["pp_view_tareasdiarias_sistemas_grid"] = new cpp_view_tareasdiarias_sistemas_grid;
				if ($GLOBALS["pp_view_tareasdiarias_sistemas_grid"]->DetailView) {
					$GLOBALS["pp_view_tareasdiarias_sistemas_grid"]->CurrentMode = "view";

					// Save current master table to detail table
					$GLOBALS["pp_view_tareasdiarias_sistemas_grid"]->setCurrentMasterTable($this->TableVar);
					$GLOBALS["pp_view_tareasdiarias_sistemas_grid"]->setStartRecordNumber(1);
					$GLOBALS["pp_view_tareasdiarias_sistemas_grid"]->idpase->FldIsDetailKey = TRUE;
					$GLOBALS["pp_view_tareasdiarias_sistemas_grid"]->idpase->CurrentValue = $this->IdPase->CurrentValue;
					$GLOBALS["pp_view_tareasdiarias_sistemas_grid"]->idpase->setSessionValue($GLOBALS["pp_view_tareasdiarias_sistemas_grid"]->idpase->CurrentValue);
				}
			}
		}
	}

	// Set up Breadcrumb
	function SetupBreadcrumb() {
		global $Breadcrumb, $Language;
		$Breadcrumb = new cBreadcrumb();
		$Breadcrumb->Add("list", $this->TableVar, "lmo_pp_solatendida2list.php", $this->TableVar, TRUE);
		$PageId = "view";
		$Breadcrumb->Add("view", $PageId, ew_CurrentUrl());
	}

	// Page Load event
	function Page_Load() {

		//echo "Page Load";
	}

	// Page Unload event
	function Page_Unload() {

		//echo "Page Unload";
	}

	// Page Redirecting event
	function Page_Redirecting(&$url) {

		// Example:
		//$url = "your URL";

	}

	// Message Showing event
	// $type = ''|'success'|'failure'|'warning'
	function Message_Showing(&$msg, $type) {
		if ($type == 'success') {

			//$msg = "your success message";
		} elseif ($type == 'failure') {

			//$msg = "your failure message";
		} elseif ($type == 'warning') {

			//$msg = "your warning message";
		} else {

			//$msg = "your message";
		}
	}

	// Page Render event
	function Page_Render() {

		//echo "Page Render";
	}

	// Page Data Rendering event
	function Page_DataRendering(&$header) {

		// Example:
		//$header = "your header";

	}

	// Page Data Rendered event
	function Page_DataRendered(&$footer) {

		// Example:
		//$footer = "your footer";

	}
}
?>
<?php ew_Header(FALSE) ?>
<?php

// Create page object
if (!isset($pp_solatendida2_view)) $pp_solatendida2_view = new cpp_solatendida2_view();

// Page init
$pp_solatendida2_view->Page_Init();

// Page main
$pp_solatendida2_view->Page_Main();

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$pp_solatendida2_view->Page_Render();
?>
<?php include_once "lmo_header.php" ?>
<?php if ($pp_solatendida2->Export == "") { ?>
<script type="text/javascript">

// Page object
var pp_solatendida2_view = new ew_Page("pp_solatendida2_view");
pp_solatendida2_view.PageID = "view"; // Page ID
var EW_PAGE_ID = pp_solatendida2_view.PageID; // For backward compatibility

// Form object
var fpp_solatendida2view = new ew_Form("fpp_solatendida2view");

// Form_CustomValidate event
fpp_solatendida2view.Form_CustomValidate = 
 function(fobj) { // DO NOT CHANGE THIS LINE!

 	// Your custom validation code here, return false if invalid. 
 	return true;
 }

// Use JavaScript validation or not
<?php if (EW_CLIENT_VALIDATE) { ?>
fpp_solatendida2view.ValidateRequired = true;
<?php } else { ?>
fpp_solatendida2view.ValidateRequired = false; 
<?php } ?>

// Multi-Page properties
fpp_solatendida2view.MultiPage = new ew_MultiPage("fpp_solatendida2view",
	[["x_IdPase",1],["x_Proyecto",2],["x_idProydes",2],["x_IdSoliDesarrollo",2],["x_CodHelpDesk",2],["x_IdRevisaSolicitud",1],["x_id_tipopoa",1],["x_Tipo",1],["x_idTipo2",1],["x_Fecha",4],["x_fechapase_ss",4],["x_FechaSolicitud",4],["x_FechaRequerida",4],["x_FechaRequerimiento_log",4],["x_FechaProgramacion",4],["x_FechaInicio",4],["x_FechaAnalisisFin",4],["x_FechaDesarrolloInicio",4],["x_FechaDesarrolloFin",4],["x_FechaPruebasInicio",4],["x_FechaTerminoPropuesto",4],["x_FechaQAInicio",4],["x_FechaTerminoQA",4],["x_FechaPruebasUserInicio",4],["x_FechaPruebasUserFin",4],["x_FechaPuesta",4],["x_FechaTermino",4],["x_FechaUltimoPase",4],["x_FechaUltimaTareaDiaria",4],["x_Titulo",1],["x_idempresa",1],["x_IdArea",1],["x_CodServicio",1],["x_idProceso",1],["x_idSubProceso",1],["x_IdMotivo",1],["x_Prioridad",1],["x_TipoSolicitud",1],["x_CerrarRequerimiento",1],["x_empresa_costo",1],["x_horasdesarrollo",1],["x_horasdesarrollo_ss",1],["x_CodUsuarioLider",1],["x_IdGerenteSolicitante",1],["x_CodUsuario",1],["x_IdJefeProyecto",1],["x_idproveedor",1],["x_idanalista_ss",1],["x_idjefeproy_ss",1],["x_Descripcion",1],["x_Instrucciones",1],["x_ArchAdjuntos",1],["x_querys",3],["x_Adjuntos",1],["x_stores",1],["x_ejecutables",1],["x_SolicitudDesarrollo",1],["x_doc_especifuncionales",1],["x_PlanPruebas",1],["x_DiagramaER",1],["x_ManualUsuario",1],["x_DiagramaProcesos",1],["x_DiccionarioDatos",1],["x_tittuReque",2],["x_desreque",2],["x_Beneficios",2],["x_Objetivo",2],["x_FuncOperativa",2],["x_GestionControl",2],["x_ReferLegal",2],["x_AreasRelacionadas",2],["x_Observaciones",2],["x_fechaRevisaJRO",4],["x_JefeRiesgoOperativo",2],["x_Impacto",2],["x_Participacion",2],["x_Justificativa",2],["x_Recomendacion",2],["x_Roles",2],["x_fecha_asigna_qa",1],["x_id_qa",1],["x_observaciones_qa",1],["x_IdEstadoSoliPuestaProd",1],["x_cant_dias_analisis",4],["x_cant_dias_desarrollo",4],["x_cant_dias_pruebas",4],["x_cant_dias_qa",4],["x_cant_dias_prueba_user",4],["x_avance_analisis_real",4],["x_avance_desarrollo_real",4],["x_avance_pruebas_real",4],["x_avance_qa_real",4],["x_avance_analisis_plan",4],["x_avance_desarrollo_plan",4],["x_avance_pruebas_plan",4],["x_avance_qa_plan",4],["x_dias_anticipacion",4],["x_veces_mod_findes",4],["x_dias_analisis_td",4],["x_dias_desarrollo_td",4],["x_dias_pruebas_td",4],["x_dias_qa_td",4],["x_ObsGestion",4],["x_ObsTareasDiairias",4],["x_Duracion",4],["x_PorcCompletado",4],["x_PorcProyectado",4],["x_PorcDiferencia",4]]
);

// Dynamic selection lists
fpp_solatendida2view.Lists["x_Proyecto"] = {"LinkField":"x_IdProyDes","Ajax":true,"AutoFill":false,"DisplayFields":["x_IdProyDes","x_Titulo","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_IdRevisaSolicitud"] = {"LinkField":"x_UserLevelID","Ajax":true,"AutoFill":false,"DisplayFields":["x_Abreviatura","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_id_tipopoa"] = {"LinkField":"x_iddetalle","Ajax":true,"AutoFill":false,"DisplayFields":["x_descripcion","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_idTipo2"] = {"LinkField":"x_idtipo","Ajax":null,"AutoFill":false,"DisplayFields":["x_tipodesarrollo","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_idempresa"] = {"LinkField":"x_Idempresa","Ajax":true,"AutoFill":false,"DisplayFields":["x_empresa","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_IdArea"] = {"LinkField":"x_Idarea","Ajax":true,"AutoFill":false,"DisplayFields":["x_Area","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_CodServicio"] = {"LinkField":"x_IdServicio","Ajax":true,"AutoFill":false,"DisplayFields":["x_IdServicio","x_Servicio","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_idProceso"] = {"LinkField":"x_IdProceso","Ajax":true,"AutoFill":false,"DisplayFields":["x_Proceso","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_idSubProceso"] = {"LinkField":"x_IdSubProceso","Ajax":true,"AutoFill":false,"DisplayFields":["x_SubProceso1","x_SubProceso2","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_IdMotivo"] = {"LinkField":"x_IdMotivo","Ajax":true,"AutoFill":false,"DisplayFields":["x_Motivo","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_TipoSolicitud[]"] = {"LinkField":"x_TipoSolicitud","Ajax":true,"AutoFill":false,"DisplayFields":["x_TipoSolicitud","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_empresa_costo[]"] = {"LinkField":"x_Idempresa","Ajax":true,"AutoFill":false,"DisplayFields":["x_empresa","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_CodUsuarioLider"] = {"LinkField":"x_idUsuario","Ajax":null,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_IdGerenteSolicitante"] = {"LinkField":"x_idUsuario","Ajax":null,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_CodUsuario"] = {"LinkField":"x_CodUsuario","Ajax":true,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_IdJefeProyecto"] = {"LinkField":"x_idUsuario","Ajax":true,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_idproveedor"] = {"LinkField":"x_Idempresa","Ajax":null,"AutoFill":false,"DisplayFields":["x_empresa","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_idanalista_ss"] = {"LinkField":"x_CodUsuario","Ajax":true,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_idjefeproy_ss"] = {"LinkField":"x_idUsuario","Ajax":true,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_JefeRiesgoOperativo"] = {"LinkField":"x_idUsuario","Ajax":true,"AutoFill":false,"DisplayFields":["x_Nombre","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_id_qa"] = {"LinkField":"x_idUsuario","Ajax":true,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_solatendida2view.Lists["x_IdEstadoSoliPuestaProd"] = {"LinkField":"x_IdEstadoSoliPuestaProd","Ajax":null,"AutoFill":false,"DisplayFields":["x_estado","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};

// Form object for search
</script>
<script type="text/javascript">

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if ($pp_solatendida2->Export == "") { ?>
<?php $Breadcrumb->Render(); ?>
<?php } ?>
<?php if ($pp_solatendida2->Export == "") { ?>
<div class="ewViewExportOptions">
<?php $pp_solatendida2_view->ExportOptions->Render("body") ?>
<?php if (!$pp_solatendida2_view->ExportOptions->UseDropDownButton) { ?>
</div>
<div class="ewViewOtherOptions">
<?php } ?>
<?php
	foreach ($pp_solatendida2_view->OtherOptions as &$option)
		$option->Render("body");
?>
</div>
<?php } ?>
<?php $pp_solatendida2_view->ShowPageHeader(); ?>
<?php
$pp_solatendida2_view->ShowMessage();
?>
<?php if ($pp_solatendida2->Export == "") { ?>
<form name="ewPagerForm" class="ewForm form-inline" action="<?php echo ew_CurrentPage() ?>">
<table class="ewPager">
<tr><td>
<?php if (!isset($pp_solatendida2_view->Pager)) $pp_solatendida2_view->Pager = new cPrevNextPager($pp_solatendida2_view->StartRec, $pp_solatendida2_view->DisplayRecs, $pp_solatendida2_view->TotalRecs) ?>
<?php if ($pp_solatendida2_view->Pager->RecordCount > 0) { ?>
<table class="ewStdTable"><tbody><tr><td>
	<?php echo $Language->Phrase("Page") ?>&nbsp;
<div class="input-prepend input-append">
<!--first page button-->
	<?php if ($pp_solatendida2_view->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-small" href="<?php echo $pp_solatendida2_view->PageUrl() ?>start=<?php echo $pp_solatendida2_view->Pager->FirstButton->Start ?>"><i class="icon-step-backward"></i></a>
	<?php } else { ?>
	<a class="btn btn-small disabled"><i class="icon-step-backward"></i></a>
	<?php } ?>
<!--previous page button-->
	<?php if ($pp_solatendida2_view->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-small" href="<?php echo $pp_solatendida2_view->PageUrl() ?>start=<?php echo $pp_solatendida2_view->Pager->PrevButton->Start ?>"><i class="icon-prev"></i></a>
	<?php } else { ?>
	<a class="btn btn-small disabled"><i class="icon-prev"></i></a>
	<?php } ?>
<!--current page number-->
	<input class="input-mini" type="text" name="<?php echo EW_TABLE_PAGE_NO ?>" value="<?php echo $pp_solatendida2_view->Pager->CurrentPage ?>">
<!--next page button-->
	<?php if ($pp_solatendida2_view->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-small" href="<?php echo $pp_solatendida2_view->PageUrl() ?>start=<?php echo $pp_solatendida2_view->Pager->NextButton->Start ?>"><i class="icon-play"></i></a>
	<?php } else { ?>
	<a class="btn btn-small disabled"><i class="icon-play"></i></a>
	<?php } ?>
<!--last page button-->
	<?php if ($pp_solatendida2_view->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-small" href="<?php echo $pp_solatendida2_view->PageUrl() ?>start=<?php echo $pp_solatendida2_view->Pager->LastButton->Start ?>"><i class="icon-step-forward"></i></a>
	<?php } else { ?>
	<a class="btn btn-small disabled"><i class="icon-step-forward"></i></a>
	<?php } ?>
</div>
	&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $pp_solatendida2_view->Pager->PageCount ?>
</td>
</tr></tbody></table>
<?php } else { ?>
	<p><?php echo $Language->Phrase("NoRecord") ?></p>
<?php } ?>
</td>
</tr></table>
</form>
<?php } ?>
<form name="fpp_solatendida2view" id="fpp_solatendida2view" class="ewForm form-inline" action="<?php echo ew_CurrentPage() ?>" method="post">
<input type="hidden" name="t" value="pp_solatendida2">
<?php if ($pp_solatendida2->Export == "") { ?>
<table class="ewStdTable"><tbody><tr><td>
<div class="tabbable" id="pp_solatendida2_view">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_pp_solatendida21" data-toggle="tab"><?php echo $pp_solatendida2->PageCaption(1) ?></a></li>
		<li><a href="#tab_pp_solatendida22" data-toggle="tab"><?php echo $pp_solatendida2->PageCaption(2) ?></a></li>
		<li><a href="#tab_pp_solatendida23" data-toggle="tab"><?php echo $pp_solatendida2->PageCaption(3) ?></a></li>
		<li><a href="#tab_pp_solatendida24" data-toggle="tab"><?php echo $pp_solatendida2->PageCaption(4) ?></a></li>
	</ul>
	<div class="tab-content">
<?php } ?>
<?php if ($pp_solatendida2->Export == "") { ?>
		<div class="tab-pane active" id="tab_pp_solatendida21">
<?php } ?>
<table class="ewGrid"<?php if ($pp_solatendida2->Export == "") echo " style=\"width: 100%\""; ?>><tr><td>
<table id="tbl_pp_solatendida2view1" class="table table-bordered table-striped">
<?php if ($pp_solatendida2->IdPase->Visible) { // IdPase ?>
	<tr id="r_IdPase">
		<td><span id="elh_pp_solatendida2_IdPase"><?php echo $pp_solatendida2->IdPase->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->IdPase->CellAttributes() ?>>
<span id="el_pp_solatendida2_IdPase" class="control-group">
<span<?php echo $pp_solatendida2->IdPase->ViewAttributes() ?>>
<?php echo $pp_solatendida2->IdPase->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->IdRevisaSolicitud->Visible) { // IdRevisaSolicitud ?>
	<tr id="r_IdRevisaSolicitud">
		<td><span id="elh_pp_solatendida2_IdRevisaSolicitud"><?php echo $pp_solatendida2->IdRevisaSolicitud->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->IdRevisaSolicitud->CellAttributes() ?>>
<span id="el_pp_solatendida2_IdRevisaSolicitud" class="control-group">
<span<?php echo $pp_solatendida2->IdRevisaSolicitud->ViewAttributes() ?>>
<?php echo $pp_solatendida2->IdRevisaSolicitud->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->id_tipopoa->Visible) { // id_tipopoa ?>
	<tr id="r_id_tipopoa">
		<td><span id="elh_pp_solatendida2_id_tipopoa"><?php echo $pp_solatendida2->id_tipopoa->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->id_tipopoa->CellAttributes() ?>>
<span id="el_pp_solatendida2_id_tipopoa" class="control-group">
<span<?php echo $pp_solatendida2->id_tipopoa->ViewAttributes() ?>>
<?php echo $pp_solatendida2->id_tipopoa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Tipo->Visible) { // Tipo ?>
	<tr id="r_Tipo">
		<td><span id="elh_pp_solatendida2_Tipo"><?php echo $pp_solatendida2->Tipo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Tipo->CellAttributes() ?>>
<span id="el_pp_solatendida2_Tipo" class="control-group">
<span<?php echo $pp_solatendida2->Tipo->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Tipo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->idTipo2->Visible) { // idTipo2 ?>
	<tr id="r_idTipo2">
		<td><span id="elh_pp_solatendida2_idTipo2"><?php echo $pp_solatendida2->idTipo2->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->idTipo2->CellAttributes() ?>>
<span id="el_pp_solatendida2_idTipo2" class="control-group">
<span<?php echo $pp_solatendida2->idTipo2->ViewAttributes() ?>>
<?php echo $pp_solatendida2->idTipo2->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Titulo->Visible) { // Titulo ?>
	<tr id="r_Titulo">
		<td><span id="elh_pp_solatendida2_Titulo"><?php echo $pp_solatendida2->Titulo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Titulo->CellAttributes() ?>>
<span id="el_pp_solatendida2_Titulo" class="control-group">
<span<?php echo $pp_solatendida2->Titulo->ViewAttributes() ?>>
<?php if (!ew_EmptyStr($pp_solatendida2->Titulo->ViewValue) && $pp_solatendida2->Titulo->LinkAttributes() <> "") { ?>
<a<?php echo $pp_solatendida2->Titulo->LinkAttributes() ?>><?php echo $pp_solatendida2->Titulo->ViewValue ?></a>
<?php } else { ?>
<?php echo $pp_solatendida2->Titulo->ViewValue ?>
<?php } ?>
<span id="tt_pp_solatendida2_x_Titulo" style="display: none">
<?php echo $pp_solatendida2->Titulo->TooltipValue ?>
</span></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->idempresa->Visible) { // idempresa ?>
	<tr id="r_idempresa">
		<td><span id="elh_pp_solatendida2_idempresa"><?php echo $pp_solatendida2->idempresa->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->idempresa->CellAttributes() ?>>
<span id="el_pp_solatendida2_idempresa" class="control-group">
<span<?php echo $pp_solatendida2->idempresa->ViewAttributes() ?>>
<?php echo $pp_solatendida2->idempresa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->IdArea->Visible) { // IdArea ?>
	<tr id="r_IdArea">
		<td><span id="elh_pp_solatendida2_IdArea"><?php echo $pp_solatendida2->IdArea->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->IdArea->CellAttributes() ?>>
<span id="el_pp_solatendida2_IdArea" class="control-group">
<span<?php echo $pp_solatendida2->IdArea->ViewAttributes() ?>>
<?php echo $pp_solatendida2->IdArea->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->CodServicio->Visible) { // CodServicio ?>
	<tr id="r_CodServicio">
		<td><span id="elh_pp_solatendida2_CodServicio"><?php echo $pp_solatendida2->CodServicio->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->CodServicio->CellAttributes() ?>>
<span id="el_pp_solatendida2_CodServicio" class="control-group">
<span<?php echo $pp_solatendida2->CodServicio->ViewAttributes() ?>>
<?php echo $pp_solatendida2->CodServicio->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->idProceso->Visible) { // idProceso ?>
	<tr id="r_idProceso">
		<td><span id="elh_pp_solatendida2_idProceso"><?php echo $pp_solatendida2->idProceso->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->idProceso->CellAttributes() ?>>
<span id="el_pp_solatendida2_idProceso" class="control-group">
<span<?php echo $pp_solatendida2->idProceso->ViewAttributes() ?>>
<?php echo $pp_solatendida2->idProceso->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->idSubProceso->Visible) { // idSubProceso ?>
	<tr id="r_idSubProceso">
		<td><span id="elh_pp_solatendida2_idSubProceso"><?php echo $pp_solatendida2->idSubProceso->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->idSubProceso->CellAttributes() ?>>
<span id="el_pp_solatendida2_idSubProceso" class="control-group">
<span<?php echo $pp_solatendida2->idSubProceso->ViewAttributes() ?>>
<?php echo $pp_solatendida2->idSubProceso->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->IdMotivo->Visible) { // IdMotivo ?>
	<tr id="r_IdMotivo">
		<td><span id="elh_pp_solatendida2_IdMotivo"><?php echo $pp_solatendida2->IdMotivo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->IdMotivo->CellAttributes() ?>>
<span id="el_pp_solatendida2_IdMotivo" class="control-group">
<span<?php echo $pp_solatendida2->IdMotivo->ViewAttributes() ?>>
<?php echo $pp_solatendida2->IdMotivo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Prioridad->Visible) { // Prioridad ?>
	<tr id="r_Prioridad">
		<td><span id="elh_pp_solatendida2_Prioridad"><?php echo $pp_solatendida2->Prioridad->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Prioridad->CellAttributes() ?>>
<span id="el_pp_solatendida2_Prioridad" class="control-group">
<span<?php echo $pp_solatendida2->Prioridad->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Prioridad->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->TipoSolicitud->Visible) { // TipoSolicitud ?>
	<tr id="r_TipoSolicitud">
		<td><span id="elh_pp_solatendida2_TipoSolicitud"><?php echo $pp_solatendida2->TipoSolicitud->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->TipoSolicitud->CellAttributes() ?>>
<span id="el_pp_solatendida2_TipoSolicitud" class="control-group">
<span<?php echo $pp_solatendida2->TipoSolicitud->ViewAttributes() ?>>
<?php echo $pp_solatendida2->TipoSolicitud->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->CerrarRequerimiento->Visible) { // CerrarRequerimiento ?>
	<tr id="r_CerrarRequerimiento">
		<td><span id="elh_pp_solatendida2_CerrarRequerimiento"><?php echo $pp_solatendida2->CerrarRequerimiento->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->CerrarRequerimiento->CellAttributes() ?>>
<span id="el_pp_solatendida2_CerrarRequerimiento" class="control-group">
<span<?php echo $pp_solatendida2->CerrarRequerimiento->ViewAttributes() ?>>
<?php echo $pp_solatendida2->CerrarRequerimiento->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->empresa_costo->Visible) { // empresa_costo ?>
	<tr id="r_empresa_costo">
		<td><span id="elh_pp_solatendida2_empresa_costo"><?php echo $pp_solatendida2->empresa_costo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->empresa_costo->CellAttributes() ?>>
<span id="el_pp_solatendida2_empresa_costo" class="control-group">
<span<?php echo $pp_solatendida2->empresa_costo->ViewAttributes() ?>>
<?php echo $pp_solatendida2->empresa_costo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->horasdesarrollo->Visible) { // horasdesarrollo ?>
	<tr id="r_horasdesarrollo">
		<td><span id="elh_pp_solatendida2_horasdesarrollo"><?php echo $pp_solatendida2->horasdesarrollo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->horasdesarrollo->CellAttributes() ?>>
<span id="el_pp_solatendida2_horasdesarrollo" class="control-group">
<span<?php echo $pp_solatendida2->horasdesarrollo->ViewAttributes() ?>>
<?php echo $pp_solatendida2->horasdesarrollo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->horasdesarrollo_ss->Visible) { // horasdesarrollo_ss ?>
	<tr id="r_horasdesarrollo_ss">
		<td><span id="elh_pp_solatendida2_horasdesarrollo_ss"><?php echo $pp_solatendida2->horasdesarrollo_ss->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->horasdesarrollo_ss->CellAttributes() ?>>
<span id="el_pp_solatendida2_horasdesarrollo_ss" class="control-group">
<span<?php echo $pp_solatendida2->horasdesarrollo_ss->ViewAttributes() ?>>
<?php echo $pp_solatendida2->horasdesarrollo_ss->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->CodUsuarioLider->Visible) { // CodUsuarioLider ?>
	<tr id="r_CodUsuarioLider">
		<td><span id="elh_pp_solatendida2_CodUsuarioLider"><?php echo $pp_solatendida2->CodUsuarioLider->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->CodUsuarioLider->CellAttributes() ?>>
<span id="el_pp_solatendida2_CodUsuarioLider" class="control-group">
<span<?php echo $pp_solatendida2->CodUsuarioLider->ViewAttributes() ?>>
<?php echo $pp_solatendida2->CodUsuarioLider->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->IdGerenteSolicitante->Visible) { // IdGerenteSolicitante ?>
	<tr id="r_IdGerenteSolicitante">
		<td><span id="elh_pp_solatendida2_IdGerenteSolicitante"><?php echo $pp_solatendida2->IdGerenteSolicitante->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->IdGerenteSolicitante->CellAttributes() ?>>
<span id="el_pp_solatendida2_IdGerenteSolicitante" class="control-group">
<span<?php echo $pp_solatendida2->IdGerenteSolicitante->ViewAttributes() ?>>
<?php echo $pp_solatendida2->IdGerenteSolicitante->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->CodUsuario->Visible) { // CodUsuario ?>
	<tr id="r_CodUsuario">
		<td><span id="elh_pp_solatendida2_CodUsuario"><?php echo $pp_solatendida2->CodUsuario->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->CodUsuario->CellAttributes() ?>>
<span id="el_pp_solatendida2_CodUsuario" class="control-group">
<span<?php echo $pp_solatendida2->CodUsuario->ViewAttributes() ?>>
<?php echo $pp_solatendida2->CodUsuario->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->IdJefeProyecto->Visible) { // IdJefeProyecto ?>
	<tr id="r_IdJefeProyecto">
		<td><span id="elh_pp_solatendida2_IdJefeProyecto"><?php echo $pp_solatendida2->IdJefeProyecto->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->IdJefeProyecto->CellAttributes() ?>>
<span id="el_pp_solatendida2_IdJefeProyecto" class="control-group">
<span<?php echo $pp_solatendida2->IdJefeProyecto->ViewAttributes() ?>>
<?php echo $pp_solatendida2->IdJefeProyecto->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->idproveedor->Visible) { // idproveedor ?>
	<tr id="r_idproveedor">
		<td><span id="elh_pp_solatendida2_idproveedor"><?php echo $pp_solatendida2->idproveedor->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->idproveedor->CellAttributes() ?>>
<span id="el_pp_solatendida2_idproveedor" class="control-group">
<span<?php echo $pp_solatendida2->idproveedor->ViewAttributes() ?>>
<?php echo $pp_solatendida2->idproveedor->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->idanalista_ss->Visible) { // idanalista_ss ?>
	<tr id="r_idanalista_ss">
		<td><span id="elh_pp_solatendida2_idanalista_ss"><?php echo $pp_solatendida2->idanalista_ss->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->idanalista_ss->CellAttributes() ?>>
<span id="el_pp_solatendida2_idanalista_ss" class="control-group">
<span<?php echo $pp_solatendida2->idanalista_ss->ViewAttributes() ?>>
<?php echo $pp_solatendida2->idanalista_ss->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->idjefeproy_ss->Visible) { // idjefeproy_ss ?>
	<tr id="r_idjefeproy_ss">
		<td><span id="elh_pp_solatendida2_idjefeproy_ss"><?php echo $pp_solatendida2->idjefeproy_ss->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->idjefeproy_ss->CellAttributes() ?>>
<span id="el_pp_solatendida2_idjefeproy_ss" class="control-group">
<span<?php echo $pp_solatendida2->idjefeproy_ss->ViewAttributes() ?>>
<?php echo $pp_solatendida2->idjefeproy_ss->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Descripcion->Visible) { // Descripcion ?>
	<tr id="r_Descripcion">
		<td><span id="elh_pp_solatendida2_Descripcion"><?php echo $pp_solatendida2->Descripcion->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Descripcion->CellAttributes() ?>>
<span id="el_pp_solatendida2_Descripcion" class="control-group">
<span<?php echo $pp_solatendida2->Descripcion->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Descripcion->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Instrucciones->Visible) { // Instrucciones ?>
	<tr id="r_Instrucciones">
		<td><span id="elh_pp_solatendida2_Instrucciones"><?php echo $pp_solatendida2->Instrucciones->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Instrucciones->CellAttributes() ?>>
<span id="el_pp_solatendida2_Instrucciones" class="control-group">
<span<?php echo $pp_solatendida2->Instrucciones->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Instrucciones->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->ArchAdjuntos->Visible) { // ArchAdjuntos ?>
	<tr id="r_ArchAdjuntos">
		<td><span id="elh_pp_solatendida2_ArchAdjuntos"><?php echo $pp_solatendida2->ArchAdjuntos->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->ArchAdjuntos->CellAttributes() ?>>
<span id="el_pp_solatendida2_ArchAdjuntos" class="control-group">
<span<?php echo $pp_solatendida2->ArchAdjuntos->ViewAttributes() ?>>
<?php echo $pp_solatendida2->ArchAdjuntos->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Adjuntos->Visible) { // Adjuntos ?>
	<tr id="r_Adjuntos">
		<td><span id="elh_pp_solatendida2_Adjuntos"><?php echo $pp_solatendida2->Adjuntos->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Adjuntos->CellAttributes() ?>>
<span id="el_pp_solatendida2_Adjuntos" class="control-group">
<span<?php echo $pp_solatendida2->Adjuntos->ViewAttributes() ?>>
<?php if ($pp_solatendida2->Adjuntos->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->Adjuntos->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->Adjuntos->LinkAttributes() ?>><?php echo $pp_solatendida2->Adjuntos->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->Adjuntos->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->Adjuntos->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->stores->Visible) { // stores ?>
	<tr id="r_stores">
		<td><span id="elh_pp_solatendida2_stores"><?php echo $pp_solatendida2->stores->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->stores->CellAttributes() ?>>
<span id="el_pp_solatendida2_stores" class="control-group">
<span<?php echo $pp_solatendida2->stores->ViewAttributes() ?>>
<?php if ($pp_solatendida2->stores->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->stores->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->stores->LinkAttributes() ?>><?php echo $pp_solatendida2->stores->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->stores->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->stores->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->ejecutables->Visible) { // ejecutables ?>
	<tr id="r_ejecutables">
		<td><span id="elh_pp_solatendida2_ejecutables"><?php echo $pp_solatendida2->ejecutables->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->ejecutables->CellAttributes() ?>>
<span id="el_pp_solatendida2_ejecutables" class="control-group">
<span<?php echo $pp_solatendida2->ejecutables->ViewAttributes() ?>>
<?php if ($pp_solatendida2->ejecutables->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->ejecutables->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->ejecutables->LinkAttributes() ?>><?php echo $pp_solatendida2->ejecutables->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->ejecutables->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->ejecutables->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->SolicitudDesarrollo->Visible) { // SolicitudDesarrollo ?>
	<tr id="r_SolicitudDesarrollo">
		<td><span id="elh_pp_solatendida2_SolicitudDesarrollo"><?php echo $pp_solatendida2->SolicitudDesarrollo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->SolicitudDesarrollo->CellAttributes() ?>>
<span id="el_pp_solatendida2_SolicitudDesarrollo" class="control-group">
<span<?php echo $pp_solatendida2->SolicitudDesarrollo->ViewAttributes() ?>>
<?php if ($pp_solatendida2->SolicitudDesarrollo->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->SolicitudDesarrollo->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->SolicitudDesarrollo->LinkAttributes() ?>><?php echo $pp_solatendida2->SolicitudDesarrollo->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->SolicitudDesarrollo->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->SolicitudDesarrollo->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->doc_especifuncionales->Visible) { // doc_especifuncionales ?>
	<tr id="r_doc_especifuncionales">
		<td><span id="elh_pp_solatendida2_doc_especifuncionales"><?php echo $pp_solatendida2->doc_especifuncionales->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->doc_especifuncionales->CellAttributes() ?>>
<span id="el_pp_solatendida2_doc_especifuncionales" class="control-group">
<span<?php echo $pp_solatendida2->doc_especifuncionales->ViewAttributes() ?>>
<?php if ($pp_solatendida2->doc_especifuncionales->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->doc_especifuncionales->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->doc_especifuncionales->LinkAttributes() ?>><?php echo $pp_solatendida2->doc_especifuncionales->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->doc_especifuncionales->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->doc_especifuncionales->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->PlanPruebas->Visible) { // PlanPruebas ?>
	<tr id="r_PlanPruebas">
		<td><span id="elh_pp_solatendida2_PlanPruebas"><?php echo $pp_solatendida2->PlanPruebas->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->PlanPruebas->CellAttributes() ?>>
<span id="el_pp_solatendida2_PlanPruebas" class="control-group">
<span<?php echo $pp_solatendida2->PlanPruebas->ViewAttributes() ?>>
<?php if ($pp_solatendida2->PlanPruebas->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->PlanPruebas->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->PlanPruebas->LinkAttributes() ?>><?php echo $pp_solatendida2->PlanPruebas->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->PlanPruebas->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->PlanPruebas->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->DiagramaER->Visible) { // DiagramaER ?>
	<tr id="r_DiagramaER">
		<td><span id="elh_pp_solatendida2_DiagramaER"><?php echo $pp_solatendida2->DiagramaER->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->DiagramaER->CellAttributes() ?>>
<span id="el_pp_solatendida2_DiagramaER" class="control-group">
<span<?php echo $pp_solatendida2->DiagramaER->ViewAttributes() ?>>
<?php if ($pp_solatendida2->DiagramaER->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->DiagramaER->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->DiagramaER->LinkAttributes() ?>><?php echo $pp_solatendida2->DiagramaER->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->DiagramaER->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->DiagramaER->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->ManualUsuario->Visible) { // ManualUsuario ?>
	<tr id="r_ManualUsuario">
		<td><span id="elh_pp_solatendida2_ManualUsuario"><?php echo $pp_solatendida2->ManualUsuario->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->ManualUsuario->CellAttributes() ?>>
<span id="el_pp_solatendida2_ManualUsuario" class="control-group">
<span<?php echo $pp_solatendida2->ManualUsuario->ViewAttributes() ?>>
<?php if ($pp_solatendida2->ManualUsuario->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->ManualUsuario->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->ManualUsuario->LinkAttributes() ?>><?php echo $pp_solatendida2->ManualUsuario->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->ManualUsuario->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->ManualUsuario->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->DiagramaProcesos->Visible) { // DiagramaProcesos ?>
	<tr id="r_DiagramaProcesos">
		<td><span id="elh_pp_solatendida2_DiagramaProcesos"><?php echo $pp_solatendida2->DiagramaProcesos->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->DiagramaProcesos->CellAttributes() ?>>
<span id="el_pp_solatendida2_DiagramaProcesos" class="control-group">
<span<?php echo $pp_solatendida2->DiagramaProcesos->ViewAttributes() ?>>
<?php if ($pp_solatendida2->DiagramaProcesos->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->DiagramaProcesos->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->DiagramaProcesos->LinkAttributes() ?>><?php echo $pp_solatendida2->DiagramaProcesos->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->DiagramaProcesos->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->DiagramaProcesos->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->DiccionarioDatos->Visible) { // DiccionarioDatos ?>
	<tr id="r_DiccionarioDatos">
		<td><span id="elh_pp_solatendida2_DiccionarioDatos"><?php echo $pp_solatendida2->DiccionarioDatos->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->DiccionarioDatos->CellAttributes() ?>>
<span id="el_pp_solatendida2_DiccionarioDatos" class="control-group">
<span<?php echo $pp_solatendida2->DiccionarioDatos->ViewAttributes() ?>>
<?php if ($pp_solatendida2->DiccionarioDatos->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_solatendida2->DiccionarioDatos->Upload->DbValue)) { ?>
<a<?php echo $pp_solatendida2->DiccionarioDatos->LinkAttributes() ?>><?php echo $pp_solatendida2->DiccionarioDatos->ViewValue ?></a>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_solatendida2->DiccionarioDatos->Upload->DbValue)) { ?>
<?php echo $pp_solatendida2->DiccionarioDatos->ViewValue ?>
<?php } elseif (!in_array($pp_solatendida2->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->fecha_asigna_qa->Visible) { // fecha_asigna_qa ?>
	<tr id="r_fecha_asigna_qa">
		<td><span id="elh_pp_solatendida2_fecha_asigna_qa"><?php echo $pp_solatendida2->fecha_asigna_qa->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->fecha_asigna_qa->CellAttributes() ?>>
<span id="el_pp_solatendida2_fecha_asigna_qa" class="control-group">
<span<?php echo $pp_solatendida2->fecha_asigna_qa->ViewAttributes() ?>>
<?php echo $pp_solatendida2->fecha_asigna_qa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->id_qa->Visible) { // id_qa ?>
	<tr id="r_id_qa">
		<td><span id="elh_pp_solatendida2_id_qa"><?php echo $pp_solatendida2->id_qa->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->id_qa->CellAttributes() ?>>
<span id="el_pp_solatendida2_id_qa" class="control-group">
<span<?php echo $pp_solatendida2->id_qa->ViewAttributes() ?>>
<?php if (!ew_EmptyStr($pp_solatendida2->id_qa->ViewValue) && $pp_solatendida2->id_qa->LinkAttributes() <> "") { ?>
<a<?php echo $pp_solatendida2->id_qa->LinkAttributes() ?>><?php echo $pp_solatendida2->id_qa->ViewValue ?></a>
<?php } else { ?>
<?php echo $pp_solatendida2->id_qa->ViewValue ?>
<?php } ?>
<span id="tt_pp_solatendida2_x_id_qa" style="display: none">
<?php echo $pp_solatendida2->id_qa->TooltipValue ?>
</span></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->observaciones_qa->Visible) { // observaciones_qa ?>
	<tr id="r_observaciones_qa">
		<td><span id="elh_pp_solatendida2_observaciones_qa"><?php echo $pp_solatendida2->observaciones_qa->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->observaciones_qa->CellAttributes() ?>>
<span id="el_pp_solatendida2_observaciones_qa" class="control-group">
<span<?php echo $pp_solatendida2->observaciones_qa->ViewAttributes() ?>>
<?php echo $pp_solatendida2->observaciones_qa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->IdEstadoSoliPuestaProd->Visible) { // IdEstadoSoliPuestaProd ?>
	<tr id="r_IdEstadoSoliPuestaProd">
		<td><span id="elh_pp_solatendida2_IdEstadoSoliPuestaProd"><?php echo $pp_solatendida2->IdEstadoSoliPuestaProd->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->IdEstadoSoliPuestaProd->CellAttributes() ?>>
<span id="el_pp_solatendida2_IdEstadoSoliPuestaProd" class="control-group">
<span<?php echo $pp_solatendida2->IdEstadoSoliPuestaProd->ViewAttributes() ?>>
<?php echo $pp_solatendida2->IdEstadoSoliPuestaProd->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>






<?php  // Muestra las Fuentes Separadas   -   lmo

$strSql ="SELECT DISTINCT pp_reqprog.Idreqprograma, pp_programas.idPrograma, pp_servicio.IdServicio, 
				pp_servicio.Servicio, pp_modulo.modulo, pp_programas.numero, pp_programas.descripcion, 
				pp_reqprog.deserror, pp_reqprog.desmodifi, pp_reqprog.compilacion, pp_reqprog.revision, 
				pp_reqprog.nuevaRevision, pp_programas.idestprog, pp_reqprog.opcion, pp_tipoprog.tipo, 
				pp_tipoprog.Idtipoprog 
		FROM pp_reqprog INNER JOIN 
				pp_servicio ON pp_reqprog.idSistema = pp_servicio.IdServicio INNER JOIN 
				pp_modulo ON pp_reqprog.idModulo = pp_modulo.Idmodulo INNER JOIN 
				pp_programas ON pp_programas.idPrograma = pp_reqprog.idprog INNER JOIN 
				pp_tipoprog ON pp_tipoprog.Idtipoprog = pp_programas.idtipo  
		Where pp_reqprog.idpase = '". $pp_solatendida2->IdPase->CurrentValue ."'";  
$rslmo = $conn->Execute($strSql);

echo	"<tr>";
echo	"<td class='control-group'>Programas a Pasar<span class='ewmsg'></span></td>";
echo		"<td>";

while (!$rslmo->EOF)
{
	
		$copiar_selva = "";
		if ($rslmo->fields('IdServicio') == 2) 
		{
			//consulta si el numero existe en selva
			$strSql2 = "select count(*) as existe 
					from pp_programas 
					where idsistema=273 
					and numero = '". $rslmo->fields('numero') ."'"; 
			$rslmo2 = $conn->Execute($strSql2);		
			$count_selva = $rslmo2->fields('existe');
	
			if ($count_selva>0) //Si existe el programa en selva
			{
				$copiar_selva = "NO";
			}
			else
			{
				$copiar_selva = "SI";
			}
							
		}
	
	


	
echo		  "<span>";
echo		  "<table width='757' cellspacing='0'>";
echo		  "<tr><td width='753' class='ewGridContent'>";
echo  "<div class='ewGridMiddlePanel'>";
echo  "<table>";
echo    "<tr>";
echo      "<td width='223'>Programa</td>";
echo 		"<td width='475'>".$rslmo->fields('Servicio')." / ".$rslmo->fields('modulo')." / ".$rslmo->fields('numero')."</td>";
echo            "</tr>";

	//halla la ruta en el sistema
	$Perfil="";
	$rutax="";

	if($rslmo->fields('opcion') =='Null' or  $rslmo->fields('opcion') == '') 
	{
		$rutax="Programa Existente";
		$Perfil="Programa Existente";
	}
	else  
	{
		$rutax="Programa Nuevo";
		$Perfil="Programa Nuevo";
	}

	//halla la ruta en el sistema
		$strSql ="SELECT distinct pp_servicio.Servicio, pp_menu.menu, pp_submenu.submenu, pp_opcion.opcion, 
					pp_opcion.nprg 
			FROM pp_opcion INNER JOIN 
					pp_menu ON pp_menu.codmenu = pp_opcion.codmenu INNER JOIN 
					pp_servicio ON pp_servicio.IdServicio = pp_opcion.idsistema INNER JOIN 
					pp_submenu ON pp_submenu.codsubmenu = pp_opcion.codsubmenu 
			WHERE pp_opcion.idprograma = '". $rslmo->fields('idPrograma') ."'";
		$rslmo2 = $conn->Execute($strSql);
	
		if ($rslmo2->RecordCount()>0)
		{
			while (!$rslmo2->EOF)
			{
				$rutax=  strtoupper($rslmo2->fields('Servicio')) . "/" .  strtoupper($rslmo2->fields('menu')) . "/" .  strtoupper($rslmo2->fields('submenu')). "/" .  ucwords($rslmo2->fields('opcion'));
		
				echo    "<tr>";
				echo      "<td width='223' class='ewTableHeader'>Ruta del Sistema</td>";
				echo 		"<td width='475'>".nl2br($rutax)."</td>";
				echo            "</tr>";
				$rslmo2->MoveNext();		
			}
			if ($rslmo2) $rslmo2->Close();
		}
		else
		{
			echo    "<tr>";
			echo      "<td width='223' class='ewTableHeader'>Ruta del Sistema</td>";
			echo 		"<td width='475'>".nl2br($rutax)."</td>";
			echo            "</tr>";
		}

echo    "<tr>";
echo      "<td width='223' class='ewTableHeader'>Perfiles con acceso</td>";
echo 		"<td width='475'>".nl2br($Perfil)."</td>";
echo            "</tr>";
//echo    "<tr>";

echo    "<tr>";
if ($rslmo->fields('Idtipoprog')==4) echo "<td width='223' BGCOLOR='32CD32'>Tipo</td>";
else echo "<td width='223' class='ewTableHeader'>Tipo</td>";
echo 		"<td width='475'>".nl2br($rslmo->fields('tipo'))."</td>";
echo            "</tr>";

echo      "<td width='223' class='ewTableHeader'>Descripción del Programa</td>";
echo 		"<td width='475'>".nl2br($rslmo->fields('descripcion'))."</td>";
echo            "</tr>";
/*
echo    "<tr>";
echo      "<td width='223' class='ewTableHeader'>Descripción del Error</td>";
echo 		"<td width='475'>".nl2br($rslmo->fields('deserror'))."</td>";
echo            "</tr>";
*/
echo    "<tr>";
echo      "<td width='223' class='ewTableHeader'>Descripción de las Modificaciones</td>";
echo 		"<td width='475'>".nl2br($rslmo->fields('desmodifi'))."</td>";
echo            "</tr>";
/*
echo    "<tr>";
echo      "<td width='223' class='ewTableHeader'>Compilación</td>";
echo 		"<td width='475'>".nl2br($rslmo->fields('compilacion'))."</td>";
echo            "</tr>";
*/
echo    "<tr>";
echo      "<td width='223' class='ewTableHeader'>Num. Revision</td>";
echo 		"<td width='475'>".$rslmo->fields('revision')."</td>";
echo            "</tr>";

echo    "<tr>";
if ($copiar_selva == "NO")  echo "<td width='223' BGCOLOR='32CD32'>Copiar en SELVA</td>";
else echo "<td width='223' class='ewTableHeader'>Copiar en SELVA</td>";
echo 		"<td width='475'>".$copiar_selva."</td>";
echo            "</tr>";



$linkver="lmo_pp_manualuserview.php?idPrograma=" . $rslmo->fields('idPrograma');
$linkedit="lmo_pp_manualuseredit.php?idPrograma=" . $rslmo->fields('idPrograma');
echo    "<tr>";
echo        "<td width='223' class='ewTableHeader'>Manual Usuario</td>";
echo 		"<td width='475'> <a href=$linkver>Ver</a>";
echo 		"<a>                    ------                 </a>";
echo 		"<a href=$linkedit>Editar</a></td>";
echo            "</tr>";

$linkver="lmo_pp_planpruebaview.php?idPrograma=" . $rslmo->fields('idPrograma');
$linkedit="lmo_pp_planpruebaedit.php?idPrograma=" . $rslmo->fields('idPrograma');
echo    "<tr>";
echo        "<td width='223' class='ewTableHeader'>Plan de Pruebas</td>";
echo 		"<td width='475'><a href=$linkver>Ver</a>";
echo 		"<a>                    ------                 </a>";
echo 		"<a href=$linkedit>Editar</a></td>";
echo            "</tr>";


echo    "</table>";
echo          "</div>";
echo          "</table>";

$rslmo->MoveNext();
}
echo		"</td>";

if ($rslmo) $rslmo->Close();

?>


<tr>
<td class='ewTableHeader'>DICCIONARIO DE DATOS<span class='ewmsg'></span></td>
<td>

<?php  // Muestra las tablas que forman parte del subproceso
$strSql ="Select distinct pp_servicio.Servicio, pp_tablas.tabla, pp_tablas.diccionario, pp_tablas.Idtabla, pp_tablas.fecha From pp_tablas Inner Join pp_servicio On pp_servicio.IdServicio = pp_tablas.idbase  where pp_tablas.idpase = '". $pp_solatendida2->IdPase->CurrentValue ."'";	
$rslmo = $conn->Execute($strSql);
?>

<table width="200" border="1">
  <tr>
    <th scope="col">Base</th>
    <th scope="col">Tabla</th>
    <th scope="col">Diccionario</th>
    <th scope="col">Fecha</th>
	<th scope="col">Detalle</th>
  </tr>
  
<?php  
while (!$rslmo->EOF)
{

$linkver="lmo_pp_tablasview.php?Idtabla=" . $rslmo->fields('Idtabla');

echo			  "<tr>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('Servicio')."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('tabla')."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('diccionario')."</td>";
echo				"<td nowrap='nowrap'>".ew_FormatDateTime($rslmo->fields('fecha'), 11)."</td>";
echo				"<td nowrap='nowrap'><a href=$linkver>Ver</a></td>";
echo			  "</tr>";
$rslmo->MoveNext();
} //fin while
if ($rslmo) $rslmo->Close();
?>

</table>

</td>
</tr>







<tr>
<td class='ewTableHeader'>SEPARACION DE CONCEPTOS<span class='ewmsg'></span></td>
<td>

<?php  // Muestra los nuevos conceptos separados
$strSql ="SELECT pp_tablas.tabla, pp_servicio.Servicio, pp_gbcon.gbconpfij, pp_gbcon.gbconcorr, pp_gbcon.gbcondesc, pp_gbcon.gbconabre, pp_gbcon.id_pase FROM pp_gbcon INNER JOIN pp_tablas ON pp_tablas.Idtabla = pp_gbcon.id_tabla INNER JOIN pp_servicio ON pp_servicio.IdServicio = pp_gbcon.id_base WHERE   pp_gbcon.id_pase= '". $pp_solatendida2->IdPase->CurrentValue ."' and pp_gbcon.idestado not in (3)";	

$rslmo = $conn->Execute($strSql);
?>

<table width="200" border="1">
  <tr>
    <th scope="col">Base</th>
    <th scope="col">Tabla</th>
    <th scope="col">PFIJ</th>
    <th scope="col">CORR</th>
	<th scope="col">Descripcion</th>
  </tr>
  
<?php  
while (!$rslmo->EOF)
{

$linkver="lmo_pp_tablasview.php?Idtabla=" . $rslmo->fields('Idtabla');

echo			  "<tr>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('Servicio')."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('tabla')."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('gbconpfij')."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('gbconcorr')."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('gbcondesc')."</td>";
echo			  "</tr>";
$rslmo->MoveNext();
} //fin while
if ($rslmo) $rslmo->Close();
?>

</table>

</td>
</tr>




<tr>
<td class='ewTableHeader'>LENGUAJE DEFINICIÓN DE DATOS<span class='ewmsg'></span></td>
<td>

<?php  // Muestra los procedimientos almacenados separados
$strSql ="Select distinct pp_reqstoreproc.Idreqstore, pp_reqstoreproc.fechasepara, pp_reqstoreproc.idpase, pp_servicio.Servicio, pp_storeprocedure.idstoreproc, pp_storeprocedure.ddl, pp_storeprocedure.descripcion, pp_reqstoreproc.desmodifi, pp_reqstoreproc.deserror, pp_conceptos.descripcion As estado From pp_reqstoreproc Inner Join pp_storeprocedure On pp_storeprocedure.idstoreproc = pp_reqstoreproc.idstoreproc Inner Join pp_servicio On pp_servicio.IdServicio = pp_reqstoreproc.idSistema Inner Join pp_conceptos On pp_conceptos.iddetalle = pp_reqstoreproc.idestado Where pp_reqstoreproc.idpase = '". $pp_solatendida2->IdPase->CurrentValue ."' And pp_reqstoreproc.pasarproduccion = 1 And pp_conceptos.idconcepto = 2 And pp_reqstoreproc.idestado In (1,2,3) order by 4,1"; 
$rslmo = $conn->Execute($strSql);
?>

<table width="200" border="1">
  <tr>
    <th scope="col">Sistema</th>
    <th scope="col">DDL</th>
    <th scope="col">Diccionario</th>
    <th scope="col">Fecha</th>
    <th scope="col">Estado</th>
	<th scope="col">Detalle</th>
  </tr>
  
<?php  
while (!$rslmo->EOF)
{
	if ($rslmo->fields('idestado')==3)	$linkver="lmo_pp_ddlaltaspaseview.php?Idreqstore=" . $rslmo->fields('Idreqstore');
	else $linkver="lmo_pp_ddlaltaspaseexisteview.php?Idreqstore=" . $rslmo->fields('Idreqstore');

echo			  "<tr>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('Servicio')."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('idstoreproc') . " - " . $rslmo->fields('ddl')."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('descripcion')."</td>";
echo				"<td nowrap='nowrap'>".ew_FormatDateTime($rslmo->fields('fechasepara'), 11)."</td>";
echo				"<td nowrap='nowrap'>".$rslmo->fields('estado')."</td>";
echo				"<td nowrap='nowrap'><a href=$linkver>Ver</a></td>";
echo			  "</tr>";
$rslmo->MoveNext();
} //fin while
if ($rslmo) $rslmo->Close();
?>

</table>

</td>
</tr>







</table>
</td></tr></table>
<?php if ($pp_solatendida2->Export == "") { ?>
		</div>
<?php } ?>
<?php if ($pp_solatendida2->Export == "") { ?>
		<div class="tab-pane" id="tab_pp_solatendida22">
<?php } ?>
<table class="ewGrid"<?php if ($pp_solatendida2->Export == "") echo " style=\"width: 100%\""; ?>><tr><td>
<table id="tbl_pp_solatendida2view2" class="table table-bordered table-striped">
<?php if ($pp_solatendida2->Proyecto->Visible) { // Proyecto ?>
	<tr id="r_Proyecto">
		<td><span id="elh_pp_solatendida2_Proyecto"><?php echo $pp_solatendida2->Proyecto->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Proyecto->CellAttributes() ?>>
<span id="el_pp_solatendida2_Proyecto" class="control-group">
<span<?php echo $pp_solatendida2->Proyecto->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Proyecto->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->idProydes->Visible) { // idProydes ?>
	<tr id="r_idProydes">
		<td><span id="elh_pp_solatendida2_idProydes"><?php echo $pp_solatendida2->idProydes->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->idProydes->CellAttributes() ?>>
<span id="el_pp_solatendida2_idProydes" class="control-group">
<span<?php echo $pp_solatendida2->idProydes->ViewAttributes() ?>>
<?php echo $pp_solatendida2->idProydes->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->IdSoliDesarrollo->Visible) { // IdSoliDesarrollo ?>
	<tr id="r_IdSoliDesarrollo">
		<td><span id="elh_pp_solatendida2_IdSoliDesarrollo"><?php echo $pp_solatendida2->IdSoliDesarrollo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->IdSoliDesarrollo->CellAttributes() ?>>
<span id="el_pp_solatendida2_IdSoliDesarrollo" class="control-group">
<span<?php echo $pp_solatendida2->IdSoliDesarrollo->ViewAttributes() ?>>
<?php echo $pp_solatendida2->IdSoliDesarrollo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->CodHelpDesk->Visible) { // CodHelpDesk ?>
	<tr id="r_CodHelpDesk">
		<td><span id="elh_pp_solatendida2_CodHelpDesk"><?php echo $pp_solatendida2->CodHelpDesk->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->CodHelpDesk->CellAttributes() ?>>
<span id="el_pp_solatendida2_CodHelpDesk" class="control-group">
<span<?php echo $pp_solatendida2->CodHelpDesk->ViewAttributes() ?>>
<?php echo $pp_solatendida2->CodHelpDesk->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->tittuReque->Visible) { // tittuReque ?>
	<tr id="r_tittuReque">
		<td><span id="elh_pp_solatendida2_tittuReque"><?php echo $pp_solatendida2->tittuReque->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->tittuReque->CellAttributes() ?>>
<span id="el_pp_solatendida2_tittuReque" class="control-group">
<span<?php echo $pp_solatendida2->tittuReque->ViewAttributes() ?>>
<?php echo $pp_solatendida2->tittuReque->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->desreque->Visible) { // desreque ?>
	<tr id="r_desreque">
		<td><span id="elh_pp_solatendida2_desreque"><?php echo $pp_solatendida2->desreque->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->desreque->CellAttributes() ?>>
<span id="el_pp_solatendida2_desreque" class="control-group">
<span<?php echo $pp_solatendida2->desreque->ViewAttributes() ?>>
<?php echo $pp_solatendida2->desreque->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Beneficios->Visible) { // Beneficios ?>
	<tr id="r_Beneficios">
		<td><span id="elh_pp_solatendida2_Beneficios"><?php echo $pp_solatendida2->Beneficios->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Beneficios->CellAttributes() ?>>
<span id="el_pp_solatendida2_Beneficios" class="control-group">
<span<?php echo $pp_solatendida2->Beneficios->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Beneficios->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Objetivo->Visible) { // Objetivo ?>
	<tr id="r_Objetivo">
		<td><span id="elh_pp_solatendida2_Objetivo"><?php echo $pp_solatendida2->Objetivo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Objetivo->CellAttributes() ?>>
<span id="el_pp_solatendida2_Objetivo" class="control-group">
<span<?php echo $pp_solatendida2->Objetivo->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Objetivo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FuncOperativa->Visible) { // FuncOperativa ?>
	<tr id="r_FuncOperativa">
		<td><span id="elh_pp_solatendida2_FuncOperativa"><?php echo $pp_solatendida2->FuncOperativa->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FuncOperativa->CellAttributes() ?>>
<span id="el_pp_solatendida2_FuncOperativa" class="control-group">
<span<?php echo $pp_solatendida2->FuncOperativa->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FuncOperativa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->GestionControl->Visible) { // GestionControl ?>
	<tr id="r_GestionControl">
		<td><span id="elh_pp_solatendida2_GestionControl"><?php echo $pp_solatendida2->GestionControl->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->GestionControl->CellAttributes() ?>>
<span id="el_pp_solatendida2_GestionControl" class="control-group">
<span<?php echo $pp_solatendida2->GestionControl->ViewAttributes() ?>>
<?php echo $pp_solatendida2->GestionControl->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->ReferLegal->Visible) { // ReferLegal ?>
	<tr id="r_ReferLegal">
		<td><span id="elh_pp_solatendida2_ReferLegal"><?php echo $pp_solatendida2->ReferLegal->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->ReferLegal->CellAttributes() ?>>
<span id="el_pp_solatendida2_ReferLegal" class="control-group">
<span<?php echo $pp_solatendida2->ReferLegal->ViewAttributes() ?>>
<?php echo $pp_solatendida2->ReferLegal->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->AreasRelacionadas->Visible) { // AreasRelacionadas ?>
	<tr id="r_AreasRelacionadas">
		<td><span id="elh_pp_solatendida2_AreasRelacionadas"><?php echo $pp_solatendida2->AreasRelacionadas->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->AreasRelacionadas->CellAttributes() ?>>
<span id="el_pp_solatendida2_AreasRelacionadas" class="control-group">
<span<?php echo $pp_solatendida2->AreasRelacionadas->ViewAttributes() ?>>
<?php echo $pp_solatendida2->AreasRelacionadas->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Observaciones->Visible) { // Observaciones ?>
	<tr id="r_Observaciones">
		<td><span id="elh_pp_solatendida2_Observaciones"><?php echo $pp_solatendida2->Observaciones->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Observaciones->CellAttributes() ?>>
<span id="el_pp_solatendida2_Observaciones" class="control-group">
<span<?php echo $pp_solatendida2->Observaciones->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Observaciones->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->JefeRiesgoOperativo->Visible) { // JefeRiesgoOperativo ?>
	<tr id="r_JefeRiesgoOperativo">
		<td><span id="elh_pp_solatendida2_JefeRiesgoOperativo"><?php echo $pp_solatendida2->JefeRiesgoOperativo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->JefeRiesgoOperativo->CellAttributes() ?>>
<span id="el_pp_solatendida2_JefeRiesgoOperativo" class="control-group">
<span<?php echo $pp_solatendida2->JefeRiesgoOperativo->ViewAttributes() ?>>
<?php echo $pp_solatendida2->JefeRiesgoOperativo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Impacto->Visible) { // Impacto ?>
	<tr id="r_Impacto">
		<td><span id="elh_pp_solatendida2_Impacto"><?php echo $pp_solatendida2->Impacto->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Impacto->CellAttributes() ?>>
<span id="el_pp_solatendida2_Impacto" class="control-group">
<span<?php echo $pp_solatendida2->Impacto->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Impacto->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Participacion->Visible) { // Participacion ?>
	<tr id="r_Participacion">
		<td><span id="elh_pp_solatendida2_Participacion"><?php echo $pp_solatendida2->Participacion->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Participacion->CellAttributes() ?>>
<span id="el_pp_solatendida2_Participacion" class="control-group">
<span<?php echo $pp_solatendida2->Participacion->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Participacion->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Justificativa->Visible) { // Justificativa ?>
	<tr id="r_Justificativa">
		<td><span id="elh_pp_solatendida2_Justificativa"><?php echo $pp_solatendida2->Justificativa->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Justificativa->CellAttributes() ?>>
<span id="el_pp_solatendida2_Justificativa" class="control-group">
<span<?php echo $pp_solatendida2->Justificativa->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Justificativa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Recomendacion->Visible) { // Recomendacion ?>
	<tr id="r_Recomendacion">
		<td><span id="elh_pp_solatendida2_Recomendacion"><?php echo $pp_solatendida2->Recomendacion->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Recomendacion->CellAttributes() ?>>
<span id="el_pp_solatendida2_Recomendacion" class="control-group">
<span<?php echo $pp_solatendida2->Recomendacion->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Recomendacion->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Roles->Visible) { // Roles ?>
	<tr id="r_Roles">
		<td><span id="elh_pp_solatendida2_Roles"><?php echo $pp_solatendida2->Roles->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Roles->CellAttributes() ?>>
<span id="el_pp_solatendida2_Roles" class="control-group">
<span<?php echo $pp_solatendida2->Roles->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Roles->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</td></tr></table>
<?php if ($pp_solatendida2->Export == "") { ?>
		</div>
<?php } ?>
<?php if ($pp_solatendida2->Export == "") { ?>
		<div class="tab-pane" id="tab_pp_solatendida23">
<?php } ?>
<table class="ewGrid"<?php if ($pp_solatendida2->Export == "") echo " style=\"width: 100%\""; ?>><tr><td>
<table id="tbl_pp_solatendida2view3" class="table table-bordered table-striped">
<?php if ($pp_solatendida2->querys->Visible) { // querys ?>
	<tr id="r_querys">
		<td><span id="elh_pp_solatendida2_querys"><?php echo $pp_solatendida2->querys->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->querys->CellAttributes() ?>>
<span id="el_pp_solatendida2_querys" class="control-group">
<span<?php echo $pp_solatendida2->querys->ViewAttributes() ?>>
<?php echo $pp_solatendida2->querys->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</td></tr></table>
<?php if ($pp_solatendida2->Export == "") { ?>
		</div>
<?php } ?>
<?php if ($pp_solatendida2->Export == "") { ?>
		<div class="tab-pane" id="tab_pp_solatendida24">
<?php } ?>
<table class="ewGrid"<?php if ($pp_solatendida2->Export == "") echo " style=\"width: 100%\""; ?>><tr><td>
<table id="tbl_pp_solatendida2view4" class="table table-bordered table-striped">
<?php if ($pp_solatendida2->Fecha->Visible) { // Fecha ?>
	<tr id="r_Fecha">
		<td><span id="elh_pp_solatendida2_Fecha"><?php echo $pp_solatendida2->Fecha->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Fecha->CellAttributes() ?>>
<span id="el_pp_solatendida2_Fecha" class="control-group">
<span<?php echo $pp_solatendida2->Fecha->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Fecha->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->fechapase_ss->Visible) { // fechapase_ss ?>
	<tr id="r_fechapase_ss">
		<td><span id="elh_pp_solatendida2_fechapase_ss"><?php echo $pp_solatendida2->fechapase_ss->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->fechapase_ss->CellAttributes() ?>>
<span id="el_pp_solatendida2_fechapase_ss" class="control-group">
<span<?php echo $pp_solatendida2->fechapase_ss->ViewAttributes() ?>>
<?php echo $pp_solatendida2->fechapase_ss->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaSolicitud->Visible) { // FechaSolicitud ?>
	<tr id="r_FechaSolicitud">
		<td><span id="elh_pp_solatendida2_FechaSolicitud"><?php echo $pp_solatendida2->FechaSolicitud->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaSolicitud->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaSolicitud" class="control-group">
<span<?php echo $pp_solatendida2->FechaSolicitud->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaSolicitud->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaRequerida->Visible) { // FechaRequerida ?>
	<tr id="r_FechaRequerida">
		<td><span id="elh_pp_solatendida2_FechaRequerida"><?php echo $pp_solatendida2->FechaRequerida->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaRequerida->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaRequerida" class="control-group">
<span<?php echo $pp_solatendida2->FechaRequerida->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaRequerida->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaRequerimiento_log->Visible) { // FechaRequerimiento_log ?>
	<tr id="r_FechaRequerimiento_log">
		<td><span id="elh_pp_solatendida2_FechaRequerimiento_log"><?php echo $pp_solatendida2->FechaRequerimiento_log->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaRequerimiento_log->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaRequerimiento_log" class="control-group">
<span<?php echo $pp_solatendida2->FechaRequerimiento_log->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaRequerimiento_log->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaProgramacion->Visible) { // FechaProgramacion ?>
	<tr id="r_FechaProgramacion">
		<td><span id="elh_pp_solatendida2_FechaProgramacion"><?php echo $pp_solatendida2->FechaProgramacion->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaProgramacion->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaProgramacion" class="control-group">
<span<?php echo $pp_solatendida2->FechaProgramacion->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaProgramacion->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaInicio->Visible) { // FechaInicio ?>
	<tr id="r_FechaInicio">
		<td><span id="elh_pp_solatendida2_FechaInicio"><?php echo $pp_solatendida2->FechaInicio->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaInicio->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaInicio" class="control-group">
<span<?php echo $pp_solatendida2->FechaInicio->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaInicio->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaAnalisisFin->Visible) { // FechaAnalisisFin ?>
	<tr id="r_FechaAnalisisFin">
		<td><span id="elh_pp_solatendida2_FechaAnalisisFin"><?php echo $pp_solatendida2->FechaAnalisisFin->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaAnalisisFin->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaAnalisisFin" class="control-group">
<span<?php echo $pp_solatendida2->FechaAnalisisFin->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaAnalisisFin->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaDesarrolloInicio->Visible) { // FechaDesarrolloInicio ?>
	<tr id="r_FechaDesarrolloInicio">
		<td><span id="elh_pp_solatendida2_FechaDesarrolloInicio"><?php echo $pp_solatendida2->FechaDesarrolloInicio->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaDesarrolloInicio->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaDesarrolloInicio" class="control-group">
<span<?php echo $pp_solatendida2->FechaDesarrolloInicio->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaDesarrolloInicio->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaDesarrolloFin->Visible) { // FechaDesarrolloFin ?>
	<tr id="r_FechaDesarrolloFin">
		<td><span id="elh_pp_solatendida2_FechaDesarrolloFin"><?php echo $pp_solatendida2->FechaDesarrolloFin->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaDesarrolloFin->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaDesarrolloFin" class="control-group">
<span<?php echo $pp_solatendida2->FechaDesarrolloFin->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaDesarrolloFin->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaPruebasInicio->Visible) { // FechaPruebasInicio ?>
	<tr id="r_FechaPruebasInicio">
		<td><span id="elh_pp_solatendida2_FechaPruebasInicio"><?php echo $pp_solatendida2->FechaPruebasInicio->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaPruebasInicio->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaPruebasInicio" class="control-group">
<span<?php echo $pp_solatendida2->FechaPruebasInicio->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaPruebasInicio->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaTerminoPropuesto->Visible) { // FechaTerminoPropuesto ?>
	<tr id="r_FechaTerminoPropuesto">
		<td><span id="elh_pp_solatendida2_FechaTerminoPropuesto"><?php echo $pp_solatendida2->FechaTerminoPropuesto->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaTerminoPropuesto->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaTerminoPropuesto" class="control-group">
<span<?php echo $pp_solatendida2->FechaTerminoPropuesto->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaTerminoPropuesto->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaQAInicio->Visible) { // FechaQAInicio ?>
	<tr id="r_FechaQAInicio">
		<td><span id="elh_pp_solatendida2_FechaQAInicio"><?php echo $pp_solatendida2->FechaQAInicio->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaQAInicio->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaQAInicio" class="control-group">
<span<?php echo $pp_solatendida2->FechaQAInicio->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaQAInicio->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaTerminoQA->Visible) { // FechaTerminoQA ?>
	<tr id="r_FechaTerminoQA">
		<td><span id="elh_pp_solatendida2_FechaTerminoQA"><?php echo $pp_solatendida2->FechaTerminoQA->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaTerminoQA->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaTerminoQA" class="control-group">
<span<?php echo $pp_solatendida2->FechaTerminoQA->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaTerminoQA->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaPruebasUserInicio->Visible) { // FechaPruebasUserInicio ?>
	<tr id="r_FechaPruebasUserInicio">
		<td><span id="elh_pp_solatendida2_FechaPruebasUserInicio"><?php echo $pp_solatendida2->FechaPruebasUserInicio->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaPruebasUserInicio->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaPruebasUserInicio" class="control-group">
<span<?php echo $pp_solatendida2->FechaPruebasUserInicio->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaPruebasUserInicio->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaPruebasUserFin->Visible) { // FechaPruebasUserFin ?>
	<tr id="r_FechaPruebasUserFin">
		<td><span id="elh_pp_solatendida2_FechaPruebasUserFin"><?php echo $pp_solatendida2->FechaPruebasUserFin->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaPruebasUserFin->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaPruebasUserFin" class="control-group">
<span<?php echo $pp_solatendida2->FechaPruebasUserFin->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaPruebasUserFin->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaPuesta->Visible) { // FechaPuesta ?>
	<tr id="r_FechaPuesta">
		<td><span id="elh_pp_solatendida2_FechaPuesta"><?php echo $pp_solatendida2->FechaPuesta->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaPuesta->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaPuesta" class="control-group">
<span<?php echo $pp_solatendida2->FechaPuesta->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaPuesta->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaTermino->Visible) { // FechaTermino ?>
	<tr id="r_FechaTermino">
		<td><span id="elh_pp_solatendida2_FechaTermino"><?php echo $pp_solatendida2->FechaTermino->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaTermino->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaTermino" class="control-group">
<span<?php echo $pp_solatendida2->FechaTermino->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaTermino->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaUltimoPase->Visible) { // FechaUltimoPase ?>
	<tr id="r_FechaUltimoPase">
		<td><span id="elh_pp_solatendida2_FechaUltimoPase"><?php echo $pp_solatendida2->FechaUltimoPase->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaUltimoPase->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaUltimoPase" class="control-group">
<span<?php echo $pp_solatendida2->FechaUltimoPase->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaUltimoPase->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->FechaUltimaTareaDiaria->Visible) { // FechaUltimaTareaDiaria ?>
	<tr id="r_FechaUltimaTareaDiaria">
		<td><span id="elh_pp_solatendida2_FechaUltimaTareaDiaria"><?php echo $pp_solatendida2->FechaUltimaTareaDiaria->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->FechaUltimaTareaDiaria->CellAttributes() ?>>
<span id="el_pp_solatendida2_FechaUltimaTareaDiaria" class="control-group">
<span<?php echo $pp_solatendida2->FechaUltimaTareaDiaria->ViewAttributes() ?>>
<?php echo $pp_solatendida2->FechaUltimaTareaDiaria->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->fechaRevisaJRO->Visible) { // fechaRevisaJRO ?>
	<tr id="r_fechaRevisaJRO">
		<td><span id="elh_pp_solatendida2_fechaRevisaJRO"><?php echo $pp_solatendida2->fechaRevisaJRO->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->fechaRevisaJRO->CellAttributes() ?>>
<span id="el_pp_solatendida2_fechaRevisaJRO" class="control-group">
<span<?php echo $pp_solatendida2->fechaRevisaJRO->ViewAttributes() ?>>
<?php echo $pp_solatendida2->fechaRevisaJRO->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->cant_dias_analisis->Visible) { // cant_dias_analisis ?>
	<tr id="r_cant_dias_analisis">
		<td><span id="elh_pp_solatendida2_cant_dias_analisis"><?php echo $pp_solatendida2->cant_dias_analisis->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->cant_dias_analisis->CellAttributes() ?>>
<span id="el_pp_solatendida2_cant_dias_analisis" class="control-group">
<span<?php echo $pp_solatendida2->cant_dias_analisis->ViewAttributes() ?>>
<?php echo $pp_solatendida2->cant_dias_analisis->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->cant_dias_desarrollo->Visible) { // cant_dias_desarrollo ?>
	<tr id="r_cant_dias_desarrollo">
		<td><span id="elh_pp_solatendida2_cant_dias_desarrollo"><?php echo $pp_solatendida2->cant_dias_desarrollo->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->cant_dias_desarrollo->CellAttributes() ?>>
<span id="el_pp_solatendida2_cant_dias_desarrollo" class="control-group">
<span<?php echo $pp_solatendida2->cant_dias_desarrollo->ViewAttributes() ?>>
<?php echo $pp_solatendida2->cant_dias_desarrollo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->cant_dias_pruebas->Visible) { // cant_dias_pruebas ?>
	<tr id="r_cant_dias_pruebas">
		<td><span id="elh_pp_solatendida2_cant_dias_pruebas"><?php echo $pp_solatendida2->cant_dias_pruebas->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->cant_dias_pruebas->CellAttributes() ?>>
<span id="el_pp_solatendida2_cant_dias_pruebas" class="control-group">
<span<?php echo $pp_solatendida2->cant_dias_pruebas->ViewAttributes() ?>>
<?php echo $pp_solatendida2->cant_dias_pruebas->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->cant_dias_qa->Visible) { // cant_dias_qa ?>
	<tr id="r_cant_dias_qa">
		<td><span id="elh_pp_solatendida2_cant_dias_qa"><?php echo $pp_solatendida2->cant_dias_qa->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->cant_dias_qa->CellAttributes() ?>>
<span id="el_pp_solatendida2_cant_dias_qa" class="control-group">
<span<?php echo $pp_solatendida2->cant_dias_qa->ViewAttributes() ?>>
<?php echo $pp_solatendida2->cant_dias_qa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->cant_dias_prueba_user->Visible) { // cant_dias_prueba_user ?>
	<tr id="r_cant_dias_prueba_user">
		<td><span id="elh_pp_solatendida2_cant_dias_prueba_user"><?php echo $pp_solatendida2->cant_dias_prueba_user->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->cant_dias_prueba_user->CellAttributes() ?>>
<span id="el_pp_solatendida2_cant_dias_prueba_user" class="control-group">
<span<?php echo $pp_solatendida2->cant_dias_prueba_user->ViewAttributes() ?>>
<?php echo $pp_solatendida2->cant_dias_prueba_user->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->avance_analisis_real->Visible) { // avance_analisis_real ?>
	<tr id="r_avance_analisis_real">
		<td><span id="elh_pp_solatendida2_avance_analisis_real"><?php echo $pp_solatendida2->avance_analisis_real->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->avance_analisis_real->CellAttributes() ?>>
<span id="el_pp_solatendida2_avance_analisis_real" class="control-group">
<span<?php echo $pp_solatendida2->avance_analisis_real->ViewAttributes() ?>>
<?php echo $pp_solatendida2->avance_analisis_real->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->avance_desarrollo_real->Visible) { // avance_desarrollo_real ?>
	<tr id="r_avance_desarrollo_real">
		<td><span id="elh_pp_solatendida2_avance_desarrollo_real"><?php echo $pp_solatendida2->avance_desarrollo_real->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->avance_desarrollo_real->CellAttributes() ?>>
<span id="el_pp_solatendida2_avance_desarrollo_real" class="control-group">
<span<?php echo $pp_solatendida2->avance_desarrollo_real->ViewAttributes() ?>>
<?php echo $pp_solatendida2->avance_desarrollo_real->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->avance_pruebas_real->Visible) { // avance_pruebas_real ?>
	<tr id="r_avance_pruebas_real">
		<td><span id="elh_pp_solatendida2_avance_pruebas_real"><?php echo $pp_solatendida2->avance_pruebas_real->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->avance_pruebas_real->CellAttributes() ?>>
<span id="el_pp_solatendida2_avance_pruebas_real" class="control-group">
<span<?php echo $pp_solatendida2->avance_pruebas_real->ViewAttributes() ?>>
<?php echo $pp_solatendida2->avance_pruebas_real->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->avance_qa_real->Visible) { // avance_qa_real ?>
	<tr id="r_avance_qa_real">
		<td><span id="elh_pp_solatendida2_avance_qa_real"><?php echo $pp_solatendida2->avance_qa_real->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->avance_qa_real->CellAttributes() ?>>
<span id="el_pp_solatendida2_avance_qa_real" class="control-group">
<span<?php echo $pp_solatendida2->avance_qa_real->ViewAttributes() ?>>
<?php echo $pp_solatendida2->avance_qa_real->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->avance_analisis_plan->Visible) { // avance_analisis_plan ?>
	<tr id="r_avance_analisis_plan">
		<td><span id="elh_pp_solatendida2_avance_analisis_plan"><?php echo $pp_solatendida2->avance_analisis_plan->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->avance_analisis_plan->CellAttributes() ?>>
<span id="el_pp_solatendida2_avance_analisis_plan" class="control-group">
<span<?php echo $pp_solatendida2->avance_analisis_plan->ViewAttributes() ?>>
<?php echo $pp_solatendida2->avance_analisis_plan->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->avance_desarrollo_plan->Visible) { // avance_desarrollo_plan ?>
	<tr id="r_avance_desarrollo_plan">
		<td><span id="elh_pp_solatendida2_avance_desarrollo_plan"><?php echo $pp_solatendida2->avance_desarrollo_plan->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->avance_desarrollo_plan->CellAttributes() ?>>
<span id="el_pp_solatendida2_avance_desarrollo_plan" class="control-group">
<span<?php echo $pp_solatendida2->avance_desarrollo_plan->ViewAttributes() ?>>
<?php echo $pp_solatendida2->avance_desarrollo_plan->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->avance_pruebas_plan->Visible) { // avance_pruebas_plan ?>
	<tr id="r_avance_pruebas_plan">
		<td><span id="elh_pp_solatendida2_avance_pruebas_plan"><?php echo $pp_solatendida2->avance_pruebas_plan->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->avance_pruebas_plan->CellAttributes() ?>>
<span id="el_pp_solatendida2_avance_pruebas_plan" class="control-group">
<span<?php echo $pp_solatendida2->avance_pruebas_plan->ViewAttributes() ?>>
<?php echo $pp_solatendida2->avance_pruebas_plan->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->avance_qa_plan->Visible) { // avance_qa_plan ?>
	<tr id="r_avance_qa_plan">
		<td><span id="elh_pp_solatendida2_avance_qa_plan"><?php echo $pp_solatendida2->avance_qa_plan->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->avance_qa_plan->CellAttributes() ?>>
<span id="el_pp_solatendida2_avance_qa_plan" class="control-group">
<span<?php echo $pp_solatendida2->avance_qa_plan->ViewAttributes() ?>>
<?php echo $pp_solatendida2->avance_qa_plan->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->dias_anticipacion->Visible) { // dias_anticipacion ?>
	<tr id="r_dias_anticipacion">
		<td><span id="elh_pp_solatendida2_dias_anticipacion"><?php echo $pp_solatendida2->dias_anticipacion->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->dias_anticipacion->CellAttributes() ?>>
<span id="el_pp_solatendida2_dias_anticipacion" class="control-group">
<span<?php echo $pp_solatendida2->dias_anticipacion->ViewAttributes() ?>>
<?php echo $pp_solatendida2->dias_anticipacion->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->veces_mod_findes->Visible) { // veces_mod_findes ?>
	<tr id="r_veces_mod_findes">
		<td><span id="elh_pp_solatendida2_veces_mod_findes"><?php echo $pp_solatendida2->veces_mod_findes->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->veces_mod_findes->CellAttributes() ?>>
<span id="el_pp_solatendida2_veces_mod_findes" class="control-group">
<span<?php echo $pp_solatendida2->veces_mod_findes->ViewAttributes() ?>>
<?php echo $pp_solatendida2->veces_mod_findes->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->dias_analisis_td->Visible) { // dias_analisis_td ?>
	<tr id="r_dias_analisis_td">
		<td><span id="elh_pp_solatendida2_dias_analisis_td"><?php echo $pp_solatendida2->dias_analisis_td->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->dias_analisis_td->CellAttributes() ?>>
<span id="el_pp_solatendida2_dias_analisis_td" class="control-group">
<span<?php echo $pp_solatendida2->dias_analisis_td->ViewAttributes() ?>>
<?php echo $pp_solatendida2->dias_analisis_td->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->dias_desarrollo_td->Visible) { // dias_desarrollo_td ?>
	<tr id="r_dias_desarrollo_td">
		<td><span id="elh_pp_solatendida2_dias_desarrollo_td"><?php echo $pp_solatendida2->dias_desarrollo_td->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->dias_desarrollo_td->CellAttributes() ?>>
<span id="el_pp_solatendida2_dias_desarrollo_td" class="control-group">
<span<?php echo $pp_solatendida2->dias_desarrollo_td->ViewAttributes() ?>>
<?php echo $pp_solatendida2->dias_desarrollo_td->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->dias_pruebas_td->Visible) { // dias_pruebas_td ?>
	<tr id="r_dias_pruebas_td">
		<td><span id="elh_pp_solatendida2_dias_pruebas_td"><?php echo $pp_solatendida2->dias_pruebas_td->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->dias_pruebas_td->CellAttributes() ?>>
<span id="el_pp_solatendida2_dias_pruebas_td" class="control-group">
<span<?php echo $pp_solatendida2->dias_pruebas_td->ViewAttributes() ?>>
<?php echo $pp_solatendida2->dias_pruebas_td->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->dias_qa_td->Visible) { // dias_qa_td ?>
	<tr id="r_dias_qa_td">
		<td><span id="elh_pp_solatendida2_dias_qa_td"><?php echo $pp_solatendida2->dias_qa_td->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->dias_qa_td->CellAttributes() ?>>
<span id="el_pp_solatendida2_dias_qa_td" class="control-group">
<span<?php echo $pp_solatendida2->dias_qa_td->ViewAttributes() ?>>
<?php echo $pp_solatendida2->dias_qa_td->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->ObsGestion->Visible) { // ObsGestion ?>
	<tr id="r_ObsGestion">
		<td><span id="elh_pp_solatendida2_ObsGestion"><?php echo $pp_solatendida2->ObsGestion->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->ObsGestion->CellAttributes() ?>>
<span id="el_pp_solatendida2_ObsGestion" class="control-group">
<span<?php echo $pp_solatendida2->ObsGestion->ViewAttributes() ?>>
<?php echo $pp_solatendida2->ObsGestion->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->ObsTareasDiairias->Visible) { // ObsTareasDiairias ?>
	<tr id="r_ObsTareasDiairias">
		<td><span id="elh_pp_solatendida2_ObsTareasDiairias"><?php echo $pp_solatendida2->ObsTareasDiairias->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->ObsTareasDiairias->CellAttributes() ?>>
<span id="el_pp_solatendida2_ObsTareasDiairias" class="control-group">
<span<?php echo $pp_solatendida2->ObsTareasDiairias->ViewAttributes() ?>>
<?php echo $pp_solatendida2->ObsTareasDiairias->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->Duracion->Visible) { // Duracion ?>
	<tr id="r_Duracion">
		<td><span id="elh_pp_solatendida2_Duracion"><?php echo $pp_solatendida2->Duracion->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->Duracion->CellAttributes() ?>>
<span id="el_pp_solatendida2_Duracion" class="control-group">
<span<?php echo $pp_solatendida2->Duracion->ViewAttributes() ?>>
<?php echo $pp_solatendida2->Duracion->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->PorcCompletado->Visible) { // PorcCompletado ?>
	<tr id="r_PorcCompletado">
		<td><span id="elh_pp_solatendida2_PorcCompletado"><?php echo $pp_solatendida2->PorcCompletado->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->PorcCompletado->CellAttributes() ?>>
<span id="el_pp_solatendida2_PorcCompletado" class="control-group">
<span<?php echo $pp_solatendida2->PorcCompletado->ViewAttributes() ?>>
<?php echo $pp_solatendida2->PorcCompletado->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->PorcProyectado->Visible) { // PorcProyectado ?>
	<tr id="r_PorcProyectado">
		<td><span id="elh_pp_solatendida2_PorcProyectado"><?php echo $pp_solatendida2->PorcProyectado->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->PorcProyectado->CellAttributes() ?>>
<span id="el_pp_solatendida2_PorcProyectado" class="control-group">
<span<?php echo $pp_solatendida2->PorcProyectado->ViewAttributes() ?>>
<?php echo $pp_solatendida2->PorcProyectado->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_solatendida2->PorcDiferencia->Visible) { // PorcDiferencia ?>
	<tr id="r_PorcDiferencia">
		<td><span id="elh_pp_solatendida2_PorcDiferencia"><?php echo $pp_solatendida2->PorcDiferencia->FldCaption() ?></span></td>
		<td<?php echo $pp_solatendida2->PorcDiferencia->CellAttributes() ?>>
<span id="el_pp_solatendida2_PorcDiferencia" class="control-group">
<span<?php echo $pp_solatendida2->PorcDiferencia->ViewAttributes() ?>>
<?php echo $pp_solatendida2->PorcDiferencia->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</td></tr></table>
<?php if ($pp_solatendida2->Export == "") { ?>
		</div>
<?php } ?>
<?php if ($pp_solatendida2->Export == "") { ?>
	</div>
</div>
</td></tr></tbody></table>
<?php } ?>
<?php
	if (in_array("pp_view_revision", explode(",", $pp_solatendida2->getCurrentDetailTable())) && $pp_view_revision->DetailView) {
?>
<?php include_once "lmo_pp_view_revisiongrid.php" ?>
<?php } ?>
<?php
	if (in_array("pp_view_tareasdiarias_sistemas", explode(",", $pp_solatendida2->getCurrentDetailTable())) && $pp_view_tareasdiarias_sistemas->DetailView) {
?>
<?php include_once "lmo_pp_view_tareasdiarias_sistemasgrid.php" ?>
<?php } ?>
</form>
<script type="text/javascript">
fpp_solatendida2view.Init();
</script>
<?php
$pp_solatendida2_view->ShowPageFooter();
if (EW_DEBUG_ENABLED)
	echo ew_DebugMsg();
?>
<?php if ($pp_solatendida2->Export == "") { ?>
<script type="text/javascript">

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "lmo_footer.php" ?>
<?php
$pp_solatendida2_view->Page_Terminate();
?>
