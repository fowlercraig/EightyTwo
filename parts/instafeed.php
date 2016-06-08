<script type="text/javascript">
  $(document).ready(function () {
    var smallFeed = new Instafeed({
      get: 'user',
      userId: '391656327',
      target: 'instafeed--single',
      limit: 4,
      clientId: '92edd37c66a44760a6e11f658e4ec473',
      accessToken: '391656327.1677ed0.45bd7ee1eaee4568a524873ea811c49f',
      resolution: 'standard_resolution',
      template: '<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-half"><a class="open--image" title="Posted {{model.created_time}} — {{caption}}" href="{{image}}"><img src="{{image}}" class="img-responsive" /></a><hr class="invisible compact" /></div>',
      after: function() {
        $('.open--image').magnificPopup({
          type: 'image',
          preloader: false,
        });
      },
      filter: function(image) {
        var date = new Date(image.created_time*1000);

        m = date.getMonth();
        d = date.getDate();
        y = date.getFullYear();

        var month_names = new Array ( );
        month_names[month_names.length] = "Jan";
        month_names[month_names.length] = "Feb";
        month_names[month_names.length] = "Mar";
        month_names[month_names.length] = "Apr";
        month_names[month_names.length] = "May";
        month_names[month_names.length] = "Jun";
        month_names[month_names.length] = "Jul";
        month_names[month_names.length] = "Aug";
        month_names[month_names.length] = "Sep";
        month_names[month_names.length] = "Oct";
        month_names[month_names.length] = "Nov";
        month_names[month_names.length] = "Dec";
        var thetime = month_names[m] + ' ' + d + ' ' + y;
        image.created_time = thetime;
        return true;
      }
    });
    smallFeed.run();
  });
</script>