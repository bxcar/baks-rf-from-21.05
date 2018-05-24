<script>
    // this is the id of the form
    jQuery("#static-form").submit(function (e) {

        jQuery("#submit-static-form").attr("value", "");
        jQuery("#submit-static-form").css(
            {
                "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                "background-size": "15%",
                "background-repeat": "no-repeat",
                "background-position-y": "50%",
                "background-position-x": "50%"
            }
        );
        var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

        jQuery.ajax({
            type: "POST",
            url: url,
            data: jQuery("#static-form").serialize(), // serializes the form's elements.
            success: function (data) {
                if (data == 1) {
                    jQuery("#submit-static-form").attr("value", "Успешно отправлено");
                    jQuery("#submit-static-form").css({"background-image": "none"});

                    jQuery('#static-form')[0].reset();

                    setTimeout(func, 10000);

                    function func() {
                        jQuery("#submit-static-form").attr("value", "Отправить");
                        jQuery("#submit-static-form").css({"background-image": "none"});
                    }
                }

                else {
                    jQuery("#submit-static-form").attr("value", "Произошла ошибка");
                    jQuery("#submit-static-form").css({"background-image": "none"});

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#submit-static-form").attr("value", "Отправить");
                        jQuery("#submit-static-form").css({"background-image": "none"});
                    }
                }
//                                            alert(data);
            },

            error: function (data) {
                jQuery("#submit-static-form").attr("value", "Произошла ошибка");
                jQuery("#submit-static-form").css({"background-image": "none"});

                setTimeout(func, 3000);

                function func() {
                    jQuery("#submit-static-form").attr("value", "Отправить");
                    jQuery("#submit-static-form").css({"background-image": "none"});
                }
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
</script>