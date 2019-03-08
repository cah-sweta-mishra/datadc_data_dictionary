// tax_c_s_c_t.js
// created 23-feb-2004 (pjn)
// updated 20-jun-2009 (pjn)

// constants
var noValue = '-99'

// globals
var curOption = new Array();
var isLoaded = new Array();

// code fix by Ed Coakley to correct (QForm) error (20-jun-2009)
// added if(document.forms['QForm']) logic to bypass if false
function body_onLoad(){
  // initialize lists
  if(document.forms['QForm']) {
    emptyList( 'lstCategory' );
    emptyList( 'lstSubject');
    emptyList( 'lstClass');
    emptyList( 'lstType');
    jsrsExecute( './jsrs/tax_c_s_c_t.php', cbFillCategory, 'categoryList' );
  }
}

function lstCategory_onChange(){
  var val = this.options[this.selectedIndex].value;
  if(val == noValue){
    // don't allow novalue selection - revert to current
    selectOption( this.name, curOption[this.name] )
  } else {
    curOption[this.name] = val;
    // init dependent lists
    emptyList( 'lstSubject' );
    emptyList( 'lstClass');
    emptyList( 'lstType');
    window.status = 'Loading Subject Selections...';
    jsrsExecute( './jsrs/tax_c_s_c_t.php', cbFillSubject, 'subjectList', val );
  }  
}

function lstSubject_onChange(){
  var val = this.options[this.selectedIndex].value;
  if(val == noValue){
    selectOption( this.name, curOption[this.name] )
  } else {
    curOption[this.name] = val;
    emptyList( 'lstClass');
    emptyList( 'lstType');
    window.status = 'Loading Class Selections...';
    jsrsExecute( './jsrs/tax_c_s_c_t.php', cbFillClass, 'classList', val );
  }  
}

function lstClass_onChange(){
  var val = this.options[this.selectedIndex].value;
  if(val == noValue){
    selectOption( this.name, curOption[this.name] )
  } else {
    curOption[this.name] = val;
    emptyList( 'lstType');
    window.status = 'Loading Type Selections...';
    jsrsExecute( './jsrs/tax_c_s_c_t.php', cbFillType, 'typeList', val );
  }  
}

function lstType_onChange(){
  var val = this.options[this.selectedIndex].value;
  if(val == noValue){
    selectOption( this.name, curOption[this.name] )
  }
}

function cbFillCategory ( strCategory ){ 
  window.status = '';
  fillList( 'lstCategory',  strCategory ); 
}

function cbFillSubject ( strSubject ){ 
  // callback for dependent listbox
  window.status = '';
  fillList( 'lstSubject', strSubject ); 
}

function cbFillClass( strClass ){ 
  // callback for dependent listbox
  window.status = '';
  fillList( 'lstClass', strClass ); 
}

function cbFillType( strType ){ 
  // callback for dependent listbox
  window.status = '';
  fillList( 'lstType', strType ); 
}

function fillList( listName, strSplit ){
  // fill any list with options
  emptyList( listName );
  
  // always insert selection prompt
  var lst = document.forms['QForm'][listName];
  lst.disabled = true;
  lst.options[0] = new Option('-- Please Select --', noValue);
  
  // options in form "value~displaytext|value~displaytext|..."
  var aOptionPairs = strSplit.split('|');
  for( var i = 0; i < aOptionPairs.length; i++ ){
    if (aOptionPairs[i].indexOf('~') != -1) {
      var aOptions = aOptionPairs[i].split('~');
      lst.options[i + 1] = new Option(aOptions[1], aOptions[0]);
    }  
  }
  
  // init to no value
  selectOption( listName, noValue );
  isLoaded[listName] = true;
  lst.disabled = false;
  lst.onchange = eval( listName + "_onChange" );
  // eval( "document.forms['QForm']['" + listName + "'].onchange=" + listName + "_onChange;" );
}

function emptyList( listName ){
  var lst = document.forms['QForm'][listName];
  lst.options.length = 0;
  lst.onchange = null;
  isLoaded[listName] = false;
  curOption[listName] = noValue;
}

function selectOption( listName, optionVal ){
  // set list selection to option based on value
  var lst = document.forms['QForm'][listName];
  for( var i = 0; i< lst.options.length; i++ ){
    if( lst.options[i].value == optionVal ){
      lst.selectedIndex = i;
      curOption[listName] = optionVal;
      return;
    }  
  }
}


