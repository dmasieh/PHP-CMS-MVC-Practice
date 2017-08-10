$(document).ready(function(){
      $('.parallax').parallax();
});

$(document).ready(function(){
    $('ul.tabs').tabs();
});

function showQuoteSite(str) {
  var xmlhttp;
  if (str.length == 0) {
    document.getElementById("showLink").innerHTML = "";
    return;
  }
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showLink").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../data/getlink.php?q="+str, true);
  xmlhttp.send();
}

var i = 0;
var x;
navXml(i);

function navXml(i) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            tableNav(this, i);
        }
    };
    xmlhttp.open("GET", "../data/thoughts.xml", true);
    xmlhttp.send();
}

function tableNav(xml, i) {
    var xmlDoc = xml.responseXML;
    x = xmlDoc.getElementsByTagName("thought");
    document.getElementById("ajaxTable").innerHTML =
    "<tr><td>" +
    x[i].getElementsByTagName("author")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("year")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("quote")[0].childNodes[0].nodeValue; +
    "</td></tr>";
}

function next() {
if (i < x.length-1) {
  i++;
  navXml(i);
  }
}

function previous() {
if (i > 0) {
  i--;
  navXml(i);
  }
}

$(document).ready(function() {
   Materialize.updateTextFields();
 });
