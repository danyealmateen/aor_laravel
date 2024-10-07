$(document).ready(function() {

    window.updateBelt = function(id) {
        let belt_grade = $('#beltGradeForm-' + id).val(); 

        $.ajax({
            url: "/update-belt/" + id,  // Dynamisk URL med barnets ID
            type: 'POST',  // Skicka POST-begäran
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),  // Laravel CSRF-skydd
                belt_grade: belt_grade  // Skicka valt bälte
            },
            success: function(response) {
                // Försök att uppdatera bältesgraden direkt
                let gradeElement = $('.current-grade-' + id);
                // Kontrollera om elementet finns
                if (gradeElement.length) {
                    gradeElement.text(response.new_grade);  // Uppdatera DOM med nya bältesgraden
                } 
                alert(response.message);
            },
            error: function(xhr) {
                alert('Ett fel inträffade. Försök igen.');
            }
        });
    };
});
