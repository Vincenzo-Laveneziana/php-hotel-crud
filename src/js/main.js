$(document).ready(function (){
  console.log("js -- jquery is ready");

  
  if ($(".alert").hasClass("reload")) {
    setTimeout(() => {
      window.location.replace("http://localhost/php-hotel-crud/");
    }, 1500);
  }
  
});

