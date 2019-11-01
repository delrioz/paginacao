<h1>Multi upload</h1>


<form action="upload" id="upload" enctype="multipart/form-data">
 @csrf
    <input type="file" name="image[]" multiple><br />
    
    <input type="submit">
</form>
    <div id="message"></div>

<script>

    var form = document.getElementById('upload');

    var request = new XMLHttpRequest();

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        var formdata = new FormData(form);

        request.open('post', '/upload');

        request.addEventListener("load", transferComplete);

        request.send(formdata);



    });


    function transferComplete(data){
        response =  JSON.parse(data.currentTarget.response);
            document.getElementById('message').innerHTML =  "Successfully Uploaded Files!";
    }
</script>