<?php
class Sl_business_functions{

// Display Bulk Upload mapping form
function FormButtonsBulkUploadMappings() {
  global $g_main; ?>
  <h3>Excel Bulk Data Upload</h3>
<div id="loadingDiv" src="" style="display:none; text-align: center; left: 0; padding-top: 35px; width: 100%; min-height: 75px;z-index: 9999; top: 26%;position: fixed;
 background: rgba(0, 0, 0, 0) radial-gradient(ellipse farthest-corner at center center , rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;">
 <img src="image/ajax.gif" alt="Excel data Upload processing"></div>
  	<form method="POST" action=<?php echo $g_main;?> enctype="multipart/form-data">
      <div class="form_fullDiv" style="float: left; width: 100%;">
  		<div class="form_halfDiv" style="float: left;">
  			<label>Upload Excel File</label>
  			<input type="file" name="file" style=\"color:black; width:250px;\">
  		</div>
  		<div class="form_halfDiv" style="float: left;">
		 <button type="submit" name="auggie" value="ImportExcelBulkData" style=\"color:black; width:120px;\" onclick="function set() { f=document.getElementById('loadingDiv'); f.style.display='block'; } setTimeout(set);">Upload</button>
  		</div>
    </div>
  </form><br/><br/><?php
	echo "
		<FORM METHOD=POST ACTION=$g_main>
			<p>
			<hr size=1 width=600 noshade align=left>
      <P>
      <INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\" style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">&nbsp;&nbsp;&nbsp;
      <INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		</FORM>
	";
}	

function FormButtonsImportExcelBulkData(){
	global $g_main, $g_host, $g_user, $g_pass,$g_database;
	$conn = mysqli_connect($g_host, $g_user, $g_pass, $g_database);
	echo "
    <FORM METHOD=POST ACTION=$g_main>
      <p>
      <hr size=1 width=600 noshade align=left>
      <INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\" style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">&nbsp;&nbsp;&nbsp;
      <INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:100px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">&nbsp;&nbsp;&nbsp;
    </FORM>
  ";

  require('library/php-excel-reader/excel_reader2.php');
  require('library/SpreadsheetReader.php');
  if(isset($_POST['auggie'])){ ?>
  <div id="loadingDiv" style="text-align: center; left: 0; padding-top: 50px; width: 100%; min-height: 200px;z-index: 9999; top: 26%;position: fixed;
   background: rgba(0, 0, 0, 0) radial-gradient(ellipse farthest-corner at center center , rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;">
   <img src="image/ajax.gif" alt="Excel data Upload processing" style="left: 50%; top: 50%; position: absolute;"></div>
   <?php
  $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/vnd.ms-excel.sheet.macroEnabled.12'];
  if(in_array($_FILES["file"]["type"],$mimes)){
	$path_parts = pathinfo($_FILES["file"]["name"]);
	$fileName = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];
    $uploadFilePath = 'uploads/'.$fileName;
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

    $Reader = new SpreadsheetReader($uploadFilePath);
    $totalSheet = count($Reader->Sheets());
    $sheet=$Reader->Sheets();

    // Term Business Definition Logic Start here
    if($sheet[0] == 'Term'){
        $count='';
        $countTotalTerm = '';
        $insert_Rows_term='0';
        $update_Rows_term='0';
        foreach ($Reader as $Row)
        {
          $count++;
          if($count <= 1) continue;
          $businessterm = isset($Row[2]) ? $Row[2] : '';
          if ($businessterm !== '') {
            $countTotalTerm ++;
            $tower = isset($Row[1]) ? $Row[1] : '';
            $businessterm = isset($Row[2]) ? $Row[2] : '';
            $termAssetType = isset($Row[3]) ? $Row[3] : '';
            $dataSubjectArea = isset($Row[4]) ? $Row[4] : '';
            $businessDefinition = isset($Row[5]) ? $Row[5] : '';
            $wRICEF = isset($Row[6]) ? $Row[6] : '';
            $businessCritical = isset($Row[7]) ? $Row[7] : '';
            $businessDefinitionStatus = isset($Row[8]) ? $Row[8] : '';
            $synonyms = isset($Row[9]) ? $Row[9] : '';
            $businessRules = isset($Row[10]) ? $Row[10] : '';
            $sourceDocumentNamePath = isset($Row[11]) ? $Row[11] : '';
            $subjectAreaLeader = isset($Row[12]) ? $Row[12] : '';
            $DataAssetLeader = isset($Row[13]) ? $Row[13] : '';
            $DataOwner = isset($Row[14]) ? $Row[14] : '';
            $keyword = isset($Row[15]) ? $Row[15] : '';

            $created	= date("Y-m-d H:i:s");
          	$creator	= $_SESSION['s_user'];
          	$changed	= date("Y-m-d H:i:s");
          	$changer	= $_SESSION['s_user'];

            $category_TX = "P-Mod2";
            $subject_TX = "Glossary";
            $class_TX = "Term";
            $type_TX = $dataSubjectArea;
            //$type_TX = "Accounts Payable";

            $stmt = "SELECT ROWID as sROWID,Version_DC,Creator_ID,Created_DS FROM sl_object WHERE Name_TX = '".$businessterm."' AND Category_TX = '".$category_TX."' AND Subject_TX = '".$subject_TX."' AND Class_TX = '".$class_TX."' AND Type_TX = '".$type_TX."' order BY Version_DC DESC ";
            $result =mysqli_query($conn, $stmt);
            $row = mysqli_fetch_object($result);
	        $object_id = $row->sROWID;
            $ver = $row->Version_DC;
            $creator_ID = $row->Creator_ID;
            $created_DS = $row->Created_DS;

             if(isset($object_id)){
               $new_ver = $ver + 1.000;
               $version_Inc = number_format($new_ver, 3, '.', '');
               $errReasonT = array();

               $stmt ="insert into sl_object (Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,Alias_TX,WRICEF_TX,Desc_TX,Usage_TX,Group_CD,Source_ID,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES ('".$category_TX."', '".$subject_TX."','".$class_TX."','".$type_TX."', '".$businessterm."', '".$version_Inc."', '".$tower."','".$termAssetType."','".$keyword."', '".$wRICEF."', '".$businessDefinition."', '".$businessRules."', 'General','\N','".$creator_ID."','".$created_DS."','".$changer."','".$changed."','Active')";
               $result = mysqli_query($conn, $stmt);
               if($result){
                   $last_row = mysqli_insert_id($conn);
                   $update_Rows_term ++;
                   $status_updated = 'Versioned';
                   $stmt2 = "Update sl_object SET Status_CD='$status_updated' WHERE ROWID=$object_id";
                   mysqli_query($conn, $stmt2);
               } else {
                   $errReasonT[] = $businessterm." Failed : " . mysqli_error($conn);
               }

              //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."','".$version_Inc."','Tower','".$tower."')"; mysqli_query($conn, $stmt);
              //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', '".$version_Inc."','Asset Type','".$termAssetType."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', '".$version_Inc."','Business Critical','".$businessCritical."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', '".$version_Inc."','Business Definition Status','".$businessDefinitionStatus."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', '".$version_Inc."','Synonyms','".$synonyms."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', '".$version_Inc."','Source Doc Name Path','".$sourceDocumentNamePath."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', '".$version_Inc."','Subject Area Leader','".$subjectAreaLeader."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', '".$version_Inc."','Data Asset Leader','".$DataAssetLeader."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', '".$version_Inc."','Data Owner','".$DataOwner."')"; mysqli_query($conn, $stmt);

              }else{

               $stmt ="insert into sl_object (Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,Alias_TX,WRICEF_TX,Desc_TX,Usage_TX,Group_CD,Source_ID,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES ('".$category_TX."', '".$subject_TX."','".$class_TX."','".$type_TX."', '".$businessterm."', 1.000, '".$tower."', '".$termAssetType."','".$keyword."', '".$wRICEF."', '".$businessDefinition."', '".$businessRules."', 'General','\N','".$creator."','".$created."','".$changer."','".$changed."','Active')";
               $result = mysqli_query($conn, $stmt);
               if($result){
                   $last_row = mysqli_insert_id($conn);
                   $insert_Rows_term ++;

               } else {
                   $errReasonT[] = $businessterm." Failed : " . mysqli_error($conn);
               }

             // $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Tower','".$tower."')"; mysqli_query($conn, $stmt);
             // $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Asset Type','".$termAssetType."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Business Critical','".$businessCritical."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Business Definition Status','".$businessDefinitionStatus."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Synonyms','".$synonyms."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Source Doc Name Path','".$sourceDocumentNamePath."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Subject Area Leader','".$subjectAreaLeader."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Data Asset Leader','".$DataAssetLeader."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$businessterm."', 1.000,'Data Owner','".$DataOwner."')"; mysqli_query($conn, $stmt);
             }

           } // if row empty check
       } //foreach end


       //================================================================================
      // Legacy Field Logic Start here "Legacy Field"
       if($sheet[1] == 'Legacy Field' ){
         $count='';
         $countTotalLegacy ='';
         $insert_Rows_legacyField='0';
         $update_Rows_legacyField='0';
         $Reader = new SpreadsheetReader($uploadFilePath);
         $Sheets = $Reader -> Sheets();
         $Reader -> ChangeSheet(1);
         foreach ($Reader as $Row)
         {
         $count++;
         if($count <= 1) continue;
         $technicalLegacyTable_Field_Concatenated = isset($Row[7]) ? $Row[7] : '';
         if ($technicalLegacyTable_Field_Concatenated !== '') {
           $countTotalLegacy ++;
           $tower = isset($Row[1]) ? $Row[1] : '';
           $termAssetType = isset($Row[2]) ? $Row[2] : '';
           $dataSubjectArea = isset($Row[3]) ? $Row[3] : '';
           $legacyOrigin = isset($Row[4]) ? $Row[4] : '';
           $technicalLegacyTable = isset($Row[5]) ? $Row[5] : '';
           $technicalLegacyField = isset($Row[6]) ? $Row[6] : '';
           $technicalLegacyTable_Field_Concatenated = isset($Row[7]) ? $Row[7] : '';
           $wRICEF = isset($Row[8]) ? $Row[8] : '';
           $aLMReqID = isset($Row[9]) ? $Row[9] : '';
           $technicalFieldDisplayName = isset($Row[10]) ? $Row[10] : '';
           $businessRules = isset($Row[11]) ? $Row[11] : '';
           $technicalRules = isset($Row[12]) ? $Row[12] : '';
           $fieldType = isset($Row[13]) ? $Row[13] : '';
           $fieldlength = isset($Row[14]) ? $Row[14] : '';
           $decimalLength = isset($Row[15]) ? $Row[15] : '';
           $relatedtoTerm = isset($Row[16]) ? $Row[16] : '';
           $targetRelease = isset($Row[17]) ? $Row[17] : '';
           $requiredbyDate = isset($Row[18]) ? $Row[18] : '';
           $sourceDocumentNamePath = isset($Row[19]) ? $Row[19] : '';
           $businessDefinition = isset($Row[20]) ? $Row[20] : '';
           $businessUnit = isset($Row[21]) ? $Row[21] : '';
           $dataConnection = isset($Row[22]) ? $Row[22] : '';
           $databaseServerName = isset($Row[23]) ? $Row[23] : '';
           $databaseSchemaName = isset($Row[24]) ? $Row[24] : '';
           $bSAOwner = isset($Row[25]) ? $Row[25] : '';
           $bSAName = isset($Row[26]) ? $Row[26] : '';
           $toolsorAppsUsed = isset($Row[27]) ? $Row[27] : '';
           $frequency = isset($Row[28]) ? $Row[28] : '';

           $created	= date("Y-m-d H:i:s");
           $creator	= $_SESSION['s_user'];
           $changed	= date("Y-m-d H:i:s");
           $changer	= $_SESSION['s_user'];

           $category_TX = "P-Mod2";
           $subject_TX = "Glossary";
           $class_TX = "Legacy Field";
           $type_TX = $dataSubjectArea;
           //$type_TX = "Chargebacks";

           $stmt = "SELECT ROWID as sROWID,Version_DC,Creator_ID,Created_DS FROM sl_object WHERE Name_TX = '".$technicalLegacyTable_Field_Concatenated."' AND Category_TX = '".$category_TX."' AND Subject_TX = '".$subject_TX."' AND Class_TX = '".$class_TX."' AND Type_TX = '".$type_TX."' ORDER BY Version_DC DESC ";
           $result =mysqli_query($conn, $stmt);
           $row = mysqli_fetch_object($result);
           $object_id = $row->sROWID;
           $ver = $row->Version_DC;
           $creator_ID = $row->Creator_ID;
           $created_DS = $row->Created_DS;

            if(isset($object_id)){
              $new_ver = $ver + 1.000;
              $version_Inc = number_format($new_ver, 3, '.', '');
              $errReasonL = array();

              $stmt ="insert into sl_object (Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,WRICEF_TX,ALM_TX,Desc_TX,Usage_TX,TechRules_TX,Group_CD,Source_ID,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES ('".$category_TX."', '".$subject_TX."','".$class_TX."','".$type_TX."', '".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."', '".$tower."','".$termAssetType."','".$wRICEF."', '".$aLMReqID."', '".$businessDefinition."', '".$businessRules."', '".$technicalRules."', 'General','\N','".$creator_ID."','".$created_DS."','".$changer."','".$changed."','Active')";
              $result = mysqli_query($conn, $stmt);
              if($result){
                  $last_row = mysqli_insert_id($conn);
                  $update_Rows_legacyField ++;
                  $status_updated = 'Versioned';
                  $stmt2 = "Update sl_object SET Status_CD='$status_updated' WHERE ROWID=$object_id";
                  mysqli_query($conn, $stmt2);
              } else {
                  $errReasonL[] = $technicalLegacyTable_Field_Concatenated." Failed : " . mysqli_error($conn);
              }

              //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Tower','".$tower."')"; mysqli_query($conn, $stmt);
              //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Term/Asset Type','".$termAssetType."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Legacy Origin','".$legacyOrigin."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Legacy Table','".$technicalLegacyTable."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Legacy Field','".$technicalLegacyField."')"; mysqli_query($conn, $stmt);
              //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','ALM Req ID','".$aLMReqID."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Tech Field Display Name','".$technicalFieldDisplayName."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Field Type','".$fieldType."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Field Length','".$fieldlength."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Field Decimal Length','".$decimalLength."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Target Release','".$targetRelease."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Required by Date','".$requiredbyDate."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Parent Record','".$relatedtoTerm."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Source Doc Name Path','".$sourceDocumentNamePath."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Business Unit','".$businessUnit."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Data Connection','".$dataConnection."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Database Server Name','".$databaseServerName."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Database Schema Name','".$databaseSchemaName."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','BSA Owner','".$bSAOwner."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','BSA Name','".$bSAName."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','Tools or Apps Used','".$toolsorAppsUsed."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', '".$version_Inc."','BSA Frequency','".$frequency."')"; mysqli_query($conn, $stmt);

            }else{

              $stmt ="insert into sl_object (Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,WRICEF_TX,ALM_TX,Desc_TX,Usage_TX,TechRules_TX,Group_CD,Source_ID,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES ('".$category_TX."', '".$subject_TX."','".$class_TX."','".$type_TX."', '".$technicalLegacyTable_Field_Concatenated."', 1.000, '".$tower."','".$termAssetType."','".$wRICEF."', '".$aLMReqID."', '".$businessDefinition."', '".$businessRules."', '".$technicalRules."', 'General','\N','".$creator."','".$created."','".$changer."','".$changed."','Active')";
              $result = mysqli_query($conn, $stmt);
              if($result){
                  $last_row = mysqli_insert_id($conn);
                  $insert_Rows_legacyField ++;

              } else {
                  $errReasonL[] = $technicalLegacyTable_Field_Concatenated." Failed : " . mysqli_error($conn);
              }

              //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Tower','".$tower."')"; mysqli_query($conn, $stmt);
             // $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Term/Asset Type','".$termAssetType."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Legacy Origin','".$legacyOrigin."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Legacy Table','".$technicalLegacyTable."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Legacy Field','".$technicalLegacyField."')"; mysqli_query($conn, $stmt);
              //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'ALM Req ID','".$aLMReqID."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Tech Field Display Name','".$technicalFieldDisplayName."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Field Type','".$fieldType."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Field Length','".$fieldlength."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Field Decimal Length','".$decimalLength."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Target Release','".$targetRelease."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Required by Date','".$requiredbyDate."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Parent Record','".$relatedtoTerm."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Source Doc Name Path','".$sourceDocumentNamePath."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Business Unit','".$businessUnit."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Data Connection','".$dataConnection."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Database Server Name','".$databaseServerName."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Database Schema Name','".$databaseSchemaName."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'BSA Owner','".$bSAOwner."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'BSA Name','".$bSAName."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'Tools or Apps Used','".$toolsorAppsUsed."')"; mysqli_query($conn, $stmt);
              $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$technicalLegacyTable_Field_Concatenated."', 1.000,'BSA Frequency','".$frequency."')"; mysqli_query($conn, $stmt);
            }

          } // if Legacy Field Logic End here
        }// foreach end
      }//sheet if end
       //================================================================================


        // Future State Field Sheet start here
        if($sheet[2] == 'Future State Field'){
            $count='';
            $countTotalFuture ='';
            $insert_Rows_Future='0';
            $update_Rows_Future='0';
            $Reader = new SpreadsheetReader($uploadFilePath);
            $Sheets = $Reader -> Sheets();
  	        $Reader -> ChangeSheet(2);
            foreach ($Reader as $Row)
            {
              $count++;
              if($count <= 1) continue;
              $futureStateTable_Field_Concatenated = isset($Row[7]) ? $Row[7] : '';
              if ($futureStateTable_Field_Concatenated !== '') {
                $countTotalFuture ++;
                $tower = isset($Row[1]) ? $Row[1] : '';
                $termAssetType = isset($Row[2]) ? $Row[2] : '';
                $dataSubjectArea = isset($Row[3]) ? $Row[3] : '';
                $futureStateOrigin = isset($Row[4]) ? $Row[4] : '';
                $futureStateTable = isset($Row[5]) ? $Row[5] : '';
                $futureStateField = isset($Row[6]) ? $Row[6] : '';
                $futureStateTable_Field_Concatenated = isset($Row[7]) ? $Row[7] : '';
                $wRICEF = isset($Row[8]) ? $Row[8] : '';
                $aLMReqID = isset($Row[9]) ? $Row[9] : '';
                $technicalFieldDisplayName = isset($Row[10]) ? $Row[10] : '';
                $techApprovalStatus = isset($Row[11]) ? $Row[11] : '';
                $requiredforTesting = isset($Row[12]) ? $Row[12] : '';
                $businessRules = isset($Row[13]) ? $Row[13] : '';
                $technicalRules = isset($Row[14]) ? $Row[14] : '';
                $solutionStandard = isset($Row[15]) ? $Row[15] : '';
                $solutionRequired = isset($Row[16]) ? $Row[16] : '';
                $calculated_SolutionCritical = isset($Row[17]) ? $Row[17] : '';
                $fieldType = isset($Row[18]) ? $Row[18] : '';
                $fieldLength = isset($Row[19]) ? $Row[19] : '';
                $decimalLength = isset($Row[20]) ? $Row[20] : '';
                $checkTable = isset($Row[21]) ? $Row[21] : '';
                $relatedtoTerm = isset($Row[22]) ? $Row[22] : '';
                $targetRelease = isset($Row[23]) ? $Row[23] : '';
                $requiredbyDate = isset($Row[24]) ? $Row[24] : '';
                $sourceDocumentNamePath = isset($Row[25]) ? $Row[25] : '';
                $businessDefinition = isset($Row[26]) ? $Row[26] : '';
                $mDECCONLY = isset($Row[27]) ? $Row[27] : '';
                $mDMDGONLY = isset($Row[28]) ? $Row[28] : '';
                $dataConnection = isset($Row[29]) ? $Row[29] : '';
                $databaseServerName = isset($Row[30]) ? $Row[30] : '';
                $databaseSchemaName = isset($Row[31]) ? $Row[31] : '';

                $created	= date("Y-m-d H:i:s");
    	        $creator	= $_SESSION['s_user'];
    	        $changed	= date("Y-m-d H:i:s");
    	        $changer	= $_SESSION['s_user'];

                $category_TX = "P-Mod2";
                $subject_TX = "Glossary";
                $class_TX = "Future State Field";
                $type_TX = $dataSubjectArea;
                //$type_TX = "Accounts Payable";

                $stmt = "SELECT ROWID as sROWID,Version_DC,Creator_ID,Created_DS FROM sl_object WHERE Name_TX = '".$futureStateTable_Field_Concatenated."' AND Category_TX = '".$category_TX."' AND Subject_TX = '".$subject_TX."' AND Class_TX = '".$class_TX."' AND Type_TX = '".$type_TX."' ORDER BY Version_DC DESC ";
                $result =mysqli_query($conn, $stmt);
                $row = mysqli_fetch_object($result);
    	        $object_id = $row->sROWID;
                $ver = $row->Version_DC;
                $creator_ID = $row->Creator_ID;
                $created_DS = $row->Created_DS;
                 if(isset($object_id)){
                $new_ver = $ver + 1.000;
                $version_Inc = number_format($new_ver, 3, '.', '');
                $errReasonF = array();

                $stmt ="insert into sl_object (Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,WRICEF_TX,ALM_TX,Desc_TX,Usage_TX,TechRules_TX,Group_CD,Source_ID,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES ('".$category_TX."', '".$subject_TX."','".$class_TX."','".$type_TX."', '".$futureStateTable_Field_Concatenated."', '".$version_Inc."','".$tower."','".$termAssetType."','".$wRICEF."','".$aLMReqID."','".$businessDefinition."','".$businessRules."','".$technicalRules."','General','\N','".$creator_ID."','".$created_DS."','".$changer."','".$changed."','Active')";
                $result = mysqli_query($conn, $stmt);
                if($result){
                   $last_row = mysqli_insert_id($conn);
                   $update_Rows_Future ++;
                   $status_updated = 'Versioned';
                   $stmt2 = "Update sl_object SET Status_CD='$status_updated' WHERE ROWID=$object_id";
	                mysqli_query($conn, $stmt2);
                   } else {
                   $errReasonF[] = $futureStateTable_Field_Concatenated." Failed : " . mysqli_error($conn);
                   }
                  //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Tower','".$tower."')"; mysqli_query($conn, $stmt);
                  //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Term/Asset Type','".$termAssetType."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Future State Origin','".$futureStateOrigin."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Future State Table','".$futureStateTable."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Future State Field','".$futureStateField."')"; mysqli_query($conn, $stmt);
    			  //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','ALM Req ID','".$aLMReqID."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Tech Field Display Name','".$technicalFieldDisplayName."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Tech Approval Status','".$techApprovalStatus."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Required for Testing?','".$requiredforTesting."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Solution Standard?','".$solutionStandard."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Solution Required?','".$solutionRequired."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Solution Critical?','".$calculated_SolutionCritical."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Field Type','".$fieldType."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Field Length','".$fieldLength."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Field Decimal Length','".$decimalLength."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Check Table','".$checkTable."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Parent Record','".$relatedtoTerm."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Target Release','".$targetRelease."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Required by Date','".$requiredbyDate."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Source Doc Name Path','".$sourceDocumentNamePath."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','MD - ECC ONLY','".$mDECCONLY."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','MD - MDG ONLY','".$mDMDGONLY."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Data Connection','".$dataConnection."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Database Server Name','".$databaseServerName."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', '".$version_Inc."','Database Schema Name','".$databaseSchemaName."')"; mysqli_query($conn, $stmt);

                 }else{

                   $stmt ="insert into sl_object (Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Tower_TX,AssetType_TX,WRICEF_TX,ALM_TX,Desc_TX,Usage_TX,TechRules_TX,Group_CD,Source_ID,Creator_ID,Created_DS,Changer_ID,Changed_DS,Status_CD) VALUES ('".$category_TX."', '".$subject_TX."','".$class_TX."','".$type_TX."', '".$futureStateTable_Field_Concatenated."', 1.000, '".$tower."','".$termAssetType."','".$wRICEF."','".$aLMReqID."','".$businessDefinition."','".$businessRules."','".$technicalRules."','General','\N','".$creator."','".$created."','".$changer."','".$changed."','Active')";
                   $result = mysqli_query($conn, $stmt);
                   if($result){
                       $last_row = mysqli_insert_id($conn);
                       $insert_Rows_Future ++;

                   } else {
                       $errReasonF[] = $futureStateTable_Field_Concatenated." Failed : " . mysqli_error($conn);
                   }

                  //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Tower','".$tower."')"; mysqli_query($conn, $stmt);
                  //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Term/Asset Type','".$termAssetType."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Future State Origin','".$futureStateOrigin."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Future State Table','".$futureStateTable."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Future State Field','".$futureStateField."')"; mysqli_query($conn, $stmt);
    			  //$stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'ALM Req ID','".$aLMReqID."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Tech Field Display Name','".$technicalFieldDisplayName."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Tech Approval Status','".$techApprovalStatus."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Required for Testing?','".$requiredforTesting."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Solution Standard?','".$solutionStandard."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Solution Required?','".$solutionRequired."')"; mysqli_query($conn, $stmt);
    			  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Solution Critical?','".$calculated_SolutionCritical."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Field Type','".$fieldType."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Field Length','".$fieldLength."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Field Decimal Length','".$decimalLength."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Check Table','".$checkTable."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Parent Record','".$relatedtoTerm."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Target Release','".$targetRelease."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Required by Date','".$requiredbyDate."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Source Doc Name Path','".$sourceDocumentNamePath."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'MD - ECC ONLY','".$mDECCONLY."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'MD - MDG ONLY','".$mDMDGONLY."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Data Connection','".$dataConnection."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Database Server Name','".$databaseServerName."')"; mysqli_query($conn, $stmt);
                  $stmt ="insert into sl_attr (SL_Object_FK,Category_TX,Subject_TX,Class_TX,Type_TX,Name_TX,Version_DC,Property_TX,Value_TX) VALUES ('".$last_row."','".$category_TX."','".$subject_TX."','".$class_TX."','".$type_TX."','".$futureStateTable_Field_Concatenated."', 1.000,'Database Schema Name','".$databaseSchemaName."')"; mysqli_query($conn, $stmt);
                 }
               }
             } //foreach end
           } //if end
        // Future State Field Sheet End here

        $total_term = $insert_Rows_term + $update_Rows_term;
        $total_legacy = $insert_Rows_legacyField + $update_Rows_legacyField;
        
        $totalFailedRecordSheet1 = $countTotalTerm - $total_term;
        $totalFailedRecordSheet2 = $countTotalLegacy - $total_legacy;
        
        echo "<br/><span style='color:blue;'><b>Term Sheet</span><br/>Total ".$countTotalTerm." Rows Read in Excel Sheet Data ".$total_term." Records uploaded and " .$totalFailedRecordSheet1." Records Failed.<br/> Inserted ".$insert_Rows_term." Rows and ".$update_Rows_term." Rows Versioned</b>  \n\n\n";
       
        echo "<br/><br/><span style='color:blue;'><b>Legacy Field Sheet</span><br/>Total ".$countTotalLegacy." Rows Read in Excel Sheet Data ".$total_legacy." Records uploaded and " .$totalFailedRecordSheet2." Records Failed.<br/> Inserted ".$insert_Rows_legacyField." Rows and ".$update_Rows_legacyField." Rows Versioned </b> \n\n\n<br/>";
      
     
        $total_Future = $insert_Rows_Future + $update_Rows_Future;
        $totalFailedRecordSheet3 = $countTotalFuture - $total_Future;
        
        echo "<br/><span style='color:blue;'><b>Future State Field Sheet</span><br/>Total ".$countTotalFuture." Rows Read in Excel Sheet Data ".$total_Future." Records uploaded and " .$totalFailedRecordSheet3." Records Failed.<br/> Inserted ".$insert_Rows_Future." Rows and ".$update_Rows_Future." Rows Versioned </b> \n\n\n";
                        
        $outputFaild = array_merge($errReasonT, $errReasonL,$errReasonF);
        $i=count(array_keys($outputFaild));
        
        $allRecords = $countTotalTerm + $countTotalLegacy + $countTotalFuture;
        $allUploaded = $total_term + $total_legacy + $total_Future;
        $allFailed = $totalFailedRecordSheet1 + $totalFailedRecordSheet2 + $totalFailedRecordSheet3;
        echo "<br/><br/> <b>".$allRecords." Total Records in Excel sheet ".$allUploaded." Uploaded and ".$allFailed." Failed Records.<br/>";
        
        if($i>0){
          echo "<br/><br/><span style='color:red;'><b>List of Failed Records are : </b><br/></span>";
          echo implode('<br/>', $outputFaild);
        }

        if (!unlink($uploadFilePath)){
            echo ("Error deleting $uploadFilePath");
          }else{
            echo ("<br/><br/><span style='color:red;'>Deleted $uploadFilePath File Successfully</span><br/><br/>"); ?>
            <style> #loadingDiv {  display: none; } </style>
          <?php }

    }else {
      echo "<br/><br/><b>Not Reading Excel Sheet Data. It contain: <span style='color:blue;'>Term, Legacy Field, Future State Field, Keywords</span> as Sheet Name with Propar Data Template.<br/>Please Upload Excel Default Template with Proper Data.</b>";?>
      <style> #loadingDiv {  display: none; } </style>
  <?php  }

}else { ?>
      <style> #loadingDiv {  display: none; } </style>
    <?php die("<br/><b>Sorry, This file type is not allowed. Only Excel file with Sheet Name: <span style='color:blue;'>Term, Legacy Field, Future State Field, Keywords</span> .");

  }
}
}

// Generate search form
function FormSearchObject($category,$subject,$class,$type,$name,$version,$tower,$assettype,$alias,$wricef,$alm,$desc,$usage,$techrules,$comment,$group,$created,$creator,$changed,$changer,$status) {
	global $g_main;


//<td width=150><FONT FACE=arial SIZE=2>Business Segment:</FONT></td>
//<td width=150><FONT FACE=arial SIZE=2>System:</FONT></td>
	echo "
	<FORM ACTION=$g_main METHOD=POST>
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Search Now\" style=\"color:black; width:110px; background: url(image/view.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		&nbsp;&nbsp;
		<INPUT TYPE=RESET NAME=auggie VALUE=\"Reset\" style=\"color:black; width:70px; background: url(image/reset.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		&nbsp;&nbsp;
		<INPUT TYPE=SUBMIT NAME=auggie VALUE=\"Cancel\" style=\"color:black; width:70px; background: url(image/close.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
		<hr size=1 width=620 noshade align=left>
			<table class=normal width=620 border=0>
				<tr>
					<td width=150><FONT FACE=arial SIZE=2>Type:</FONT></td>
					<td width=150><FONT FACE=arial SIZE=2>Subject Area:</FONT></td>
				</tr>
			</table>";

		ProcSearchDropDown();
		
		echo "
		<hr size=1 width=620 noshade align=left>
		<table class=normal width=660 border=0>
			<tr>
				<td width=540><FONT FACE=arial SIZE=2>Name:&nbsp;<FONT color=red size=4>&#9830
					</FONT>&nbsp;</FONT></td>
				<td width=120><FONT FACE=arial SIZE=2>Version:</FONT></td>
			</tr>
			<tr>
				<td width=540><INPUT TYPE=text SIZE=100 MAXLENGTH=150
					NAME=name VALUE=\"$name\"
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:510px; background-color:white\"></td>
				<td width=120><INPUT TYPE=text SIZE=10 MAXLENGTH=10
					NAME=version VALUE=\"$version\"
					style=\"color:gray; font-family:Times; font-weight:bold;
					font-size:12px; width:100px; background-color:white\"></td>
			</tr>
		</table>";
		
		echo "
			<table class=normal width=620 border=0>
				<tr>
					<td width=300><FONT FACE=arial SIZE=2>Tower:</FONT></td>
					<td width=300><FONT FACE=arial SIZE=2>Asset Type:</FONT></td>
				</tr>
				
				<tr>
					<td>
					<select NAME=tower style=\"color:black; font-family:Times; font-weight:bold; font-size:12px; width:318px; background-color:white\">
						<option selected value=''>
						<option value='BIA'>BIA</option>
						<option value='MD'>MD</option>
						<option value='OTC'>OTC</option>
						<option value='PRI'>PRI</option>
						<option value='PTC'>PTC</option>
						<option value='PTP'>PTP</option>
						<option value='RNI'>RNI</option>
						<option value='RTR'>RTR</option>
						<option value='SCE'>SCE</option>
					</select>
					</td>
					
					<td>
					<select NAME=assettype style=\"color:black; font-family:Times; font-weight:bold; font-size:12px; width:318px; background-color:white\">
						<option selected value=''>
						<option value='Data View'>Data View</option>
						<option value='Derived'>Derived</option>
						<option value='Master Data'>Master Data</option>
						<option value='Model'>Model</option>
						<option value='Process Master Data'>Process Master Data</option>
						<option value='System'>System</option>
						<option value='Term'>Term</option>
						<option value='Transactional'>Transactional</option>
					</select>
					</td>
				</tr>
			</table>";
		
		echo "
		<FONT FACE=arial SIZE=2>Keywords:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
			<INPUT TYPE=text SIZE=123 MAXLENGTH=100 NAME=alias VALUE=\"$alias\"
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\"><BR>
      <FONT FACE=arial SIZE=2>WRICEF#:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
  			<TEXTAREA NAME=wricef cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$wricef</TEXTAREA><BR>
	 <FONT FACE=arial SIZE=2>ALM Req ID:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
  			<TEXTAREA NAME=alm cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$alm</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Description:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
			<TEXTAREA NAME=desc cols=120 rows=5
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$desc</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Business Rules:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
			<TEXTAREA NAME=usage cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$usage</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Technical Rules:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
			<TEXTAREA NAME=techrules cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$techrules</TEXTAREA><BR>
		<FONT FACE=arial SIZE=2>Comment:&nbsp;<FONT color=red size=4>&#9830</FONT>&nbsp;</FONT><BR>
			<TEXTAREA NAME=comment cols=120 rows=3
			style=\"color:black; font-family:Times; font-weight:normal;
			font-size:12px; background-color:white\">$comment</TEXTAREA><BR>
		<hr size=1 width=620 noshade align=left>
		<table border=0>
			<tr>
				<td><FONT FACE=arial SIZE=2>Created:</FONT><td>
				<td><INPUT TYPE=text SIZE=20 MAXLENGTH=20
					NAME=created VALUE=\"$created\"
					style=\"color:black; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Creator:</FONT><td>
				<td><INPUT TYPE=text SIZE=25 MAXLENGTH=45
					NAME=creator VALUE=\"$creator\"
					style=\"color:black; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Group:</FONT><td>
				<td><SELECT NAME=group
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
					<option selected value=\"\">
					<option value=\"General\">General
					<option value=\"Private\">Private
					</SELECT></td>
			</tr>
			<tr>
				<td><FONT FACE=arial SIZE=2>Changed:</FONT><td>
				<td><INPUT TYPE=text SIZE=20 MAXLENGTH=20
					NAME=changed VALUE=\"$changed\"
					style=\"color:black; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Changer:</FONT><td>
				<td><INPUT TYPE=text SIZE=25 MAXLENGTH=45
					NAME=changer VALUE=\"$changer\"
					style=\"color:black; font-family:Times; font-weight:bold;
					font-size:12px; background-color:white\"></td>
				<td><FONT FACE=arial SIZE=2>Status:</FONT><td>
				<td><SELECT NAME=status
					style=\"color:black; font-family:Times; font-weight:normal;
					font-size:12px; width:150px; background-color:white\">
					<option selected value=\"\">
					<option value=\"Active\">Active
					<option value=\"Inactive\">Inactive
					</SELECT></td>
			</tr>
		</table>
		<hr size=1 width=620 noshade align=left>
		<BR>
		<FORM ACTION=$g_main METHOD=POST>
			<INPUT TYPE=submit NAME=auggie VALUE=\"Main Menu\"
				style=\"color:black; width:100px; background: url(image/home.png); background-repeat:no-repeat; background-color: #DCDCDC;\">
	</FORM>";

}


}

?>