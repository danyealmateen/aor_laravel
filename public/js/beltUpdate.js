$(document).ready(function () {
    window.updateBelt = function (id) {
        let belt_grade = $("#beltGradeForm-" + id).val();

        $.ajax({
            url: "/update-belt/" + id, 
            type: "POST",
            data: {
                _token: $('meta[name="csrf-token"]').attr("content"), 
                belt_grade: belt_grade, 
            },
            success: function (response) {
           
                let gradeElement = $(".current-grade-" + id);
        
                if (gradeElement.length) {
                    gradeElement.text(response.new_grade); 
                }
                let updatedAtElement = $(".updated-time-" + id);

                if (updatedAtElement.length) {
                    updatedAtElement.text("Uppdaterad: " + response.updated_at);
                }
                alert(response.message);
            },
            error: function () {
                alert("Ett fel inträffade. Försök igen.");
            },
        });
    };
});
