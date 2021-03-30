$(() => {
    
    var colorButton = document.getElementById("primary_color");
    var colorDiv = document.getElementById("color_val");
    colorDiv.innerHTML = colorButton.value;
    colorButton.onchange = function () {
        colorDiv.innerHTML = colorButton.value;
    }
    

    function readURL(input, container) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(container).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#logo-image").change(function () {
        readURL(this,'#logo-preview')
    });
    $("#background-image").change(function () {
        readURL(this,'#background-preview');
    });
})