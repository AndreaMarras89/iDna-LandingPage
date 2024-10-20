function sendData()
{
   let name = $('#name').val();
   let email = $('#email').val();
   let birthplace = $('#birth_place').val();
   let birthday = $('#birthday').val();
   let message = $('#message').val();
   let token = $('meta[name="csrf-token"]').attr('content');

   $.ajax({
    url: 'sendData',
    method: 'POST',
    data:
    {
        _token: token,
        name : name,
        email: email,
        birthplace: birthplace,
        birthday: birthday,
        message: message
    },
    success: function(respone)
    {
        console.log('è andato tutto bene', error);
    },
    error: function(xhr, status, error)
    {
        console.error('Errore nel recupero dei dati:', error);
        alert('Per favore, compila tutti i campi prima di inviare il form.');
    }
   });
}

$(document).ready(function() {
    $('a[href="#contact-form"]').on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('#contact_form').offset().top
        }, 1000);
    });
});


document.addEventListener("DOMContentLoaded", function() {
    var bigImage = document.getElementById("bigOne");

    var previews = document.querySelectorAll(".preview");

    previews.forEach(function(preview) {
        preview.addEventListener("click", function() {
            var previewNumber = this.id.replace('preview', '');
            bigImage.src = "http://127.0.0.1:8000/assets/img/middle_section/bigOne" + previewNumber + ".png";
        });
    });
});