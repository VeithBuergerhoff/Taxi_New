function fahrten(year, month){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("table_view").innerHTML = this.responseText;
        }
    };
    xml.open("GET", "require/getTable.php?year="+year+"&month="+month, true);
    xml.send();
}
function update(value, id, col, year, month){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            
        }
    };
    xml.open("GET", "require/update_fahrt.php?value="+value+"&id="+id+"&col="+col,true);
    xml.send();
}
function preview(id){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("modal_fahrt_preview").innerHTML = this.responseText;
        }
    };
    xml.open("GET", "require/preview_fahrt.php?id="+id, true);
    xml.send();
}