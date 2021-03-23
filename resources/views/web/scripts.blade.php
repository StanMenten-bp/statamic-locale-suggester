<script>
    function setCookie(e,t,i){var o=new Date;o.setTime(o.getTime()+864e5*i),document.cookie=e+"="+t+";path=/;expires="+o.toGMTString()}

    document.getElementById('ignore-suggester').addEventListener('click', function(event) {
        document.getElementById('language-suggester').remove();
        setCookie('ignore_language_suggester', 1, 365);
    }, false);
</script>
