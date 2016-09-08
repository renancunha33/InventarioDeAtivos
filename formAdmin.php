<style type="text/css">
/* Style the list */
ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}
/* Float the list items side by side */
ul.tab li {float: left;}
/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}
/* Change background color of links on hover */
ul.tab li a:hover {background-color: #ddd;}
/* Create an active/current tablink class */
ul.tab li a:focus, .active {background-color: #ccc;}
/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<ul class="tab">
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Pesquisa')">Pesquisa</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Novo')">Novo Usuário</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Atualiza')">Atualizar Usuário</a></li>
</ul>

<div id="Pesquisa" class="tabcontent">
 <?php include "tabela.php" ?>
</div>
<div id="Novo" class="tabcontent">
 <h3>Novo usuário</h3>
 <?php include "cadastrar.html" ?>
</div>
<div id="Atualiza" class="tabcontent">
 <h3>Atualizar usuário</h3>
 <?php include "atualizar.html" ?>
</div>

<script type="text/javascript">
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>