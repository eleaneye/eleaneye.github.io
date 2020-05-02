$('#reused_form').submit(function (e) {
    e.preventDefault();

    var $form = $(this);
    $('button[type="submit"]', $form).each(function () {
        $.post($form.attr("action"), $form.serialize()).then(function () {
            alert("Thank you!");

            //show some response on the button
            $btn = $(this);
            $btn.prop('type', 'button');
            $btn.prop('orig_label', $btn.text());
            $btn.text('Sending ...');
        });

    });
});
