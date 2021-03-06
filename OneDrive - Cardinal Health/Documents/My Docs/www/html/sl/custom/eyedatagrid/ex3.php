<?php
require 'class.eyemysqladap.inc.php';
require 'class.eyedatagrid.inc.php';

// Load the database adapter
$db = new EyeMySQLAdap('localhost', 'root', 'sbj1234', 'sl_prod');

// Load the datagrid class
$x = new EyeDataGrid($db);

// Set the query, select all rows from the people table
$x->setQuery("*", "sl_user");

// Hide ID Column
$x->hideColumn('User_Id');

// Show reset grid control
$x->showReset();

// Add standard control
$x->addStandardControl(EyeDataGrid::STDCTRL_EDIT, "alert('Editing %Phone_TX%, %Title_TX% (ID: %User_ID%)')");
$x->addStandardControl(EyeDataGrid::STDCTRL_DELETE, "alert('Deleting %User_ID%')");

// Add create control
$x->showCreateButton("alert('Code for creating a new person')", EyeDataGrid::TYPE_ONCLICK, 'Add New User');

// Show checkboxes
$x->showCheckboxes();

// Show row numbers
$x->showRowNumber();

// Change the amount of results per page
$x->setResultsPerPage(4);

// Stop ordering
$x->hideOrder();
?>
<html>
<head>
<title>EyeDataGrid Example 3</title>
<link href="table.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Other options</h1>
<p>From the previous example a few things have changed:</p>
<ul>
	<li>Row numbers are displayed</li>
	<li>Check boxes are available for each row</li>
	<li>The maximun number of results per page is now 4</li>
	<li>A reset, and create control was added to the top of the data grid</li>
	<li>Added controls edit and delete controls to each row</li>
	<li>Ordering data was disabled</li>
</ul>
<?php
// Print the table
$x->printTable();
?>
</body>
</html>