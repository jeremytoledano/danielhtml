function focusMe(button) {
    var elem = document.getElementsByClassName("pageOneButton")[0];      
    if (elem) {
      elem.className = "";
    }
    button.className = "pageOneButton";
  }

  function myFunction(buttonId){
    if(buttonId == 'takeAwayButton')
    {
      document.getElementById(buttonId).style.backgroundColor="rgb(247, 173, 123)";
      document.getElementById('deliveryButton').style.backgroundColor="white";
      document.getElementById('details1').style.visibility= "hidden" ;
    }

    else if(buttonId == 'deliveryButton')
    {
      document.getElementById(buttonId).style.backgroundColor="rgb(247, 173, 123)";
      document.getElementById('takeAwayButton').style.backgroundColor="white";
      document.getElementById('details1').style.visibility= "visible" ;
    }

  }


