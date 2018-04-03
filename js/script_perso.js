AOS.init({
  offset: 50,
  duration: 600,
  easing: 'ease-in-sine',
  delay: 50,
});
$(window).on('load', function ()
{
  AOS.refresh();
});


var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++)
{
  coll[i].addEventListener("click", function()
  {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight)
    {
      content.style.maxHeight = null;
      content.style.border = "none";
    }
    else
    {
      content.style.border = "2px solid #932C3E";
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
