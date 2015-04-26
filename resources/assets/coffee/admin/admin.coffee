$ ->

  $('[rel=tooltip]').tooltip()

  # API Utility Functions
  $('[data-type]').change () ->
    $.ajax
      type: $(this).attr 'data-type'
      cache: false
      headers:
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr 'content'
      url: '../' + $(this).attr 'data-uri'

    .success (message) ->
      console.log message
    .error (message) ->
      console.log message