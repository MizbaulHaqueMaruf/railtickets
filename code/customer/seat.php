<?php
 //   session_start();
   // if(isset($_SESSION['name'])){}
     //   else{
       //     header("location:customer-login.php");
            
        //}
        
    require('connection.php');
    $result = mysqli_query($conn, 'SELECT * FROM seats_availability');
    $row = mysqli_fetch_assoc($result);
  
    // Store the data in a PHP variable
    $buttonData = array(
      'button1A' => $row['1A'],
      'button1B' => $row['1B'],
      'button1C' => $row['1C'],
      'button1D' => $row['1D'],
      'button2A' => $row['2A'],
      'button2B' => $row['2B'],
      'button2C' => $row['2C'],
      'button2D' => $row['2D'],
      'button3A' => $row['3A'],
      'button3B' => $row['3B'],
      'button3C' => $row['3C'],
      'button3D' => $row['3D'],
      'button4A' => $row['4A'],
      'button4B' => $row['4B'],
      'button4C' => $row['4C'],
      'button4D' => $row['4D'],
      'button5A' => $row['5A'],
      'button5B' => $row['5B'],
      'button5C' => $row['5C'],
      'button5D' => $row['5D'],
      'button6A' => $row['6A'],
      'button6B' => $row['6B'],
      'button6C' => $row['6C'],
      'button6D' => $row['6D'],
      'button7A' => $row['7A'],
      'button7B' => $row['7B'],
      'button7C' => $row['7C'],
      'button7D' => $row['7D']
    );
?>
<html>
<div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <input type="text" placeholder="Search..">
  </div>
  <div align="center">
    <div style="padding: 20px 20px 20px 20px; background-color:white;margin-right: 20px">
    <div class="span12-well">
        <div style="font-size:40px; color:black"><u> Select your seat</u></div>
<br/>
  <div align="center">
    <div style="padding: 20px 20px 20px 20px; background-color:white;margin-right: 50px"></div>
    <button class="btn success" onclick="buttoncolor1A()" id="1A">1A</button>
    <button class="btn info" onclick="buttoncolor1B()" id="1B">1B</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn warning" onclick="buttoncolor1C()" id="1C">1C</button>
    <button class="btn danger" onclick="buttoncolor1D()" id="1D">1D</button>
   </div>
   <div align="center">
    <button class="btn success" onclick="buttoncolor2A()" id="2A">2A</button>
    <button class="btn info" onclick="buttoncolor2B()" id="2B">2B</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn warning" onclick="buttoncolor2C()" id="2C">2C</button>
    <button class="btn danger" onclick="buttoncolor2D()" id="2D">2D</button>
   </div>
   <div align="center">
    <button class="btn success" onclick="buttoncolor3A()" id="3A">3A</button>
    <button class="btn info" onclick="buttoncolor3B()" id="3B">3B</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn warning" onclick="buttoncolor3C()" id="3C">3C</button>
    <button class="btn danger" onclick="buttoncolor3D()" id="3D">3D</button>
   </div>
   <div align="center">
    <button class="btn success" onclick="buttoncolor4A()" id="4A">4A</button>
    <button class="btn info" onclick="buttoncolor4B()" id="4B">4B</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn warning" onclick="buttoncolor4C()" id="4C">4C</button>
    <button class="btn danger" onclick="buttoncolor4D()" id="4D">4D</button>
   </div>
   <div align="center">
    <button class="btn success" onclick="buttoncolor5A()" id="5A">5A</button>
    <button class="btn info" onclick="buttoncolor5B()" id="5B">5B</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn warning" onclick="buttoncolor5C()" id="5C">5C</button>
    <button class="btn danger" onclick="buttoncolor5D()" id="5D">5D</button>
   </div>
   <div align="center">
    <button class="btn success" onclick="buttoncolor6A()" id="6A">6A</button>
    <button class="btn info" onclick="buttoncolor6B()" id="6B">6B</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn warning" onclick="buttoncolor6C()" id="6C">6C</button>
    <button class="btn danger" onclick="buttoncolor6D()" id="6D">6D</button>
   </div>
   <div align="center">
    <button class="btn success" onclick="buttoncolor7A()" id="7A">7A</button>
    <button class="btn info" onclick="buttoncolor7B()" id="7B">7B</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn warning" onclick="buttoncolor7C()" id="7C">7C</button>
    <button class="btn danger" onclick="buttoncolor7D()" id="7D">7D</button>
   </div>
 <style> 
  /* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}
.btn {
  border: 2px solid black;
  background-color: green;
  transition: 0.7s;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #023020;
  color: black;
}

.success:hover {
  background-color: #04AA6D;
  color: black;
}

/* Blue */
.info {
  border-color: #023020;
  color: black;
}

.info:hover {
  background:  #04AA6D;
  color:  black;
}

/* Orange */
.warning {
  border-color:  #023020;
  color:  black;
}

.warning:hover {
  background:  #04AA6D;
  color:  black;
}

/* Red */
.danger {
  border-color: #023020;
  color:  black;
}

.danger:hover {
  background:  #04AA6D;
  color:  black;
}

/* Gray */
.default {
  border-color:  #023020;
  color: black;
}

.default:hover {
  background:  #04AA6D;
  color: black;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
.btn-clicked {
  /* Add some styling to the button when it is clicked */
    background-color: #FFFF00; /* Yellow background */
  }
  .btn-disabled {
  /* Add some styling to the button when it is disabled */
  background-color: #9E9E9E; /* Grey background */
  cursor: not-allowed; /* Remove cursor */
}

.btn:disabled {
  /* Add some additional styling to the button when it is disabled */
  color: #000000; /* Black text */
}
</style>
<script>
  let clickedButtons = 0; // Keep track of the number of clicked buttons
  const maxClickedButtons = 2; // Set the maximum number of clicked buttons
  function handleClick(event) {
  // Get the clicked button
  const button = event.target;
  
  // Check if the button has the "btn-clicked" class
  if (button.classList.contains('btn-clicked')) {
    // If the button has the "btn-clicked" class, remove it and decrement the click count
    button.classList.remove('btn-clicked');
    clickCount--;
  } else {
    // If the button does not have the "btn-clicked" class, add it and increment the click count
    button.classList.add('btn-clicked');
    clickCount++;
  }
  
  // Check if the click count has reached the maximum
  if (clickCount >= maxClicks) {
    // If the click count has reached the maximum, disable all buttons
    disableButtons();
  }
}
// Function to disable all buttons
function disableButtons() {
  const buttons = document.querySelectorAll('.btn'); // Get all buttons
  buttons.forEach(button => {
    button.classList.add('btn-disabled'); // Add the "btn-disabled" class to each button
    button.disabled = true; // Disable the button
  });
}

// Add an event listener to each button
document.querySelectorAll('.btn').forEach(button => {
  button.addEventListener('click', handleClick);
});
  function buttoncolor1A() {
    const button1A = document.getElementById('1A');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button1A.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor1B() {
    const button1B = document.getElementById('1B');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button1B.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor1C() {
    const button1C = document.getElementById('1C');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button1C.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor1D() {
    const button1D = document.getElementById('1D');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button1D.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  function buttoncolor2A() {
    const button2A = document.getElementById('2A');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button2A.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor2B() {
    const button2B = document.getElementById('2B');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button2B.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor2C() {
    const button2C = document.getElementById('2C');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button2C.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor2D() {
    const button2D = document.getElementById('2D');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button2D.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  function buttoncolor3A() {
    const button3A = document.getElementById('3A');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button3A.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor3B() {
    const button3B = document.getElementById('3B');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button3B.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor3C() {
    const button3C = document.getElementById('3C');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button3C.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor3D() {
    const button3D = document.getElementById('3D');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button3D.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  function buttoncolor4A() {
    const button4A = document.getElementById('4A');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button4A.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor4B() {
    const button4B = document.getElementById('4B');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button4B.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor4C() {
    const button4C = document.getElementById('4C');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button4C.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor4D() {
    const button4D = document.getElementById('4D');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button4D.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  function buttoncolor5A() {
    const button5A = document.getElementById('5A');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button5A.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor5B() {
    const button5B = document.getElementById('5B');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button5B.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor5C() {
    const button5C = document.getElementById('5C');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button5C.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor5D() {
    const button5D = document.getElementById('5D');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button5D.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  function buttoncolor6A() {
    const button6A = document.getElementById('6A');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button6A.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor6B() {
    const button6B = document.getElementById('6B');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button6B.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor6C() {
    const button6C = document.getElementById('6C');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button6C.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor6D() {
    const button6D = document.getElementById('6D');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button6D.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  function buttoncolor7A() {
    const button7A = document.getElementById('7A');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button7A.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor7B() {
    const button7B = document.getElementById('7B');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button7B.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor7C() {
    const button7C = document.getElementById('7C');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button7C.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  
  function buttoncolor7D() {
    const button7D = document.getElementById('7D');
    if (clickedButtons < maxClickedButtons) { // Check if the maximum number of buttons has been reached
      button7D.classList.toggle('btn-clicked');
      clickedButtons++; // Increment the number of clicked buttons
    }
    if (clickedButtons === maxClickedButtons) { // Check if the maximum number of buttons has been reached
      disableButtons(); // Disable all buttons
    }
  }
  function disableButtons() {
  const buttons = document.querySelectorAll('.btn'); // Get all buttons
  buttons.forEach(button => {
    button.classList.add('btn-disabled'); // Add the "btn-disabled" class to each button
    button.disabled = true; // Disable the button
  });
 }
 $(document).ready(function() {
  // Get the data from the PHP variable
  const buttonData = <?php echo json_encode($buttonData); ?>;
  
  // Enable or disable the buttons based on the data
  if (buttonData.button1A) {
    $('#1A').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#1A').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button1B) {
    $('#1B').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#1B').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button1C) {
    $('#1C').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#1C').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button1D) {
    $('#1D').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#1D').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button2A) {
    $('#2A').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#2A').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button2B) {
    $('#2B').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#2B').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button2C) {
    $('#2C').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#2C').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button2D) {
    $('#2D').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#2D').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button3A) {
    $('#3A').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#3A').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button3B) {
    $('#3B').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#3B').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button3C) {
    $('#3C').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#3C').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button3D) {
    $('#3D').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#3D').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button4A) {
    $('#4A').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#4A').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button4B) {
    $('#4B').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#4B').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button4C) {
    $('#4C').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#4C').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button4D) {
    $('#4D').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#4D').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button5A) {
    $('#5A').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#5A').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button5B) {
    $('#5B').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#5B').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button5C) {
    $('#5C').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#5C').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button5D) {
    $('#5D').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#5D').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button6A) {
    $('#6A').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#6A').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button6B) {
    $('#6B').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#6B').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button6C) {
    $('#6C').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#6C').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button6D) {
    $('#6D').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#6D').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button7A) {
    $('#7A').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#7A').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button7B) {
    $('#7B').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#7B').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button7C) {
    $('#7C').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#7C').addClass('btn-disabled').attr('disabled', true);
  }
  if (buttonData.button7D) {
    $('#7D').removeClass('btn-disabled').attr('disabled', false);
  } else {
    $('#7D').addClass('btn-disabled').attr('disabled', true);
  }
});
</script> 
  </html>