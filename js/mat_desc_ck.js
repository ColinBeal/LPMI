var elements = CKEDITOR.document.find( '.editor1' ), i = 0, element;

while ( ( element = elements.getItem( i++ ) ) )
{
    var editor = CKEDITOR.inline( element );
}

var edit = document.getElementsByClassName("editor1");
var i;
    for (i = 0; i < edit.length; i++)
    {
        edit[i].setAttribute("contenteditable", "true");
        edit[i].addEventListener("mouseenter", function()
        {
          var l = this.id;
          var t = this.innerHTML;
          //alert(t);
        });

        edit[i].addEventListener("mouseleave", function()
        {
          var l = this.id;
          var t = this.innerHTML;
          //var texte = evt.editor.getData();
          //alert(l);
          $.ajax(
          {
            url : 'maj.php',
            type : 'POST',
            data : "type=mat&texte=" + t + "&id=" + l,
            dataType : 'html', // On désire recevoir du HTML
            success : function(code_html, statut){ }
          });
        });

    }
