<head>
  <title>Membuat Grafik Menggunakan Chart JS</title>
  <link type="text/javascript" href="jquery-3.4.1.min.js">
  <script type="text/javascript" src="Chart.js"></script>
  <link rel="Stylesheet" type="text/css" href="efek.css">

<script type="text/javascript">
  function Dropdownku() {
  document.getElementById("myDropdown").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}  

function Dropdownku2() {
  document.getElementById("myDropdown2").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn2')) {
  var myDropdown = document.getElementById("myDropdown2");
    if (myDropdown2.classList.contains('show')) {
      myDropdown2.classList.remove('show');
    }
  }
}
function Dropdownku3() {
  document.getElementById("myDropdown3").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn3')) {
  var myDropdown3 = document.getElementById("myDropdown3");
    if (myDropdown3.classList.contains('show')) {
      myDropdown3.classList.remove('show');
    }
  }
}
function Dropdownku4() {
  document.getElementById("myDropdown4").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn4')) {
  var myDropdown4 = document.getElementById("myDropdown4");
    if (myDropdown4.classList.contains('show')) {
      myDropdown4.classList.remove('show');
    }
  }
}
function Dropdownku5() {
  document.getElementById("myDropdown5").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn5')) {
  var myDropdown5 = document.getElementById("myDropdown5");
    if (myDropdown5.classList.contains('show')) {
      myDropdown5.classList.remove('show');
    }
  }
}
function Dropdownku6() {
  document.getElementById("myDropdown6").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn6')) {
  var myDropdown6 = document.getElementById("myDropdown6");
    if (myDropdown6.classList.contains('show')) {
      myDropdown6.classList.remove('show');
    }
  }
}
</script>
</head>
<body>
    <div><h1 class="label label-primary">COVID-19 Data Statistic</h1></div>
    <div class="navbar">
    <div class="dropdown">
    <button class="dropbtn" onmouseover="Dropdownku()" >Total Cases</button>
    <div class="dropdown-content" id="myDropdown">
      <a href="grafik_bar_total_cases.php">Bar Chart</a>
      <a href="grafik_pie_total_cases.php">Pie Chart</a>
    </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn2" onmouseover="Dropdownku2()">New Cases</button>
    <div class="dropdown-content" id="myDropdown2">
      <a href="line_new_cases.php">Line Chart</a>
      <a href="bar_new_cases.php">Bar Chart</a>
      <a href="pie_new_cases.php">Pie Chart</a>
      <a href="donat_new_cases.php">Doughnut Chart</a>
    </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn3" onmouseover="Dropdownku3()" >Total Deaths
    </button>
      <div class="dropdown-content" id="myDropdown3">
      <a href="line_total_deaths.php">Line Chart</a>
      <a href="bar_total_deaths.php">Bar Chart</a>
      <a href="pie_total_deaths.php">Pie Chart</a>
      <a href="donat_total_deaths.php">Doughnut Chart</a>
      </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn4" onmouseover="Dropdownku4()" >New Deaths
    </button>
      <div class="dropdown-content" id="myDropdown4">
      <a href="line_new_deaths.php">Line Chart</a>
      <a href="bar_new_deaths.php">Bar Chart</a>
      <a href="pie_new_deaths.php">Pie Chart</a>
      <a href="donat_new_deaths.php">Doughnut Chart</a>
      </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn5" onmouseover="Dropdownku5()" >Total Recovered</button>
      <div class="dropdown-content" id="myDropdown5">
      <a href="line_total_recovered.php">Line Chart</a>
      <a href="bar_total_recovered.php">Bar Chart</a>
      <a href="pie_total_recovered.php">Pie Chart</a>
      <a href="donat_total_recovered.php">Doughnut Chart</a>
      </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn6" onmouseover="Dropdownku6()" >Active Cases</button>
      <div class="dropdown-content" id="myDropdown6">
       <a href="line_active_cases.php">Line Chart</a>
      <a href="bar_active_cases.php">Bar Chart</a>
      <a href="pie_active_cases.php">Pie Chart</a>
      <a href="donat_active_cases.php">Doughnut Chart</a>
      </div>
    </div>
  </div>
