<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.datetimepicker.js"></script>
<script src="./js/app.js"></script>
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
<script>
  document.body.className +=  ' theme-dark';

  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' '+time;

  jQuery.datetimepicker.setLocale('en');
  $('#datetimepicker').datetimepicker({
  	//value:dateTime, 
  	step:30,
  	format:'Y-m-d H:i:s',
  });
  	
  $(function() {
    $inp = $("#btn_signup");
    $cb = $("#checkbox");
    if ($cb.is(':checked')) 
    {
      $inp.prop('disabled', false);
    }
    else
    {
      $inp.prop('disabled', true);
    }

    $cb.on('change', function() 
    {
      if ($cb.is(':checked')) {
        $inp.prop('disabled', false);
      } else {
        $inp.prop('disabled', true);
      }
    });
  });

  $(document).ready(function () 
  {
    $("#flash-msg").delay(3000).fadeOut("slow");
  });

  $(".inputs").keyup(function() 
  {
    if (this.value.length == this.maxLength) 
    {
      $(this).nextAll('.inputs:enabled:first').focus();
    }
  });
</script>
</div>