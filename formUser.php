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
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Cadastros')">Cadastros</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Geral')">Geral</a></li>
 
</ul>

<div id="Pesquisa" class="tabcontent">
  <h3>Pesquisa</h3>
  <p>Em construção</p>
 <table style="width:100%" class="table table-striped">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>
</div>

<div id="Cadastros" class="tabcontent">
  <h3>Cadastros</h3>
  <p>Em construção </p> 
   <form action="#">
 
    <input type="text" id="input-name" placeholder="Name">
    <input type="email" id="input-email" placeholder="Email address">
    <input type="text" id="input-subject" placeholder="Subject"><br>
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea><br>
    <!--input type="submit" value="Submit" id="input-submit"-->
</form>
</div>

<div id="Geral" class="tabcontent">
  <h3>Geral</h3>
  <p>Em construção</p>
  <p>XOXOXOXXOXOXOXOXOXOXOXOXOXOXOXOXOXOXOXOXOXOXOXOXOXO</p>
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