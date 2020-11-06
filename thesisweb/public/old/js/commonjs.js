$(function() {
    var body = $('body');

    function goToNextInput(e) {
      var key = e.which,
        t = $(e.target),
        sib = t.next('input');

      if (key != 9 && (key < 48 || key > 57)) {
        e.preventDefault();
        return false;
      }

      if (key === 9) {
        return true;
      }

      if (!sib || !sib.length) {
        sib = body.find('input').eq(0);
      }
      sib.select().focus();
    }

    function onKeyDown(e) {
      var key = e.which;

      if (key === 9 || (key >= 48 && key <= 57)) {
        return true;
      }

      e.preventDefault();
      return false;
    }
    
    function onFocus(e) {
      $(e.target).select();
    }

    body.on('keyup', 'input', goToNextInput);
    body.on('keydown', 'input', onKeyDown);
    body.on('click', 'input', onFocus);
});
$(function(){
    $('input[name="input-code"]').on("change",function(){
        var ajax = true;
        $('input[name="input-code"]').each(function(){
            if($(this).val() == ''){
                ajax = false;
            }
        });
        console.log(ajax);
        if(ajax) {
            var code = '';
            $('input[name="input-code"]').each(function(){
                code += $(this).val();
            });
            $.ajax({
                url : '/learninformaticsonline/login/student',
                type : "post",
                dataType: "json",
                data : {input: code},
                success : function (result) {
                    if(result.code){
                        window.location.href = "/learninformaticsonline/student/index";
                    }
                },
            });
        }
    });
});