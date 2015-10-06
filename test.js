function testFunction(){
 if(typeof(document.getElementsByTagName('p')[0]) == 'undefined'){
  setTimeout("testFunction",1000);
 }
 else{
  document.getElementsByTagName('p')[0].innerHTML += ', text added with the test function';
 }
}
setTimeout("testFunction",1000);

