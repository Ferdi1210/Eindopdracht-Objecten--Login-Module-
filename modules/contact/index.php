<?php

    return '
    <h3>Contact Formulier</h3>

    <div class="container">
    <form action="/action_page.php">
    <label for="fname">Voornaam</label>
    <input type="text" id="voornaam" name="Voornaam" placeholder="Vul hier uw voornaam in">

    <label for="fname">Achternaam</label>
    <input type="text" id="achternaam" name="achternaam" placeholder="Vul hier uw achternaam in">
    
    <label for="lname">E-Mail</label>
    <input type="text" id="email" name="email" placeholder="Vul hier uw E-Mail in">

      <label for="country">Reden</label>
    <select id="country" name="country">
      <option value="klacht">Aanmelden</option>
      <option value="aanmelden">Klacht</option>
      <option value="feedback">Feedback</option>
    </select>

    <label for="subject">Onderwerp</label>
    <textarea id="subject" name="subject" placeholder="Type hier uw text" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<style>
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: lightgrey;
}

.container {
  border-radius: 5px;
  background-color: grey;
  padding: 20px;
}
</style>';
?>