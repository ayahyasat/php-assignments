
function yourage (age){

  if ( age < 18){
      confirm("You are too young");
    }else if (age > 35)
    {
      confirm("You are too old");
     } 
     
     else

  {
      let x = prompt("Your Name :");
     alert("Welcome to the party Mr. / Mrs " + x);
  
    }
}
do  {

yourage(prompt("Your age :"));

}

while (confirm("is there anyone else?"));

