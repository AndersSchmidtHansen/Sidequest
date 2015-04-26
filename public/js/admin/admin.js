(function() {
  $(function() {
    $('[rel=tooltip]').tooltip();
    return $('[data-type]').change(function() {
      return $.ajax({
        type: $(this).attr('data-type'),
        cache: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '../' + $(this).attr('data-uri')
      }).success(function(message) {
        return console.log(message);
      }).error(function(message) {
        return console.log(message);
      });
    });
  });

}).call(this);

//# sourceMappingURL=../admin/admin.js.map