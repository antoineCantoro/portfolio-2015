
 $(document).ready(function() {
    $('a[href*="anchor-"]').click( function() { // Au clic sur un élément
    var page = $(this).attr('href'); // Page cible
    var ancre = page.replace('#','');
    var coordonnees = $('a[name="' + ancre + '"]').offset().top;
    var speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate( { scrollTop: coordonnees }, speed ); // Go
    return false;
    });
 });
