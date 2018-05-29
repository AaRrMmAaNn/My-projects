function changeText() {
    $(document).ready(function () {
        $('#contact-form').hide();
    });

    var uspjeh = document.getElementById("uspjeh");
    uspjeh.innerHTML = "Your message has been sent!!";

    var name = document.getElementById("ime");
    name.innerHTML = "Name: " + document.contactForm.name.value;

    var email = document.getElementById("mail");
    email.innerHTML = "Email: " + document.contactForm.email.value;

    var phone = document.getElementById("telefon");
    phone.innerHTML = "Phone: " + document.contactForm.phone.value;

    var message = document.getElementById("poruka");
    message.innerHTML = "Message: " + document.contactForm.message.value;

    var sendAnother = document.getElementById("hiddenButton").style.display = "unset";
}

$(document).ready(function () {
    $("#nitroSlika").click(function () {
        alert("it works");
    });
});