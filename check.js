var i=0;

var interval = setInterval(function(str1, str2) {
  console.log(str1 +i+ " " + str2);

  i+=1;

  if(i==5)
    clearInterval(interval);

}, 1000, "Hello." , "How are you?");



