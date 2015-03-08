<script>
  $(document).ready(function(){
    var form              = $('[role="ajax-form"]'),
        token             = $('meta[name=csrf-token]').attr('content'),
        submissionType    = form.attr('method'),
        submissionURL     = form.attr('action'),
        waitingMessage    = form.attr('data-waiting-message'),
        successMessage    = form.attr('data-success-message'),
        submit            = form.find('[role="submit"]'),
        submitInitialText = submit.text();

    $(submit).on('click', function(e){
      e.preventDefault();
      $(this)
      .attr('disabled', 'disabled')
      .text(waitingMessage);

      $.ajax({
        type: submissionType,
        url: submissionURL,
        data: {
          '_token': token
        },
        success: function(){
          $(submit)
          .removeAttr('disabled')
          .text(successMessage);
        }

      });

    });
  });
</script>