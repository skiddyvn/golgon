function sidebarDrop(sidebarRow) {
    sidebarRow.classList.toggle("active");
    var content = sidebarRow.nextElementSibling;
    if (content.style.display == "" || content.style.display == "none") {
        content.style.display = "block";
    } else {
        content.style.display = "none";
    }
}

/* delete element*/
function delete_confirm(e) {
    var r = confirm("Are you sure to delete??");
    if (r == false) {
        e.preventDefault();
    } else {
        
    }
}

//show alert box
function myFunction($mess) {
    
  alert($mess);
}

/*disappear message*/
function disappear(ele) {
    ele.style.display = "none";
}

/*check text*/
function checkText(e) {
    var text = document.getElementsByClassName("rows-content-text");
    var select = document.getElementsByClassName("rows-content-select");
    for (var i = 0; i < text.length; i++) {
        if (text[i].value == "") {
            alert("Please fill in the information !!!");
            e.preventDefault();
            return;
        }
    }
    for (var i = 0; i < text.length; i++) {
        if (select[i].options[select[i].selectedIndex].value == "") {
            alert("Please fill in the information !!!");
            e.preventDefault();
            return;
        }
    }
}
/*Enable Group*/
function enableGroupId(select) {
    var groupId = document.getElementById("product_group_id");
    if (select.options[select.selectedIndex].value == "2") {
        groupId.disabled = false;
    } else {
        groupId.disabled = true;
    }
}
