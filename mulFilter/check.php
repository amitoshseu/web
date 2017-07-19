<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>AJAX Search filter demo</title>
<style>
body {
padding: 10px;
  width: 950px;
}
h1 {
margin: 0 0 0.5em 0;
color: #343434;
font-weight: normal;
font-family: 'Ultra', sans-serif;
font-size: 36px;
line-height: 42px;
text-transform: uppercase;
text-shadow: 0 2px white, 0 3px #777;
}
h2 {
margin: 1em 0 0.3em 0;
color: #343434;
font-weight: normal;
font-size: 30px;
line-height: 40px;
font-family: 'Orienta', sans-serif;
}
#employees {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 12px;
background: #fff;
margin: 15px 25px 0 0;
border-collapse: collapse;
text-align: center;
float: right;
width: 700px;
}
#employees th {
font-size: 14px;
font-weight: normal;
color: #039;
padding: 10px 8px;
border-bottom: 2px solid #6678b1;
}
#employees td {
border-bottom: 1px solid #ccc;
color: #669;
padding: 8px 10px;
}
#employees tbody tr:hover td {
color: #009;
}
#filter {
float:left;
}
</style>
</head>
<body>
<h1>Demo</h1>
<table id="employees">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>products</th>
<th>brands</th>
<th>Price</th>
<th>colors</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<div id="filter">


<h3>Products </h3>
<div>
<input type="radio" id="language" name="brand" value="Computer">
Computer<br/>
<input type="radio" id="language2" name="brand" value="Laptop">
Laptop<br/>
<input type="radio" id="language3" name="brand" value="pendrive">
pendrive
</div>

<h3>Brands</h3>
<div>
 <input type="radio" name="apple" id="car" value="apple">Apple<br/>
  <input type="radio" name="apple" id="car1" value="hp">hp<br/>
  <input type="radio" name="apple" id="car3" value="lenovo">lenovo
</div>

<h3>Price </h3>
<div>
<input type="radio" id="nights" name="price" value="price1">
10000<br/>
<input type="radio" id="nights1" name="price" value="price2">
20000<br/>
<input type="radio" id="nights2" name="price" value="price3">
30000
</div>

</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function makeTable(data){                   // create table get data from database
var tbl_body = "";                          // table body
$.each(data, function() {                   // table data
var tbl_row = "";
$.each(this, function(k , v) {
tbl_row += "<td>"+v+"</td>";               // table row
})
tbl_body += "<tr>"+tbl_row+"</tr>";
})
return tbl_body;
}
function getEmployeeFilterOptions(){     // get filter options value
var opts = [];
$checkboxes.each(function(){             // this function select when radio button is clicked
if(this.checked){
opts.push(this.value);                 // get check box values
}
});
return opts;
}
function updateEmployees(opts){        // update the filter using ajax
$.ajax({
type: "POST",                          //       POST method
url: "search.php",                      // search. page send data using json
dataType : 'json',
cache: false,
data: {filterOpts: opts},
success: function(records){
$('#employees tbody').html(makeTable(records));
}
});
}
var $checkboxes = $("input:radio");          // check radio button is clicked
$checkboxes.on("change", function(){
var opts = getEmployeeFilterOptions();    // update the database 
updateEmployees(opts);
});
updateEmployees();
</script>

</body>
</html>