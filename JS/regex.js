
//Javascript function to check if the value of the phone number entered is a number
function checkExpression(stringToCheck)
{
var expression=/^[0-9]+$/;
if (stringToCheck.value.match(expression))
{
   alert('Input successful');
  document.form1.number.focus();
  return true;

}else{
  alert('Please enter a number for the Phone number');
  document.form1.number.focus()
}
}
