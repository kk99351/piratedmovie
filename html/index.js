function searchquery(value){
    if (value.length == 0){
        document.getElementById("search_box").style.display="none";
        document.getElementById("search_bt").disabled = true;
        return;
    }
    else{
        document.getElementById("search_bt").disabled = false;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200 && this.responseText.length > 0) {
                document.getElementById("search_box").innerHTML=this.responseText;
                document.getElementById("search_box").style.display="block";
            }
        };
        xmlhttp.open("GET", "search.php?search_query=" + value, true);
        xmlhttp.send();
    }
}