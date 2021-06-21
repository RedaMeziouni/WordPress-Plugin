<style>
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
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding: 20px;
}
label {
  font-weight : bold;
}
</style>
<div class="container">
    <?php if(isset($msg)){ ?>
        <div style="background:green;color:#ffffff;text-align:center;padding:8px 16px;"><?= $msg ?></div>
    <?php } ?>
  <form method="POST">
    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="mail@gmail.com">

    <label for="country">Subject</label>
    <input type="text" name="subject" id="subject" placeholder="Your Subject">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Your Message" style="height:200px"></textarea>

    <input type="submit" name="submit" value="Send">
  </form>
</div>
