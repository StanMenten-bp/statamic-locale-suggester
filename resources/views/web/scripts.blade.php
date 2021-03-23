<script>
    function setCookie(e,t,i){var o=new Date;o.setTime(o.getTime()+864e5*i),document.cookie=e+"="+t+";path=/;expires="+o.toGMTString()+";SameSite=Lax"}

    let element = document.getElementById('ignore-suggester');
    if (element) {
        element.addEventListener('click', function(e) {
            document.getElementById('language-suggester').remove();
            setCookie('ignore_language_suggester', 1, 365);
        }, false);
    }
</script>
