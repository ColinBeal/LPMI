var supp = document.getElementsByClassName("suppr");
var i;
for (i = 0; i < supp.length; i++)
{
  supp[i].addEventListener("click", function()
  {
    var l = this.id;
    var n = this.attributes["name"].value;
    //alert(l+n);
    $.ajax(
    {
      url : 'mod.php',
      type : 'POST',
      data : "type="+ n +"&id="+ l,
      dataType : 'html',
      success : function(code_html, statut){ location.reload();}
    });
  });
}
