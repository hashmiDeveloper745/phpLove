function display(){
  console.log("Hello World.");
}
function getCurrentYear(){
  let yE = (new Date().getFullYear().toString());
  console.log("HAPPY NEW YEAR" + " " + yE);
  return yE;
}
function displayToolTip(){
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
}
displayToolTip();
