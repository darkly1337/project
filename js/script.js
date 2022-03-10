function getTime(){

    var currentDate = new Date();
    var day = currentDate.getDay();
    var month = currentDate.getMonth();
    var year = currentDate.getFullYear();
    var months = ["Iulie" , "August" , "Noiembie"];

    document.getElementById('date').innerHTML = day + " " + month + ", " + year;

}