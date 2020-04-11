// A $( document ).ready() block.
$(document).ready(function() {
    $(document).on("submit", "#show-modal-contact", function() {
        $("#modal-message").text("Thank you for contacting us");
        $("#myModal").modal("show");
    });
    $(document).on("submit", "#show-modal-book", function() {
        $("#modal-message").text(
            "Thank you for choosing us you , we will contact you soon"
        );
        $("#myModal").modal("show");
    });
});
