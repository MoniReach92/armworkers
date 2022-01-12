$(".tab-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "none"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        //finish: "Submit"
    }
    , onFinished: function (event, currentIndex) {
       swal("Your Form Submitted!", "Please check yr DB for yr confirmation.");
            
    }
});


var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "none"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onStepChanging: function (event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    }
    , onFinishing: function (event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    }
    , onFinished: function (event, currentIndex) {
		//Puting all yoru Ajax data.
				var data = $('form').serialize();
				$.post('https://armworkers.com/index.php/Workers/create', data);
				//$.post('http://localhost/index.php/Workers/create', data);
				swal("Please go to Worker List to review your data.");
				window.location.replace("https://armworkers.com/index.php/Workers/create");
				//var inputlists = document.getElementsByClassName("form-control");
//				for (i=0; i < inputlists.length; ++i) {
//					inputlists.item(i).disabled = true;		
//				}
		//End of your ajax.
    }
}), $(".validation-wizard").validate({
    ignore: "input[type=hidden]"
    , errorClass: "text-danger"
    , successClass: "text-success"
    , highlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , errorPlacement: function (error, element) {
        error.insertAfter(element)
    }
    , rules: {
        email: {
            email: !0
        }
    }
})