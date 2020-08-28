/*********************************************************************

*Original Author: Logan Marchant                                  
*Date Created: 2/20/2020                                       
*Version: 1.0                                                
*Date Last Modified: 2/20/2020                              
*Modified by: Logan Marchant                                          
*Modification log: 1

Created a clock to run at the bottom of the page. 

**********************************************************************/

function displayTime(){
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var period = "AM";
    
    if(h == 0){
        h = 12;
    }
    if(h > 12){
        h = h - 12;
        period = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = document.getElementById("MyClockDisplay");
    time.innerHTML = h + ":" + m + ":" + s + " " + period;
    
}
setInterval(displayTime, 1000);