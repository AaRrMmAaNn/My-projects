<?php include 'header.php'; ?> 



<h1 style="color: #00fc21">Contact us</h1>



<table>
 <tr>
 <td><img src="slike/moto1.jpg" width="235px" height="200px"></td>  
<td><iframe class="video" width="270" height="200"  src="https://www.youtube.com/embed/L1bruVSY8LE?autoplay=1"></iframe></td>
<td><img src="slike/moto2.jpg" width="240px" height="200px"></td>
</tr> 
</table>
<script src="kontakt.js"></script>

<div class="main">
        <form name="contactForm" class="paragraf" id="contact-form" action="/" method="post">
            
            <br>
            <h1 style="color: #00fc21 ">Fill up the form</h1>
            <div>
                <label>
                    <span style="color: #00fc21">NAME</span>
                    <input name="name" id="name" placeholder="enter name" type="text" tabindex="1" required autofocus>
                </label>
                <br>
                <br>
            </div>
            <div>
                <label>
                    <span style="color: #00fc21">EMAIL</span>
                    <input name="email" id="email" placeholder="enter email" type="email" tabindex="2" required>
                </label>
                <br>
                <br>
            </div>
            <div>
                <label>
                    <span style="color: #00fc21">Phone</span>
                    <input name="phone" id="phone" placeholder="enter phone num." type="tel" tabindex="3" required>
                </label>
                <br>
                <br>
            </div>
            <div>
                <label>
                    <span style="color: #00fc21">MESSAGE</span>
                    <textarea name="message" id="message" class="textarea" placeholder="something wrong?" tabindex="5" required></textarea>
                </label>
                <br>
                <br>
            </div>
            <div>
            	<br>
            <br>
                <input name="submit" type="submit" id="contact-submit" onclick="changeText(); return false">
            </div>

        </form>
        <div class="uspjeh">
           <h2 id="uspjeh"></h2>
            <div class="uspjehPodaci">
                <p id="ime"></p>
                <p id="mail"></p>
                <p id="telefon"></p>
                <p id="poruka"></p>
                <a href="kontakt.php"><button id="hiddenButton" onclick="resetForm()">Go back...</button></a>
            </div>
        </div>
    </div>









<?php include 'footer.php'; ?> 