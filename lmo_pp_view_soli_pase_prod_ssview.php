<?php
if (session_id() == "") session_start(); // Initialize Session data
ob_start(); // Turn on output buffering
?>
<?php include_once "lmo_ewcfg10.php" ?>
<?php include_once "lmo_ewmysql10.php" ?>
<?php include_once "lmo_phpfn10.php" ?>
<?php include_once "lmo_pp_view_soli_pase_prod_ssinfo.php" ?>
<?php include_once "lmo_pp_requerimientos_ssinfo.php" ?>
<?php include_once "lmo_pp_usuariosinfo.php" ?>
<?php include_once "lmo_pp_view_revision_ssgridcls.php" ?>
<?php include_once "lmo_userfn10.php" ?>
<?php

//
// Page class
//

$pp_view_soli_pase_prod_ss_view = NULL; // Initialize page object first

class cpp_view_soli_pase_prod_ss_view extends cpp_view_soli_pase_prod_ss {

	// Page ID
	var $PageID = 'view';

	// Project ID
	var $ProjectID = "{0D972618-8D91-4265-B82F-423F1736064F}";

	// Table name
	var $TableName = 'pp_view_soli_pase_prod_ss';

	// Page object name
	var $PageObjName = 'pp_view_soli_pase_prod_ss_view';

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

		// Table object (pp_view_soli_pase_prod_ss)
		if (!isset($GLOBALS["pp_view_soli_pase_prod_ss"]) || get_class($GLOBALS["pp_view_soli_pase_prod_ss"]) == "cpp_view_soli_pase_prod_ss") {
			$GLOBALS["pp_view_soli_pase_prod_ss"] = &$this;
			$GLOBALS["Table"] = &$GLOBALS["pp_view_soli_pase_prod_ss"];
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

		// Table object (pp_requerimientos_ss)
		if (!isset($GLOBALS['pp_requerimientos_ss'])) $GLOBALS['pp_requerimientos_ss'] = new cpp_requerimientos_ss();

		// Table object (pp_usuarios)
		if (!isset($GLOBALS['pp_usuarios'])) $GLOBALS['pp_usuarios'] = new cpp_usuarios();

		// Page ID
		if (!defined("EW_PAGE_ID"))
			define("EW_PAGE_ID", 'view', TRUE);

		// Table name (for backward compatibility)
		if (!defined("EW_TABLE_NAME"))
			define("EW_TABLE_NAME", 'pp_view_soli_pase_prod_ss', TRUE);

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
			$this->Page_Terminate("lmo_pp_view_soli_pase_prod_sslist.php");
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
	var $pp_view_revision_ss_Count;
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
						$this->Page_Terminate("lmo_pp_view_soli_pase_prod_sslist.php"); // Return to list page
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
						$sReturnUrl = "lmo_pp_view_soli_pase_prod_sslist.php"; // No matching record, return to list
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
			$sReturnUrl = "lmo_pp_view_soli_pase_prod_sslist.php"; // Not page request, return to list
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

		// Add
		$item = &$option->Add("add");
		$item->Body = "<a class=\"ewAction ewAdd\" href=\"" . ew_HtmlEncode($this->AddUrl) . "\">" . $Language->Phrase("ViewPageAddLink") . "</a>";

		//lmo $item->Visible = ($this->AddUrl <> "" && $Security->CanAdd());
		$item->Visible = False;		

		// Edit
		$item = &$option->Add("edit");
		$item->Body = "<a class=\"ewAction ewEdit\" href=\"" . ew_HtmlEncode($this->EditUrl) . "\">" . $Language->Phrase("ViewPageEditLink") . "</a>";

		//lmo $item->Visible = ($this->EditUrl <> "" && $Security->CanEdit());
		$item->Visible = False;		
		$DetailTableLink = "";
		$option = &$options["detail"];

		// Detail table 'pp_view_revision_ss'
		$body = $Language->TablePhrase("pp_view_revision_ss", "TblCaption");
		$body .= str_replace("%c", $this->pp_view_revision_ss_Count, $Language->Phrase("DetailCount"));
		$body = "<a class=\"ewAction ewDetailList\" href=\"" . ew_HtmlEncode("lmo_pp_view_revision_sslist.php?" . EW_TABLE_SHOW_MASTER . "=pp_view_soli_pase_prod_ss&IdPase=" . strval($this->IdPase->CurrentValue) . "") . "\">" . $body . "</a>";
		$item = &$option->Add("detail_pp_view_revision_ss");
		$item->Body = $body;
		$item->Visible = $Security->AllowList(CurrentProjectID() . 'pp_view_revision_ss');
		if ($item->Visible) {
			if ($DetailTableLink <> "") $DetailTableLink .= ",";
			$DetailTableLink .= "pp_view_revision_ss";
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
		$this->idProydes->setDbValue($rs->fields('idProydes'));
		$this->Fecha->setDbValue($rs->fields('Fecha'));
		$this->FechaPuesta->setDbValue($rs->fields('FechaPuesta'));
		$this->fechapase_ss->setDbValue($rs->fields('fechapase_ss'));
		$this->Titulo->setDbValue($rs->fields('Titulo'));
		$this->idempresa->setDbValue($rs->fields('idempresa'));
		$this->CodServicio->setDbValue($rs->fields('CodServicio'));
		$this->IdMotivo->setDbValue($rs->fields('IdMotivo'));
		$this->Prioridad->setDbValue($rs->fields('Prioridad'));
		$this->TipoSolicitud->setDbValue($rs->fields('TipoSolicitud'));
		$this->CodUsuarioLider->setDbValue($rs->fields('CodUsuarioLider'));
		$this->IdJefeProyecto->setDbValue($rs->fields('IdJefeProyecto'));
		$this->IdLiderTecnico->setDbValue($rs->fields('IdLiderTecnico'));
		$this->idanalista_ss->setDbValue($rs->fields('idanalista_ss'));
		$this->idjefeproy_ss->setDbValue($rs->fields('idjefeproy_ss'));
		$this->horasdesarrollo_ss->setDbValue($rs->fields('horasdesarrollo_ss'));
		$this->Descripcion->setDbValue($rs->fields('Descripcion'));
		$this->Instrucciones->setDbValue($rs->fields('Instrucciones'));
		$this->ArchAdjuntos->setDbValue($rs->fields('ArchAdjuntos'));
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
		$this->ManualUsuario->Upload->DbValue = $rs->fields('ManualUsuario');
		$this->ManualUsuario->CurrentValue = $this->ManualUsuario->Upload->DbValue;
		$this->DiagramaER->Upload->DbValue = $rs->fields('DiagramaER');
		$this->DiagramaER->CurrentValue = $this->DiagramaER->Upload->DbValue;
		$this->DiagramaProcesos->Upload->DbValue = $rs->fields('DiagramaProcesos');
		$this->DiagramaProcesos->CurrentValue = $this->DiagramaProcesos->Upload->DbValue;
		$this->DiccionarioDatos->Upload->DbValue = $rs->fields('DiccionarioDatos');
		$this->DiccionarioDatos->CurrentValue = $this->DiccionarioDatos->Upload->DbValue;
		$this->IdEstadoSoliPuestaProd->setDbValue($rs->fields('IdEstadoSoliPuestaProd'));
		$this->idproveedor->setDbValue($rs->fields('idproveedor'));
		$this->querys->setDbValue($rs->fields('querys'));
		$this->Descripcion_Solicitud->setDbValue($rs->fields('Descripcion_Solicitud'));
		$this->Beneficios->setDbValue($rs->fields('Beneficios'));
		$this->Objetivo->setDbValue($rs->fields('Objetivo'));
		$this->FuncOperativa->setDbValue($rs->fields('FuncOperativa'));
		$this->GestionControl->setDbValue($rs->fields('GestionControl'));
		$this->ReferLegal->setDbValue($rs->fields('ReferLegal'));
		$this->AreasRelacionadas->setDbValue($rs->fields('AreasRelacionadas'));
		$this->Observaciones->setDbValue($rs->fields('Observaciones'));
		if (!isset($GLOBALS["pp_view_revision_ss_grid"])) $GLOBALS["pp_view_revision_ss_grid"] = new cpp_view_revision_ss_grid;
		$sDetailFilter = $GLOBALS["pp_view_revision_ss"]->SqlDetailFilter_pp_view_soli_pase_prod_ss();
		$sDetailFilter = str_replace("@IdPase@", ew_AdjustSql($this->IdPase->DbValue), $sDetailFilter);
		$GLOBALS["pp_view_revision_ss"]->setCurrentMasterTable("pp_view_soli_pase_prod_ss");
		$sDetailFilter = $GLOBALS["pp_view_revision_ss"]->ApplyUserIDFilters($sDetailFilter);
		$this->pp_view_revision_ss_Count = $GLOBALS["pp_view_revision_ss"]->LoadRecordCount($sDetailFilter);
	}

	// Load DbValue from recordset
	function LoadDbValues(&$rs) {
		if (!$rs || !is_array($rs) && $rs->EOF) return;
		$row = is_array($rs) ? $rs : $rs->fields;
		$this->IdPase->DbValue = $row['IdPase'];
		$this->idProydes->DbValue = $row['idProydes'];
		$this->Fecha->DbValue = $row['Fecha'];
		$this->FechaPuesta->DbValue = $row['FechaPuesta'];
		$this->fechapase_ss->DbValue = $row['fechapase_ss'];
		$this->Titulo->DbValue = $row['Titulo'];
		$this->idempresa->DbValue = $row['idempresa'];
		$this->CodServicio->DbValue = $row['CodServicio'];
		$this->IdMotivo->DbValue = $row['IdMotivo'];
		$this->Prioridad->DbValue = $row['Prioridad'];
		$this->TipoSolicitud->DbValue = $row['TipoSolicitud'];
		$this->CodUsuarioLider->DbValue = $row['CodUsuarioLider'];
		$this->IdJefeProyecto->DbValue = $row['IdJefeProyecto'];
		$this->IdLiderTecnico->DbValue = $row['IdLiderTecnico'];
		$this->idanalista_ss->DbValue = $row['idanalista_ss'];
		$this->idjefeproy_ss->DbValue = $row['idjefeproy_ss'];
		$this->horasdesarrollo_ss->DbValue = $row['horasdesarrollo_ss'];
		$this->Descripcion->DbValue = $row['Descripcion'];
		$this->Instrucciones->DbValue = $row['Instrucciones'];
		$this->ArchAdjuntos->DbValue = $row['ArchAdjuntos'];
		$this->Adjuntos->Upload->DbValue = $row['Adjuntos'];
		$this->stores->Upload->DbValue = $row['stores'];
		$this->ejecutables->Upload->DbValue = $row['ejecutables'];
		$this->SolicitudDesarrollo->Upload->DbValue = $row['SolicitudDesarrollo'];
		$this->doc_especifuncionales->Upload->DbValue = $row['doc_especifuncionales'];
		$this->PlanPruebas->Upload->DbValue = $row['PlanPruebas'];
		$this->ManualUsuario->Upload->DbValue = $row['ManualUsuario'];
		$this->DiagramaER->Upload->DbValue = $row['DiagramaER'];
		$this->DiagramaProcesos->Upload->DbValue = $row['DiagramaProcesos'];
		$this->DiccionarioDatos->Upload->DbValue = $row['DiccionarioDatos'];
		$this->IdEstadoSoliPuestaProd->DbValue = $row['IdEstadoSoliPuestaProd'];
		$this->idproveedor->DbValue = $row['idproveedor'];
		$this->querys->DbValue = $row['querys'];
		$this->Descripcion_Solicitud->DbValue = $row['Descripcion_Solicitud'];
		$this->Beneficios->DbValue = $row['Beneficios'];
		$this->Objetivo->DbValue = $row['Objetivo'];
		$this->FuncOperativa->DbValue = $row['FuncOperativa'];
		$this->GestionControl->DbValue = $row['GestionControl'];
		$this->ReferLegal->DbValue = $row['ReferLegal'];
		$this->AreasRelacionadas->DbValue = $row['AreasRelacionadas'];
		$this->Observaciones->DbValue = $row['Observaciones'];
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

		// Call Row_Rendering event
		$this->Row_Rendering();

		// Common render codes for all row types
		// IdPase
		// idProydes
		// Fecha
		// FechaPuesta
		// fechapase_ss
		// Titulo
		// idempresa
		// CodServicio
		// IdMotivo
		// Prioridad
		// TipoSolicitud
		// CodUsuarioLider
		// IdJefeProyecto
		// IdLiderTecnico
		// idanalista_ss
		// idjefeproy_ss
		// horasdesarrollo_ss
		// Descripcion
		// Instrucciones
		// ArchAdjuntos
		// Adjuntos
		// stores
		// ejecutables
		// SolicitudDesarrollo
		// doc_especifuncionales
		// PlanPruebas
		// ManualUsuario
		// DiagramaER
		// DiagramaProcesos
		// DiccionarioDatos
		// IdEstadoSoliPuestaProd
		// idproveedor
		// querys
		// Descripcion_Solicitud
		// Beneficios
		// Objetivo
		// FuncOperativa
		// GestionControl
		// ReferLegal
		// AreasRelacionadas
		// Observaciones

		if ($this->RowType == EW_ROWTYPE_VIEW) { // View row

			// IdPase
			$this->IdPase->ViewValue = $this->IdPase->CurrentValue;
			$this->IdPase->ViewCustomAttributes = "";

			// idProydes
			$this->idProydes->ViewValue = $this->idProydes->CurrentValue;
			$this->idProydes->ViewValue = strtolower($this->idProydes->ViewValue);
			$this->idProydes->ViewCustomAttributes = "";

			// Fecha
			$this->Fecha->ViewValue = $this->Fecha->CurrentValue;
			$this->Fecha->ViewValue = ew_FormatDateTime($this->Fecha->ViewValue, 7);
			$this->Fecha->ViewCustomAttributes = "";

			// FechaPuesta
			$this->FechaPuesta->ViewValue = $this->FechaPuesta->CurrentValue;
			$this->FechaPuesta->ViewValue = ew_FormatDateTime($this->FechaPuesta->ViewValue, 11);
			$this->FechaPuesta->ViewCustomAttributes = "";

			// fechapase_ss
			$this->fechapase_ss->ViewValue = $this->fechapase_ss->CurrentValue;
			$this->fechapase_ss->ViewValue = ew_FormatDateTime($this->fechapase_ss->ViewValue, 11);
			$this->fechapase_ss->ViewCustomAttributes = "";

			// Titulo
			$this->Titulo->ViewValue = $this->Titulo->CurrentValue;
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

			// CodServicio
			if (strval($this->CodServicio->CurrentValue) <> "") {
				$sFilterWrk = "`IdServicio`" . ew_SearchString("=", $this->CodServicio->CurrentValue, EW_DATATYPE_NUMBER);
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
			$this->Lookup_Selecting($this->CodServicio, $sWhereWrk);
			if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$sSqlWrk .= " ORDER BY `Servicio` Asc";
				$rswrk = $conn->Execute($sSqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$this->CodServicio->ViewValue = strtoupper($rswrk->fields('DispFld'));
					$rswrk->Close();
				} else {
					$this->CodServicio->ViewValue = $this->CodServicio->CurrentValue;
				}
			} else {
				$this->CodServicio->ViewValue = NULL;
			}
			$this->CodServicio->ViewValue = strtoupper($this->CodServicio->ViewValue);
			$this->CodServicio->ViewCustomAttributes = "";

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
			$lookuptblfilter = "`estado`='activado'";
			if (strval($lookuptblfilter) <> "") {
				ew_AddFilter($sWhereWrk, $lookuptblfilter);
			}
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
			$this->TipoSolicitud->ViewValue = strtoupper($this->TipoSolicitud->ViewValue);
			$this->TipoSolicitud->ViewCustomAttributes = "";

			// CodUsuarioLider
			if (strval($this->CodUsuarioLider->CurrentValue) <> "") {
				$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->CodUsuarioLider->CurrentValue, EW_DATATYPE_NUMBER);
			$sSqlWrk = "SELECT `idUsuario`, `Nombre` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_usuarioslider`";
			$sWhereWrk = "";
			if ($sFilterWrk <> "") {
				ew_AddFilter($sWhereWrk, $sFilterWrk);
			}

			// Call Lookup selecting
			$this->Lookup_Selecting($this->CodUsuarioLider, $sWhereWrk);
			if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$sSqlWrk .= " ORDER BY `Nombre`";
				$rswrk = $conn->Execute($sSqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$this->CodUsuarioLider->ViewValue = strtoupper($rswrk->fields('DispFld'));
					$rswrk->Close();
				} else {
					$this->CodUsuarioLider->ViewValue = $this->CodUsuarioLider->CurrentValue;
				}
			} else {
				$this->CodUsuarioLider->ViewValue = NULL;
			}
			$this->CodUsuarioLider->ViewValue = strtoupper($this->CodUsuarioLider->ViewValue);
			$this->CodUsuarioLider->ViewCustomAttributes = "";

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
			$sSqlWrk .= " ORDER BY `login`";
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
			$sSqlWrk .= " ORDER BY `login`";
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
			$this->IdLiderTecnico->ViewCustomAttributes = "";

			// idanalista_ss
			if (strval($this->idanalista_ss->CurrentValue) <> "") {
				$sFilterWrk = "`CodUsuario`" . ew_SearchString("=", $this->idanalista_ss->CurrentValue, EW_DATATYPE_NUMBER);
			$sSqlWrk = "SELECT `CodUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_analista_pases`";
			$sWhereWrk = "";
			$lookuptblfilter = "`idempresa` = '". $_SESSION['Usuario_idempresa'] ."'";
			if (strval($lookuptblfilter) <> "") {
				ew_AddFilter($sWhereWrk, $lookuptblfilter);
			}
			if ($sFilterWrk <> "") {
				ew_AddFilter($sWhereWrk, $sFilterWrk);
			}

			// Call Lookup selecting
			$this->Lookup_Selecting($this->idanalista_ss, $sWhereWrk);
			if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$sSqlWrk .= " ORDER BY `login`";
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
			$this->idanalista_ss->ViewCustomAttributes = "";

			// idjefeproy_ss
			if (strval($this->idjefeproy_ss->CurrentValue) <> "") {
				$sFilterWrk = "`idUsuario`" . ew_SearchString("=", $this->idjefeproy_ss->CurrentValue, EW_DATATYPE_NUMBER);
			$sSqlWrk = "SELECT `idUsuario`, `login` AS `DispFld`, '' AS `Disp2Fld`, '' AS `Disp3Fld`, '' AS `Disp4Fld` FROM `pp_view_jefeproy_reque`";
			$sWhereWrk = "";
			$lookuptblfilter = "`idempresa` = '". $_SESSION['Usuario_idempresa'] ."'";
			if (strval($lookuptblfilter) <> "") {
				ew_AddFilter($sWhereWrk, $lookuptblfilter);
			}
			if ($sFilterWrk <> "") {
				ew_AddFilter($sWhereWrk, $sFilterWrk);
			}

			// Call Lookup selecting
			$this->Lookup_Selecting($this->idjefeproy_ss, $sWhereWrk);
			if ($sWhereWrk <> "") $sSqlWrk .= " WHERE " . $sWhereWrk;
			$sSqlWrk .= " ORDER BY `login`";
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
			$this->idjefeproy_ss->ViewCustomAttributes = "";

			// horasdesarrollo_ss
			$this->horasdesarrollo_ss->ViewValue = $this->horasdesarrollo_ss->CurrentValue;
			$this->horasdesarrollo_ss->ViewCustomAttributes = "";

			// Descripcion
			$this->Descripcion->ViewValue = $this->Descripcion->CurrentValue;
			if (!is_null($this->Descripcion->ViewValue)) $this->Descripcion->ViewValue = str_replace("\n", "<br>", $this->Descripcion->ViewValue); 
			$this->Descripcion->ViewCustomAttributes = "";

			// Instrucciones
			$this->Instrucciones->ViewValue = $this->Instrucciones->CurrentValue;
			$this->Instrucciones->ViewCustomAttributes = "";

			// ArchAdjuntos
			$this->ArchAdjuntos->ViewValue = $this->ArchAdjuntos->CurrentValue;
			$this->ArchAdjuntos->ViewCustomAttributes = "";

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

			// ManualUsuario
			$this->ManualUsuario->UploadPath = "docdesarrollo/";
			if (!ew_Empty($this->ManualUsuario->Upload->DbValue)) {
				$this->ManualUsuario->ViewValue = $this->ManualUsuario->Upload->DbValue;
			} else {
				$this->ManualUsuario->ViewValue = "";
			}
			$this->ManualUsuario->ViewCustomAttributes = "";

			// DiagramaER
			$this->DiagramaER->UploadPath = "diagramaer/";
			if (!ew_Empty($this->DiagramaER->Upload->DbValue)) {
				$this->DiagramaER->ViewValue = $this->DiagramaER->Upload->DbValue;
			} else {
				$this->DiagramaER->ViewValue = "";
			}
			$this->DiagramaER->ViewCustomAttributes = "";

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
			$sSqlWrk .= " ORDER BY `estado` ASC";
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
			$this->IdEstadoSoliPuestaProd->ViewValue = strtoupper($this->IdEstadoSoliPuestaProd->ViewValue);
			$this->IdEstadoSoliPuestaProd->ViewCustomAttributes = "";

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
			$this->idproveedor->ViewCustomAttributes = "";

			// querys
			$this->querys->ViewValue = $this->querys->CurrentValue;
			if (!is_null($this->querys->ViewValue)) $this->querys->ViewValue = str_replace("\n", "<br>", $this->querys->ViewValue); 
			$this->querys->ViewCustomAttributes = "";

			// Descripcion_Solicitud
			$this->Descripcion_Solicitud->ViewValue = $this->Descripcion_Solicitud->CurrentValue;
			if (!is_null($this->Descripcion_Solicitud->ViewValue)) $this->Descripcion_Solicitud->ViewValue = str_replace("\n", "<br>", $this->Descripcion_Solicitud->ViewValue); 
			$this->Descripcion_Solicitud->ViewCustomAttributes = "";

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

			// IdPase
			$this->IdPase->LinkCustomAttributes = "";
			$this->IdPase->HrefValue = "";
			$this->IdPase->TooltipValue = "";

			// idProydes
			$this->idProydes->LinkCustomAttributes = "";
			$this->idProydes->HrefValue = "";
			$this->idProydes->TooltipValue = "";

			// Fecha
			$this->Fecha->LinkCustomAttributes = "";
			$this->Fecha->HrefValue = "";
			$this->Fecha->TooltipValue = "";

			// FechaPuesta
			$this->FechaPuesta->LinkCustomAttributes = "";
			$this->FechaPuesta->HrefValue = "";
			$this->FechaPuesta->TooltipValue = "";

			// fechapase_ss
			$this->fechapase_ss->LinkCustomAttributes = "";
			$this->fechapase_ss->HrefValue = "";
			$this->fechapase_ss->TooltipValue = "";

			// Titulo
			$this->Titulo->LinkCustomAttributes = "";
			$this->Titulo->HrefValue = "";
			$this->Titulo->TooltipValue = strval($this->Descripcion->CurrentValue);
			$this->Titulo->TooltipValue = str_replace("\n", "<br>", $this->Titulo->TooltipValue);
			$this->Titulo->TooltipWidth = 400;
			if ($this->Titulo->HrefValue == "") $this->Titulo->HrefValue = "javascript:void(0);";
			$this->Titulo->LinkAttrs["class"] = "ewTooltipLink";
			$this->Titulo->LinkAttrs["data-tooltip-id"] = "tt_pp_view_soli_pase_prod_ss_x_Titulo";
			$this->Titulo->LinkAttrs["data-tooltip-width"] = $this->Titulo->TooltipWidth;
			$this->Titulo->LinkAttrs["data-placement"] = "right";

			// idempresa
			$this->idempresa->LinkCustomAttributes = "";
			$this->idempresa->HrefValue = "";
			$this->idempresa->TooltipValue = "";

			// CodServicio
			$this->CodServicio->LinkCustomAttributes = "";
			$this->CodServicio->HrefValue = "";
			$this->CodServicio->TooltipValue = "";

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

			// CodUsuarioLider
			$this->CodUsuarioLider->LinkCustomAttributes = "";
			$this->CodUsuarioLider->HrefValue = "";
			$this->CodUsuarioLider->TooltipValue = "";

			// IdJefeProyecto
			$this->IdJefeProyecto->LinkCustomAttributes = "";
			$this->IdJefeProyecto->HrefValue = "";
			$this->IdJefeProyecto->TooltipValue = "";

			// IdLiderTecnico
			$this->IdLiderTecnico->LinkCustomAttributes = "";
			$this->IdLiderTecnico->HrefValue = "";
			$this->IdLiderTecnico->TooltipValue = "";

			// idanalista_ss
			$this->idanalista_ss->LinkCustomAttributes = "";
			$this->idanalista_ss->HrefValue = "";
			$this->idanalista_ss->TooltipValue = "";

			// idjefeproy_ss
			$this->idjefeproy_ss->LinkCustomAttributes = "";
			$this->idjefeproy_ss->HrefValue = "";
			$this->idjefeproy_ss->TooltipValue = "";

			// horasdesarrollo_ss
			$this->horasdesarrollo_ss->LinkCustomAttributes = "";
			$this->horasdesarrollo_ss->HrefValue = "";
			$this->horasdesarrollo_ss->TooltipValue = "";

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

			// Adjuntos
			$this->Adjuntos->LinkCustomAttributes = "";
			$this->Adjuntos->UploadPath = "adjuntos/";
			if (!ew_Empty($this->Adjuntos->Upload->DbValue)) {
				$this->Adjuntos->HrefValue = ew_UploadPathEx(FALSE, $this->Adjuntos->UploadPath) . $this->Adjuntos->Upload->DbValue; // Add prefix/suffix
				$this->Adjuntos->LinkAttrs["target"] = ""; // Add target
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
				$this->SolicitudDesarrollo->LinkAttrs["target"] = ""; // Add target
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

			// ManualUsuario
			$this->ManualUsuario->LinkCustomAttributes = "";
			$this->ManualUsuario->UploadPath = "docdesarrollo/";
			if (!ew_Empty($this->ManualUsuario->Upload->DbValue)) {
				$this->ManualUsuario->HrefValue = ew_UploadPathEx(FALSE, $this->ManualUsuario->UploadPath) . $this->ManualUsuario->Upload->DbValue; // Add prefix/suffix
				$this->ManualUsuario->LinkAttrs["target"] = ""; // Add target
				if ($this->Export <> "") $this->ManualUsuario->HrefValue = ew_ConvertFullUrl($this->ManualUsuario->HrefValue);
			} else {
				$this->ManualUsuario->HrefValue = "";
			}
			$this->ManualUsuario->HrefValue2 = $this->ManualUsuario->UploadPath . $this->ManualUsuario->Upload->DbValue;
			$this->ManualUsuario->TooltipValue = "";

			// DiagramaER
			$this->DiagramaER->LinkCustomAttributes = "";
			$this->DiagramaER->UploadPath = "diagramaer/";
			if (!ew_Empty($this->DiagramaER->Upload->DbValue)) {
				$this->DiagramaER->HrefValue = ew_UploadPathEx(FALSE, $this->DiagramaER->UploadPath) . $this->DiagramaER->Upload->DbValue; // Add prefix/suffix
				$this->DiagramaER->LinkAttrs["target"] = ""; // Add target
				if ($this->Export <> "") $this->DiagramaER->HrefValue = ew_ConvertFullUrl($this->DiagramaER->HrefValue);
			} else {
				$this->DiagramaER->HrefValue = "";
			}
			$this->DiagramaER->HrefValue2 = $this->DiagramaER->UploadPath . $this->DiagramaER->Upload->DbValue;
			$this->DiagramaER->TooltipValue = "";

			// DiagramaProcesos
			$this->DiagramaProcesos->LinkCustomAttributes = "";
			$this->DiagramaProcesos->UploadPath = "diagramaprocesos/";
			if (!ew_Empty($this->DiagramaProcesos->Upload->DbValue)) {
				$this->DiagramaProcesos->HrefValue = ew_UploadPathEx(FALSE, $this->DiagramaProcesos->UploadPath) . $this->DiagramaProcesos->Upload->DbValue; // Add prefix/suffix
				$this->DiagramaProcesos->LinkAttrs["target"] = ""; // Add target
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
				$this->DiccionarioDatos->LinkAttrs["target"] = ""; // Add target
				if ($this->Export <> "") $this->DiccionarioDatos->HrefValue = ew_ConvertFullUrl($this->DiccionarioDatos->HrefValue);
			} else {
				$this->DiccionarioDatos->HrefValue = "";
			}
			$this->DiccionarioDatos->HrefValue2 = $this->DiccionarioDatos->UploadPath . $this->DiccionarioDatos->Upload->DbValue;
			$this->DiccionarioDatos->TooltipValue = "";

			// IdEstadoSoliPuestaProd
			$this->IdEstadoSoliPuestaProd->LinkCustomAttributes = "";
			$this->IdEstadoSoliPuestaProd->HrefValue = "";
			$this->IdEstadoSoliPuestaProd->TooltipValue = "";

			// idproveedor
			$this->idproveedor->LinkCustomAttributes = "";
			$this->idproveedor->HrefValue = "";
			$this->idproveedor->TooltipValue = "";

			// querys
			$this->querys->LinkCustomAttributes = "";
			$this->querys->HrefValue = "";
			$this->querys->TooltipValue = "";

			// Descripcion_Solicitud
			$this->Descripcion_Solicitud->LinkCustomAttributes = "";
			$this->Descripcion_Solicitud->HrefValue = "";
			$this->Descripcion_Solicitud->TooltipValue = "";

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
		$item->Body = "<a id=\"emf_pp_view_soli_pase_prod_ss\" href=\"javascript:void(0);\" class=\"ewExportLink ewEmail\" data-caption=\"" . $Language->Phrase("ExportToEmailText") . "\" onclick=\"ew_EmailDialogShow({lnk:'emf_pp_view_soli_pase_prod_ss',hdr:ewLanguage.Phrase('ExportToEmail'),f:document.fpp_view_soli_pase_prod_ssview,key:" . ew_ArrayToJsonAttr($this->RecKey) . ",sel:false});\">" . $Language->Phrase("ExportToEmail") . "</a>";
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
			if (in_array("pp_view_revision_ss", $DetailTblVar)) {
				if (!isset($GLOBALS["pp_view_revision_ss_grid"]))
					$GLOBALS["pp_view_revision_ss_grid"] = new cpp_view_revision_ss_grid;
				if ($GLOBALS["pp_view_revision_ss_grid"]->DetailView) {
					$GLOBALS["pp_view_revision_ss_grid"]->CurrentMode = "view";

					// Save current master table to detail table
					$GLOBALS["pp_view_revision_ss_grid"]->setCurrentMasterTable($this->TableVar);
					$GLOBALS["pp_view_revision_ss_grid"]->setStartRecordNumber(1);
					$GLOBALS["pp_view_revision_ss_grid"]->IdPase->FldIsDetailKey = TRUE;
					$GLOBALS["pp_view_revision_ss_grid"]->IdPase->CurrentValue = $this->IdPase->CurrentValue;
					$GLOBALS["pp_view_revision_ss_grid"]->IdPase->setSessionValue($GLOBALS["pp_view_revision_ss_grid"]->IdPase->CurrentValue);
				}
			}
		}
	}

	// Set up Breadcrumb
	function SetupBreadcrumb() {
		global $Breadcrumb, $Language;
		$Breadcrumb = new cBreadcrumb();
		$Breadcrumb->Add("list", $this->TableVar, "lmo_pp_view_soli_pase_prod_sslist.php", $this->TableVar, TRUE);
		$PageId = "view";
		$Breadcrumb->Add("view", $PageId, ew_CurrentUrl());
	}

	// Page Load event
	function Page_Load() {

		//echo "Page Load"; 
	if (CurrentUserID()<>-1)
	{
		$this->AddUrl = "";   
		$this->EditUrl = "";   
	} 
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
if (!isset($pp_view_soli_pase_prod_ss_view)) $pp_view_soli_pase_prod_ss_view = new cpp_view_soli_pase_prod_ss_view();

// Page init
$pp_view_soli_pase_prod_ss_view->Page_Init();

// Page main
$pp_view_soli_pase_prod_ss_view->Page_Main();

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$pp_view_soli_pase_prod_ss_view->Page_Render();
?>
<?php include_once "lmo_header.php" ?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
<script type="text/javascript">

// Page object
var pp_view_soli_pase_prod_ss_view = new ew_Page("pp_view_soli_pase_prod_ss_view");
pp_view_soli_pase_prod_ss_view.PageID = "view"; // Page ID
var EW_PAGE_ID = pp_view_soli_pase_prod_ss_view.PageID; // For backward compatibility

// Form object
var fpp_view_soli_pase_prod_ssview = new ew_Form("fpp_view_soli_pase_prod_ssview");

// Form_CustomValidate event
fpp_view_soli_pase_prod_ssview.Form_CustomValidate = 
 function(fobj) { // DO NOT CHANGE THIS LINE!

 	// Your custom validation code here, return false if invalid. 
 	return true;
 }

// Use JavaScript validation or not
<?php if (EW_CLIENT_VALIDATE) { ?>
fpp_view_soli_pase_prod_ssview.ValidateRequired = true;
<?php } else { ?>
fpp_view_soli_pase_prod_ssview.ValidateRequired = false; 
<?php } ?>

// Multi-Page properties
fpp_view_soli_pase_prod_ssview.MultiPage = new ew_MultiPage("fpp_view_soli_pase_prod_ssview",
	[["x_IdPase",1],["x_idProydes",1],["x_Titulo",1],["x_idempresa",1],["x_CodServicio",1],["x_IdMotivo",1],["x_Prioridad",1],["x_TipoSolicitud",1],["x_CodUsuarioLider",1],["x_IdJefeProyecto",1],["x_IdLiderTecnico",1],["x_idjefeproy_ss",1],["x_horasdesarrollo_ss",1],["x_Descripcion",1],["x_Instrucciones",1],["x_ArchAdjuntos",1],["x_Adjuntos",1],["x_stores",1],["x_ejecutables",1],["x_SolicitudDesarrollo",1],["x_doc_especifuncionales",1],["x_PlanPruebas",1],["x_ManualUsuario",1],["x_DiagramaER",1],["x_DiagramaProcesos",1],["x_DiccionarioDatos",1],["x_IdEstadoSoliPuestaProd",1],["x_idproveedor",1],["x_querys",2],["x_Descripcion_Solicitud",3],["x_Beneficios",3],["x_Objetivo",3],["x_FuncOperativa",3],["x_GestionControl",3],["x_ReferLegal",3],["x_AreasRelacionadas",3],["x_Observaciones",3]]
);

// Dynamic selection lists
fpp_view_soli_pase_prod_ssview.Lists["x_idempresa"] = {"LinkField":"x_Idempresa","Ajax":null,"AutoFill":false,"DisplayFields":["x_empresa","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_CodServicio"] = {"LinkField":"x_IdServicio","Ajax":true,"AutoFill":false,"DisplayFields":["x_Servicio","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_IdMotivo"] = {"LinkField":"x_IdMotivo","Ajax":null,"AutoFill":false,"DisplayFields":["x_Motivo","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_TipoSolicitud[]"] = {"LinkField":"x_TipoSolicitud","Ajax":null,"AutoFill":false,"DisplayFields":["x_TipoSolicitud","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_CodUsuarioLider"] = {"LinkField":"x_idUsuario","Ajax":null,"AutoFill":false,"DisplayFields":["x_Nombre","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_IdJefeProyecto"] = {"LinkField":"x_idUsuario","Ajax":null,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_IdLiderTecnico"] = {"LinkField":"x_CodUsuario","Ajax":null,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_idanalista_ss"] = {"LinkField":"x_CodUsuario","Ajax":null,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_idjefeproy_ss"] = {"LinkField":"x_idUsuario","Ajax":null,"AutoFill":false,"DisplayFields":["x__login","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_IdEstadoSoliPuestaProd"] = {"LinkField":"x_IdEstadoSoliPuestaProd","Ajax":null,"AutoFill":false,"DisplayFields":["x_estado","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};
fpp_view_soli_pase_prod_ssview.Lists["x_idproveedor"] = {"LinkField":"x_Idempresa","Ajax":true,"AutoFill":false,"DisplayFields":["x_empresa","","",""],"ParentFields":[],"FilterFields":[],"Options":[]};

// Form object for search
</script>
<script type="text/javascript">

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
<?php $Breadcrumb->Render(); ?>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
<div class="ewViewExportOptions">
<?php $pp_view_soli_pase_prod_ss_view->ExportOptions->Render("body") ?>
<?php if (!$pp_view_soli_pase_prod_ss_view->ExportOptions->UseDropDownButton) { ?>
</div>
<div class="ewViewOtherOptions">
<?php } ?>
<?php
	foreach ($pp_view_soli_pase_prod_ss_view->OtherOptions as &$option)
		$option->Render("body");
?>
</div>
<?php } ?>
<?php $pp_view_soli_pase_prod_ss_view->ShowPageHeader(); ?>
<?php
$pp_view_soli_pase_prod_ss_view->ShowMessage();
?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
<form name="ewPagerForm" class="ewForm form-inline" action="<?php echo ew_CurrentPage() ?>">
<table class="ewPager">
<tr><td>
<?php if (!isset($pp_view_soli_pase_prod_ss_view->Pager)) $pp_view_soli_pase_prod_ss_view->Pager = new cPrevNextPager($pp_view_soli_pase_prod_ss_view->StartRec, $pp_view_soli_pase_prod_ss_view->DisplayRecs, $pp_view_soli_pase_prod_ss_view->TotalRecs) ?>
<?php if ($pp_view_soli_pase_prod_ss_view->Pager->RecordCount > 0) { ?>
<table class="ewStdTable"><tbody><tr><td>
	<?php echo $Language->Phrase("Page") ?>&nbsp;
<div class="input-prepend input-append">
<!--first page button-->
	<?php if ($pp_view_soli_pase_prod_ss_view->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-small" href="<?php echo $pp_view_soli_pase_prod_ss_view->PageUrl() ?>start=<?php echo $pp_view_soli_pase_prod_ss_view->Pager->FirstButton->Start ?>"><i class="icon-step-backward"></i></a>
	<?php } else { ?>
	<a class="btn btn-small disabled"><i class="icon-step-backward"></i></a>
	<?php } ?>
<!--previous page button-->
	<?php if ($pp_view_soli_pase_prod_ss_view->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-small" href="<?php echo $pp_view_soli_pase_prod_ss_view->PageUrl() ?>start=<?php echo $pp_view_soli_pase_prod_ss_view->Pager->PrevButton->Start ?>"><i class="icon-prev"></i></a>
	<?php } else { ?>
	<a class="btn btn-small disabled"><i class="icon-prev"></i></a>
	<?php } ?>
<!--current page number-->
	<input class="input-mini" type="text" name="<?php echo EW_TABLE_PAGE_NO ?>" value="<?php echo $pp_view_soli_pase_prod_ss_view->Pager->CurrentPage ?>">
<!--next page button-->
	<?php if ($pp_view_soli_pase_prod_ss_view->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-small" href="<?php echo $pp_view_soli_pase_prod_ss_view->PageUrl() ?>start=<?php echo $pp_view_soli_pase_prod_ss_view->Pager->NextButton->Start ?>"><i class="icon-play"></i></a>
	<?php } else { ?>
	<a class="btn btn-small disabled"><i class="icon-play"></i></a>
	<?php } ?>
<!--last page button-->
	<?php if ($pp_view_soli_pase_prod_ss_view->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-small" href="<?php echo $pp_view_soli_pase_prod_ss_view->PageUrl() ?>start=<?php echo $pp_view_soli_pase_prod_ss_view->Pager->LastButton->Start ?>"><i class="icon-step-forward"></i></a>
	<?php } else { ?>
	<a class="btn btn-small disabled"><i class="icon-step-forward"></i></a>
	<?php } ?>
</div>
	&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $pp_view_soli_pase_prod_ss_view->Pager->PageCount ?>
</td>
</tr></tbody></table>
<?php } else { ?>
	<p><?php echo $Language->Phrase("NoRecord") ?></p>
<?php } ?>
</td>
</tr></table>
</form>
<?php } ?>
<form name="fpp_view_soli_pase_prod_ssview" id="fpp_view_soli_pase_prod_ssview" class="ewForm form-inline" action="<?php echo ew_CurrentPage() ?>" method="post">
<input type="hidden" name="t" value="pp_view_soli_pase_prod_ss">
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
<table class="ewStdTable"><tbody><tr><td>
<div class="tabbable" id="pp_view_soli_pase_prod_ss_view">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_pp_view_soli_pase_prod_ss1" data-toggle="tab"><?php echo $pp_view_soli_pase_prod_ss->PageCaption(1) ?></a></li>
		<li><a href="#tab_pp_view_soli_pase_prod_ss2" data-toggle="tab"><?php echo $pp_view_soli_pase_prod_ss->PageCaption(2) ?></a></li>
		<li><a href="#tab_pp_view_soli_pase_prod_ss3" data-toggle="tab"><?php echo $pp_view_soli_pase_prod_ss->PageCaption(3) ?></a></li>
	</ul>
	<div class="tab-content">
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
		<div class="tab-pane active" id="tab_pp_view_soli_pase_prod_ss1">
<?php } ?>
<table class="ewGrid"<?php if ($pp_view_soli_pase_prod_ss->Export == "") echo " style=\"width: 100%\""; ?>><tr><td>
<table id="tbl_pp_view_soli_pase_prod_ssview1" class="table table-bordered table-striped">
<?php if ($pp_view_soli_pase_prod_ss->IdPase->Visible) { // IdPase ?>
	<tr id="r_IdPase">
		<td><span id="elh_pp_view_soli_pase_prod_ss_IdPase"><?php echo $pp_view_soli_pase_prod_ss->IdPase->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->IdPase->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_IdPase" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->IdPase->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->IdPase->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->idProydes->Visible) { // idProydes ?>
	<tr id="r_idProydes">
		<td><span id="elh_pp_view_soli_pase_prod_ss_idProydes"><?php echo $pp_view_soli_pase_prod_ss->idProydes->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->idProydes->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_idProydes" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->idProydes->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->idProydes->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Fecha->Visible) { // Fecha ?>
	<tr id="r_Fecha">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Fecha"><?php echo $pp_view_soli_pase_prod_ss->Fecha->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Fecha->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Fecha" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Fecha->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->Fecha->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->FechaPuesta->Visible) { // FechaPuesta ?>
	<tr id="r_FechaPuesta">
		<td><span id="elh_pp_view_soli_pase_prod_ss_FechaPuesta"><?php echo $pp_view_soli_pase_prod_ss->FechaPuesta->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->FechaPuesta->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_FechaPuesta" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->FechaPuesta->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->FechaPuesta->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->fechapase_ss->Visible) { // fechapase_ss ?>
	<tr id="r_fechapase_ss">
		<td><span id="elh_pp_view_soli_pase_prod_ss_fechapase_ss"><?php echo $pp_view_soli_pase_prod_ss->fechapase_ss->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->fechapase_ss->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_fechapase_ss" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->fechapase_ss->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->fechapase_ss->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Titulo->Visible) { // Titulo ?>
	<tr id="r_Titulo">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Titulo"><?php echo $pp_view_soli_pase_prod_ss->Titulo->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Titulo->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Titulo" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Titulo->ViewAttributes() ?>>
<?php if (!ew_EmptyStr($pp_view_soli_pase_prod_ss->Titulo->ViewValue) && $pp_view_soli_pase_prod_ss->Titulo->LinkAttributes() <> "") { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->Titulo->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->Titulo->ViewValue ?></a>
<?php } else { ?>
<?php echo $pp_view_soli_pase_prod_ss->Titulo->ViewValue ?>
<?php } ?>
<span id="tt_pp_view_soli_pase_prod_ss_x_Titulo" style="display: none">
<?php echo $pp_view_soli_pase_prod_ss->Titulo->TooltipValue ?>
</span></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->idempresa->Visible) { // idempresa ?>
	<tr id="r_idempresa">
		<td><span id="elh_pp_view_soli_pase_prod_ss_idempresa"><?php echo $pp_view_soli_pase_prod_ss->idempresa->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->idempresa->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_idempresa" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->idempresa->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->idempresa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->CodServicio->Visible) { // CodServicio ?>
	<tr id="r_CodServicio">
		<td><span id="elh_pp_view_soli_pase_prod_ss_CodServicio"><?php echo $pp_view_soli_pase_prod_ss->CodServicio->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->CodServicio->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_CodServicio" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->CodServicio->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->CodServicio->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->IdMotivo->Visible) { // IdMotivo ?>
	<tr id="r_IdMotivo">
		<td><span id="elh_pp_view_soli_pase_prod_ss_IdMotivo"><?php echo $pp_view_soli_pase_prod_ss->IdMotivo->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->IdMotivo->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_IdMotivo" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->IdMotivo->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->IdMotivo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Prioridad->Visible) { // Prioridad ?>
	<tr id="r_Prioridad">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Prioridad"><?php echo $pp_view_soli_pase_prod_ss->Prioridad->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Prioridad->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Prioridad" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Prioridad->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->Prioridad->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->TipoSolicitud->Visible) { // TipoSolicitud ?>
	<tr id="r_TipoSolicitud">
		<td><span id="elh_pp_view_soli_pase_prod_ss_TipoSolicitud"><?php echo $pp_view_soli_pase_prod_ss->TipoSolicitud->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->TipoSolicitud->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_TipoSolicitud" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->TipoSolicitud->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->TipoSolicitud->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->CodUsuarioLider->Visible) { // CodUsuarioLider ?>
	<tr id="r_CodUsuarioLider">
		<td><span id="elh_pp_view_soli_pase_prod_ss_CodUsuarioLider"><?php echo $pp_view_soli_pase_prod_ss->CodUsuarioLider->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->CodUsuarioLider->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_CodUsuarioLider" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->CodUsuarioLider->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->CodUsuarioLider->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->IdJefeProyecto->Visible) { // IdJefeProyecto ?>
	<tr id="r_IdJefeProyecto">
		<td><span id="elh_pp_view_soli_pase_prod_ss_IdJefeProyecto"><?php echo $pp_view_soli_pase_prod_ss->IdJefeProyecto->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->IdJefeProyecto->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_IdJefeProyecto" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->IdJefeProyecto->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->IdJefeProyecto->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->IdLiderTecnico->Visible) { // IdLiderTecnico ?>
	<tr id="r_IdLiderTecnico">
		<td><span id="elh_pp_view_soli_pase_prod_ss_IdLiderTecnico"><?php echo $pp_view_soli_pase_prod_ss->IdLiderTecnico->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->IdLiderTecnico->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_IdLiderTecnico" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->IdLiderTecnico->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->IdLiderTecnico->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->idanalista_ss->Visible) { // idanalista_ss ?>
	<tr id="r_idanalista_ss">
		<td><span id="elh_pp_view_soli_pase_prod_ss_idanalista_ss"><?php echo $pp_view_soli_pase_prod_ss->idanalista_ss->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->idanalista_ss->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_idanalista_ss" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->idanalista_ss->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->idanalista_ss->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->idjefeproy_ss->Visible) { // idjefeproy_ss ?>
	<tr id="r_idjefeproy_ss">
		<td><span id="elh_pp_view_soli_pase_prod_ss_idjefeproy_ss"><?php echo $pp_view_soli_pase_prod_ss->idjefeproy_ss->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->idjefeproy_ss->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_idjefeproy_ss" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->idjefeproy_ss->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->idjefeproy_ss->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->horasdesarrollo_ss->Visible) { // horasdesarrollo_ss ?>
	<tr id="r_horasdesarrollo_ss">
		<td><span id="elh_pp_view_soli_pase_prod_ss_horasdesarrollo_ss"><?php echo $pp_view_soli_pase_prod_ss->horasdesarrollo_ss->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->horasdesarrollo_ss->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_horasdesarrollo_ss" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->horasdesarrollo_ss->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->horasdesarrollo_ss->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Descripcion->Visible) { // Descripcion ?>
	<tr id="r_Descripcion">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Descripcion"><?php echo $pp_view_soli_pase_prod_ss->Descripcion->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Descripcion->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Descripcion" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Descripcion->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->Descripcion->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Instrucciones->Visible) { // Instrucciones ?>
	<tr id="r_Instrucciones">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Instrucciones"><?php echo $pp_view_soli_pase_prod_ss->Instrucciones->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Instrucciones->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Instrucciones" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Instrucciones->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->Instrucciones->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->ArchAdjuntos->Visible) { // ArchAdjuntos ?>
	<tr id="r_ArchAdjuntos">
		<td><span id="elh_pp_view_soli_pase_prod_ss_ArchAdjuntos"><?php echo $pp_view_soli_pase_prod_ss->ArchAdjuntos->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->ArchAdjuntos->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_ArchAdjuntos" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->ArchAdjuntos->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->ArchAdjuntos->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Adjuntos->Visible) { // Adjuntos ?>
	<tr id="r_Adjuntos">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Adjuntos"><?php echo $pp_view_soli_pase_prod_ss->Adjuntos->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Adjuntos->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Adjuntos" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Adjuntos->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->Adjuntos->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->Adjuntos->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->Adjuntos->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->Adjuntos->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->Adjuntos->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->Adjuntos->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->stores->Visible) { // stores ?>
	<tr id="r_stores">
		<td><span id="elh_pp_view_soli_pase_prod_ss_stores"><?php echo $pp_view_soli_pase_prod_ss->stores->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->stores->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_stores" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->stores->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->stores->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->stores->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->stores->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->stores->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->stores->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->stores->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->ejecutables->Visible) { // ejecutables ?>
	<tr id="r_ejecutables">
		<td><span id="elh_pp_view_soli_pase_prod_ss_ejecutables"><?php echo $pp_view_soli_pase_prod_ss->ejecutables->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->ejecutables->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_ejecutables" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->ejecutables->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->ejecutables->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->ejecutables->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->ejecutables->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->ejecutables->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->ejecutables->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->ejecutables->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->SolicitudDesarrollo->Visible) { // SolicitudDesarrollo ?>
	<tr id="r_SolicitudDesarrollo">
		<td><span id="elh_pp_view_soli_pase_prod_ss_SolicitudDesarrollo"><?php echo $pp_view_soli_pase_prod_ss->SolicitudDesarrollo->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->SolicitudDesarrollo->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_SolicitudDesarrollo" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->SolicitudDesarrollo->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->SolicitudDesarrollo->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->SolicitudDesarrollo->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->SolicitudDesarrollo->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->SolicitudDesarrollo->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->SolicitudDesarrollo->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->SolicitudDesarrollo->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->doc_especifuncionales->Visible) { // doc_especifuncionales ?>
	<tr id="r_doc_especifuncionales">
		<td><span id="elh_pp_view_soli_pase_prod_ss_doc_especifuncionales"><?php echo $pp_view_soli_pase_prod_ss->doc_especifuncionales->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->doc_especifuncionales->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_doc_especifuncionales" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->doc_especifuncionales->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->doc_especifuncionales->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->doc_especifuncionales->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->doc_especifuncionales->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->doc_especifuncionales->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->doc_especifuncionales->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->doc_especifuncionales->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->PlanPruebas->Visible) { // PlanPruebas ?>
	<tr id="r_PlanPruebas">
		<td><span id="elh_pp_view_soli_pase_prod_ss_PlanPruebas"><?php echo $pp_view_soli_pase_prod_ss->PlanPruebas->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->PlanPruebas->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_PlanPruebas" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->PlanPruebas->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->PlanPruebas->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->PlanPruebas->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->PlanPruebas->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->PlanPruebas->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->PlanPruebas->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->PlanPruebas->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->ManualUsuario->Visible) { // ManualUsuario ?>
	<tr id="r_ManualUsuario">
		<td><span id="elh_pp_view_soli_pase_prod_ss_ManualUsuario"><?php echo $pp_view_soli_pase_prod_ss->ManualUsuario->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->ManualUsuario->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_ManualUsuario" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->ManualUsuario->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->ManualUsuario->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->ManualUsuario->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->ManualUsuario->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->ManualUsuario->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->ManualUsuario->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->ManualUsuario->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->DiagramaER->Visible) { // DiagramaER ?>
	<tr id="r_DiagramaER">
		<td><span id="elh_pp_view_soli_pase_prod_ss_DiagramaER"><?php echo $pp_view_soli_pase_prod_ss->DiagramaER->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->DiagramaER->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_DiagramaER" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->DiagramaER->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->DiagramaER->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->DiagramaER->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->DiagramaER->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->DiagramaER->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->DiagramaER->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->DiagramaER->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->DiagramaProcesos->Visible) { // DiagramaProcesos ?>
	<tr id="r_DiagramaProcesos">
		<td><span id="elh_pp_view_soli_pase_prod_ss_DiagramaProcesos"><?php echo $pp_view_soli_pase_prod_ss->DiagramaProcesos->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->DiagramaProcesos->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_DiagramaProcesos" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->DiagramaProcesos->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->DiagramaProcesos->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->DiagramaProcesos->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->DiagramaProcesos->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->DiagramaProcesos->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->DiagramaProcesos->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->DiagramaProcesos->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->DiccionarioDatos->Visible) { // DiccionarioDatos ?>
	<tr id="r_DiccionarioDatos">
		<td><span id="elh_pp_view_soli_pase_prod_ss_DiccionarioDatos"><?php echo $pp_view_soli_pase_prod_ss->DiccionarioDatos->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->DiccionarioDatos->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_DiccionarioDatos" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->DiccionarioDatos->ViewAttributes() ?>>
<?php if ($pp_view_soli_pase_prod_ss->DiccionarioDatos->LinkAttributes() <> "") { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->DiccionarioDatos->Upload->DbValue)) { ?>
<a<?php echo $pp_view_soli_pase_prod_ss->DiccionarioDatos->LinkAttributes() ?>><?php echo $pp_view_soli_pase_prod_ss->DiccionarioDatos->ViewValue ?></a>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } else { ?>
<?php if (!empty($pp_view_soli_pase_prod_ss->DiccionarioDatos->Upload->DbValue)) { ?>
<?php echo $pp_view_soli_pase_prod_ss->DiccionarioDatos->ViewValue ?>
<?php } elseif (!in_array($pp_view_soli_pase_prod_ss->CurrentAction, array("I", "edit", "gridedit"))) { ?>	
&nbsp;
<?php } ?>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->IdEstadoSoliPuestaProd->Visible) { // IdEstadoSoliPuestaProd ?>
	<tr id="r_IdEstadoSoliPuestaProd">
		<td><span id="elh_pp_view_soli_pase_prod_ss_IdEstadoSoliPuestaProd"><?php echo $pp_view_soli_pase_prod_ss->IdEstadoSoliPuestaProd->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->IdEstadoSoliPuestaProd->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_IdEstadoSoliPuestaProd" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->IdEstadoSoliPuestaProd->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->IdEstadoSoliPuestaProd->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->idproveedor->Visible) { // idproveedor ?>
	<tr id="r_idproveedor">
		<td><span id="elh_pp_view_soli_pase_prod_ss_idproveedor"><?php echo $pp_view_soli_pase_prod_ss->idproveedor->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->idproveedor->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_idproveedor" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->idproveedor->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->idproveedor->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>












<?php  
//lmo
// Muestra las Fuentes Separadas lmo

//muestra las fuentes separadas si el pase ya se realizo osea esta en produccion
          
$strSql ="SELECT DISTINCT pp_reqprog.Idreqprograma, pp_programas.idPrograma, pp_servicio.IdServicio, pp_servicio.Servicio, pp_modulo.modulo, pp_programas.numero, pp_programas.descripcion, pp_reqprog.deserror, pp_reqprog.desmodifi, pp_reqprog.compilacion, pp_reqprog.revision, pp_reqprog.nuevaRevision, pp_programas.idestprog, pp_reqprog.opcion, pp_tipoprog.tipo, pp_tipoprog.Idtipoprog FROM pp_reqprog INNER JOIN pp_servicio ON pp_reqprog.idSistema = pp_servicio.IdServicio INNER JOIN pp_modulo ON pp_reqprog.idModulo = pp_modulo.Idmodulo INNER JOIN pp_programas ON pp_programas.idPrograma = pp_reqprog.idprog INNER JOIN pp_tipoprog ON pp_tipoprog.Idtipoprog = pp_programas.idtipo Where pp_reqprog.idPase = '". $pp_view_soli_pase_prod_ss->IdPase->CurrentValue ."' ";  
$rslmo = $conn->Execute($strSql);

echo	"<tr>";
echo	"<td class='ewTableHeader'>Programas a Pasar<span></span></td>";
echo		"<td>";

while (!$rslmo->EOF)
{
		$copiar_selva = "";
		if ($rslmo->fields('IdServicio') == 2) 
		{
			$strSql2 = "select count(*) as existe from pp_programas where idsistema=273 and numero = '". $rslmo->fields('numero') ."'";  //consulta si existe en selva
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
	echo      "<td width='223' class='ewTableHeader'>Programa</td>";
	//echo 		"<td width='475'>".$row["Servicio"]." / ".$row["modulo"]." / ".$row["numero"]."</td>";
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

//te halla la ruta y el perfil 
$strSql ="SELECT distinct pp_servicio.Servicio, pp_menu.menu, pp_submenu.submenu, pp_opcion.opcion, pp_opcion.nprg FROM pp_opcion INNER JOIN pp_menu ON pp_menu.codmenu = pp_opcion.codmenu INNER JOIN pp_servicio ON pp_servicio.IdServicio = pp_opcion.idsistema INNER JOIN pp_submenu ON pp_submenu.codsubmenu = pp_opcion.codsubmenu WHERE pp_opcion.idprograma = '". $rslmo->fields('idPrograma') ."'";
$rslmo2 = $conn->Execute($strSql);

		if ($rslmo2->RecordCount()>0)
		{
			while (!$rslmo2->EOF)
			{
				//$rutax= $rslmo2->fields('Servicio') . "/" . $rslmo2->fields('menu') . "/" . $rslmo2->fields('submenu'). "/" . $rslmo2->fields('opcion');
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
echo    "<tr>";

echo    "<tr>";
if ($rslmo->fields('Idtipoprog')==4) echo "<td width='223' BGCOLOR='32CD32'>Tipo</td>";
else echo "<td width='223' class='ewTableHeader'>Tipo</td>";
echo 		"<td width='475'>".nl2br($rslmo->fields('tipo'))."</td>";
echo            "</tr>";


echo      "<td width='223' class='ewTableHeader'>Descripción del Programa</td>";
echo 		"<td width='475'>".nl2br($rslmo->fields('descripcion'))."</td>";
echo            "</tr>";

echo    "<tr>";
echo      "<td width='223' class='ewTableHeader'>Descripción de las Modificaciones</td>";
echo 		"<td width='475'>".nl2br($rslmo->fields('desmodifi'))."</td>";
echo            "</tr>";

echo    "<tr>";
echo      "<td width='223' class='ewTableHeader'>Num. Revision</td>";
echo 		"<td width='475'>".$rslmo->fields('revision')."</td>";
echo            "</tr>";


echo    "<tr>";
if ($copiar_selva == 'NO')  echo "<td width='223' BGCOLOR='32CD32'>Copiar en SELVA</td>";
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
echo 		"<td width='475'> <a href=$linkver>Ver</a>";
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
<td class='ewTableHeader'>DICCIONARIO DE DATOS<span></span></td>
<td>

<?php  // Muestra las tablas que forman parte del subproceso
$strSql ="Select distinct pp_servicio.Servicio, pp_tablas.tabla, pp_tablas.diccionario, pp_tablas.Idtabla, pp_tablas.fecha From pp_tablas Inner Join pp_servicio On pp_servicio.IdServicio = pp_tablas.idbase  where pp_tablas.idpase = '". $pp_view_soli_pase_prod_ss->IdPase->CurrentValue ."'";
$rslmo = $conn->Execute($strSql);
?>
<table width="200" border="1">
  <tr>
    <th scope="col">Base</th>
    <th scope="col">Tabla</th>
    <th scope="col">Diccionario</th>
    <th scope="col">Fecha</th>
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
$strSql ="SELECT pp_tablas.tabla, pp_servicio.Servicio, pp_gbcon.gbconpfij, pp_gbcon.gbconcorr, pp_gbcon.gbcondesc, pp_gbcon.gbconabre, pp_gbcon.id_pase FROM pp_gbcon INNER JOIN pp_tablas ON pp_tablas.Idtabla = pp_gbcon.id_tabla INNER JOIN pp_servicio ON pp_servicio.IdServicio = pp_gbcon.id_base WHERE   pp_gbcon.id_pase= '". $pp_view_soli_pase_prod_ss->IdPase->CurrentValue ."' and pp_gbcon.idestado not in (3)";	

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
<td class='ewTableHeader'>LENGUAJE DEFINICIÓN DE DATOS<span></span></td>
<td>

<?php  // Muestra los procedimientos almacenados separados
$strSql ="Select distinct pp_reqstoreproc.Idreqstore, pp_reqstoreproc.fechasepara, pp_reqstoreproc.idpase, pp_servicio.Servicio, pp_storeprocedure.idstoreproc, pp_storeprocedure.ddl, pp_storeprocedure.descripcion, pp_reqstoreproc.desmodifi, pp_reqstoreproc.deserror, pp_conceptos.descripcion As estado From pp_reqstoreproc Inner Join pp_storeprocedure On pp_storeprocedure.idstoreproc = pp_reqstoreproc.idstoreproc Inner Join pp_servicio On pp_servicio.IdServicio = pp_reqstoreproc.idSistema Inner Join pp_conceptos On pp_conceptos.iddetalle = pp_reqstoreproc.idestado Where pp_reqstoreproc.idpase = '". $pp_view_soli_pase_prod_ss->IdPase->CurrentValue ."' And pp_reqstoreproc.pasarproduccion = 1 And pp_conceptos.idconcepto = 2 And pp_reqstoreproc.idestado In (1,2,3) order by 4,1"; 
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
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
		</div>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
		<div class="tab-pane" id="tab_pp_view_soli_pase_prod_ss2">
<?php } ?>
<table class="ewGrid"<?php if ($pp_view_soli_pase_prod_ss->Export == "") echo " style=\"width: 100%\""; ?>><tr><td>
<table id="tbl_pp_view_soli_pase_prod_ssview2" class="table table-bordered table-striped">
<?php if ($pp_view_soli_pase_prod_ss->querys->Visible) { // querys ?>
	<tr id="r_querys">
		<td><span id="elh_pp_view_soli_pase_prod_ss_querys"><?php echo $pp_view_soli_pase_prod_ss->querys->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->querys->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_querys" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->querys->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->querys->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</td></tr></table>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
		</div>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
		<div class="tab-pane" id="tab_pp_view_soli_pase_prod_ss3">
<?php } ?>
<table class="ewGrid"<?php if ($pp_view_soli_pase_prod_ss->Export == "") echo " style=\"width: 100%\""; ?>><tr><td>
<table id="tbl_pp_view_soli_pase_prod_ssview3" class="table table-bordered table-striped">
<?php if ($pp_view_soli_pase_prod_ss->Descripcion_Solicitud->Visible) { // Descripcion_Solicitud ?>
	<tr id="r_Descripcion_Solicitud">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Descripcion_Solicitud"><?php echo $pp_view_soli_pase_prod_ss->Descripcion_Solicitud->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Descripcion_Solicitud->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Descripcion_Solicitud" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Descripcion_Solicitud->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->Descripcion_Solicitud->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Beneficios->Visible) { // Beneficios ?>
	<tr id="r_Beneficios">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Beneficios"><?php echo $pp_view_soli_pase_prod_ss->Beneficios->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Beneficios->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Beneficios" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Beneficios->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->Beneficios->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Objetivo->Visible) { // Objetivo ?>
	<tr id="r_Objetivo">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Objetivo"><?php echo $pp_view_soli_pase_prod_ss->Objetivo->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Objetivo->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Objetivo" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Objetivo->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->Objetivo->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->FuncOperativa->Visible) { // FuncOperativa ?>
	<tr id="r_FuncOperativa">
		<td><span id="elh_pp_view_soli_pase_prod_ss_FuncOperativa"><?php echo $pp_view_soli_pase_prod_ss->FuncOperativa->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->FuncOperativa->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_FuncOperativa" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->FuncOperativa->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->FuncOperativa->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->GestionControl->Visible) { // GestionControl ?>
	<tr id="r_GestionControl">
		<td><span id="elh_pp_view_soli_pase_prod_ss_GestionControl"><?php echo $pp_view_soli_pase_prod_ss->GestionControl->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->GestionControl->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_GestionControl" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->GestionControl->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->GestionControl->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->ReferLegal->Visible) { // ReferLegal ?>
	<tr id="r_ReferLegal">
		<td><span id="elh_pp_view_soli_pase_prod_ss_ReferLegal"><?php echo $pp_view_soli_pase_prod_ss->ReferLegal->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->ReferLegal->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_ReferLegal" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->ReferLegal->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->ReferLegal->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->AreasRelacionadas->Visible) { // AreasRelacionadas ?>
	<tr id="r_AreasRelacionadas">
		<td><span id="elh_pp_view_soli_pase_prod_ss_AreasRelacionadas"><?php echo $pp_view_soli_pase_prod_ss->AreasRelacionadas->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->AreasRelacionadas->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_AreasRelacionadas" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->AreasRelacionadas->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->AreasRelacionadas->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Observaciones->Visible) { // Observaciones ?>
	<tr id="r_Observaciones">
		<td><span id="elh_pp_view_soli_pase_prod_ss_Observaciones"><?php echo $pp_view_soli_pase_prod_ss->Observaciones->FldCaption() ?></span></td>
		<td<?php echo $pp_view_soli_pase_prod_ss->Observaciones->CellAttributes() ?>>
<span id="el_pp_view_soli_pase_prod_ss_Observaciones" class="control-group">
<span<?php echo $pp_view_soli_pase_prod_ss->Observaciones->ViewAttributes() ?>>
<?php echo $pp_view_soli_pase_prod_ss->Observaciones->ViewValue ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</td></tr></table>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
		</div>
<?php } ?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
	</div>
</div>
</td></tr></tbody></table>
<?php } ?>
<?php
	if (in_array("pp_view_revision_ss", explode(",", $pp_view_soli_pase_prod_ss->getCurrentDetailTable())) && $pp_view_revision_ss->DetailView) {
?>
<?php include_once "lmo_pp_view_revision_ssgrid.php" ?>
<?php } ?>
</form>
<script type="text/javascript">
fpp_view_soli_pase_prod_ssview.Init();
</script>
<?php
$pp_view_soli_pase_prod_ss_view->ShowPageFooter();
if (EW_DEBUG_ENABLED)
	echo ew_DebugMsg();
?>
<?php if ($pp_view_soli_pase_prod_ss->Export == "") { ?>
<script type="text/javascript">

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "lmo_footer.php" ?>
<?php
$pp_view_soli_pase_prod_ss_view->Page_Terminate();
?>
