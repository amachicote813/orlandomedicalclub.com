// collapse menu

 $(document).ready(function(){
    $('.collapsible').collapsible();
  });


$("#fileRequest2").click(function() {
    // // hope the server sets Content-Disposition: attachment!
    window.location = 'docs/MMJcardForm.pdf';
});

// smooth scrolling

