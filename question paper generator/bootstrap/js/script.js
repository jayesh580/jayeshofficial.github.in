$(document).ready(function(){
    var specialElementHandlers = {
        "#editor": function(element,renderer){
            return true;
        }};
    $("#cmd").click(function(){
        var doc = new jsPDF();
        doc.fromHTML($("#div1").html(),20,20,{
            "width":170,
            "elementHandlers":specialElementHandlers
        });
        doc.save("sample-file.pdf");
    });
});