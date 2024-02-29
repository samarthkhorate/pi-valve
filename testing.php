<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form with Map</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="feedback-container">
        <div class="form-container">
            <h1 class="logo">GeeksforGeeks</h1>
            <h2>Contact Us</h2>
            <form>
                <div class="form-group">
                    <label for="fullName">
                        <i class="fa fa-solid fa-user"></i> Full Name:
                    </label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>

                <div class="form-group">
                    <label for="email">
                        <i class="fa fa-solid fa-envelope"></i> Email Address:
                    </label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="mobile">
                        <i class="fa fa-solid fa-phone"></i> Contact No:
                    </label>
                    <input type="tel" id="mobile" name="mobile" required>
                </div>

                <div class="form-group">
                    <label for="msg">
                        <i class="fa fa-solid fa-comment"></i> Write Message:
                    </label>
                    <textarea id="msg" name="msg" rows="5" required></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.1602802684192!2d77.39638073968018!3d28.504825075835775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce626851f7009%3A0x621185133cfd1ad1!2sGeeksforGeeks%20%7C%20Coding%20Classes!5e0!3m2!1sen!2sin!4v1702963476861"
                width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
<style>body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-image: linear-gradient(120deg, #caeff2 0%, #a2c2ee 100%);
}

.feedback-container {
  display: flex;
  width: 80%;
  max-width: 800px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  border-radius: 10px;
  flex-wrap: wrap;
}

.form-container {
  flex: 1;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 16px;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 10px;
  box-sizing: border-box;
  border-radius: 15px;
  background-color: #dcdce1;
  border: none;
}

.form-group textarea {
  resize: vertical;
}

button {
  width: 100%;
  padding: 12px;
  box-sizing: border-box;
  border-radius: 15px;
  background-color: rgb(105, 152, 111);
  color: rgb(183, 213, 179);
  font-size: 17px;
  font-weight: 700;
  border: #a2c2ee;
  cursor: pointer;
}

button:hover {
  background-color: rgb(52, 98, 58);
}

.map-container {
  flex: 1;
  background-color: #eee;
}

.map-container iframe {
  border: 0;
  padding: 10px;
}

.logo {
  text-align: center;
  color: green;
}
</style>

</html>
