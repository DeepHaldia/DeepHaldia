

 
        function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
$(".nav-left").click(function () {

$nav-left = $(this);
//getting the next element
$side-nav = $nav-left.next();
//open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
$side-nav.slideToggle(500, function () {
    //execute this after slideToggle is done
    //change text of header based on visibility of content div
    $nav-left.text(function () {
        //change text based on condition
        return $side-nav.is(":visible") ? "Collapse" : "Expand";
    });
});

});
  

function admSelectCheck(nameSelect) {
    if (nameSelect) {
        admOptionValue = document.getElementById("admOption").value;
        if (admOptionValue == nameSelect.value) {
            document.getElementById("admDivCheck").style.display = "block";
        }
        else {
            document.getElementById("admDivCheck").style.display = "none";
        }
    }
    else {
        document.getElementById("admDivCheck").style.display = "none";
    }

    if (nameSelect) {
        wayOptionValue = document.getElementById("wayOption").value;
        if (wayOptionValue == nameSelect.value) {
            document.getElementById("wayDivCheck").style.display = "block";
        }
        else {
            document.getElementById("wayDivCheck").style.display = "none";
        }
    }
    else {
        document.getElementById("wayDivCheck").style.display = "none";
    }
    
    if (nameSelect) {
        threeOptionValue = document.getElementById("threeOption").value;
        if (threeOptionValue == nameSelect.value) {
            document.getElementById("threeDivCheck").style.display = "block";
        }
        else {
            document.getElementById("threeDivCheck").style.display = "none";
        }
    }
    else {
        document.getElementById("threeDivCheck").style.display = "none";
    }
    if (nameSelect) {
        defaultOptionValue = document.getElementById("defaultOption").value;
        if (defaultOptionValue == nameSelect.value) {
            document.getElementById("defaultDivCheck").style.display = "block";
        }
        else {
            document.getElementById("defaultDivCheck").style.display = "none";
        }
    }
    else {
        document.getElementById("defaultDivCheck").style.display = "none";
    }
}

function waySelectCheck(nameSelect) {

}
