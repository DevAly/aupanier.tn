$(document).ready(function (){
    $(document).on('click', '.generate-title', function () {

        var $this = $(this);
        var image = $('.image-product-wrapper #image_id_section .attachment-preview img').attr('src');
        if (!image) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Merci d'ajouter une image",
            });
            return;
        }
        $this.attr('disabled', true);
        $("#loadingCircle").show();
        toDataURL(image, (base64) => {
            $.when($.ajax({
                url: aupanier_routes.aupanier_admin_ai_describe,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    "image_base64": base64
                }
            })).then((response) => {
                $this.attr('disabled', false);
                $("#loadingCircle").hide();
                if(response.success && response.data){
                    $('#suggestion').text(response.data);
                }else{
                    $('#suggestion').text('');
                    Swal.fire({
                        iconHtml: `<i class="fas fa-crown" style="color: gold; font-size: 2em;"></i>`,
                        title: null,
                        html: `<b>Cette fonctionnalité est réservée aux utilisateurs des plans premium.</b><br/>Mettez à niveau pour débloquer les titres générés par l'IA !`,
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Voir les plans premium',
                        cancelButtonText: 'Annuler',
                        customClass: {
                            icon: 'no-border'
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'https://'+aupanier_centrale_domain+'/pricing-plan'; // Redirect to pricing plans page
                        }
                    });

                }
            }, (error) => {
                $this.attr('disabled', false);
                $("#loadingCircle").hide();
                ajax_toastr_error_message(error);
            });

        }, 'image/jpeg');
    });

    function toDataURL(src, callback, outputFormat) {
        var img = new Image();
        img.crossOrigin = 'Anonymous';
        img.onload = function() {
            var canvas = document.createElement('CANVAS');
            var ctx = canvas.getContext('2d');
            var dataURL;
            canvas.height = this.naturalHeight;
            canvas.width = this.naturalWidth;
            ctx.drawImage(this, 0, 0);
            dataURL = canvas.toDataURL(outputFormat);
            callback(dataURL);
        };
        img.src = src;
        if (img.complete || img.complete === undefined) {
            img.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
            img.src = src;
        }
    }
});